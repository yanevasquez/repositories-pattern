
#### repositories

##### 1. Configure parameters in .env
```
cp .env.example .env
```

```
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=postgres
PGUSER=postgres
```
##### 2. Build a container:

```sh
docker-compose up --build && docker-compose up
```
##### 3. Run migrations and seeders:
```sh
composer migraseeds
```

##### 4. Running at:
```sh
http://localhost:8000

```
....
