test:
	DB_HOST=127.0.0.1 php artisan db:wipe
	DB_HOST=127.0.0.1 php artisan migrate
	DB_HOST=127.0.0.1 php artisan db:seed