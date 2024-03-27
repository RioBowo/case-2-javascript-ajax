<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatMingle</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="nature-background"></div>
        <div class="chat-container">
            <div class="chat-header">
                <a href="#" class="toggle-chat"><i class="fas fa-comments"></i></a>
            </div>
            <div class="chat-box" id="chat-box">
                <h2>ChatMingle</h2>
                <div class="messages">
                    <?php include 'load_messages.php'; ?>
                </div>
                <form id="chat-form" action="send_message.php" method="post">
                    <input type="text" id="name" name="name" placeholder="Your Name...">
                    <input type="text" id="message" name="message" placeholder="Type a message...">
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
