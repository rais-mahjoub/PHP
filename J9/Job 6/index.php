<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");
// var_dump($pdo);

$sql = "SELECT COUNT(*) AS nb_etudiants FROM `etudiants`";
$query = $pdo->prepare($sql);
$query -> execute();

// var_dump($query->fetchAll(PDO::FETCH_ASSOC));
$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($fetch);

echo "<table style=\"margin: 10vw; border:1px solid black\">
    <thead>
        <tr>
            <th>Nombre d'étudiants</th>
        </tr>
    </thead>
    <tbody>";
foreach ($fetch as $array) {
    echo "<tr>
    <td>{$array['nb_etudiants']}</td>
    </tr>";
}
echo "</tbody>
</table>";
