<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");
// var_dump($pdo);

$sql = "SELECT `Prénom`, `Nom`, `Naissance` FROM `etudiants` WHERE YEAR(`Naissance`) BETWEEN '1998' AND '2018'";
$query = $pdo->prepare($sql);
$query -> execute();

// var_dump($query->fetchAll(PDO::FETCH_ASSOC));
$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($fetch);

echo "<table style=\"margin: 10vw; border:1px solid black\">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
        </tr>
    </thead>
    <tbody>";
foreach ($fetch as $array) {
    echo "<tr>
    <td>{$array['Prénom']}</td>
    <td>{$array['Nom']}</td>
    <td>{$array['Naissance']}</td>
    </tr>";
}
echo "</tbody>
</table>";