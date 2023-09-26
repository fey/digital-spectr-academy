install:
	composer install

lint:
	composer exec phpcs -- ./src --standard=PSR12

test:
	composer exec --verbose phpunit tests
