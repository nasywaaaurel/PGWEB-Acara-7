<!DOCTYPE html>
<html>
<body>

<?php
$makanan = array("Donat", "Martabak", "Ice cream", "Es teh", "Nugget");
$rasa = array("Coklat", "Keju", "Matcha", "Es teh tarik", "Daging");
$tempat = array("Cafe", "Pinggir jalan", "Tempo Gelato", "Teh Desa", "Superindo");


echo "<table border='1'>";
for($i=0; $i < count($makanan); $i++) {
    echo "<tr><td> $makanan[$i] </td><td> $rasa[$i] </td><td> $tempat[$i] </td></tr>";
}
echo "</table>";
?>

</body>
</html>