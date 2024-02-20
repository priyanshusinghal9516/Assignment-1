<html>
<head>
    <title>Article Writing</title>
</head>
<body>
    <form method="post" action=""> 

        Article Title :<br>
        <textarea name="blogging" rows="2" cols="36" autofocus >
        </textarea><br>
        <?php 
        $length='';
        $truncate_title='';
        
    if(isset($_POST['submit'])){
        $title=$_POST['blogging'];
        $length=strlen($title);

        //echo "The length of the Title is "."$length";
        echo"<br>";
       if($length>50){
        echo "The length of the Title is "."$length";
        $truncate_title=substr($title,0,50)."..."; 

       // echo "$truncate_title";   
    }
   else{
    echo "The length of the Title is "."$length";
    $truncate_title=$title;
   }
      

    }
    ?><br><br>
    Your title will be displayed as : <br>
     <input type="text" style="width: 400px;" disabled value="<?php echo $truncate_title ?>"><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>