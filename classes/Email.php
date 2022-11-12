<?php

namespace Classes;


use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }   

    public function enviarConfirmacion() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '6baea700e19913';
        $mail->Password = 'b18e26d2a49b48';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com','Appdalon.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido = "<p><strong>Hola ". $this->nombre . "</strong>. Has creado tu cuenta en AppSalon, solo debes confirmarla presionando el siguiente enlace </p>";
        $contenido .= "<p>Presiona aqui: <a href='https://appsalon.agustinsanchez.dev/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $contenido .= "<p>si tu no solicitaste esta cuenta, puedes ignorar el mensaje.</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el email;
        $mail->send();

    }
    public function enviarInstrucciones()
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '6baea700e19913';
        $mail->Password = 'b18e26d2a49b48';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress($this->email, $this->nombre);
        $mail->Subject = 'Reestablece tu password';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido = "<p><strong>Hola ". $this->nombre . "</strong>. Usa el siguiente enlace para reestablecer tu password </p>";
        $contenido .= "<p>Presiona aqui: <a href='https://appsalon.agustinsanchez.dev/recuperar?token=" . $this->token . "'>Reestablece tu password</a></p>";
        $contenido .= "<p>si tu no solicitaste este cambio, puedes ignorar este mensaje.</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el email;
        $mail->send();
    }
}
