<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Priya</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: Arial, sans-serif;
    }
    .table-heading {
      text-align: center;
    }
    table {
      width: 600px;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <pre>
    <?php
    // Your PHP code here
    extract($_POST);
    extract($_FILES);
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Create an instance; passing true enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true; // Enable SMTP authentication
        $mail->Username   = 'priyapradhan437@gmail.com'; // SMTP username
        $mail->Password   = 'mfgg zlgm ptof qzbd'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port       = 465; // TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

        // Recipients
        $mail->setFrom('priyapradhan437@gmail.com', $contactFormName);
        $mail->addAddress('priyapradhan7008@gmail.com', 'contact me'); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Contact Priya';
        $mail->Body    = '<!DOCTYPE html>
                          <html lang="en">
                          <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Contact Priya</title>
                            <style>
                              body{
                                  display: flex;
                                  flex-direction: column;
                                  align-items: center;
                              }
                              .table-heading{
                                  text-align: center;
                              }
                              table {
                                width: 600px;
                                border-collapse: collapse;
                                margin-bottom: 20px;
                              }
                              th, td {
                                border: 1px solid #ddd;
                                padding: 8px;
                                text-align: left;
                              }
                              th {
                                background-color: #f2f2f2;
                              }
                            </style>
                          </head>
                          <body>
                            <table>
                              <thead>
                                <tr>
                                  <th colspan="2" class="table-heading">APPLICANT DETAILS</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Name</td>
                                  <td>'.$contactFormName.'</td>
                                </tr>
                                <tr>
                                  <td>Email</td>
                                  <td>'.$contactFormEmail.'</td>
                                </tr>
                                <tr>
                                  <td>Phone Number</td>
                                  <td>'.$contactFormNumber.'</td>
                                </tr>
                                <tr>
                                  <td>Message</td>
                                  <td>'.$contactFormMessage.'</td>
                                </tr>
                              </tbody>
                            </table>
                          </body>
                          </html>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    ?>
  </pre>
</body>
</html>
