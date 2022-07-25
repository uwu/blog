<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-300 leading-tight">
            {{ $post->title }}
        </h2>
        <h3 class="font-medium text-lg text-gray-600 dark:text-gray-400 leading-tight">
            by {{ $post->author }}
        </h3>
    </x-slot>

    <div class="py-4 sm:py-8">
        <div class="max-w-7xl text-gray-800 dark:text-gray-300 mx-auto px-4 sm:px-6 lg:px-8">
            {{ $post->content }}
        </div>
    </div>
</x-app-layout>
