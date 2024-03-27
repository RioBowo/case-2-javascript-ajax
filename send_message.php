<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];

    if ($name && $message) {
        $newMessage = "<div class='message sender'><strong>$name:</strong> $message</div>";
        $filePath = __DIR__ . '/messages.txt';
        file_put_contents($filePath, $newMessage . PHP_EOL, FILE_APPEND);
    }
}
header("Location: index.php");
?>
