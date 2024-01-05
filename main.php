<?php
// URL de base pour l'API Telegram avec le token
$telegramApiUrl = "https://api.telegram.org/bot<<ici on va mettre le token>>";

// Récupération des données de mise à jour depuis l'entrée PHP
$update = json_decode(file_get_contents("php://input"), TRUE);

// Extraction des informations de l'utilisateur et du message
$user = $update["message"]["from"]["first_name"];
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$type = $update["message"]["chat"]["type"];
$messageId = $update["message"]["message_id"];

// Notification de l'utilisateur que le bot est en train de taper
file_get_contents($telegramApiUrl."/sendChatAction?chat_id=".$chatId."&action=typing");

// Vérification si le message est "/start"
if (strtolower($message) == "/start") {
    // Envoi d'une image
    $sendImage = "https://www.newinformatique24.com/bots/telegram/mokambi/start.jpg";
    file_get_contents($telegramApiUrl."/sendPhoto?chat_id=".$chatId."&photo=".$sendImage);

    // Envoi d'un message de bienvenue
    $welcomeMessage = "🌹🌷 Bienvenue ".$user." 🌷🌹\n\n Je suis Mokambi 🧞‍♂️, un bot conçu par Henry Fiti et Geekcold !\n\n Je vais être votre messager 🧑‍💻 pour le site New Informatique 24 et d'autres conçus par Geekcold. Pour plus d’infos, faites /infos et je vous aiderai !\n\n🎋 Merci !";

    // Construction de l'URL pour envoyer le message sur Telegram
    $sendMessageUrl = $telegramApiUrl."/sendmessage?chat_id=".$chatId."&text=".urlencode($welcomeMessage);
    
    // Envoi du message de bienvenue
    file_get_contents($sendMessageUrl);
}
// Ajouter ici d'autres filtres
?>
