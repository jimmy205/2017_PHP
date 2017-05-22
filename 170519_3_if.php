<form>
    <input type="text" id="year" name="year"/>
    <input type="submit" value="count" />
</form>

<?php
$sc = $_GET['year'];
echo "Your Year = {$sc} <br>" ;

if($sc != "") {
    if (($sc % 400 == 0) || $sc % 4 == 0 && $sc % 100 != 0) {
        echo "Leap Year";
    } else {
        echo "Not Leap Year";
    }
}else{
    echo '<script> alert("Enter a Year") </script>' ;
}
?>




