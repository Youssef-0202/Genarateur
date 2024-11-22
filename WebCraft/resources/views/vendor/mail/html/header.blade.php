@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="WebCraft\public\images\logo1.jpg" class="logo" alt="WebCraft Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
