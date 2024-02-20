<html>
<head>
    <title>Fitness app</title>
    <style>
        fieldset{
            background-color:skyblue;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
    <fieldset>Program to check lavel of fitness</fieldset>
        Number of Steps : 
        <input type="number" name="step"><br>
        <?php 
    $level="";
        if(isset($_POST['check'])){
        $num=$_POST['step'];
        if($num <5000){
            $level="Biginner";
            
        }
        elseif ($num >5000 && $num <=10000) {
            $level="Intermediate";
        }
        else{
            $level="Advanced";
        }
        };
       
    ?>
       Fitness Level : 
        <input type="text" name="leve" disabled value="<?php echo $level ?>"><br>
        <input type="submit" name="check" value="Check">
    </form>
   
</body>
</html>