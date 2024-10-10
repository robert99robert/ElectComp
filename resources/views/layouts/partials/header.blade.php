<header>
    
    <!--<nav>
        <ul>
            <li><a href="" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a></li>
            <li><a href="{{route('device.crear')}}" class="{{request()->routeIs('device.crear') ? 'active' : ''}}">Crear aparato</a></li>
            <li><a href="{{route('device.listar')}}" class="{{request()->routeIs('device.listar') ? 'active' : ''}}">Listar aparato</a></li>
            <li>Nosotros</li>
        </ul>
    </nav>-->
    <div style="width: 95%; margin:auto">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light" style="background-color: #3088c6">
            <div class="container-fluid" >
                <a class="navbar-brand" href="#">Energia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
                        </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Aparato
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{route('device.crear')}}">Agregar</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('device.listar')}}">Ver lista</a>
                                </li>
                                <!--<li><hr class="dropdown-divider"></li>-->
                                <li>
                                    <a class="dropdown-item" href="#"></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Comparar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('user.crear')}}">Crear usuario</a>
                        </li>
                    </ul>
                    <!--<form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                </div>
            </div>
        </nav>
    </div>
</header>