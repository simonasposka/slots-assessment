install: composer.json composer.lock
	composer validate
	composer install

tests-unit:
	./vendor/bin/phpunit --bootstrap vendor/autoload.php --configuration ./phpunit.xml --no-coverage

