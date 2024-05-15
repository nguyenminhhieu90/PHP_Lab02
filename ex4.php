
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #main{
        height: 35px;
        background-color: #ccc;
        width: 800px;
        margin: 0px auto;
    }
    #main ul{
        list-style: none;
        padding: 0px;
        margin: 0px;
    }
    #main ul li{
        float: left;
        border-right: 1px solid #fff;
    }
    #main ul li a{
        text-decoration: none;
        color: #000;
        display: block;
        padding: 8px 15px;
    }
    #main ul li:hover a,
    .selected{
        background-color: #792b90;
        color: #fff !important;
    }
</style>
<body>
    <div id="main">
        <ul>
            <?php
                $arrMenu = array(
                    "home" => "Trang chủ",
                    "about" => "Giới thiệu",
                    "product" => "Sản phẩm",
                    "service" => "Dịch vụ", 
                    "contact" => "Liên hệ"
                );
                $i = 0;
                foreach($arrMenu as $key => $value){
                    $i++;
                    $selected = "";
                    if(!isset($_GET['view']) && $i ==1){
                        $selected = 'class="selected"';
                    }elseif(isset($_GET['view']) && $_GET['view'] == $key){
                        $selected = 'class = "selectted"';
                    }
                
            ?>

            <li>
                <a <?php echo $selected ?> href="ex4.php?view=<?php echo $key;?>">
                <?php echo $value; ?>
            </a>
            </li><?php
            }
            ?>
        
        </ul>
    </div>
</body>
</html>