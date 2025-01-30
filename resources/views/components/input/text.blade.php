@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-600 bg-gray-200 text-gray-900 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm']) }}>
