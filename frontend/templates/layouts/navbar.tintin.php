<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="z-index: 10000">
    <div class="container">
        <a class="navbar-brand" href="/">E-Commerce APP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item {{ $active == 'product' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Produits</a>
                </li>
                <li class="nav-item {{ $active == 'cart' ? 'active' : '' }}">
                    <a class="nav-link" href="/cart">Chariot</a>
                </li>
                <li class="nav-item {{ $active == 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-{{ count_stack() > 0 ? 'success' : 'default' }} btn-sm ml-3" href="/cart">
                    <i class="fa fa-shopping-cart"></i> Chariot
                    <span class="badge badge-light">{{ count_stack() }}</span>
                </a>
            </form>
            <ul class="navbar-nav m-auto">
                <li class="nav-item {{ $active == 'login' ? 'active' : '' }}">
                    <a class="nav-link" href="/login">Connexion</a>
                </li>
                <li class="nav-item {{ $active == 'register' ? 'active' : '' }}">
                    <a class="nav-link" href="/register">Inscription</a>
                </li>
            </ul>
        </div>
    </div>
</nav>