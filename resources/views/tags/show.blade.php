<x-app-layout>
    @if ($tag != '')
        <h1 class="mt-10 text-3xl font-semibold">Tagged {{ $tag }}</h1>
    @endif

    <x-post-listitems :posts="$posts" />
</x-app-layout>
