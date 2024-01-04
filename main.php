<?php
$path = "https://api.telegram.org/bot<<ici on va mettre le token>>";
$update = json_decode(file_get_contents("php://input"), TRUE);

// ici on récolte les informations de l'utilisateur qui vient d'envoyer le message à notre bot
$user = $update["message"]["from"]["first_name"];
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$type = $update["message"]["chat"]["type"];
$message_id = $update["message"]["message_id"];


file_get_contents($path."/sendChatAction?chat_id=".$chatId."&action=typing");

if(strtolower($message) == "/start"){
  // envoi image
  $send_image = "https://www.newinformatique24.com/bots/telegram/mokambi/start.jpg";
  file_get_contents($path."/sendPhoto?chat_id=".$chatId."&photo=".$send_image);

  // envoi message
  $send_message = "🌹🌷 Bienvenue ".$user." 🌷🌹\n\n Je suis Mokambi 🧞‍♂️, un bot conçu par Henry Fiti et Geekcold !\n\n Je vais être votre messagier🧑‍💻 pour le site New Informatique 24 et ceux d’autres conçu par Geekcold. pour plus d’infos, faites /infos et je vous aiderai !\n\n🎋 Merci !";

  // l'URL d'envoi sur telegram
  $url = $path."/sendmessage?chat_id=".$chatId."&text=". urlencode($send_message);
  file_get_contents($url);
} 
