<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
@foreach($stages as $stage)
    <tr>
        <td>{{$stage->id}}</td>
        <td>{{$stage->name}}</td>
        <td>{{$stage->cells->count()}}</td>
    </tr>
@endforeach
</div>
