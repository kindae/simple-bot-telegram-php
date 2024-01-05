# Qu'est-ce qu'un Bot Telegram ?

Les Bots Telegram se distinguent des répondeurs automatiques de WhatsApp, etc., car ils peuvent rester actifs même après un bannissement.

# Comment Créer un Bot Telegram avec Bot Father ?

- Pour des détails sur la création, vous pouvez consulter le guide complet [ici](https://www.codingteam.tech/2022/03/creer-un-bot-telegram-partie-1.html).
- Une fois votre bot créé, il sera prêt à être utilisé.
- Copiez le token de votre bot (essentiel pour le manipuler).
- Créez un espace sur votre serveur, par exemple, un répertoire nommé "mon_bot_telegram". À l'intérieur, créez un fichier, par exemple, "main.php", en copiant le contenu qui se trouve sur le fichier main.php du [repo](https://github.com/kindae/simple-bot-telegram-php).
- À la ligne 2 du fichier "main.php", remplacez <<ici on va mettre le token>> par votre token de bot. Le code devrait ressembler à ceci :
```php
$path = "https://api.telegram.org/bot<your-token>";
```
# Configuration du Webhook pour un Bot Telegram

Pour configurer le Webhook de votre Bot Telegram, utilisez la structure suivante :

```curl
https://api.telegram.org/bot<ton-token>/setWebhook?url=<lien-de-votre-serveur>
```

Si la configuration est correcte, la réponse JSON sera la suivante :
```json
{
    "ok": true,
    "result": true,
    "description": "Webhook was set"
}
```

*Assurez-vous de remplacer <ton-token> par le token de votre bot et <lien-de-votre-serveur> par le lien de votre serveur où le fichier "main.php" est hébergé.*

