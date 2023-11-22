sui
<form action="{{route('login')}}" method="post">
  @csrf
  

    email 
    <input type="email" name="email" >
    password
    <input type="password" name="password" >

<input type="submit" value="sabmita">
</form>
@error('email')
<div>{{$message}}</div>
@enderror 
@error('password')
<div>{{$message}}</div>
@enderror 