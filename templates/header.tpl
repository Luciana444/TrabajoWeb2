<head>
    <base href="{BASE_URL}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/web2/index">Generos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/web2/videojuego">videojuegos</a>
                    </li>
                    {if !isset($smarty.session.USER_ID)}
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/web2/ingresar">ingresar</a>
                        </li>
                    {else}
                        <li class="nav-item ml-auto">
                            <a class="nav-link" aria-current="page" href="cerrarsesion">Cerrar Sesion
                                ({$smarty.session.USER_EMAIL})</a>
                        </li>
                    {/if}
                </ul>
            </div>
        </div>
    </nav>
</body>