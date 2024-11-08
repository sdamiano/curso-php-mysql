<?php
    include '../layouts/header.php';

?>
<main class="container py-3"></main>
<h1>Datos enviados por el formulario</h1>

<section class="shadow alert my-3">
<?php
    //capturamos datos enviados por el formulario
    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    echo 'Tu nombre es: ', $nombre;
    echo '<br>';
    echo 'Tu mail es: ', $email;
?>
</section>

</main>
<?php
    include '../layouts/footer.php';