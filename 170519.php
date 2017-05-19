<?php
if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $r = $x + $y;
    // echo $x + $y= $r;
}


?>


<form>

    <input type="text" name="x" id="x" value="<?php echo $x ?>"></input>
    <select>
        <option>+</option>
        <option>-</option>
        <option>x</option>
        <option>/</option>
    </select>
    <input type="text" name="y" id="y" value="<?php echo $y ?>"></<input>
<input type="submit" id="btn" value="=" </input>
<?php echo $r; ?>

</form>

<input type="button" value="script" onclick="cal()"/>

<input type="text" name="x" id="xx"></input>

<script>

        function cal() {
             var x=document.getElementById("x").value;
            alert(x);
        }
</script>