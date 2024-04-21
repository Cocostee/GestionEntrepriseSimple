# GESTION ENTREPRISE SIMPLE
## Docker

Creates the .env file inside server folder (uses .env.exmaple as reference)

```yaml
# File: server/.env

DOCKER_NAME = 'ges'
WEBSERVER_PORT = 8089
MYSQL_DATABASE = 'database'
MYSQL_USER = 'user'
MYSQL_PASSWORD = 'password'
MYSQL_ROOT_PASSWORD = 'root_password'
```

```bash
# Terminal
docker compose -f server/docker-compose.yaml up -d
```

## Installation

To get startted, you need to download vendor using the following commands:

```bash
# Terminal
docker exec -it ges_php composer install
docker exec -it ges_php bin/console d:m:m
```