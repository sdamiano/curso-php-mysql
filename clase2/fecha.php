<?php
include '../layouts/header.php';
date_default_timezone_set('America/Argentina/Buenos_aires');

$fecha = date('d-m-Y H:i:s');
$diaSemana = date('w');
$numDiaSemana = date('w');

if ( $numDiaSemana == 0) {
    $diaSemana = 'Domingo';
}
else if ( $numDiaSemana == 1) {
    $diaSemana = 'Lunes';
}
else if ( $numDiaSemana == 2) {
    $diaSemana = 'Martes';
}
else if ( $numDiaSemana == 3) {
    $diaSemana = 'Domingo';
}
else if ( $numDiaSemana == 4) {
    $diaSemana = 'Domingo';
}
else if ( $numDiaSemana == 5) {
    $diaSemana = 'Domingo';
}
else {
    $diaSemana = 'Sábado';
}

?>
    <main class="container py-3"></main>
    <h1>Fechas</h1>



    <section class="shadow alert my-3">
        La fecha actual es: <?= $fecha?>
    </section>

    <section class="shadow alert my-3">
        Hoy es: <?= $diaSemana?>
    </section>

    </main>
<?php
include '../layouts/footer.php';