<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");
// var_dump($pdo);

$sql = "SELECT * FROM etudiants WHERE Sexe = 'Femme'";
$query = $pdo->prepare($sql);
$query -> execute();

// var_dump($query->fetchAll(PDO::FETCH_ASSOC));
$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($fetch);

echo "<table style=\"width: 80vw; margin: 10vw; border:1px solid black\">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
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
