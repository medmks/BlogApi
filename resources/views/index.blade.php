<a href="stage.create">ajouter</a>
<table border=1>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>action</th>
</tr>
@foreach($posts as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td><form action="{{route('stage.destroy',$item->id)}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="delete">
    </form>
    <form action="{{route('stage.edit',$item->id)}}">
    @csrf
        <input type="submit" value="modifier">
    </form>
    
</tr>
@endforeach
</table>