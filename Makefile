test:
	php artisan db:wipe
	php artisan migrate
	php artisan db:seed

custom-composer-install:
	# DB_HOST=127.0.0.1 composer require honeystone/laravel-seo