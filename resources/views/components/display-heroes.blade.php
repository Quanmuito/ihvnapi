<div>
    <h4>{{strtoupper($faction)}}</h4>
    @for ($i = 0; $i < count($collection); $i++)
        @if($collection[$i]->faction === $faction)
            <a target="blank" href="/heroes/{{$collection[$i]->name}}">
                <img style="width: 60px; height: 60px" 
                src="/storage/avatar_images/{{$collection[$i]->avatar}}">
            </a>
        @endif
    @endfor
</div>