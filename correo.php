<?php
if(isset($_POST['enviar'])){
if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty ($_POST ['msg']) && !empty($_POST['email']))
{
    $name = $_POST['name'];
    $mio ="evelynmoralesmx@gmail.com";
    $asunto = $_POST['asunto'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];
    $header = "From: $email" . "\r\n";
    $header.="Reply-To: noreply@example.com" . "\r\n";
    $header.= "X-Mailer: PHP/" . phpversion();
    $mail= @mail($mio,$asunto,$msg,$header);
    if($mail) {
        echo "<h4>¡Mail enviado exitosamente! </h4>";
    }
}
}

?>