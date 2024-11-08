<?php
    include '../layouts/header.php';
    //Este es un comentario en una sola línea
    #este es otra forma de comentario de una sola linea
    /*este es un comentario de varias lineas
    1
    2
    3
    4
    para declarar una variables utilizamos el simbolo de dolar, seguido de una palara o una letra, no debe comenzar con un número
    */
$curso = 'Desarollo web con PHP y MySQL';
$numero = 35;
const NOMBRE= 'Sebastian';
const APELLIDO= 'Damiano';
?>


<main class="container py-3"></main>
<h1>Variables y constantes</h1>

<section class="shadow alert my-3">
<?php
    $numero = 70;
    echo 'El nombre completo es: ', NOMBRE,' ', APELLIDO;

    ?>
</section>

</main>
<?php
    include '../layouts/footer.php';