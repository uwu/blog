<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="card-wrapper">
        @foreach ($posts as $post)
            <x-post-item :title="$post->title" :author="$post->author" href="/posts/{{ $post->id }}" />
        @endforeach
    </div>
</x-app-layout>
