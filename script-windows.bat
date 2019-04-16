echo Iniciando o Docker
docker-compose up -d

echo 
docker exec -it bitzen-app composer install

echo Gerando key
docker exec -it bitzen-app php artisan key:generate

echo Executando Migrate/Seeds
docker exec -it bitzen-app php artisan migrate --seed