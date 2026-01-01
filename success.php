<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Sent Successfully</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      background: #fff;
      padding: 40px;
      border-radius: 16px;
      text-align: center;
      box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
      max-width: 500px;
      animation: fadeIn 1s ease-in-out;
    }
    .card h1 {
      color: #4facfe;
      margin-bottom: 10px;
    }
    .card p {
      color: #555;
      margin-bottom: 20px;
      font-size: 16px;
    }
    .card a {
      display: inline-block;
      padding: 12px 24px;
      background: #4facfe;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }
    .card a:hover {
      background: #00c6ff;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .checkmark {
      font-size: 60px;
      color: #4caf50;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="checkmark">✔</div>
    <h1>Thank You!</h1>
    <p>Your message has been sent successfully. We’ll get back to you soon.</p>
    <a href="index.html">Go Back to Home</a>
  </div>
</body>
</html>
