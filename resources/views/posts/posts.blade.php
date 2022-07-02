<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    {{-- TODO: Make this a list-based view, I've realised cards suck --}}
    <div class="card-wrapper">
        @foreach ($posts as $post)
            <x-post-item :title="$post->title" :author="$post->author" href="/posts/{{ $post->id }}" />
        @endforeach
    </div>

    <div class="sm:bottom-6 sm:w-screen pt-3 pb-3">
        {{ $posts->links() }}
    </div>
</x-app-layout>
