<div>
    <h4>{{strtoupper($faction)}}</h4>
    @for ($i = 0; $i < count($collection); $i++)
        @if($collection[$i]->faction === $faction)
            <a href="/heroes/{{$collection[$i]->name}}">
                <img style="width: 60px; height: 60px; border-radius: 20%; overflow: hidden;" 
                src={{ asset("images/avatar_images/".$collection[$i]->faction."/".$collection[$i]->avatar)}}
                alt="hero_avatar"
                >
            </a>
        @endif
    @endfor
</div>