<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col flex-wrap justify-center gap-2">
                @foreach ($posts as $post)
                    <x-post-item :title="$post->title" :author="$post->author" href="/posts/{{ $post->id }}" />
                @endforeach
            </div>
        </div>
    </div>

    <div class="sm:bottom-6 sm:w-screen pt-3 pb-3">
        {{ $posts->links() }}
    </div>
</x-app-layout>
