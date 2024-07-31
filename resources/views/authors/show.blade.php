<x-app-layout>
    @if ($authorName!=='')
        <h1 class="mt-10 text-3xl font-semibold">Latest posts by {{ $authorName }}</h1>
    @endif

    <x-post-listitems :posts="$posts" />
</x-app-layout>
