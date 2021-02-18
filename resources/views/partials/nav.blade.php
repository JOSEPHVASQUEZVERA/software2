


<nav class="navbar navbar-light bg-dark justify-content-between"style>
<a class="navbar-brand text-light" style="letter-spacing: 1.5px" href="#">Sistema de Matricula UNS</a>
@guest
<a class="navbar-brand text-light" href="/login">Login</a>
@else

<form action="/login" method="POST">
    @method('put')
    
    <button class="btn btn-outline-success my-2 my-sm-0">Logout
    <i class="fas fa-sign-out-alt"></i>
    </button>
</form>
@endguest
</nav>
