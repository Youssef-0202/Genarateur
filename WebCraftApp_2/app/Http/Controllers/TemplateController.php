<?php

namespace App\Http\Controllers;

use App\Models\Composant;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Integer;
use App\Models\UserTemplate;
use Illuminate\Support\Facades\File;
use ZipArchive;

class TemplateController extends Controller
{
     // Define the mapping of template IDs to Blade file paths
    
     public function generateHtml($id)
{
    // Récupérer le template
    $template = Template::where('templateId', $id)->first();
    
    if (!$template) {
        return abort(404, 'Template non trouvé');
    }
    
    // Initialiser les données des composants
    $componentsData = [];
    
    // Vérifier si l'utilisateur est authentifié
    if (auth()->check()) {
        // Récupérer le template personnalisé de l'utilisateur, s'il existe
        $userTemplate = UserTemplate::where('template_id', $id)
            ->where('user_id', auth()->id())
            ->first();
            
        if ($userTemplate) {
            // Charger les données personnalisées des composants
            $componentsData = json_decode($userTemplate->components_data, true);
        } else {
            // Utiliser les composants par défaut
            $componentsData = $this->getDefaultComponents($id);
        }
    } else {
        // Charger les composants par défaut pour les utilisateurs non authentifiés
        $componentsData = $this->getDefaultComponents($id);
    }
    
    // Utiliser la vue du template brut
    $htmlContent = view('templates.raw_template', compact('componentsData', 'template'))->render();
    
    // Générer un nom de dossier unique
    $folderName = 'site_' . $template->nom . '_' . now()->format('Ymd_His');
    $zipFileName = $folderName . '.zip';
    
    // Créer un dossier temporaire pour stocker tous les fichiers
    $tempPath = storage_path('app/temp/' . $folderName);
    if (!File::exists($tempPath)) {
        File::makeDirectory($tempPath, 0755, true);
    }
    
    // Copier le dossier assets
    $assetsSourcePath = public_path('assets');
    $assetsDestPath = $tempPath . '/assets';
    File::copyDirectory($assetsSourcePath, $assetsDestPath);
    
    // Créer les dossiers js et css s'ils n'existent pas
    if (!File::exists($tempPath . '/js')) {
        File::makeDirectory($tempPath . '/js', 0755, true);
    }
    if (!File::exists($tempPath . '/css')) {
        File::makeDirectory($tempPath . '/css', 0755, true);
    }
    
    // Copier les fichiers JS et CSS
    File::copy(public_path('js/scriptsTemp1.js'), $tempPath . '/js/scriptsTemp1.js');
    File::copy(public_path('css/temp1.css'), $tempPath . '/css/temp1.css');
    
    // Sauvegarder le HTML dans le dossier temporaire
    File::put($tempPath . '/index.html', $htmlContent);
    
    // Créer un fichier zip contenant tous les fichiers
    $zipPath = storage_path('app/temp/' . $zipFileName);
    $zip = new ZipArchive();
    
    if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
        // Fonction récursive pour ajouter des fichiers au zip
        $addFilesToZip = function ($directory, $zipBasePath = '') use (&$addFilesToZip, $zip, $tempPath) {
            $files = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($directory),
                \RecursiveIteratorIterator::LEAVES_ONLY
            );
            
            foreach ($files as $file) {
                if (!$file->isDir()) {
                    $filePath = $file->getRealPath();
                    $relativePath = $zipBasePath . substr($filePath, strlen($tempPath) + 1);
                    
                    $zip->addFile($filePath, $relativePath);
                }
            }
        };
        
        // Ajouter tous les fichiers du dossier temporaire au zip
        $addFilesToZip($tempPath, '');
        
