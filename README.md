<h1>C'est quoi un bot telegram ?</h1>

<p>Premièrement tu dois savoir que les bots telegram sont différents de WhatsApp autoreponder etc.... qui répondent seulement quand t'as la connexion ouvert.</p>

<p>Telegram lui ses bots sont et reste enligne même quand t'as était banni</p>

<h1>Comment Créer un bot telegram ?</h1>

<p>Pour créer un bot telegram première de chose tu va aller sur father bot pour créer ton bot</p>

<p>Et lorsque tu va créer ton bot , tu peux lui donner des paramètres par défaut exemple, son nom, sa description, sa bio ou sa photo de profil</p>

<p>Par là t'as le bot créer prêt à travailler.</p>

<p>Pour maintenant commencer à travailler avec lui, tu dois aller sur le bot father et demander le token de ton bot.</p>

<p>C'est grâce à ce token que tu peux manipuler ton bot, grâce à ce token tu va pouvoir utiliser ton bot hors telegram on peut dire.</p>

<p>Voilà, cherche un espace dans ton serveur, tu peux créer répertoire nommé "mon_bot_telegram" et à l'intérieur tu crée un fichier nommé exemple "main.php"</p>

<p>On va utiliser le webhook de telegram pour confirmer que ton fichier est rattaché à votre bot telegram, pour ça il faut envoyer ceci dans n'importe quel navigateur : https://api.telegram.org/bot-ici-ton-token/setWebhook?url=ici-ton-lien-de-fichier</p>

<p>exemple : https://api.telegram.org/bot6271740563:AAEdUm4Smyu4TpFqrQwbpTTMOeVozkDT-8/setWebhook?url=https://newinformatique24.com/bots/telegram/brain.php</p>

<p>et si tout est bien la réponse sera :</p>

<pre>{
	"ok": true,
	"result": true,
	"description": "Webhook was set"
}</pre>

<p>C'est qui veut dire oui, mon bot est relier à mon fichier (qui sera notre cerveau du bot)</p>
