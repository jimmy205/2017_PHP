<?php
$upload=$_FILES['upload'];
   // echo $upload;
if($upload['error']==0){
    // echo $upload;
    if(copy($upload['tmp_name'],"./upload/{$upload['name']}")){
        echo "ok";
    }else{
        echo "copy fail";
    }

}else{
    echo "upload fail";
}