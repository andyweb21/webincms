@props([
  'theme' => 'default',
  'center' => false,
  'class' => 'inline-flex items-center px-4 py-2 bg-transparent hover:bg-white text-gray-700 text-sm font-medium rounded-md border border-gray-400',
  'extclass' => ''
])

@if($theme == 'primary')
  @php
    $class = 'w-full px-4 py-2 tracking-wide inline-flex items-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50';
  @endphp
@endif

<a {{ $attributes->merge(['href' => '#', 'class' => $class . ' ' . $extclass]) }}>
  {{ $slot }}
</a>