@props(['name'])
@error($name)
    <p class="text-xs text-red-500 font-semibold italic mt-1">{{ $message }}</p>
@enderror
