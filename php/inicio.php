<main>
    <?php
    //controlo si tiene una sesión iniciada
    if(empty($_SESSION['id_usuario']))
        //cargo el login
        include('inicio_sesion.php');
    else
        //muestro las opciones
        include('opciones.php');
    ?>
</main>