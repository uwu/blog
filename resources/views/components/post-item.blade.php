@props(['title', 'author'])

<div class="overflow-hidden bg-white dark:bg-slate-600 dark:text-white rounded-lg relative cursor-pointer mx-2">
    <a {{ $attributes }}>
        <div class="m-4 mt-0">
            <h2 class="leading-6 mt-4 mb-2 mx-auto">{{ $title }}</h2>
            <p class="text-[#616b74] dark:text-gray-200">...</p>

            <div class="flex mt-8 items-center">
                <img src="https://cdn.discordapp.com/emojis/843188323577102367.webp?size=96&quality=lossless"
                    alt="" class="w-10 h-10 object-cover rounded-lg">
                <div class="ml-2">
                    <h3 class="text-base">{{ $author }}</h3>
                </div>
            </div>
        </div>
    </a>
</div>
