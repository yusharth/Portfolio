<html><body>
  <?php
    // The message
    $name = $_GET["name"];
    $email_address = $_GET["email_address"];
    $message = $_GET["message"];
    $full_message = $name + '\n\r' + $email_address + '\n\r' + $message;
    $subject = 'Someone just emailed you from your own site';
    // Send
    mail('yusharth@gmail.com', $subject, $full_message);
  ?>

  Your mail has been sent.
</body></html>