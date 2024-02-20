<html>
<head>
    <title>Login </title>
    <style>
        fieldset{
            background-color:skyblue;
        }
        </style>
</head>
<body>
<form action="" method="post">
 <fieldset>Login / Signup</fieldset>
        Enter Username : 
        <input type="text" name="uname"><br>
        Password : 
        <input type="password" name="pword"><br>
        <input type="submit" name="log" value="Login">
     </form>
     
 <?php 
 $user_name='priyanshusin_bca23';
 $pass_word='@singhal32';

 if(isset($_POST['log'])){
     $name=$_POST['uname'];
     $pass=$_POST['pword'];
         if($name == $user_name && $pass_word == $pass){
         echo"login successfull";
     }
    else{
     echo"Invalid Credentials";
    }
 }
    ?>  
</body>
</html>