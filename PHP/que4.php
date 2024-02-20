<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System....</title>
    <style>
        fieldset{
            background-color:skyblue;
        }
        </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>****.....Grading System.....****</fieldset>
        Enter your Mark :
        <input type="number" name="m_ark" max="100"><br>
        <?php
$grade='';
if(isset($_POST['s_ubmit'])){
    $score=$_POST['m_ark'];
    if($score<60){
        $grade='F';
        
    }
    elseif($score>60 && $score<=70){
        $grade='D';
    }
    elseif($score>70 && $score<=80){
        $grade='C';
    }
    elseif($score>80 && $score<=90){
        $grade='B';
    }
    else{
        $grade='A';
    }
}
    ?>
        Your Grade : 
        <input type="text" name="g_rade" disabled value="<?php echo $grade ?>" ><br>
        <input type="submit" name="s_ubmit" value="Check Grade">
    </form>

</body>
</html>