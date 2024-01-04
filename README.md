Premièrement tu dois savoir que les bots telegram sont différents de WhatsApp autoreponder etc.... qui répondent seulement quand t'as la connexion ouvert.

Telegram lui ses bots sont et reste enligne même quand t'as était banni

Pour créer un bot telegram première de chose tu va aller sur father bot pour créer ton bot

Et lorsque tu va créer ton bot , tu peux lui donner des paramètres par défaut exemple, son nom, sa description, sa bio ou sa photo de profil

Par là t'as le bot créer prêt à travailler.

Pour maintenant commencer à travailler avec lui, tu dois aller sur le bot father et demander le token de ton bot.

C'est grâce à ce token que tu peux manipuler ton bot, grâce à ce token tu va pouvoir utiliser ton bot hors telegram on peut dire.

Voilà, cherche un espace dans ton serveur, tu peux créer répertoire nommé "mon_bot_telegram" et à l'intérieur tu crée un fichier nommé exemple "main.php"

On va utiliser le webhook de telegram pour confirmer que ton fichier est rattaché à votre bot telegram, pour ça il faut envoyer ceci dans n'importe quel navigateur : https://api.telegram.org/bot<<ici ton token>>/setWebhook?url=<<ici ton lien de fichier>>

et si tout est bien la réponse sera :

{
	"ok": true,
	"result": true,
	"description": "Webhook was set"
}

C'est qui veut dire oui, mon bot est relier à mon fichier (qui sera notre cerveau du bot)
