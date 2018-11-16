<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
    $n1 = "";
    $n2 = "";
    $caculate = "";
    if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])){
        $n1 = $_POST["number1"];
        $n2 = $_POST["number2"];
        $flag = true;

        $caculate = $_POST["caculate"];
        if(is_numeric($n1) && is_numeric($n2)){
            switch ($caculate){
                case "+":
                    $result = $n1 + $n2;
                    break;
                case "-":
                    $result = $n1 - $n2;
                    break;
                case "*":
                case "x":
                    $result = $n1 * $n2;
                    break;
                case "/":
                case ":":
                    $result = $n1 / $n2;
                    break;
                case "%":
                    $result = $n1 + $n2;
                    break;

                default:
                    $result = $n1 + $n2;
                    $caculate = "+";
                    break;
            }
        }else{
            echo $result = "Không thực hiện được";
            $flag = false;
        }

    }
?>
    <div class="content">
        <h1>Mô phỏng máy tính điện tử</h1>
        <form action="#" method="post" name="main_form">
            <div class="row">
                <span>Số thứ nhất</span>
                <input type="text" name="number1" value="<?php echo $n1; ?>">
            </div>
            <div class="row">
                <span>Phép toán</span>
                <input type="text" name="caculate" value="<?php echo $caculate; ?>">
            </div>
            <div class="row">
                <span>Số thứ hai</span>
                <input type="text" name="number2" value="<?php echo $n2; ?>">
            </div>
            <div class="row">
                <input type="submit" value="Xem kết quả" name="submit">
            </div>
            <div class="row">
                <p>
                    <?php
                        if($flag==true){
                            echo "Kết quả" . $n1 . " " . $caculate . " " . $n2 . "=" . $result;
                        }else{
                            echo $result;
                        }
                    ?>
                </p>
            </div>
        </form>
    </div>
</body>
</html>