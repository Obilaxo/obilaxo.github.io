// Rafraîchir le chat toutes les 5 secondes
setInterval(refreshChat, 5000);

function refreshChat() {
    fetch('chat_messages.php')
        .then(response => response.text())
        .then(data => document.getElementById("chat-box").innerHTML = data);
}

document.addEventListener('copy', function(event) {
    event.preventDefault();
    alert("Copier le contenu n'est pas autorisé.");
});
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
var lastMessageTime = 0;
var minTimeBetweenMessages = 5000; // 5 secondes

function sendMessage() {
    var currentTime = new Date().getTime();
    if (currentTime - lastMessageTime < minTimeBetweenMessages) {
        alert("Veuillez patienter avant d'envoyer un autre message.");
        return false; // Empêcher l'envoi du message
    }
    lastMessageTime = currentTime;
    // Envoyer le message
}
