<?php
    include '../layouts/header.php';

$paises = [
        "Argentina", "Brasil", "Chile",
        "Perú", "Colombia", "México",
        "Ecuador", "Uruguay"
            ];

$capitales = [
            "Buenos Aires", "Brasilia", "Santiago",
            "Lima", "Bogotá", "Ciudad de México",
            "Quito", "Montevideo"
            ];

$banderas = [
            'ar','br','cl',
            'pe','co','mx',
            'ec','uy',
            ];

$count = count($paises);

?>
    <main class="container py-3"></main>
        <h1>Listado de paises y sus capitales</h1>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">

            <?php
            //Inicio de bucle
            for( $n = 0; $n < $count; $n++ ){
                ?>
                <div class="col">
                    <div class="card h-100 text-center">
                        <img src="flags/<?= $banderas[$n] ?>.webp" class="card-img-top" alt="Bandera de Argentina">
                        <div class="card-body">
                            <h5 class="card-title"><?= $paises[$n] ?></h5>
                            <p class="card-text">Capital: <?= $capitales[$n] ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            // Fin de bucle
            ?>

        </div>
    </div>


    </main>

<?php
    include '../layouts/footer.php';