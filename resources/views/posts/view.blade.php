<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
        <h3 class="font-medium text-lg text-gray-600 leading-tight">
            by {{ $post->author }}
        </h3>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{ $post->content }}
        </div>
    </div>
</x-app-layout>
