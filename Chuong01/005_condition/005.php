<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lấy chòm sao</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
    $day = "";
    $mon = "";
    $result = "";
    $image = "";
    $name = "";
    $time = "";

    if(isset($_POST["day"]) && isset($_POST["mon"])){
        $day = $_POST["day"];
        $mon = $_POST["mon"];
        $flagShow = true;
        if(is_numeric($day) && is_numeric($mon)){
            switch ($mon){
                case 1:
                    if($day <= 19){ $image = "sao"; $name = "Ma kết "; $time = "23/12 -19/01"; }
                    if($day >= 20){ $image = "sao2"; $name = "Bảo Bình "; $time = "20/1 -19/02"; }
                    if($day < 1 || $day > 31)  $flagShow = false;
                    break;

                case 2:
                    if($day <= 19){ $image = "sao2"; $name = "Bảo Bình "; $time = "20/1 -19/02"; }
                    if($day >= 20){ $image = "sao"; $name = "Song Ngư "; $time = "20/2 -21/03"; }
                    if($day < 1 || $day > 29)  $flagShow = false;
                    break;
                default:
                    $flagShow = false;
                    break;

            }
            if($flagShow == true){
                $result = '
                    <div class="result">
                        <img src="image/' . $image . '.jpg" alt="' . $image . '">
                        <p>' . $name .'<span>(' . ucfirst($image) . ' : ' . $time . ')</span></p>
                    </div> ';
            }else{
                $result  = "Dữ liệu không hợp lệ";
            }
        }else{
            $flagShow = false;
            $result  = "Dữ liệu không hợp lệ";
        }
    }
?>
    <div class="content">
        <h1>Lấy chòm sao</h1>
        <form action="#" method="post" name="main_form">
            <div class="row">
                <span>Ngày sinh</span>
                <input type="text" name="day" value="<?php echo $day; ?>">
            </div>
            <div class="row">
                <span>Tháng sinh</span>
                <input type="text" name="mon" value="<?php echo $mon; ?>">
            </div>
            <div class="row">
                <input type="submit" value="Lấy chòm sao" name="submit">
            </div>

        </form>
        <div class="result">
            <img src="image/sao.jpg" alt="sao">
            <p>Cung Bạch Dương <span>(Aquarius 22/03 - 20/04)</span></p>
        </div>
        <?php
            echo  $result;
        ?>


    </div>
</body>
</html>