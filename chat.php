<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoRetro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="contact.html">Contact</a></li>
            <!-- Ajoutez d'autres éléments de menu si nécessaire -->
        </ul>
    </nav>
    <div class="container">
        <header>
            <h1>NeoRetro</h1
            <h2>Les discussions ne sont pas privées mais publiques <a href="CGU.html">En savoir plus...</a>
    </button>
        </header>
        
        <section id="chat-box">
            <?php include 'chat_messages.php'; ?>
        </section>
        <section id="message-form">
            <form action="post_message.php" method="post">
                <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo (max. 10 caractères)" minlength="3" maxlength="10" autocomplete="off" required>
                <input type="text" id="message-input" name="message" placeholder="Tapez votre message ici... (max. 120 caractères)" maxlenght="120" minlength="3" autocomplete="off" required>
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </div>
    <style>
        body{
            background-image: url('https://www.pngarts.com/files/11/Grid-PNG-Image-Background.png');
        }
        </style>
    <script>
       // Empêcher la saisie d'espaces dans le champ de pseudo
        document.getElementById('pseudo').addEventListener('keypress', function(event) {
            if (event.charCode === 32) {
                event.preventDefault();
        function validateForm() {
            var username = document.getElementById("username").value;
            // Supprimer les espaces avant et après le pseudo
            username = username.trim();
            if (username.length < 3) {
                alert("Le pseudo doit contenir au moins 3 caractères.");
                return false;
            }
            if (username.indexOf(" ") !== -1) {
                alert("Le pseudo ne peut pas contenir d'espaces.");
                return false;
            }
            return true;
        }
    </script>
    
    <script src="script.js"></script>
</body>
</html>