<x-app-layout>
    <div class="mt-10 space-y-5 prose prose-lg max-w-none">
        <h1 class="not-prose font-bold">{{ $post->title }}</h1>
        <x-post-meta :post="$post" />
        <div class="text-justify">{{ $post->contents }}</div>
    </div>
</x-app-layout>
