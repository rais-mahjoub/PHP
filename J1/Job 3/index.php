<?php
$v1 = "mot";
$v2 = 4;
$v3 = 5.9;
$v4 = true;
?>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?=gettype($v1)?></th>
            <td>$v1</td>
            <td><?php echo $v1?></td>

        </tr>
        <tr>
            <th><?=gettype($v2)?></th>
            <td>$v2</td>
            <td><?php echo $v2?></td>

        </tr>
        <tr>
            <th><?=gettype($v3)?></th>
            <td>$v3</td>
            <td><?php echo $v3?></td>

        </tr>
        <tr>
            <th><?=gettype($v4)?></th>
            <td>$v4</td>
            <td><?php echo $v4?></td>

        </tr>
        
    </tbody>
</table>