<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $message = trim($_POST["message"]);
  $to = "front.office@baxter-academy.net"; // replace with your email address

  if (!empty($name) && !empty($message)) {
    $subject = "New message from $name";
    $body = "Name: $name\n\nMessage: $message";
    $headers = "From: $name <$to>\r\n" .
               "Reply-To: $name <$to>\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
      echo "<p>Thank you for your message, $name!</p>";
    } else {
      echo "<p>Sorry, there was a problem sending your message. Please try again later.</p>";
    }
  } else {
    echo "<p>Please enter both your name and message.</p>";
  }
}
?>

<form method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>
  <br>
  <label for="message">Message:</label>
  <textarea name="message" id="message" rows="5" required></textarea>
  <br>
  <button type="submit">Send Message</button>
</form>
