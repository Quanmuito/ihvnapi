@if ($key === "faction")
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>
            <img style="width: 23px" src={{$icons->factions[$collection[$key]]}} alt="faction-icon">
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "class")
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>
            <img style="width: 23px" src={{$icons->class[$collection[$key]]}} alt="class-icon">
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "hp" || $key === "atk" || $key === "armor" || $key === "speed")
    <tr>
        <th scope="row">
            <img style="width: 23px" src={{$icons->attributes[$key]}} alt="attribute-icon">
            {{strtoupper($key)}}
        </th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@else
    <tr>
        <th scope="row">
            {{strtoupper($key)}}
        </th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@endif