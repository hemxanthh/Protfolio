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

      const BOT_TOKEN = '7738272732:AAGCWgTMzWeRR24Xpc5Hy23aqlAmkHR5mDU';
      const TELEGRAM_API = `https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`;
      const chat_id = '1331944827';

      const fullMessage = `📩 *New Portfolio Message:*\n\n👤 *Name:* ${name}\n📧 *Email:* ${email}\n💬 *Message:* ${message}`;

      fetch(TELEGRAM_API, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          chat_id: chat_id,
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
