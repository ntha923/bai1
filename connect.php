<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">;
        <title>Document</title>
    </head>
    <body>
        <?php
        $username='root';
        $password='';
        $server='localhost';
        $dbname='book';
         $connect = new mysqli ($server,$username, $password, $dbname);
         if($connect->connect_error){
            die("Không kết nối:".$conn->connect_error);
            exit();
         }
         echo "Khi kết nối thành công sẽ tiếp tục dòng code bên dưới đây";
        ?>
    </body>
</html>