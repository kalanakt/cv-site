<h3>Reveal Config Vars</h3>

* `BOT_TOKEN`: Create a bot using [@BotFather](https://telegram.dog/BotFather), and get the Telegram API token.
* `API_ID`: Get this value from [telegram.org](https://my.telegram.org/apps)
* `API_HASH`: Get this value from [telegram.org](https://my.telegram.org/apps) 
* `HEROKU_API_KEY`: To check dyno status. Go to https://dashboard.heroku.com/account, scroll down and press Reveal API
* `CHANNELS`: Username or ID of channel or group. Separate multiple IDs by space`
* `ADMINS`: Username or ID of Admin. Separate multiple Admins by space
* `PICS`: Add some telegraph link of pictures ( Multiple images can be used separated by space )
* `LOG_CHANNEL`: A channel to log the activities of bot. Make sure bot is an admin in the channel.
* `SUPPORT_CHAT`: Username of a Support Group / ADMIN. ( Should be username without @ and not ID
* `AUTH_CHANNEL`: ID of channel.Make sure bot is admin in this channel. Without subscribing this channel users cannot use bot.
* `USE_CAPTION_FILTER`: Whether bot should use captions to improve search results. (True False)
* `CUSTOM_FILE_CAPTION`: A custom file caption for your files. formatable with , file_name, file_caption, file_size, Read Readme.md for better understanding.
* `DATABASE_URI`: [mongoDB](https://www.mongodb.com) URI. Get this value from [mongoDB](https://www.mongodb.com). For more help watch this [video](https://youtu.be/1G1XwEOnxxo)
* `DATABASE_NAME`: Name of the database in [mongoDB](https://www.mongodb.com). For more help watch this [video](https://youtu.be/1G1XwEOnxxo)
* `COLLECTION_NAME`: Name of the collections. Defaults to Telegram_files. If you are using the same database, then use different collection name for each bot
* `FILE_STORE_CHANNEL`: Channel from were file store links of posts should be made.Separate multiple IDs by space
* `CACHE_TIME`: The maximum amount of time in seconds that the result of the inline query may be cached on the server
