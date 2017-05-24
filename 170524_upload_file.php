<form>
    <input type="text" name="dirname">
    <input type="submit" name="chgdir" value="send">
</form>

<table border="1" width="50%">
    <tr>
        <td>filename</td>
        <td>Type</td>
        <td>Size</td>
        <td>mTime</td>
        <td>Delete</td>
    </tr>

<?php
date_default_timezone_set ( "Asia/Taipei");
$dirname=".";
if(isset($_REQUEST['dirname'])){
    $dirname = $_REQUEST['dirname'];
    if(isset($_REQUEST['filename'])){
        $delfile = $_REQUEST['filename'];
        unlink("{$dirname}/{$delfile}}");
    }
}
$fp = @opendir($dirname) or die('Server Down');

while($file = readdir($fp)){
    echo '<tr>';
    echo "<td>{$file}</td>";

    if(is_dir("{$dirname}/{$file}"))
        {echo "<td>dir</td>";} else if
            (is_file("{$dirname}/{$file}"))
                        {echo "<td>file</td>";}

    echo "<td>" . filesize("{$dirname}/{$file}") . "</td>";
    echo "<td>" . date('Y-m-D H:i:s',filemtime("{$dirname}/{$file}")) .  "</td>";
    echo "<td> <a href='?dirname={$dirname}&filename={$file}'>delete</a> </td>";
    echo '</tr>';

}
?>
</table>




