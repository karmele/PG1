include "vistas/cabecera.php";
echo "<h4>Lista de viñetas con for</h4>";
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {

    echo "<li>Iteración " . $i . " </li>";
}
echo "</ul>";
$z = 1;

echo "<h4>Lista de viñetas con While</h4>";
echo "<ol>";
while ($z <= 10) {

    echo "<li>Iteración " . $z . " </li>";

    $z++;
}
echo "<ol>";
include "vistas/pie.php";
