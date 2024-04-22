<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.css" class="rel">
    <script src="./bootstrap/jquery/jquery.js"></script>
    <script src="./bootstrap/bootstrap.js"></script>
</head>
<style>
body{
    width: 1920px;
    height: 1080px;

}

</style>
<body>
<?php
		session_start();
		$num= rand(1000,9999);
         $_SESSION['num']=$num;
      
	?>    
<p></p><p></p>
    <h3><div id="c" class="text-break">　　　　　　　　LOGO  南港展覽館接駁專車系統</div><div id="cc" class="text-right text-secondary">系統管理　　　　　　　　　</div></h3>
    <hr>
   <h1 class="text-center pt-5">網站管理-登入</h1>
   <form action="tickets.php" method="post" id="form">
<table class="w-40 mx-auto">

    <tr class="form-group">
        <td class="form-text"><h4>帳號</h4></td>
        <td><input type="text" name="name" id="name" class="form-control mt-2" required>
            <div class="invalid-tooltip" style="opacity: .5;">Please provide your password.</div></td>
    </tr>
    <tr class="form-group">
        <td class="form-text"><h4>密碼 </h4></td>
        <td><input type="password" name="pd" id="pd" class="form-control mt-2" required></td>
    </tr>
    <tr class="form-group">
        <td class="form-text"><h4>驗證碼 </h4></td>
        <td><input type="text" name="num" id="num" class="form-control mt-2"></td>
        </tr>
        

        <tr class="form-group">
        <td class="form-text">  <a href="login.php"><span class="btn btn-primary"> <?=$num?></a></span></td>
       
        <td> <a href="login.php"> <input type="button" class="btn btn-secondary text-left" value="重新產生驗證碼"></a></td>
      </td></tr> 
      <tr>
<td></td></tr>
<p></p>
        <tr>
        <td class="text-center" colspan="2"><input type="submit" name="submit"  class="btn btn-success"  id="submit" value="　　　　　　　　　　　　　登入　　　　　　　　　　　　　"></tr>
    </td>
</tr>    </td>
</tr>
    </table>
</form>
</body>
</html>