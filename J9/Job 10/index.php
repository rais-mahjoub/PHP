<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");
// var_dump($pdo);

$sql = "SELECT * FROM salles ORDER BY `Capacité`";
$query = $pdo->prepare($sql);
$query -> execute();

// var_dump($query->fetchAll(PDO::FETCH_ASSOC));
$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($fetch);

echo "<table style=\"margin: 10vw; border:1px solid black\">
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