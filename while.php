<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<div>
    <body>
    <h1>งานที่1 กัญฐมณี พงษ์หิรัญเตชากิจ BIT.2/5 เลขที่ 45</h1>
    <button>
        <a href="index.php">While loop</a>
    </button>
    

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label>  <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        while(isset($_GET["num"])){
            $num = $_GET["num"];
            $i = 1;

            echo "สูตรคูณแม่" . $num . "<br>";
            //. เริ่ม         จบ    เพิ่มทีละ 1
            while($i <= 12){
                echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
                $i++;
            }
            break;
        }
    ?>
    </body>
</div>


</html>