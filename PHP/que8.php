<html>
<head>
    <title>Result Generator</title>
    <style>
        fieldset{
            background-color:skyblue;
        }
        </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset>****.....Score to Grade Converter.....****</fieldset>
        Enter your Mark :
        <input type="number" name="mark" max="100"><br>
        <?php
$grade="";
if(isset($_POST['submit'])){
    $score=$_POST['mark'];
    if($score>=90){
        $grade='A';
        
    }
    elseif($score>=80 && $score<90){
        $grade='B';
    }
    elseif($score>=70 && $score<80){
        $grade='C';
    }
    elseif($score>=60 && $score<70){
        $grade='D';
    }
    else{
        $grade='F';
    }
}
    ?>
        Your Grade : 
        <input type="text" name="grade" disabled value="<?php echo"$grade" ?>" ><br>
        <input type="submit" name="submit" value="Check Grade">
    </form>

</body>
</html>