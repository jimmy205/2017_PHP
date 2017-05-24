<table width="50%" border="1">

            <?
            $start =2; $line =5;$col=3;
            for($row=0 ;$row<$line;$row++){
                echo '<tr>';
                for($j=$start;$j<$start+$col;$j++){
                    $newj = $j + $row * $col;

                    echo $newj;

                    echo "<td bgcolor='" .
                                ((($j+$row)%2==0)?'yellow':'orange') . "'>";
                    for ($i=1;$i<10;$i++) {
                        $r = $newj*$i;
                        echo "{$newj}x{$i}=$r <br>";
                    }
                    echo " </td> ";

                }
                echo ' </tr>';
            }
                ?>
</table>