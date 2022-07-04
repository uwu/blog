@props(['title', 'author'])

<div class="card mx-2">
    <a {{ $attributes }}>
        <div class="card-body">
            <h2 class="card-title">{{ $title }}</h2>
            <p class="card-description">...</p>

            <div class="card-profile">
                <img src="https://cdn.discordapp.com/emojis/843188323577102367.webp?size=96&quality=lossless"
                    alt="" class="profile-img">
                <div class="card-profile-info">
                    <h3 class="profile-name">{{ $author }}</h3>
                </div>
            </div>
        </div>
    </a>
</div>
