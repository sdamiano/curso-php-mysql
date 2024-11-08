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
        <h1>División de dos números mediante INPUTS</h1>

        <form method="post" action="">
            <label for="dividendo">Dividendo:</label>
            <input type="number" step="any" name="dividendo" id="dividendo" required><br><br>

            <label for="divisor">Divisor:</label>
            <input type="number" step="any" name="divisor" id="divisor" required><br><br>

            <input type="submit" value="Dividir">
        </form>

        <section class="shadow alert my-3">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dividendo = $_POST['dividendo'];
    $divisor = $_POST['divisor'];
    $resultado = dividir($dividendo, $divisor);

    if ($resultado !== null) {
        echo "<p>El resultado de la división es: $resultado</p>";
    }
}
?>
        </section>

    </main>
<?php
include '../layouts/footer.php';