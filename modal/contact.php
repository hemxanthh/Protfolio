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
      background-color: #1c1c1c;
      color: white;
      margin: 0;
      padding: 0;
    }

    .contact-container {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #333;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .contact-container h1 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #444;
      background-color: #222;
      color: white;
      font-size: 1rem;
    }

    input:focus, textarea:focus {
      border-color: #00bfff;
      outline: none;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #00bfff;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #008cba;
    }

    .form-message {
      margin-top: 20px;
      text-align: center;
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

    <button type="submit">Send Message</button>
  </form>

  <div class="form-message">
    <!-- Success or error messages will be shown here -->
  </div>
</div>

</body>
</html>
