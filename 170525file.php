<?php
    $file = file("iii.txt");
    foreach ($file as $line){
        echo "==> $line <br>";
    }

    $file2 = file_get_contents("iii.txt");

    echo $file2;

    echo '<hr>';

    ?>

<table border="1">
    <tr>
        <th>name</th>
        <th>phone</th>
        <th>gender</th>
        <th>city</th>
    </tr>

    <?php
        $files = file("Book1.csv");
        foreach ($files as $line){
            $field = explode(',',$line);
            echo "<tr>";
            foreach ($field as $fields){
                  echo "<td>{$fields}</td>";

            }
            echo "</tr>";

        }


    ?>
</table>

<?php
    $fish = array_map('str_getcsv',file('039.csv'));
    foreach ($fish as $ffish){
        echo $ffish;
    }





?>




<!--<table border="1">-->
<!---->
<!--        --><?php
//
//        $fish = file("039.csv");
//
//        foreach ($fish as $fishs){
//            echo "<tr>";
//            $ffish = explode(',',$fishs);
//            foreach ($ffish as $ffishs){
//                echo "<td>$ffishs</td>";
//            }
//
//            echo '</tr>';
//        }
//        ?>
<!---->
<!--</table>-->

