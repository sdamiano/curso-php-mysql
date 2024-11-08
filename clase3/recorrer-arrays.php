<?php
    include '../layouts/header.php';
    $marcas = [
            'Hermes', 'Zara', 'Boss', 'Aeropostale',
        'Tommy', 'Gola', ' Hollister','Abercrombie', 'Jcrew',
        'London Heckett', 'Uniqlo'
    ];
    $cantidad = count( $marcas );
?>
    <main class="container py-3">
        <h1>Recorrer un array utiilzando un bucle</h1>

        <section class="shadow alert my-3">
            <ul class="list-group col-6 mx-auto">
<?php
        for( $n = 0; $n < $cantidad; $n++ ){
?>
                <li class="list-group-item list-group-item-action">
                <?= $marcas[$n] ?>
                </li>

<?php
      }
?>
            </ul>
        </section>

    </main>
<?php
    include '../layouts/footer.php';