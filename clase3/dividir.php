<?php
include '../layouts/header.php';

// declaración
function dividir( int|float $dividendo, int|float $divisor ) : int|float|null
{
    if ($divisor != 0) {
        return $dividendo / $divisor;

    } else {
        echo "¡No se puede dividir por cero! Ingrese un número distinto de cero";
        return null;
    }

}
?>
    <main class="container py-3">
        <h1>División de dos números con restricción de divisor cero</h1>

        <section class="shadow alert my-3">

<?php
        //Resultado de la división
        echo "El resultado de la división es: " . dividir(10, 5);
?>
        </section>

    </main>
<?php
include '../layouts/footer.php';