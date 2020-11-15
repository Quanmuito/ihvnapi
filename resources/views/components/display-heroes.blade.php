<div>
    <h4>{{strtoupper($faction)}}</h4>
    @foreach ($collection as $item)
        @if($item->faction === $faction)
            <a href={{ route('heroes.show', $item->name) }}>
                <img class="hero-icon" 
                src={{ asset("images/avatar_images/" . $item->faction . "/" . $item->avatar) }}
                alt="hero_avatar"
                >
            </a>
        @endif
    @endforeach
</div>