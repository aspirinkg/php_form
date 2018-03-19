<?php


    if(!empty($_REQUEST['ds'])){

        $name    =  $_REQUEST['name'];
        $email   =  $_REQUEST['email'];
        $phone   =  $_REQUEST['phone'];
        $message =  "<div>" . $email . "</div>\r\n" . "<div>". $name ."</div>\r\n" .              "<div>" . $phone . "</div>\r\n";
        $header  = "From : aspirin.kg@mail.ru";
        $result  =  mail('aspirin.kg@mail.ru','Сообщение ', $message, $header );
    

        if($result){
            header("location: index.html");
            echo "Сообщение успешно отправлено";
        }
        else{
            echo "Сообщение не отправлено";
        }

    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    
    <form action="/" method="POST">
    
    <input type="text" name="name" id="name" placeholder="Введите имя">
    <input type="text" name="email" id="email" placeholder="Введите email">
    <input type="text" name="phone" id="phone" placeholder="Введите phone">
    <input type="submit" name="ds" value="Отправить">
    </form>


</body>
</html>