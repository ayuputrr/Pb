<!DOCTYPE html>

<html>

<head>

 <title>Halaman Login</title>

 <link rel="stylesheet" type="text/css" href="style.css">
<style>
  h1{

margin-left:400px;

margin-top: 25px;

}



.form{

width: 500px;

height: 200px;

margin-top: 25px;

margin-left: 400px;

background-color: gray;

padding: 20px;

}



.username{

margin-top: 50px;

margin-bottom: 10px;

margin-left: 40px;

}



.username input{

width: 300px;

height: 25px;

}



.password{

margin-left: 43px;

margin-bottom: 20px;

}



.password input{

width: 300px;

height: 25px;

}



.tombol input{

width: 100px;

height: 25px;

margin-left: 110px;

background-color: lightblue;

}
 
</style>
</head>

<body>

 <h1>Halaman Login</h1>

 <div class="form">

  <form action="login.php" method="post" name="form_input">

   <div class="username">

    Username : <input type="text" name="username" placeholder="Masukan Username" required="">

   </div>

   <div class="password">

    Password : <input type="text" name="password" placeholder="Masukan Password" required="">

   </div>



   <div class="tombol">

    <input type="submit" name="input" value="LOGIN">

    <input type="reset" name="reset" value="RESET">

   </div>

  </form>

 </div>

</body>

</html>
