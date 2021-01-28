# make install
install:
	@docker run --rm -it -v$(PWD):/app composer install

# make tests
tests:
	@docker run --rm -it -v$(PWD):/app --workdir=/app php:8.0-cli-alpine vendor/bin/phpunit

# make commande
commande:
	@docker run --rm -it -v$(PWD):/app --workdir=/app php:8.0-cli-alpine php commande.php




.PHONY: install tests commande
