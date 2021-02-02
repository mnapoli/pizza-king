# make install
install:
	@docker run --rm -it -v$(PWD):/app composer install

# make tests
tests:
	@docker run --rm -it -v$(PWD):/app --workdir=/app php:8.0-cli-alpine vendor/bin/phpunit

# make website
website:
	@docker run --rm -it -v$(PWD):/app --workdir=/app -p8000:8000 php:8.0-cli-alpine php -S 0.0.0.0:8000 -t public


.PHONY: install tests website
