<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Hemanth</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      color: white;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    @keyframes gradientBG {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    .contact-container {
      width: 90%;
      max-width: 600px;
      padding: 30px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: 0.3s ease;
    }

    .contact-container h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 25px;
      color: #00e0ff;
      text-shadow: 0 0 10px #00e0ff88;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #eee;
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: none;
      background-color: rgba(255, 255, 255, 0.08);
      color: #fff;
      font-size: 1rem;
      outline: none;
      transition: 0.3s ease;
    }

    input:focus, textarea:focus {
      background-color: rgba(255, 255, 255, 0.15);
      box-shadow: 0 0 12px #00bfff;
    }

    button {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(45deg, #00bfff, #0072ff);
      color: white;
      font-size: 1.1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s;
    }

    button:hover {
      transform: scale(1.03);
      background: linear-gradient(45deg, #0072ff, #00bfff);
    }

    .form-message {
      margin-top: 20px;
      text-align: center;
      font-size: 1rem;
      color: #ffcc00;
    }

    @media (max-width: 600px) {
      .contact-container h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

<div class="contact-container">
  <h1>Contact Me</h1>
  <!-- Formspree integration -->
  <form action="https://formspree.io/f/xyzwgpgz" method="POST">
    <div class="form-group">
      <label for="name">Your Name:</label>
      <input type="text" name="name" id="name" required>
    </div>
    
    <div class="form-group">
      <label for="email">Your Email:</label>
      <input type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
      <label for="message">Your Message:</label>
      <textarea name="message" id="message" rows="4" required></textarea>
    </div>

    <button type="submit">🚀 Send Message</button>
  </form>

  <div class="form-message">
    <!-- Success or error messages will be shown here -->
  </div>
</div>

</body>
</html>
