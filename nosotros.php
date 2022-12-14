<?php include 'includes/templates/header.php' ?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

    <div class="seccion-nosotros contenedor seccion">

        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="build/img/nosotros.jpg" alt="imagen nosotros" loading="lazy">
            </picture>
        </div>

        <div class="texto-nosotros">
            <p class="titulo-nosotros">25 Años de Experiencia<p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, vitae! Amet soluta necessitatibus excepturi, veritatis vero quibusdam libero porro non ipsam quos ullam in magni, fugit beatae tenetur minus ipsum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, optio nihil. Dolorem quas dolores quisquam saepe mollitia iste iusto tempora provident quo vitae ut nesciunt debitis officiis dicta, qui laboriosam!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus deserunt aut tempora ratione laudantium nemo quaerat commodi placeat dolores, consequuntur unde ea illo? Fugit dolorem voluptatem iste nulla, nobis rem!ipsum?Lorem</p>
        </div>
    </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="ícono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis atque assumenda odio consequuntur ad? Quas in consectetur veritatis at nemo ipsam et iste odit, nobis voluptatem quae assumenda aliquam quia?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="ícono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis atque assumenda odio consequuntur ad? Quas in consectetur veritatis at nemo ipsam et iste odit, nobis voluptatem quae assumenda aliquam quia?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="ícono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis atque assumenda odio consequuntur ad? Quas in consectetur veritatis at nemo ipsam et iste odit, nobis voluptatem quae assumenda aliquam quia?</p>
            </div>
        </div>
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados 2022 &copy;</p>
    </footer>

    <script src="src/js/app.js"></script>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>