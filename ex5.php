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
        margin: 0px auto;
        width: 800px;
        position: relative;
    }
    #main ul{
        list-style: none;
        padding: 0px;
        margin: 0px;
        float: left;
    }
    #main ul li{
        float: left;
        border-right: 1px solid #fff;
    }
    #main ul li a{
        text-decoration: none;
        color: #fff;
        display: block;
        padding: 8px 15px;
    }
    #main ul li:hover a{
        background-color: #792b90;
        color: #fff !important;
    }
    #language{
        position: absolute;
        right: 0px;
    }
</style>
<body>
    <?php
        if(!isset($_GET['lang']) || $_GET['lang'] == 'vi'){
            $arrMenu = array(
                "home" => "Trang chủ",
                "about" => "Giới thiệu",
                "product" => "Sản phẩm",
                "service" => "Dịch vụ", 
                "contact" => "Liên hệ"
            );
        }else{
            $arrMenu = array(
                "home" => "Home",
                "about" => "About",
                "product" => "Products",
                "service" => "Services", 
                "contact" => "Contact"
            );
        }
    ?>
    <div id="main">
        <nav>
            <ul>
                <?php
                    $i=0;
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
                            <a href="ex5.php?view=<?php echo $key; ?>&lang=<?php echo isset($_GET['lang'])?$_GET['lang']:""?>">
                            <?php echo $value; ?>
                        </a>
                        </li>

                        <?php
                    }
                ?>
            </ul>
            <ul id="language">
                <li>
                    <a href="ex5.php?view=<?php echo isset($_GET["view"])?$_GET["view"]:"home"  ?>&lang=vi">
                        VI
                    </a>
                </li>
                <li>
                    <a href="ex5.php?view=<?php echo isset($_GET["view"])?$_GET["view"]:"home"  ?>&lang=en">
                        EN
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
