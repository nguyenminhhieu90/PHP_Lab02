<?php
    if(isset($_POST['xu_ly'])){
        $soChan = $soLe = "";
        $tongChan = $tongLe =0;
        $number = $_POST['number'];
        $i =1;
        while($i <= $number){
            if($i % 2 == 0){
                $soChan .= $i.",";
                $tongChan += $i;
            }else{
                $soLe .= $i.",";
                $tongLe += $i;
            }
            $i++;
       
        }
        echo "Danh sách số chẵn: {$soChan} <br>";
        echo "Tổng các số chẵn: {$tongChan} <br>";
        echo "Danh sách số lẻ: {$soLe} <br>";
        echo "Tổng các số lẻ: {$tongLe} <br>";
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
        <table>
            <caption>Hiển thị danh sách số lẻ <br> Số chẵn và tổng tương ứng</caption>
            <tr>
                <td>Nhập số bất kỳ</td>
                <td>
                    <input type="text" name="number" id="number">
                </td>
            </tr>
            <td>
                <input type="submit" name="xu_ly" value="Xử lý">
            </td>
        </table>
    </form>
</body>
</html>