@props(['active' => false])

<a class="{{ $active ? 'bg-purple-950 text-white' : 'text-purple-300 hover:bg-purple-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}>
    {{ $slot }}
</a>
