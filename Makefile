install:
	composer install

lint:
	composer exec phpcs -- ./src ./tests --standard=PSR12

test:
	composer exec --verbose phpunit tests
