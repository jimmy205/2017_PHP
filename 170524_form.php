
<form action="170524_1.php" method="get">
   name    : <input type="text" name="account" /> <br>
    password: <input type="password" name="passwd" /> <br>
   birthday: <input type="date" name="birthday" /> <br>
   <select name="area">
       <option value="401">北屯區</option>
       <option value="401">南屯區</option>
       <option value="401">西屯區</option>
   </select><br>
    <input type="radio" name="gender">female</input>
    <input type="radio" name="gender">male</input> <br>
    <input type="checkbox" name="like[]" value="1">貓
    <input type="checkbox" name="like[]" value="2">狗
    <input type="checkbox" name="like[]" value="3">老鼠
    <input type="checkbox" name="like[]" value="4">蛇 <br>
    <textarea name="memo"></textarea><br>
    <input type="file" name="file"><br>
             <input type="submit" value="send" />
</form>