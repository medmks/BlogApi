<form action="{{route('stagiaire.update',$st->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="namemod" />
    <input type="email" name="emailmod" />
    <input type="submit" >
</form>
