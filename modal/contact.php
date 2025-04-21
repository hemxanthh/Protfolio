<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
</head>
<body>

  <h2>Contact Me</h2>

  <form id="contact-form" onsubmit="sendToTelegram(event)">
    <input type="text" id="name" placeholder="Your Name" required><br><br>
    <input type="email" id="email" placeholder="Your Email" required><br><br>
    <textarea id="message" placeholder="Your Message" required></textarea><br><br>
    <button type="submit">Send Message</button>
  </form>

  <script>
    function sendToTelegram(event) {
      event.preventDefault();

      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;

      const BOT_TOKEN = '7582970568:AAE7hfwXDPQYKm0q3WWAvBIix2ffWuabtuQ';
      const CHAT_ID = '1331944827';
      const TELEGRAM_API = `https://api.telegram.org/bot${7582970568:AAE7hfwXDPQYKm0q3WWAvBIix2ffWuabtuQ}/sendMessage`;

      const fullMessage = `📩 *New Portfolio Message:*\n\n👤 *Name:* ${name}\n📧 *Email:* ${email}\n💬 *Message:* ${message}`;

      fetch(TELEGRAM_API, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          chat_id: CHAT_ID,
          text: fullMessage,
          parse_mode: "Markdown"
        })
      })
      .then(response => {
        if (response.ok) {
          alert('✅ Message sent to Telegram!');
          document.getElementById('contact-form').reset();
        } else {
          alert('❌ Failed to send message.');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('⚠️ Something went wrong. Please try again.');
      });
    }
  </script>

</body>
</html>
