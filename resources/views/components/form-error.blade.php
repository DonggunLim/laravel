@props(['name'])

@error($name)
    <p class="font-bild text-xs text-red-500">{{ $message }}</p>
@enderror
