Pasos para iniciar el proyecto
--------------------------------
1)docker-compose up -d --build
2)docker-compose exec prueba-back composer install
3)docker-compose exec prueba-back php artisan migrate
4)docker-compose exec prueba-back php artisan db:seed