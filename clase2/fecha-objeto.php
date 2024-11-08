<?php
include '../layouts/header.php';

?>
    <main class="container py-3"></main>
    <h1>Tema de la página</h1>

    <section class="shadow alert my-3">
        contenido de la página
    </section>
<?php
// Usando DateTime
$fecha = new DateTime();
$timeZone = new DateTimeZone("America/Argentina/Buenos_Aires");
$fecha->setTimezone($timeZone);
echo "La fecha y hora actual es: " . $fecha->format('d/m/Y H:i:s');
?>

    </main>
<?php
include '../layouts/footer.php';