<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<div>
   <body > 

 <h1>งานที่1 กัญฐมณี พงษ์หิรัญเตชากิจ BIT.2/5 เลขที่ 45</h1>
    
     <button>
        <a href="while.php">For loop</a>
     </button>
     

     <form action="">
      
        <label for="num">เลขแม่สูตรคูณ</label>  <br>
        <input type="number" name="num" id="num">
        
        <input type="submit" value="คำนวณ">
      
      
     </form>

     <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่" . $num . "<br>";
            //. เริ่ม         จบ    เพิ่มทีละ 1
            for($i = 1; $i <= 12; $i++){
                echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
            }

        }   
  
    ?>
  
    
    

    </body>

</div>    


</html>