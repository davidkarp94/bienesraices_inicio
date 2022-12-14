<?php include 'includes/templates/header.php' ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio-a">$2.999.999</p>
        </div>

        <ul class="iconos-anuncio">
            <li>
                <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>

            <li>
                <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                <p>3</p>
            </li>

            <li>
                <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                <p>4</p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis illo voluptatum pariatur aliquid vero ducimus libero eaque placeat nostrum tenetur nesciunt beatae quisquam cupiditate repudiandae error, molestiae doloremque culpa? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque laborum voluptates dicta voluptatem aut magnam non commodi nostrum dolore rerum corrupti, sed earum suscipit voluptatibus dolorem inventore architecto repellat esse!
        </p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos natus consequatur nisi accusantium sed quod cum fuga laboriosam voluptatum laudantium ea quas facere, sunt pariatur ducimus expedita qui esse facilis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis ea unde eum fuga veritatis adipisci amet, quam esse? Excepturi optio consectetur cum explicabo pariatur vero ipsam doloremque alias quos sit.</p>
    </main>

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