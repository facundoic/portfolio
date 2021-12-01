<!DOCTYPE html>

    <head>
        <link rel="stylesheet" href="{{ asset('/css/customBase.css') }}" type="text/css"> 
        <title>Portfolio</title>
    </head>
    <body>
        <div class="parallax-mirror">
            <header class="header">
                <nav class="header-nav">
                    <h3 class="activate-nav-list">Menu</h3>
                    <ul class="nav-list">
                        <li><a href="/proyectos">Proyectos</a></li>
                        <li><a href="/conocimientos">Conocimientos</a></li>
                        <li><a href="/contacto">Contacto</a></li>
                    </ul>
                </nav>
            </header>

        <div class="container">
            @yield("contenido")
        </div>
        </div>
    </body>
</html>
