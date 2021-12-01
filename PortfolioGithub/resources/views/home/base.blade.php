<!DOCTYPE html>

    <head>
        <link rel="stylesheet" href="{{ asset('/css/customBase.css') }}" type="text/css"> 
        <title>Portfolio</title>
    </head>
    <body>
        <div class="parallax">
            <img class="picture-parallax" src="/images/fondo2.jpg">
        </div>
        <!--- header  start
             --------------------------- -->
        <header class="header-s">
            <nav class="nav-header">
                <ul>
                    <li class="menu">Menu
                        <ul class="nav-list">
                            <li><a href="/proyectos">Proyectos</a></li>
                            <li><a href="/conocimientos">Conocimientos</a></li>
                            <li><a href="/contacto">Contacto</a></li>
                        </ul>
                    </li>
                </ul>    
            </nav>
        </header>
        <!--- header  end
             --------------------------- -->
             
        <!--- section home start
             --------------------------- -->
        <section id="home">
            <div class="container">
                <div id="ball"></div>
                @yield("contenido")
            </div>
        </section>
         <!--- section home end
             --------------------------- -->
         <!--- section proyectos start
             --------------------------- -->
        <section id="proyectos">
            <div class="container">

            </div>
        </section>
         <!--- section proyectos end
             --------------------------- -->
         <!--- section conocimientos start
             --------------------------- -->
        <section id="conocimientos">
            <div class="container">

            </div>
        </section>
         <!--- section conocimientos end
             --------------------------- -->
        <!--- section contacto start
             --------------------------- -->
        <section id="contacto">
            <div class="container">

            </div>
        </section>
        <!--- section contacto end
             --------------------------- -->
    </body>
</html>
