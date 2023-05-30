<nav class="navbar navbar-expand-md navbar-dark mx-0 bg-dark p-3">
    <div class="container-fluid justify-content-around">
        <div>
            <a :href="urlAF" class="navbar-brand">
                <a href="{{ env('APP_URL', '#') }}">
                    <img src="../../../public/images/logo-opal.svg" alt="Logo Opal" style="height: 75px">
                </a>
            </a>
        </div>
        <div>
            <ul class="text-light list-group list-group-horizontal" style="">
                <li class="list-group mx-3">Accueil</li>
                <li class="list-group mx-3">Évenement</li>
                <li class="list-group mx-3">Blog</li>
                <li class="list-group mx-3">Contact</li>
            </ul>
        </div>
        <div>
            {{-- <a href="" class="mx-2">
                Connexion
            </a>
            <a href="">
                Inscription
            </a>
             --}}
             <a href="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            @if(isset($_SESSION['logged'])) {
                <a href="compte" class="mx-2">
                    <i class="fa-regular fa-user"></i>
                </a>
                <a href="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
            } @else {
                {{-- Login Button --}}
                <a href="login"><button type="button" class="btn btn-primary">Login</button></a>
                {{-- Sign In Button --}}
                <a href="signIn"><button type="button" class="btn btn-primary">Sign In</button></a>
            } @endif
        </div>
    </div>
</nav>