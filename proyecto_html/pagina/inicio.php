<?php require_once('header.php'); ?>
    <div class="text_center p_30"> <!--Mensaje de bienvenida-->
        <div class="border_top"></div>
        <h1 class="text-roman text-mayus title">Bienvenido</h1>
        <p>es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográficas. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de hojas de Letraset que contenían pasajes de Lorem Ipsum y, más recientemente, con software de autoedición como Aldus </p>
        <button class="p_1020 text-roman text-mayus my_30"><a class="text_white" href="#">Leer más</a></button>
    </div>
    <div class="content"> <!--Contenedor de imagenes-->
        <div class="fila"> <!--primera fila-->
            <div class="columna">
                <div class="filtro"></div>
                <img src="/proyecto/proyecto_html/imagenes/imagen1.jpeg">
                <div class="medio">
                    <div class="border_top"></div>
                    <h1 class="text-roman text-mayus title text_center">Viaja Seguro</h1>
                    <div class="border_top"></div>
                </div>
            </div> <!-- columna 1-->
            <div class="columna">
                <div class="filtro"></div>
                <img src="/proyecto/proyecto_html/imagenes/imagen3.jpeg">
                <div class="medio">
                    <div class="border_top"></div>
                    <h1 class="text-roman text-mayus title text_center">Viaja Seguro</h1>
                    <div class="border_top"></div>
                </div>
            </div> <!-- columna 2-->
        </div>
        <div class="fila"> <!--segunda fila-->
            <div class="columna">
                <div class="filtro"></div>
                <img src="/proyecto/proyecto_html/imagenes/imagen4.jpeg">
                <div class="medio">
                    <div class="border_top"></div>
                    <h1 class="text-roman text-mayus title text_center">Viaja Seguro</h1>
                    <div class="border_top"></div>
                </div>
            </div> <!-- columna 1-->
            <div class="columna">
                <div class="filtro"></div>
                <img src="/proyecto/proyecto_html/imagenes/imagen5.jpeg">
                <div class="medio">
                    <div class="border_top"></div>
                    <h1 class="text-roman text-mayus title text_center">Viaja Seguro</h1>
                    <div class="border_top"></div>
                </div>
            </div> <!-- columna 2-->
        </div>
    </div> <!--cierre de contenedor-->
    <div class="p_30 text_center"> <!--sección de reservación-->
        <div class="border_top"></div>
        <form action="inicio.php">
            <h1 class="text-roman text-mayus title text_center">Reservación</h1>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text"><br><br>

            <label for="fecha">Fecha</label><br>
            <input class="text_white" id="fecha" type="date"><br><br>

            <label for="mensaje">Mensaje</label><br>
            <textarea id="mensaje" cols="100" rows="8"></textarea><br>

            <div class="p_30">
                <button class="text-roman text-mayus p_1020" type="submit">Enviar</button>
                <button class="text-roman text-mayus p_1020" type="reset">Borrar</button>
            </div>

        </form>
    </div>
<?php require_once('footer.php'); ?>