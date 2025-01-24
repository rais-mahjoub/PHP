<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");
// var_dump($pdo);

$sql = "SELECT * FROM `etudiants` WHERE `Naissance` BETWEEN '2007-01-25' AND '2025-01-24';";
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
            <th>Sexe</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>";
foreach ($fetch as $array) {
    echo "<tr>
    <td>{$array['Prénom']}</td>
    <td>{$array['Nom']}</td>
    <td>{$array['Naissance']}</td>
    <td>{$array['Sexe']}</td>
    <td>{$array['Email']}</td>
    </tr>";
}
echo "</tbody>
</table>";
