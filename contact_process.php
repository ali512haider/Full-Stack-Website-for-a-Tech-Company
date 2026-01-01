<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Collect data
    $name        = trim($_POST['name']);
    $email       = trim($_POST['email']);
    $companyName = trim($_POST['companyName']);
    $phone       = trim($_POST['phone']);
    $interest    = trim($_POST['intrest']);
    $message     = trim($_POST['message']);
//1b2a17ba-dc24-40d6-b1d0-eb7a287c9b72
//ES_122b4a53177347f5a2354b7111565470


    // 2. Save to DB
    $conn = new mysqli("localhost", "root", "", "contactform");
    if ($conn->connect_error) {
        die("DB Connection Failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO conatct 
        (name, email, companyName, phone, intrest, message) 
        VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $companyName, $phone, $interest, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // 3. Auto-submit to Web3Forms (without redirect)
    echo '
    <html>
      <body>
        <form id="web3form" action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="4639be52-cb1a-43e0-b30b-5134757da5a8">
          <input type="hidden" name="subject" value="New Contact Submission">
          <input type="hidden" name="to" value="alihaideraziz114@gmail.com">

          <input type="hidden" name="name" value="'.$name.'">
          <input type="hidden" name="email" value="'.$email.'">
          <input type="hidden" name="companyName" value="'.$companyName.'">
          <input type="hidden" name="phone" value="'.$phone.'">
          <input type="hidden" name="interest" value="'.$interest.'">
          <input type="hidden" name="message" value="'.$message.'">
        </form>

        <script>
          // Submit Web3Forms request via AJAX
          const form = document.getElementById("web3form");
          const formData = new FormData(form);

          fetch(form.action, {
            method: "POST",
            body: formData
          })
          .then(res => res.json())
          .then(data => {
              if(data.success){
                  // Show success popup on contact.php
                  window.location.href = "contact.php?success=1";
              } else {
                  window.location.href = "contact.php?error=1";
              }
          })
          .catch(err => {
              window.location.href = "contact.php?error=1";
          });
        </script>
      </body>
    </html>
    ';
    exit();
}
?>
