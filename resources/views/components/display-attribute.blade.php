@if ($key === "faction")
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>
            <img style="width: 23px" src="/storage/faction_images/{{$collection[$key]}}.png" alt="faction-icon">
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "class")
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>
            <img style="width: 23px" src="/storage/class_images/{{$collection[$key]}}.png" alt="class-icon">
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "hp")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="/storage/attribute_images/health.png" alt="attribute-icon">
            {{strtoupper($key)}}
        </th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "atk")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="/storage/attribute_images/attack.png" alt="attribute-icon">
            {{strtoupper($key)}}
        </th>
        <td>{{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "armor")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="/storage/attribute_images/armor.png" alt="attribute-icon">
            {{strtoupper($key)}}
        </th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "speed")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="/storage/attribute_images/speed.png" alt="attribute-icon">
            {{strtoupper($key)}}</th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@else
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>{{$collection[$key]}}</td>
    </tr>
@endif