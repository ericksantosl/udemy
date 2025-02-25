<?php
    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/DSNConfigurator.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Mensagem {
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function mensagemValida() {
            if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    if (!$mensagem->mensagemValida()) {
        echo 'Mensagem não válida';
        die();
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'xxxxx';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'xxxxx';                     //SMTP username
        $mail->Password   = 'xxxxx';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('xxxxx', 'xxxxx');
        $mail->addAddress('xxxxx', 'xxxxx');     //Add a recipient
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Oi. Eu sou o assunto!';
        $mail->Body    = 'Oi. Eu sou o conteúdo do <strong>e-mail</strong>!';
        $mail->AltBody = 'Oi. Eu sou o conteúdo do e-mail!';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Não foi possível enviar este e-mail. Por favor, tente mais tarde!. Detalhes do erro: {$mail->ErrorInfo}";
    }
?>