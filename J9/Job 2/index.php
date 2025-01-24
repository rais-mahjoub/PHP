<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");
// var_dump($pdo);

$sql = "SELECT Nom, Capacité FROM salles";
$query = $pdo->prepare($sql);
$query -> execute();

// var_dump($query->fetchAll(PDO::FETCH_ASSOC));
$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($fetch);

echo "<table style=\"width: 30vw; margin: 10vw; border:1px solid black\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Capacité</th>
        </tr>
    </thead>
    <tbody>";
foreach ($fetch as $array) {
    echo "<tr>
    <td>{$array['Nom']}</td>
    <td>{$array['Capacité']}</td>
    </tr>";
}
echo "</tbody>
</table>";
