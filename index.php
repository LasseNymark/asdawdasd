<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

   <?php
    
    if (isset($_POST['name']) && isset($_POST['email'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $to = 'nymark@live.dk';
        $subject = "New Subscriber";

        // Body delen mangler her
        
        // Headers 
        
        $headers = "From: ".$name" <".@email.">\r\n";
        $headers .= "Reply-To: ".@mail.">\r\n";
        $headers .= "MIME-Version: 1.0.\r\n";
        $headers .= "content-type: text/html; charset-utf-8";
        
        // SEND
        
        $send = mail($to, $subject, $headers);
        if ($send) {
            
            echo '<br>';
            echo 'Thanks bla bla bla';
        
        }
        
        else {
            echo 'error';
        }
        
    }
    
    ?>
   
    <form action="" method="post">
        
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="email" placeholder="Your Email">
        <button type="submit">Send</button>        
    </form>

</body>

</html>