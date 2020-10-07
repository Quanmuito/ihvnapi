<div>
    <h4>{{strtoupper($faction)}}</h4>
    @for ($i = 0; $i < count($collection); $i++)
        @if($collection[$i]->faction === $faction)
            <a href="/heroes/{{$collection[$i]->name}}">
                <img class="hero-icon" 
                src={{ asset("images/avatar_images/".$collection[$i]->faction."/".$collection[$i]->avatar)}}
                alt="hero_avatar"
                >
            </a>
        @endif
    @endfor
</div>