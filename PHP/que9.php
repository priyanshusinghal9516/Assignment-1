<html>
<head>
    <title>User Type </title>
</head>
<body>
    <form action="" method="post">
        <fieldset>Select The User Type</fieldset><br>
        <input type="submit" name="basic" value="Basic User" ><br><br>
        <input type="submit" name="premium" value="Premium User"><br>
        <?php 
        if(isset($_POST['basic'])){
            echo "Welcome Basic User";
        }
        elseif( isset($_POST['premium']))
            {echo"Welcome Premium User";}
        else{echo "";}
        ?>
        
    </form>
</body>
</html>