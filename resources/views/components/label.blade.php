@props([
  'color' => 'text-gray-800'  
])

<label  {{ $attributes->merge(['for' => 'input', 'class' => 'block text-sm font-medium text-gray-700 mb-2 '.$color]) }}>{{ $slot }}</label>