<?php
    include '../layouts/header.php';

    $personas = [
    [
        'id' => 1,
        'nombre' => "Juan",
        'avatar' => "juan.png",
        'ciudad' => "Madrid",
        'profesion' => "programador"
    ],
    [
        'id' => 2,
        'nombre' => "María",
        'avatar' => "maria.png",
        'ciudad' => "Barcelona",
        'profesion' => "diseñadora"
    ],
    [
        'id' => 3,
        'nombre' => "Carlos",
        'avatar' => "carlos.png",
        'ciudad' => "Valencia",
        'profesion' => "analista"
    ],
    [
        'id' => 4,
        'nombre' => "Ana",
        'avatar' => "ana.png",
        'ciudad' => "Sevilla",
        'profesion' => "arquitecta"
    ],
    [
        'id' => 5,
        'nombre' => "Luis",
        'avatar' => "luis.png",
        'ciudad' => "Bilbao",
        'profesion' => "desarrollador"
    ],
    [
        'id' => 6,
        'nombre' => "Elena",
        'avatar' => "elena.png",
        'ciudad' => "Zaragoza",
        'profesion' => "ingeniera"
    ]
];
    $cantidad = count( $personas );
?>
    <main class="container py-3">
        <h1>Personas - Resuelto</h1>

        <section class="shadow alert my-3">
            <ul class="list-group col-6 mx-auto">
<?php
        for( $n = 0; $n < $cantidad; $n++ ){
?>
                <li class="list-group-item list-group-item-action">
                <?= $personas[$n]["id"]."<br>" ?>
                <?= $personas[$n]["nombre"]."<br>" ?>
                <img src="avatar/<?= $personas[$n]["avatar"] ?>" alt="Avatar de <?= $personas[$n]["nombre"] ?>" style="width:50px;height:50px;"><br>
                <?= $personas[$n]["ciudad"]."<br>" ?>
                <?= $personas[$n]["profesion"]."<br>" ?>
                </li>

<?php
      }
?>
            </ul>
        </section>

    </main>
<?php
    include '../layouts/footer.php';