        $zip->close();
    }
    
    // Nettoyer le dossier temporaire après la création du zip
    File::deleteDirectory($tempPath);
    
    // Retourner le fichier zip en téléchargement
    return response()->download($zipPath, $zipFileName, [
        'Content-Type' => 'application/zip',
    ])->deleteFileAfterSend(true);
}

   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::latest()->paginate();
        return view('templates' , compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'imagePrev' => 'nullable|string',
        ]);

        $template = Template::create($validated);
        return response()->json(['message' => 'Template created successfully', 'template' => $template]);
    }

    public function renderTemp1()
    {
        // Fetch the latest template
        $template = Template::latest()->first();

        // Handle case where no templates exist
        if (!$template) {
            return abort(404, 'No templates available');
        }

        // Initialize components data
        $componentsData = [];

        // Check if the user is authenticated
        if (auth()->check()) {
            // Fetch the user's personalized template, if it exists
            $userTemplate = UserTemplate::where('template_id', $template->templateId)
                ->where('user_id', auth()->id())
                ->first();

            if ($userTemplate) {
                // Load the personalized components data
                $componentsData = json_decode($userTemplate->components_data, true);
            } else {
                // Fall back to default components
                $componentsData = $this->getDefaultComponents($template->templateId);
            }
        } else {
            // Load default components for unauthenticated users
            $componentsData = $this->getDefaultComponents($template->templateId);
        }

        // Pass data to the view
        return view('templates.temp1', compact('componentsData'));
    }

    /**
     * Display the specified resource.
     */
    public function show($templateId)
    {
        $template = Template::where('templateId', $templateId)->first();
    //    / Assuming the column is template_id
        
        
    return view('templates.iframe', compact('template' ));
    }

    private function getDefaultComponents($templateId)
    {
        // Fetch components associated with the template
        $components = Composant::where('templateId', $templateId)->get();

        // Decode components data
        $componentsData = [];
        foreach ($components as $component) {
            $componentsData[$component->name] = json_decode($component->contenu, true);
        }

        return $componentsData;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Fetch the latest template
        $template = Template::latest()->first();

        // Handle case where no templates exist
        if (!$template) {
            return abort(404, 'No templates available');
        }

        // Check if the user is authenticated
        if (auth()->check()) {
            // Fetch the user's personalized template, if it exists
            $userTemplate = UserTemplate::where('template_id', $template->templateId)
                ->where('user_id', auth()->id())
                ->first();

            if ($userTemplate) {
                // Load the personalized components data
                $componentsData = json_decode($userTemplate->components_data, true);
            } else {
                // Fall back to the default components if no personalization exists
                $componentsData = $this->getDefaultComponents($template->templateId);

                // Optionally create a user template with default data for later modifications
                $userTemplate = new UserTemplate();
                $userTemplate->template_id = $template->templateId;
                $userTemplate->user_id = auth()->id();
                $userTemplate->components_data = json_encode($componentsData);
                $userTemplate->save();
            }
        } else {
            // Load default components for unauthenticated users
            $componentsData = $this->getDefaultComponents($template->templateId);
        }

        // Pass data to the view
        return view('templates.builder', compact('template', 'componentsData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $componentName)
    {
        $templateId = 1; // Example template ID
        $userId = auth()->id();
    
        // Ensure user is authenticated
        if (!$userId) {
            return abort(403, 'Unauthorized');
        }
    
        // Fetch or create the user's personalized template
        $userTemplate = UserTemplate::where('template_id', $templateId)
            ->where('user_id', $userId)
            ->first();
    
        if (!$userTemplate) {
            $userTemplate = new UserTemplate();
            $userTemplate->template_id = $templateId;
            $userTemplate->user_id = $userId;
            $userTemplate->components_data = json_encode([]);
            $userTemplate->save();
        }
    
        // Decode existing components data
        $componentsData = json_decode($userTemplate->components_data, true) ?? [];
        $componentData = $componentsData[$componentName] ?? [];
    
        // Get the base component structure from the original template
        $baseComponent = Composant::where('templateId', $templateId)
            ->where('name', $componentName)
            ->firstOrFail();
        $baseContent = json_decode($baseComponent->contenu, true) ?? [];
    
        // Merge with user's existing data (if any)
        $contenu = array_merge($baseContent, $componentData);
    
        // Handle component-specific updates (your friend's logic)
        if ($componentName === 'Navbar') {
            // Update logo if present
            if ($request->hasFile('logo')) {
                $contenu['logo'] = $this->storeImage($request->file('logo'), 'navbar_images');
            }
    
            // Update navigation links
            if ($request->has('links')) {
                $updatedLinks = [];
                foreach ($request->input('links') as $index => $linkData) {
                    $updatedLinks[] = [
                        'label' => $linkData['label'] ?? ($contenu['links'][$index]['label'] ?? "Default Label $index"),
                        'url' => $linkData['url'] ?? ($contenu['links'][$index]['url'] ?? "#"),
                    ];
                }
                $contenu['links'] = $updatedLinks;
            }
    
            // Remove old links if no link data is sent
            if (!$request->has('links')) {
                $contenu['links'] = [];
            }
        }
    
        // Handle Masthead updates
        if ($componentName === 'Masthead') {
            $contenu['subheading'] = $request->input('subheading', $contenu['subheading'] ?? '');
            $contenu['heading'] = $request->input('heading', $contenu['heading'] ?? '');
            $contenu['buttonText'] = $request->input('buttonText', $contenu['buttonText'] ?? '');
        }
    
        // Handle Services updates
        if ($request->has('services')) {
            // Remove old services not present in new data
            $receivedServiceIndices = array_keys($request->input('services'));
            $existingServiceIndices = array_keys($contenu['services'] ?? []);
            $indicesToRemove = array_diff($existingServiceIndices, $receivedServiceIndices);
    
            foreach ($indicesToRemove as $indexToRemove) {
                unset($contenu['services'][$indexToRemove]);
            }
    
            // Update or add new services
            foreach ($request->input('services') as $index => $serviceData) {
                $contenu['heading'] = $request->input('heading', $contenu['heading'] ?? 'Services');
                $contenu['subheading'] = $request->input('subheading', $contenu['subheading'] ?? 'Lorem ipsum dolor sit amet consectetur.');
                $contenu['services'][$index] = array_merge(
                    $contenu['services'][$index] ?? [],
                    [
                        'icon' => $serviceData['icon'] ?? ($contenu['services'][$index]['icon'] ?? 'fas fa-star'),
                        'title' => $serviceData['title'] ?? ($contenu['services'][$index]['title'] ?? "Default Title $index"),
                        'description' => $serviceData['description'] ?? ($contenu['services'][$index]['description'] ?? 'Default description'),
                    ]
                );
            }
        }
    
        // Handle Portfolio updates
        if ($componentName === 'Portfolio') {
            $contenu['heading'] = $request->input('heading', $contenu['heading'] ?? 'Portfolio');
            $contenu['subheading'] = $request->input('subheading', $contenu['subheading'] ?? 'Lorem ipsum dolor sit amet consectetur.');
    
            if ($request->has('items')) {
                foreach ($request->input('items') as $index => $itemData) {
                    $contenu['items'][$index] = array_merge(
                        $contenu['items'][$index] ?? [],
                        [
                            'modal' => $itemData['modal'] ?? ($contenu['items'][$index]['modal'] ?? '#'),
                            'captionHeading' => $itemData['captionHeading'] ?? ($contenu['items'][$index]['captionHeading'] ?? "Default Caption Heading $index"),
                            'captionSubheading' => $itemData['captionSubheading'] ?? ($contenu['items'][$index]['captionSubheading'] ?? "Default Caption Subheading $index"),
                        ]
                    );
    
                    if ($request->hasFile("items.$index.image")) {
                        $contenu['items'][$index]['image'] = $this->storeImage($request->file("items.$index.image"), 'portfolio_images');
                    }
                }
            }
        }
    
        // Handle About updates
        if ($componentName === 'About') {
            $contenu['heading'] = $request->input('heading', $contenu['heading'] ?? 'About');
            $contenu['subheading'] = $request->input('subheading', $contenu['subheading'] ?? 'Lorem ipsum dolor sit amet consectetur.');
    
            if ($request->has('timeline')) {
                foreach ($request->input('timeline') as $index => $timelineData) {
                    $contenu['timeline'][$index] = array_merge(
                        $contenu['timeline'][$index] ?? [],
                        [
                            'year' => $timelineData['year'] ?? ($contenu['timeline'][$index]['year'] ?? ''),
                            'subheading' => $timelineData['subheading'] ?? ($contenu['timeline'][$index]['subheading'] ?? ''),
                            'description' => $timelineData['description'] ?? ($contenu['timeline'][$index]['description'] ?? ''),
                            'inverted' => isset($timelineData['inverted']) ? (bool)$timelineData['inverted'] : ($contenu['timeline'][$index]['inverted'] ?? false),
                        ]
                    );
    
                    if ($request->hasFile("timeline.$index.image")) {
                        $contenu['timeline'][$index]['image'] = $this->storeImage($request->file("timeline.$index.image"), 'timeline_images');
                    }
                }
            }
    
            if ($request->has('finalMessage')) {
                $contenu['timeline']['finalMessage'] = $request->input('finalMessage', $contenu['timeline']['finalMessage'] ?? 'Be Part Of Our Story!');
            }
        }
    
        // Handle Team updates
        if ($request->has('members')) {
            if ($request->has('heading') && $request->has('subheading')) {
                $contenu['heading'] = $request->input('heading') ?? $contenu['heading'];
                $contenu['subheading'] = $request->input('subheading') ?? $contenu['subheading'];
            }
    
            $receivedTeamIndices = array_keys($request->input('members'));
            $existingTeamIndices = array_keys($contenu['members'] ?? []);
            $indicesToRemove = array_diff($existingTeamIndices, $receivedTeamIndices);
    
            foreach ($indicesToRemove as $indexToRemove) {
                unset($contenu['members'][$indexToRemove]);
            }
    
            foreach ($request->input('members') as $index => $teamData) {
                $contenu['members'][$index] = array_merge(
                    $contenu['members'][$index] ?? [],
                    [
                        'name' => $teamData['name'] ?? ($contenu['members'][$index]['name'] ?? "Default Name $index"),
                        'role' => $teamData['role'] ?? ($contenu['members'][$index]['role'] ?? "Default Role"),
                        'social' => [
                            'twitter' => $contenu['members'][$index]['social']['twitter'] ?? '#',
                            'facebook' => $contenu['members'][$index]['social']['facebook'] ?? '#',
                            'linkedin' => $contenu['members'][$index]['social']['linkedin'] ?? '#',
                        ],
                    ]
                );
    
                if ($request->hasFile("members.$index.image")) {
                    $contenu['members'][$index]['image'] = $this->storeImage($request->file("members.$index.image"), 'team_photos');
                }
            }
        }
    
        // Handle Client Logos updates
        if ($request->has('logos')) {
            $receivedLogoIndices = array_keys($request->input('logos'));
            $existingLogoIndices = array_keys($contenu['logos'] ?? []);
            $indicesToRemove = array_diff($existingLogoIndices, $receivedLogoIndices);
    
            foreach ($indicesToRemove as $indexToRemove) {
                unset($contenu['logos'][$indexToRemove]);
            }
    
            foreach ($request->input('logos') as $index => $logoData) {
                $contenu['logos'][$index] = array_merge(
                    $contenu['logos'][$index] ?? [],
                    [
                        'alt' => $logoData['alt'] ?? ($contenu['logos'][$index]['alt'] ?? "Default Alt Text $index"),
                        'aria_label' => $logoData['aria_label'] ?? ($contenu['logos'][$index]['aria_label'] ?? "Default Aria Label"),
                    ]
                );
    
                if ($request->hasFile("logos.$index.image")) {
                    $contenu['logos'][$index]['image'] = $this->storeImage($request->file("logos.$index.image"), 'client_logos');
                }
            }
        }
    
        // Handle Footer updates
        if ($request->has('footer')) {
            $contenu['copyright'] = $request->input('copyright') ?? $contenu['copyright'];
            $contenu['social_links'] = [
                'twitter' => $contenu['social_links']['twitter'] ?? '#',
                'facebook' => $contenu['social_links']['facebook'] ?? '#',
                'linkedin' => $contenu['social_links']['linkedin'] ?? '#',
            ];
    
            $contenu['footer_links'] = [
                'privacy_policy' => $contenu['footer_links']['privacy_policy'] ?? '#',
                'terms_of_use' => $contenu['footer_links']['terms_of_use'] ?? '#',
            ];
        }
    
        // Save the updated component data to user's personalization
        $componentsData[$componentName] = $contenu;
        $userTemplate->components_data = json_encode($componentsData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        $userTemplate->save();
    
        return back()->with('success', "$componentName updated successfully!");
    }

/**
 * Méthode utilitaire pour stocker une image.
 *
 * @param UploadedFile $file
 * @param string $directory
 * @return string URL de l'image stockée
 */
private function storeImage($file, $directory)
{
    $path = $file->store("public/$directory");
    return asset('storage/' . str_replace('public/', '', $path));
}

    
public function saveUserTemplate(Request $request)
{
    $templateId = 1; // Example template ID
    $userId = auth()->id();

    // Check if the user already has a personalized template
    $userTemplate = UserTemplate::where('template_id', $templateId)
        ->where('user_id', $userId)
        ->first();

    if ($userTemplate) {
        // Update the existing user template with new components data
        $userTemplate->components_data = json_encode($request->componentsData);
        $userTemplate->save();
    } else {
        // Create a new user template with the modified components
        $userTemplate = new UserTemplate();
        $userTemplate->template_id = $templateId;
        $userTemplate->user_id = $userId;
        $userTemplate->components_data = json_encode($request->componentsData);
        $userTemplate->save();
    }

    return response()->json(['message' => 'User template saved successfully']);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Template::destroy($id);
        return response()->json(['message' => 'Template deleted successfully']);
    }
}