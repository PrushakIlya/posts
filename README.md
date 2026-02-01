## Run infrastructure:

1. **Copy environment file:**

```bash
cp .env.example .env
```

2. **Build and run Docker containers:**

```bash
run "docker compose build"
run "docker compose up -d" or "docker compose up"
```

3. **Install Node dependencies and build assets:**

```bash
npm i
npx webpack
```

4. **Install PHP dependencies:**

```bash
docker compose exec php composer install
```

5. **Run migrations and seed the database:**

```bash
docker exec -it php sh
php bin/console database:migration:migrate --up
php bin/console database:seed --class=CategorySeeder
php bin/console database:seed --class=PostSeeder
```