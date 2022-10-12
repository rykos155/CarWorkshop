<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use App\Models\Estimate;
use App\Models\Order;

class MailerController extends Controller {

    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request, $id) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
        $estimate = Estimate::with('part','service')->findOrFail($id);
        $order = Order::findOrFail($estimate->order_id);

        try {

            // Email server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Username   = 'warsztat.samochodowy.mail@gmail.com';
            $mail->Password   = 'warsztat1234!';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            $mail->CharSet    = 'UTF-8';

            $mail->setFrom('warsztat.samochodowy.mail@gmail.com', 'Patryk Rykowski');
            $mail->addAddress($request->emailRecipient);


            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }

            
            $mail->isHTML(true);             

            $mail->Subject = $request->emailSubject;
            $mail->Body    = $request->emailBody;
            

            if( !$mail->send() ) {
                return back()->with("failed", "Email nie został wysłany")->withErrors($mail->ErrorInfo);
            }
            
            else {
                $estimate->isSend = 1;
                $estimate->save();

                $order->status_id = 3;
                $order->save();

                return back()->with("success", "Wiadomość została wysłana na email: $request->emailRecipient");
            }

        } catch (Exception $e) {
             return back()->with('error','Błąd podczas wysyłania wiadomości');
        }
    }
}