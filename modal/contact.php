<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
</head>
<body>

  <h2>Contact Me</h2>

  <!-- Your form -->
  // Telegram bot configuration
    const BOT_TOKEN = '7582970568:AAE7hfwXDPQYKm0q3WWAvBIix2ffWuabtuQ';
    const CHAT_ID = '1331944827';
    const MESSAGE = `Name: ${form.name}\nEmail: ${form.email}\nMessage: ${form.message}`;

    // Send the message via Telegram API
    fetch(`https://api.telegram.org/bot<7582970568:AAE7hfwXDPQYKm0q3WWAvBIix2ffWuabtuQ>/sendMessage `, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        chat_id: CHAT_ID,
        text: MESSAGE,
      }),
    })
      .then((response) => {
        if (response.ok) {
          setLoading(false);
          alert('Thank you. I will get back to you as soon as possible.');
          setForm({
            name: '',
            email: '',
            message: '',
          });
        } else {
          throw new Error('Failed to send message.');
        }
      })
      .catch((error) => {
        setLoading(false);
        console.error(error);
        alert('Something went wrong. Please try again.');
      });
  };

  </script>

</body>
</html>
