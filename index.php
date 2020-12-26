<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPKeepAlive = true;
$mail->SMTPAuth = true;                                          // E-Posta Oturum Doğrulama
$mail->SMTPSecure = 'tls';                                      // E-Posta Güvenlik Seçeneği
$mail->Port = 587;                                             // E-Posta Portu
$mail->Host = "smtp.gmail.com";                               // E-Posta Sunucusu
$mail->Username = "E-Posta Adresi";                          // E-Posta Giriş Adresi
$mail->Password = "Şifre";                                  // E-Posta Giriş Şifresi
$mail->setFrom("Gönderici E-Posta");                       // Gönderici Adresi
$mail->addAddress("Alıcı E-Posta");                       // Alıcı Adresi
$mail->isHTML(true);                                     // HTML Kodları İçersin mi ?
$mail->Subject = "Deneme E-Posta Örneği";               // E-Posta Konusu
$mail->Body = "Deneme E-Posta İçeriği";                // E-Posta İçeriği
$mail->addAttachment("extra.htm");                    // Ekstra Ek Dosya
if ($mail->send())
    echo "E-Posta başarıyla iletildi.";
else
    echo "Bir hata oluştu.";
?>