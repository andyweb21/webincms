@props([
    'type' => '',
    'href' => ''
])
<span class="text-slate-500 pr-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg>
</span>
@if($href)
<a href="{{ $href }}" class="font-semibold pr-3 {{ $type == 'parent' ? 'text-slate-500':'text-slate-700' }}">
    {{ $slot }}
</a>
@else
<span class="font-semibold pr-3 {{ $type == 'parent' ? 'text-slate-500':'text-slate-700' }}">
    {{ $slot }}
</span>
@endif