FORKED FROM [aschmelyun/docker-compose-laravel](https://github.com/aschmelyun/docker-compose-laravel)

# how to use
- `1. git clone https://github.com/ndarproj/docker-laravel-php-postgres`
- `2. add your existing .env or you may the use default .env from laravel`
--- *docker **db/redis/mail/nginx ports**, **app name** and **db username/password** will depend on your ./src/.env file`**
- `4. docker-compose --env-file ./src/.env up -d --build site`

Exposed ports based from ./src/.env ( i will be using .env_example as a sample)
- **app_name** - `Laravel` (APP_NAME) 
- **nginx** - `:801` (NGINX_PORT) 
- **pgsql** - `:33061` (DB_PORT)
- **php** - `:9000`
- **redis** - `:63791` (REDIS_PORT)
- **mailhog** - `:10251` (MAIL_PORT)