<?php
if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $Operator = $_GET['selected'];
    //$r = $x + $y;
    // echo $x + $y= $r;
    //$sel="name:selected";


    if ($Operator == "plus") {
        $r = $x + $y;
    } else if ($Operator == 'minus') {
        $r = $x - $y;
    } else if ($Operator == 'times') {
        $r = $x * $y;
    } else if ($Operator == 'divided' && $x % $y != 0) {
        $r = $x / $y ;
        $re = $x % $y ;

        $r = floor($r) . "... ..." . $re;
    } else {
        $r = $x / $y ;
    }
}


?>


<form>

    <input type="text" name="x" id="x" value="<?php echo $x ?>"></input>
    <select name="selected" >
        <option value="plus" <?php if ($Operator=="plus"){echo "selected";}?>>+</option>
        <option value="minus" <?php if ($Operator=="minus"){echo "selected";}?>>-</option>
        <option value="times" <?php if ($Operator=="times"){echo "selected";}?>>x</option>
        <option value="divided" <?php if ($Operator=="divided"){echo "selected";}?>>/</option>
    </select>
    <input type="text" name="y" id="y" value="<?php echo $y ?>"></<input>
<input type="submit" id="btn" value="=" </input>
<?php echo $r; ?>

</form>

<!--<input type="button" value="script" onclick="cal()"/>-->
<!---->
<!--<input type="text" name="x" id="xx"></input>-->
<!---->
<!--<script>-->
<!---->
<!--        function cal() {-->
<!--             var x=document.getElementById("x").value;-->
<!--            alert(x);-->
<!--        }-->
<!---->
<!---->
<!--</script>-->