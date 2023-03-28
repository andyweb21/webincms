@props([
    'theme' => 'dark',
    'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40'
])

@if($theme === 'light')
    @php
    $class = 'appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm';
    @endphp
@endif

<input {{ $attributes->merge(['type' => 'text', 'value' => '', 'name' => '', 'id' => '', 'placeholder' => '', 'class' => $class]) }} />