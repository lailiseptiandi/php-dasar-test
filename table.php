<?php

function polaTable($input)
{
    $data['hitam'] = [1,2,5,7,10,11];
    $data['putih'] = [3,4,6,8,9,12];

    // var_dump($data['hitam']);
    // die();
    if (in_array($input, $data['hitam'])) {
        return 'style="background-color: black; color:white;"';
    } else {
        return 'style="background-color: white;"';
    }
}

echo "<table>";
    $no=1;
    $k=1;
    for ($i=0; $i <8 ; $i++) { 
       echo "<tr>";
        for ($j=0; $j<8; $j++) {
            echo "<td " . polaTable($k) . ">";
                echo $no++;
            echo "</td>";
            if ($k==12) {
                $k=1;
            }else{
                $k++;
            }
        }
       echo "</tr>";
    }
echo "</table>";

?>
