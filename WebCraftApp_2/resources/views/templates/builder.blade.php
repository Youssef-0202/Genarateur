<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Builder</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts for Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="d-flex" style="min-height: 100vh;">
        <!-- Sidebar -->
        <div class="sidebar p-4">
            <h4 class="mb-4">Edit Section</h4>
            <div id="form-container">
                <p class="text-muted">Click a section in the template to edit it.</p>
            </div>
        </div>

        <!-- Template Preview -->
        <div class="flex-grow-1 position-relative">
            <iframe id="preview-iframe" src="{{ url($template->file_path) }}" class="w-100 h-100" style="border: none;">
            </iframe>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const iframe = document.getElementById('preview-iframe');
            const formContainer = document.getElementById('form-container');

            // Forms for each section
            const forms = {
                Navbar: `
                    <form action="{{ route('update.component', 'Navbar') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Navbar Settings</h5>
                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Upload Logo Image</label>
                            <input type="file" name="logo" id="logo" class="form-control" value="{{ $componentsData['Navbar']['logo'] }}">
                        </div>
                        <!-- Links -->
                        <h6>Navbar Links</h6>
                        <div id="navbar-links-container">
                            @foreach ($componentsData['Navbar']['links'] as $index => $link)
                                <div class="navbar-link-item border p-3 mb-3" data-index="{{ $index }}">
                                    <div class="mb-3">
                                        <label for="link-text-{{ $index }}" class="form-label">Link Text</label>
                                        <input type="text" name="links[{{ $index }}][label]" id="link-text-{{ $index }}" class="form-control" value="{{ $link['label'] }}" placeholder="Enter link text">
                                    </div>
                                    <div class="mb-3">
                                        <label for="link-url-{{ $index }}" class="form-label">Link URL</label>
                                        <input type="text" name="links[{{ $index }}][url]" id="link-url-{{ $index }}" class="form-control" value="{{ $link['url'] }}" placeholder="Enter link URL">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Submit -->
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Save Navbar</button>
                        </div>
                    </form>
                `,
                Masthead: `
                    <form action="{{ route('update.component', 'Masthead') }}" method="POST">
                        @csrf
                        <h5>Masthead Settings</h5>
                        <div class="mb-3">
                            <label for="masthead-subheading" class="form-label">Subheading</label>
                            <input type="text" name="subheading" id="masthead-subheading" class="form-control" value="{{ $componentsData['Masthead']['subheading'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="masthead-heading" class="form-label">Heading</label>
                            <input type="text" name="heading" id="masthead-heading" class="form-control" value="{{ $componentsData['Masthead']['heading'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="masthead-button-text" class="form-label">Button Text</label>
                            <input type="text" name="buttonText" id="masthead-button-text" class="form-control" value="{{ $componentsData['Masthead']['buttonText'] }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Masthead</button>
                    </form>
                `,
                Services: `
                    <form action="{{ route('update.component', 'Services') }}" method="POST">
                        @csrf
                        <h5>Services Section Settings</h5>
                        <div class="mb-3">
                            <label for="services-heading" class="form-label">Heading</label>
                            <input type="text" name="heading" id="services-heading" class="form-control" value="{{ $componentsData['Services']['heading'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="services-subheading" class="form-label">Subheading</label>
                            <input type="text" name="subheading" id="services-subheading" class="form-control" value="{{ $componentsData['Services']['subheading'] }}">
                        </div>
                        <h5 class="mt-4">Service Items</h5>
                        @foreach ($componentsData['Services']['services'] as $index => $service)
                            <div class="mb-4 border p-3 rounded">
                                <h6>Service {{ $index + 1 }}</h6>
                                <div class="mb-3">
                                    <label for="service-icon-{{ $index }}" class="form-label">Icon</label>
                                    <select name="services[{{ $index }}][icon]" id="service-icon-{{ $index }}" class="form-select" onchange="updateIconPreview({{ $index }})">
                                        <option value="" disabled selected>Choose an icon</option>
                                        <option value="fas fa-star" {{ $service['icon'] == 'fas fa-star' ? 'selected' : '' }}>⭐ Star</option>
                                        <option value="fas fa-heart" {{ $service['icon'] == 'fas fa-heart' ? 'selected' : '' }}>❤️ Heart</option>
                                        <option value="fas fa-cog" {{ $service['icon'] == 'fas fa-cog' ? 'selected' : '' }}>⚙️ Cog</option>
                                        <option value="fas fa-rocket" {{ $service['icon'] == 'fas fa-rocket' ? 'selected' : '' }}>🚀 Rocket</option>
                                        <option value="fas fa-globe" {{ $service['icon'] == 'fas fa-globe' ? 'selected' : '' }}>🌍 Globe</option>
                                    </select>
                                    <div class="icon-preview mt-2">
                                        <i id="icon-preview-{{ $index }}" class="{{ $service['icon'] }} fa-2x"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="service-title-{{ $index }}" class="form-label">Title</label>
                                    <input type="text" name="services[{{ $index }}][title]" id="service-title-{{ $index }}" class="form-control" value="{{ $service['title'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="service-description-{{ $index }}" class="form-label">Description</label>
                                    <textarea name="services[{{ $index }}][description]" id="service-description-{{ $index }}" class="form-control" rows="3">{{ $service['description'] }}</textarea>
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary mt-3">Save Services</button>
                    </form>
                `,
                Portfolio: `
                    <form action="{{ route('update.component', 'Portfolio') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Portfolio Section Settings</h5>
                        <div class="mb-3">
                            <label for="portfolio-heading" class="form-label">Heading</label>
                            <input type="text" name="heading" id="portfolio-heading" class="form-control" value="{{ $componentsData['Portfolio']['heading'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="portfolio-subheading" class="form-label">Subheading</label>
                            <input type="text" name="subheading" id="portfolio-subheading" class="form-control" value="{{ $componentsData['Portfolio']['subheading'] }}">
                        </div>
                        <h5 class="mt-4">Portfolio Items</h5>
                        @foreach ($componentsData['Portfolio']['items'] as $index => $item)
                            <div class="mb-4 border p-3 rounded">
                                <h6>Portfolio Item {{ $index + 1 }}</h6>
                                <div class="mb-3">
                                    <label for="portfolio-image-{{ $index }}" class="form-label">Image</label>
                                    <input type="file" name="items[{{ $index }}][image]" id="portfolio-image-{{ $index }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="portfolio-modal-{{ $index }}" class="form-label">Modal Link</label>
                                    <input type="text" name="items[{{ $index }}][modal]" id="portfolio-modal-{{ $index }}" class="form-control" value="{{ $item['modal'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="portfolio-caption-heading-{{ $index }}" class="form-label">Caption Heading</label>
                                    <input type="text" name="items[{{ $index }}][captionHeading]" id="portfolio-caption-heading-{{ $index }}" class="form-control" value="{{ $item['captionHeading'] }}">
                                </div>
                                <div class="mb-3">
                                    <label for="portfolio-caption-subheading-{{ $index }}" class="form-label">Caption Subheading</label>
                                    <input type="text" name="items[{{ $index }}][captionSubheading]" id="portfolio-caption-subheading-{{ $index }}" class="form-control" value="{{ $item['captionSubheading'] }}">
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary mt-3">Save Portfolio</button>
                    </form>
                `,
                About: `
                    <form action="{{ route('update.component', 'About') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>About Section Settings</h5>
                        <!-- Section Heading -->
                        <div class="mb-3">
                            <label for="heading" class="form-label">Section Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control" value="{{ $componentsData['About']['heading'] }}" placeholder="Enter section heading">
                        </div>
                        <!-- Section Subheading -->
                        <div class="mb-3">
                            <label for="subheading" class="form-label">Section Subheading</label>
                            <input type="text" name="subheading" id="subheading" class="form-control" value="{{ $componentsData['About']['subheading'] }}" placeholder="Enter section subheading">
                        </div>
                        <!-- Timeline Items -->
                        <h6>Timeline</h6>
                        <div id="timeline-container">
                            @foreach ($componentsData['About']['timeline'] as $index => $item)
                                <div class="timeline-item border p-3 mb-3" data-index="{{ $index }}">
                                    <!-- Year -->
                                    <div class="mb-3">
                                        <label for="timeline-year-{{ $index }}" class="form-label">Year</label>
                                        <input type="text" name="timeline[{{ $index }}][year]" id="timeline-year-{{ $index }}" class="form-control" value="{{ $item['year'] ?? '' }}" placeholder="Enter year">
                                    </div>
                                    <!-- Subheading -->
                                    <div class="mb-3">
                                        <label for="timeline-subheading-{{ $index }}" class="form-label">Subheading</label>
                                        <input type="text" name="timeline[{{ $index }}][subheading]" id="timeline-subheading-{{ $index }}" class="form-control" value="{{ $item['subheading'] ?? '' }}" placeholder="Enter subheading">
                                    </div>
                                    <!-- Description -->
                                    <div class="mb-3">
                                        <label for="timeline-description-{{ $index }}" class="form-label">Description</label>
                                        <textarea name="timeline[{{ $index }}][description]" id="timeline-description-{{ $index }}" class="form-control" rows="3" placeholder="Enter description">{{ $item['description'] ?? '' }}</textarea>
                                    </div>
                                    <!-- Image -->
                                    <div class="mb-3">
                                        <label for="timeline-image-{{ $index }}" class="form-label">Image</label>
                                        <input type="file" name="timeline[{{ $index }}][image]" id="timeline-image-{{ $index }}" class="form-control">
                                        <small class="text-muted">Current Image: {{ $item['image'] ?? 'None' }}</small>
                                    </div>
                                    <!-- Final Message -->
                                    <div class="mb-3">
                                        <label for="timeline-finalMessage-{{ $index }}" class="form-label">Final Message</label>
                                        <input type="text" name="timeline[{{ $index }}][finalMessage]" id="timeline-finalMessage-{{ $index }}" class="form-control" value="{{ $item['finalMessage'] ?? '' }}" placeholder="Optional final message">
                                    </div>
                                    <!-- Inverted -->
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="timeline[{{ $index }}][inverted]" id="timeline-inverted-{{ $index }}" class="form-check-input" {{ isset($item['inverted']) && $item['inverted'] ? 'checked' : '' }}>
                                        <label for="timeline-inverted-{{ $index }}" class="form-check-label">Inverted</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Submit -->
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Save About Section</button>
                        </div>
                    </form>
                `,
                Team: `
                    <form action="{{ route('update.component', 'Team') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Team Section Settings</h5>
                        <!-- Section Heading -->
                        <div class="mb-3">
                            <label for="heading" class="form-label">Section Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control" value="{{ $componentsData['Team']['heading'] }}" placeholder="Enter section heading">
                        </div>
                        <!-- Section Subheading -->
                        <div class="mb-3">
                            <label for="subheading" class="form-label">Section Subheading</label>
                            <input type="text" name="subheading" id="subheading" class="form-control" value="{{ $componentsData['Team']['subheading'] }}" placeholder="Enter section subheading">
                        </div>
                        <!-- Team Members -->
                        <h6>Team Members</h6>
                        <div id="team-members-container">
                            @foreach ($componentsData['Team']['members'] as $index => $member)
                                <div class="team-member-item border p-3 mb-3" data-index="{{ $index }}">
                                    <!-- Image -->
                                    <div class="mb-3">
                                        <label for="team-member-image-{{ $index }}" class="form-label">Member Image</label>
                                        <input type="file" name="members[{{ $index }}][image]" id="team-member-image-{{ $index }}" class="form-control">
                                        <small class="text-muted">Current Image: {{ $member['image'] ?? 'None' }}</small>
                                        @if ($member['image'])
                                            <div class="mt-2">
                                                <img src="{{ asset($member['image']) }}" alt="Current Image" class="img-fluid" width="150">
                                            </div>
                                        @endif
                                    </div>
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="team-member-name-{{ $index }}" class="form-label">Member Name</label>
                                        <input type="text" name="members[{{ $index }}][name]" id="team-member-name-{{ $index }}" class="form-control" value="{{ $member['name'] }}" placeholder="Enter member's name">
                                    </div>
                                    <!-- Role -->
                                    <div class="mb-3">
                                        <label for="team-member-role-{{ $index }}" class="form-label">Member Role</label>
                                        <input type="text" name="members[{{ $index }}][role]" id="team-member-role-{{ $index }}" class="form-control" value="{{ $member['role'] }}" placeholder="Enter member's role">
                                    </div>
                                    <!-- Social Links (removed the ability to modify) -->
                                    <div class="mb-3">
                                        <label for="team-member-twitter-{{ $index }}" class="form-label">Twitter Profile URL</label>
                                        <input type="text" name="members[{{ $index }}][social][twitter]" id="team-member-twitter-{{ $index }}" class="form-control" value="{{ $member['social']['twitter'] }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="team-member-facebook-{{ $index }}" class="form-label">Facebook Profile URL</label>
                                        <input type="text" name="members[{{ $index }}][social][facebook]" id="team-member-facebook-{{ $index }}" class="form-control" value="{{ $member['social']['facebook'] }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="team-member-linkedin-{{ $index }}" class="form-label">LinkedIn Profile URL</label>
                                        <input type="text" name="members[{{ $index }}][social][linkedin]" id="team-member-linkedin-{{ $index }}" class="form-control" value="{{ $member['social']['linkedin'] }}" disabled>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Section Description -->
                        <div class="mb-3 mt-4">
                            <label for="description" class="form-label">Section Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3">{{ $componentsData['Team']['description'] }}</textarea>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save Team Section</button>
                    </form>
                `,
                Clients: `
                    <form action="{{ route('update.component', 'Clients') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Clients Section Settings</h5>
                        <!-- Logos -->
                        <h6>Client Logos</h6>
                        <div id="client-logos-container">
                            @foreach ($componentsData['Clients']['logos'] as $index => $logo)
                                <div class="client-logo-item border p-3 mb-3" data-index="{{ $index }}">
                                    <!-- Logo Image -->
                                    <div class="mb-3">
                                        <label for="client-logo-image-{{ $index }}" class="form-label">Logo Image</label>
                                        <input type="file" name="logos[{{ $index }}][image]" id="client-logo-image-{{ $index }}" class="form-control">
                                        <small class="text-muted">Current Image: {{ $logo['image'] ?? 'None' }}</small>
                                    </div>
                                    <!-- Alt Text -->
                                    <div class="mb-3">
                                        <label for="client-logo-alt-{{ $index }}" class="form-label">Alt Text</label>
                                        <input type="text" name="logos[{{ $index }}][alt]" id="client-logo-alt-{{ $index }}" class="form-control" value="{{ $logo['alt'] }}" placeholder="Enter logo alt text">
                                    </div>
                                    <!-- Aria Label -->
                                    <div class="mb-3">
                                        <label for="client-logo-aria-label-{{ $index }}" class="form-label">Aria Label</label>
                                        <input type="text" name="logos[{{ $index }}][aria_label]" id="client-logo-aria-label-{{ $index }}" class="form-control" value="{{ $logo['aria_label'] }}" placeholder="Enter aria label">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save Client Logos</button>
                    </form>
                `,
                Footer: `
                    <form action="{{ route('update.component', 'Footer') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Footer Section Settings</h5>
                        <!-- Copyright -->
                        <div class="mb-3">
                            <label for="copyright" class="form-label">Copyright</label>
                            <input type="text" name="copyright" id="copyright" class="form-control" value="{{ $componentsData['Footer']['copyright'] }}" placeholder="Enter copyright text">
                        </div>
                        <!-- Social Links (Non-modifiable) -->
                        <h6>Social Media Links</h6>
                        <div>
                            <p>Twitter: {{ $componentsData['Footer']['social_links']['twitter'] }}</p>
                            <p>Facebook: {{ $componentsData['Footer']['social_links']['facebook'] }}</p>
                            <p>LinkedIn: {{ $componentsData['Footer']['social_links']['linkedin'] }}</p>
                        </div>
                        <!-- Footer Links (Non-modifiable) -->
                        <h6>Footer Links</h6>
                        <div>
                            <p>Privacy Policy: {{ $componentsData['Footer']['footer_links']['privacy_policy'] }}</p>
                            <p>Terms of Use: {{ $componentsData['Footer']['footer_links']['terms_of_use'] }}</p>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save Footer Section</button>
                    </form>
                `
            };

            // Wait for the iframe to load
            iframe.addEventListener('load', () => {
                const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

                if (!iframeDoc) {
                    console.error("Unable to access iframe content. Check for cross-origin restrictions.");
                    return;
                }

                // Find all sections inside the iframe
                const sections = iframeDoc.querySelectorAll('.template-section');
                console.log("Found sections:", sections); // Debugging: Log found sections

                if (sections.length === 0) {
                    console.warn("No sections with class 'template-section' found in iframe.");
                }

                sections.forEach(section => {
                    section.style.cursor = 'pointer'; // Add pointer cursor to indicate clickable sections
                    section.addEventListener('click', () => {
                        const sectionName = section.getAttribute('data-section');
                        console.log(`Clicked section: ${sectionName}`); // Debugging: Log the clicked section

                        if (forms[sectionName]) {
                            formContainer.innerHTML = forms[sectionName];
                        } else {
                            formContainer.innerHTML = `<p class="text-muted">No form available for the ${sectionName} section.</p>`;
                        }
                    });
                });
            });
        });
    </script>
    <script>
        function updateIconPreview(index) {
            const selector = document.getElementById(`service-icon-${index}`);
            const iconPreview = document.getElementById(`icon-preview-${index}`);
            iconPreview.className = selector.value + ' fa-2x'; // Update the preview
        }
    </script>

    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f1e3; /* Creamy off-white background */
            color: #2d3436; /* Charcoal gray text */
            overflow: hidden;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            overflow-y: auto;
            position: sticky;
            top: 0;
            width: 400px; /* Increased width */
            background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange gradient */
            padding: 30px;
            border-right: 2px solid #dfe6e9; /* Light gray border */
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h4 {
            color: #f7f1e3; /* Creamy off-white */
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .sidebar .text-muted {
            color: #f7f1e3; /* Creamy off-white */
            font-weight: 300;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Scrollbar Styling */
        .sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: #f7f1e3; /* Creamy off-white */
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #e67e22; /* Warm pumpkin orange */
            border-radius: 4px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: #d35400; /* Darker orange */
        }

        /* Form Container */
        #form-container form {
            background-color: #fff; /* White background for forms */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        #form-container h5 {
            color: #2d3436; /* Charcoal gray */
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        #form-container h6 {
            color: #2d3436; /* Charcoal gray */
            font-weight: 500;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        #form-container .form-label {
            color: #2d3436; /* Charcoal gray */
            font-weight: 500;
            font-size: 0.9rem;
        }

        #form-container .form-control,
        #form-container .form-select {
            background-color: #f7f1e3; /* Creamy off-white */
            border: 1px solid #dfe6e9; /* Light gray border */
            color: #2d3436; /* Charcoal gray text */
            border-radius: 5px;
            padding: 10px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        #form-container .form-control:focus,
        #form-container .form-select:focus {
            border-color: #e67e22; /* Warm pumpkin orange */
            box-shadow: 0 0 5px rgba(230, 126, 34, 0.3); /* Subtle orange glow */
            outline: none;
        }

        #form-container .form-check-input {
            border-color: #dfe6e9; /* Light gray */
        }

        #form-container .form-check-input:checked {
            background-color: #e67e22; /* Warm pumpkin orange */
            border-color: #e67e22;
        }

        #form-container .form-check-label {
            color: #2d3436; /* Charcoal gray */
            font-size: 0.9rem;
        }

        #form-container .navbar-link-item,
        #form-container .mb-4.border,
        #form-container .timeline-item,
        #form-container .team-member-item,
        #form-container .client-logo-item {
            background-color: #f7f1e3; /* Creamy off-white */
            border: 1px solid #dfe6e9; /* Light gray border */
            border-radius: 5px;
        }

        #form-container .btn-primary {
            background-color: #e67e22; /* Warm pumpkin orange */
            border: none;
            color: #fff;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        #form-container .btn-primary:hover {
            background-color: #d35400; /* Darker orange */
            transform: translateY(-2px); /* Slight lift */
        }

        #form-container .icon-preview i {
            color: #ff7675; /* Soft coral */
        }

        #form-container .text-muted {
            color: #636e72; /* Muted gray */
            font-size: 0.8rem;
        }

        #form-container p {
            color: #636e72; /* Muted gray */
            font-size: 0.9rem;
        }

        /* Main Content */
        .flex-grow-1 {
            overflow: auto;
            background-color: #fff; /* White background for iframe area */
        }

        #preview-iframe {
            height: 100vh;
            border-left: 1px solid #dfe6e9; /* Light gray border */
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 300px; /* Adjusted width for smaller screens */
                padding: 20px;
            }
            #form-container form {
                padding: 15px;
            }
            #form-container h5 {
                font-size: 1.1rem;
            }
            #form-container .form-control,
            #form-container .form-select {
                padding: 8px;
            }
            #form-container .btn-primary {
                padding: 8px 15px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                border-right: none;
                border-bottom: 2px solid #dfe6e9;
            }
            .d-flex {
                flex-direction: column;
            }
            #preview-iframe {
                height: calc(100vh - 250px); /* Adjusted for larger sidebar content */
            }
        }
    </style>
</body>

</html>
