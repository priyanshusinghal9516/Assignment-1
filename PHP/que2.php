<html>
<head>
    <title>Traffic Light</title>
    
    <style>
        #red{
            background-color:red;
        }
        #green{
            background-color:green;
        }
        #yellow{
            background-color:yellow;
        }
        fieldset{
            background-color:skyblue;
        }
        </style>
</head>
<body>
    <form action="" method="post">
    <fieldset>Traffic Light Massage</fieldset>
        <?php  
        $mass='';
         if(isset($_POST['red'])){
            $mass='STOP';
         }
         elseif(isset($_POST['green'])){
            $mass='GO';
         }
        elseif(isset($_POST['yellow'])){
            $mass='SLOW DOWN';
        }
        else{$mass='';}
       
        ?>
        Message:
        <input type="text" name="Message" disabled value="<?php echo $mass ?> ">
        <input type="submit" name="red" id="red" value="Red">
        <input type="submit" name="green" id="green" value="Green" >
        <input type="submit" name="yellow" id="yellow" value="Yellow">
    </form>
</body>
</html>