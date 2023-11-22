sui
<form action="{{route('register')}}" method="post">
    @csrf
    nom 
    <input type="text" name="nom" >
    email 
    <input type="email" name="email" >
    password
    <input type="password" name="password" >

<input type="submit" value="sabmita">
</form>