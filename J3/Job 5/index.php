<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$cons = ["z","r","t","p","q","s","d","f","g","h","j","k","l","m","w","x","c","v","b","n"];
$voy = ["a","e","i","o","u","y","A","E","I","O","U","Y"];
$dic = ["Consonnes" => 0,"Voyelles" => 0];
for ($i = 0; isset($str[$i]); $i++) {
    for ($j = 0; isset($cons[$j]); $j++) {
        if ($str[ $i] == $cons[$j]) {
            $dic['Consonnes'] ++;
        }
    }
    for ($j = 0; isset($voy[$j]); $j++) {
        if ($str[ $i] == $voy[$j]) {
            $dic['Voyelles'] ++;
        }
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