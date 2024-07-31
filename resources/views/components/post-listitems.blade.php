@if ($posts->count())
    <ul class="mt-10 space-y-10">
        @foreach ($posts as $post)
            <x-post-listitem :post="$post" />
        @endforeach
    </ul>
@else
    <div class="mt-10 space-y-10 prose prose-lg max-w-none">
        No posts available
    </div>
@endif
