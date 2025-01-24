<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");
// var_dump($pdo);

$sql = "SELECT salles.Nom AS Salle, etage.Nom AS Etage FROM salles JOIN etage ON salles.id_etage = etage.ID";
$query = $pdo->prepare($sql);
$query -> execute();

// var_dump($query->fetchAll(PDO::FETCH_ASSOC));
$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($fetch);

echo "<table style=\"margin: 10vw; border:1px solid black\">
    <thead>
        <tr>
            <th>Nom de la salle</th>
            <th>Nom de l'étage</th>
        </tr>
    </thead>
    <tbody>";
foreach ($fetch as $array) {
    echo "<tr>
    <td>{$array['Salle']}</td>
    <td>{$array['Etage']}</td>
    </tr>";
}
echo "</tbody>
</table>";