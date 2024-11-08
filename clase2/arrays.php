<?php
include '../layouts/header.php';

?>
    <main class="container py-3"></main>
    <h1>Arrays en php</h1>

    <section class="shadow alert my-3">
        <?php
        $marcas =['Hermès', 'Zara', 'Boss', 'Aeropostale', 'Tommy', 'Gola', 'Hollister', 'Abercrombie', 'JCrew', 'London Heckett',
                'Uniqlo'];
        $pilotos = [
            1 => 'Max Verstappen',
            11 => 'Segio Pérez',
            4 => 'Lando Norris',
            81 => 'Oscar Piastri',
                63 => 'George Russell',
                44 => 'Lewis Hammilton',
                16 => 'Charles Leclerc',
                55 => 'Carlos Sainz',
                43 => 'Franco Colapinto'
               ];
        $capitales = [
            'Argentina'=>'Buenos Aires',
            'Brasil'=>'Brasilia',
            'Chile'=>'Santiago',
            'Venezuela'=>'Caracas',
            'Uruguay'=>'Montevideo',
            'Paraguay'=>'Asunción'
        ];

        ?>
    </section>
    <pre class="alert alert-dark">
        <?php
            print_r($marcas);
            ?>
        </pre>
        <?= $marcas[2] ?>

    <pre class="alert alert-dark">
        <?php
        print_r($pilotos);
        ?>
        </pre>
<?= $pilotos[43] ?>

    <pre class="alert alert-dark">
        <?php
        print_r($capitales);
        ?>
        </pre>
<?= $capitales['Paraguay'] ?>

    </main>
<?php
$semana = ['Domingo', 'Lunes', 'Martes',
    'Miércoles', 'Jueves', 'Viernes',
    'Sábado'];
$n = date('w');
echo $semana[$n];
?>
<?php
$diaSemana = match( $numDiaSemana ){
'0' => 'Domingo',
'1' => 'Lunes',
'2' => 'Martes',
'3' => 'Miércoles',
'4' => 'Jueves',
'5' => 'Viernes',
default => 'Sábado'
    ?>
};

include '../layouts/footer.php';