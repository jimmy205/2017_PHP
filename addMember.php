<script>
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function precheck(){
        var account = document.getElementById('checkacc').value;
       // alert(account);
        xmlhttp.onreadystatechange=checkacc;
        xmlhttp.open("GET", "jimmy52.php?a="+account, true);
        xmlhttp.send();
    }
    function checkacc() {
        if (this.readyState == 4 && this.status == 200) {
            var result =  this.responseText;

            if(result!='OK'){
                document.getElementById('aaa').innerHTML='exist';
                document.getElementById('aaa').onfocus;
            }else{
                document.getElementById('aaa').innerHTML='OK';
            }
        }
    }

</script>

<form action="addAccount.php" method="get">
  Account :  <input name="account" onblur="precheck()" id="checkacc">
            <span id="aaa"></span><br>
  Password:  <input type="password" name="password"><br>
  RealName:  <input name="realname"><br>
    <input type="submit" value="add"><br>
</form>