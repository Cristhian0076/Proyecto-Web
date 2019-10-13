<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['correo']) && !empty(['pregunta'])){
        $correo = $_POST['correo'];
        $pregunta = $_POST['pregunta'];
        $header = "From: tafurcf903@gmail.com" . "\r\n";
        $header.= "Reply-To: tafurcf903@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($correo,$pregunta);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente</h4>";
 header("Location:Proyecto.php");
        }
    }
}
?>