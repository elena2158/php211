<?php
$i = 0;
$num = 1;
while ($i < 10) {
    if ($num % 2 == 0){
        $i += 1;
        echo '<span style="color:green; font-size:' . $i * 5 . ' ">' .  $num . ' </span> ';
    }
    $num += 1;
}
?>

<style>
    tr, td {
        border: 3px double black;
    }
</style>

<?php 
$years = [];
$current = 0;

while($current < 2022) {
    if(
        ($current % 4 === 0 
        && $current % 100 !== 0 )
        || ($current % 400 === 0)
    ) {
        $years[] = $current;
    }
    $current++;
}
?>

<table>
    <tr>
    <?php
        foreach($years as $index => $year) {
            echo "<td>$year</td>";

            if($index>0 && ($index+1) % 20 === 0) {
                echo "</tr><tr>";
            }            
        }

    ?>
    </tr>
</table>