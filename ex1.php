<?php
    if(isset($_POST['giaipt'])){
        $so_a = $_POST['so_a'];
        $so_b = $_POST['so_b'];
        $so_c = $_POST['so_c'];
        if($so_a ==0){
            if($so_b == 0){
                if($so_c ==0){
                    echo "Phương trình vô số nghiệm.";
                }else{
                    echo "Phương trình vô nghiệm";
                }
            }else{
                echo "Phương trình có nghiệm: x =  ".($so_c / $so_b);
            }
        }else{
            $delta = ($so_b * $so_b) - (4 * $so_a * $so_c);

            if($delta >0){
                $x1 = (-$so_b + sqrt($delta)) / (2 * $so_a);
                $x2 = (-$so_b - sqrt($delta)) / (2 * $so_a);
                echo "Nghiệm của phương trình: <br>";
                echo "x1 = {$x1}  <br>";
                echo "x2 = {$x2}";
            }elseif($delta ==0){
                $x = -$so_b/(2 * $so_a);
                echo "Phương trình có nghiệm kép: x1=x2= " .$x;

            }else{
                echo "Phương trình vô nghiệm.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table width="250">
            <caption><p>Giải phương trình bậc 2</p>ax <sup>2</sup> +bx +c = 0</caption>
            <tr>
                <td>Số a</td>
                <td>
                    <input value="<?php if(isset($so_a)) {echo $so_a;} ?>" type="number" name="so_a" id="so_a">
                </td>
            </tr>
            <tr>
                <td>Số b</td>
                <td>
                    <input value="<?php if(isset($so_b)) {echo $so_b;} ?>" type="number" name="so_b" id="so_b">
                </td> 
            </tr>
            <tr>
                <td>Số c</td>
                <td>
                    <input value="<?php if(isset($so_c)) {echo $so_c;} ?>" type="number" name="so_c" id="so_c">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="giaipt" value="Giải phương trình">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>