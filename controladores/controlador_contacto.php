<?php

require_once '../config/conexion.php';
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

class Controlador_contacto {
    
    public function __construct(){
        // Indicamos la ruta donde se encuentra el archivo .env
        $dotenv = Dotenv::createImmutable(__DIR__. '/../');
        $dotenv->load();
    }

    public function guarda_contacto() {
        //Validar que venga POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }
        //echo"<pre>"; print_r($_POST); die("</pre>");
        // Recibir datos
        $nombre   = $_POST['nombre'] ?? '';
        $empresa  = $_POST['empresa'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $correo   = $_POST['correo'] ?? '';
        $asunto   = $_POST['asunto'] ?? '';
        $mensaje  = $_POST['mensaje'] ?? '';

        // 🔐 Validaciones
        if (empty($nombre) || empty($correo)) {
            echo "Faltan campos obligatorios";
            return;
        }

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "Correo inválido";
            return;
        }

        // 🔌 Conexión
        $conexion = new Conexion();
        $conexion->selecciona_base_datos();

        // 🔐 Sanitizar
        $nombre   = mysqli_real_escape_string($conexion->link, $nombre);
        $empresa  = mysqli_real_escape_string($conexion->link, $empresa);
        $telefono = mysqli_real_escape_string($conexion->link, $telefono);
        $correo   = mysqli_real_escape_string($conexion->link, $correo);
        $asunto   = mysqli_real_escape_string($conexion->link, $asunto);
        $mensaje  = mysqli_real_escape_string($conexion->link, $mensaje);
        
        //enviar correo
        $this->enviarMail($nombre, $empresa, $telefono, $correo, $asunto, $mensaje);

        // 📥 Insertar
        $sql = "INSERT INTO contacto2 
                (nombre, empresa, telefono, correo, asunto, mensaje)
                VALUES 
                ('$nombre','$empresa','$telefono','$correo','$asunto','$mensaje')";

        if ($conexion->link->query($sql)) {
            echo 'ok';
            //header("Location: ../index.php#contacto");
            //exit;
        } else {
            echo "Error: " . $conexion->link->error;
        }
    }
    
    public function enviarMail($nombre, $empresa, $telefono, $correo, $asunto, $mensaje){
        $mail = new PHPMailer(true);
        try {
            // Configuración del servidor (Ejemplo con Gmail)
            $mail->isSMTP();
            $mail->Host       = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['MAIL_USER'];
            $mail->Password   = $_ENV['MAIL_PASS'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $_ENV['MAIL_PORT'];
            $mail->CharSet    = 'UTF-8';
            $mail->addCustomHeader('X-Mailer', 'PHP/' . phpversion());
            $mail->addCustomHeader('X-Priority', '1');

            // Destinatarios
            $mail->setFrom('contacto@pronovacore.com', 'Web ProNova core');
            $mail->addAddress('francisco.marrujo@pronovacore.com');

            //contestar al cliente
        //    $mail->addReplyTo($correo, $nombre);
            $mail->Subject = "Nuevo contacto - $asunto";
            
            // CUERPO HTML PROFESIONAL
            // =========================
            $mail->isHTML(true);
            
            $mail->Body = '<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f8; padding:20px; font-family:Arial;">
                                <tr>
                                    <td align="center">
                                        <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">
                                            <tr>
                                                <td style="background:#543884; color:#ffffff; padding:20px; text-align:center;">
                                                    <h2 style="margin:0;">ProNova Core</h2>
                                                    <p style="margin:0;">Nuevo mensaje de contacto</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:20px; color:#333333;">
                                                    <p><strong>Nombre:</strong> '.$nombre.'</p>
                                                    <p><strong>Empresa:</strong> '.$empresa.'</p>
                                                    <p><strong>Teléfono:</strong> '.$telefono.'</p>
                                                    <p><strong>Correo:</strong> '.$correo.'</p>
                                                    <p><strong>Servicio:</strong> '.$asunto.'</p>
                                                    <hr>
                                                    <p><strong>Mensaje:</strong></p>
                                                    <p style="background:#f9f9f9; padding:10px;">'.$mensaje.'</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background:#eeeeee; padding:15px; text-align:center; font-size:12px;">
                                                    Este mensaje fue enviado desde el sitio web de ProNova Core
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>';

                // TEXTO PLANO (fallback)
                // =========================
                $mail->AltBody = "
                Nuevo contacto:

                Nombre: $nombre
                Empresa: $empresa
                Teléfono: $telefono
                Correo: $correo
                Servicio: $asunto

                Mensaje:
                $mensaje
                ";
            
            $mail->send();
            //echo 'El mensaje se envió correctamente';
        } catch (Exception $e) {
            error_log($mail->ErrorInfo);
        }
        
        
    }
    
}

$controlador = new Controlador_contacto();
$controlador->guarda_contacto();

?>
