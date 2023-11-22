@auth
{{auth()->user()->nom}}
<form action="{{ route('logout') }}" method="post">
@csrf

<button type="submit">Se déconnecter</button>
</form>
@endauth
@guest
<a href="{{ route('login') }}" >Se connecter</a>
<a href="{{ route('register') }}"> S’inscrire</a>
@endguest