<?php
include '0523api.php';

if(isset($_GET['twid'])){
   // $twid=$_GET['twid'];

}



checkId($_GET["twid"]);

?>

<form>
    <input type="text" name="twid"/>
    <input type="submit" value="check" />
</form>


<?php
//   echo $n12;
//        $check=substr($twid,0,1);
//        $A_Z  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
//        $check1 = strstr($A_Z, $check);
//        //echo $check1;
//
//        $pn='0912-345678';
//        $reg='/^09[0-9][0-9][-][0-9]{6}$/';
//        $r=preg_match($reg,$pn);
//        echo $r;


//        if(strlen($check1)>0){
//            echo "ok";
//        }else{
//            echo "XX";
//        }
//
