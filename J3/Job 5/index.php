<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$cons = ["z","r","t","p","q","s","d","f","g","h","j","k","l","m","w","x","c","v","b","n"];
$voy = ["a","e","i","o","u","y","A","E","I","O","U","Y"];
$dic = ["Consonnes" => 0,"Voyelles" => 0];
for ($i = 0; isset($str[$i]); $i++) {
    if (in_array($str[ $i], $cons)) {
        $dic['Consonnes'] ++;
    } elseif (in_array($str[ $i], $voy)) {
        $dic['Voyelles'] ++;
    }
}
?>
<table style="text-align: center;"><thead><tr>
    <th>Consonnes</th>
    <th>Voyelles</th>
</tr></thead><tbody>
    <tr>
        <td><?=$dic['Consonnes']?></td>
        <td><?=$dic['Voyelles']?></td>
    </tr>
</tbody></table>