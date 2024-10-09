<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="hero">☆*: .｡. o(≧▽≦)o .｡.:*☆☆*:PHP CALCULATOR  .｡. o(≧▽≦)o .｡.:*☆</h1>
    <div class="container">
        <form action="" method="GET">
            <div class="answer">
            <?php 
            if(isset($_GET['submit'])){

                $result1=$_GET['num1'];
                $result2=$_GET['num2'];
                $operator=$_GET['operator'];
                // $result= $_GET['$result'];
                switch($operator){
                    case"None":
                        echo "you need to select a method!!!";
                        break;
                 case"Add":
                        // $result=$result1+$result2;
                        echo  $result1  + $result2;
                        break;
                case"Subtract":
                    echo  $result1  - $result2;
                    break;
                 case"Divide":
                    echo  $result1 / $result2;
                    break;
                 case"Mutiply":
                    echo  $result1  * $result2;
                    break;
              
                }
            }
             ?>
            </div>
            <br><br><br>
            <input type="text" name="num1" placeholder="enter the first number">
            <br> <br>
            <input type="text" name="num2" placeholder="enter the second number">
            <br><br>
            <select name="operator" id="">
                <option value="None">None</option>
                <option value="Add">Add</option>
                <option value="Subtract">Subtract</option>
                <option value="Divide">Divide</option>
                <option value="Mutily">Mutiply</option>
            </select>
            <br><br><br>
            <button type="submit" name="submit" value="submit ">Calculate</button>
        </form>
    </div>
        <h3 class="footer"> Made with <span>❤️</span>by LoiseRose</h3>
</body>
</html>