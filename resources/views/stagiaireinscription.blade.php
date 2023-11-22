<form action="{{route('stage.stimuler')}}" method="post">
    @csrf
    
    <!-- <input type="text" name="email"><br/>
    @error("email")
    <p>email error</p>
    @enderror
    
    <input type="text" name="name"><br/>
    @error("name")
    <p>{{$message}}</p>
    @enderror-->
    <input type="submit"> 
    <label for="">THE NUMBER</label>
    <input type="number" name="mc"/>
</form>