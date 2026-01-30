1.  Run infrastructure: 
    - run "docker compose build"
    - run "docker compose up -d" or "docker compose up"
2. Run "npm i"
3. RUN "composer i"
    - If you don't have composer locally installed You can run "docker exec -it php sh"
    - Run "cd web"
    - Run in the container "composer i"
4. DB has already been created!
6. Run to up the table "php bin/console database:migration:migrate --up"
   Run to drop the table "php bin/console database:migration:migrate --down"
7. Run to add fake data "php bin/console database:seed --class=CategorySeeder"
   Run to add fake data "php bin/console database:seed --class=PostSeeder"