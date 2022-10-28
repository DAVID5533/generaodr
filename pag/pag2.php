<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>pag1</title>
</head>
<body>
    <header>
        <nav>
            <label for="check"><i class="fa-brands fa-skyatlas"></i></label>
            <input class="chul" type="checkbox" id="check">
            <span class="logo">
                <?php 

                    $titulo = $_POST["titulo"];
                    print '<span class="logo">' . $titulo . ' </span>';
                ?>
            </span>
            <ul>
                <li><a href="" class="activo a">Inicio</a></li>
                <li><a href="" class="a">Mas vehiculos</a></li>
                <li><a href="" class="a">Informacion</a></li>
                <li><a href="" class="a">servicio</a></li>
                <li><a href="" class="a">contacto</a></li>
            </ul>
        </nav>
    </header>

    

    <div class="slider">
        <ul>
            <li><img src="img/psp.jpg" alt=""></li>
            <li><img src="img/vacunacovid.jpg" alt=""></li>
            <li><img src="img/psp.jpg" alt=""></li>
            <li><img src="img/vacunacovid.jpg" alt=""></li>
        </ul>
    </div>


<br>
<br>

    <div class="entrada">
        <?php 
            $titulop = $_POST["titulop"];
            print '<h2>' . $titulop . '</h2> ';
        ?>
    </div>


    <div class="contenedorc">
        <div class="card">
            <div class="card-img car-1"></div>

                <?php 
                    $titulocard = $_POST["titulocard"];
                    print '<h2> ' . $titulocard . ' </h2>';

                    $parrafocard = $_POST["parrafocard"];
                    print '<P> ' . $parrafocard . ' </P>';

                    print '<a href="#">Comprar...</a>';
                ?>
            
        </div>
    </div>

    <div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15653.6247444573!2d-74.2042796!3d11.2315012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1263ceff599d37a7!2sFeria%20Car!5e0!3m2!1ses!2sco!4v1656995812502!5m2!1ses!2sco" width="98%" height="500" style="border:0; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="footer">
        <footer>
            <a href="">El País S.A. © 2022 | Cra. 2 No. 24-46 | Tel. (572) 8987000 | Santa Marta - Colombia</a> <br>
            <a href="">Condiciones y Políticas de Publicación</a> <br>
            <a href="">Política y Tratamiento de datos</a> <br>
            <a href="">Condiciones y restricciones para la realización y publicación de Tour Virtual</a> <br>
            <a href="">Política de Cookies</a> <br>
            <a href="">Preguntas frecuentes - Pagos electrónicos</a> <br>
            <a href="">Superintendencia de Industria y Comercio de Colombia</a> <br>
        </footer>
    </div>

</body>
</html>
 


