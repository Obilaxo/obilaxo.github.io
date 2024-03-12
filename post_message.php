<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
    
    if (!empty($pseudo) && !empty($message)) {
        $heure = date("H:i");
        $messageWithTime = "[$heure] $pseudo: $message";
        
        $chat_file = 'chat.txt';
        $file = fopen($chat_file, "a");
        if ($file) {
            fwrite($file, htmlspecialchars($messageWithTime) . PHP_EOL);
            fclose($file);
        }
    }
    header("Location: chat.php");
    exit();
}
?>
