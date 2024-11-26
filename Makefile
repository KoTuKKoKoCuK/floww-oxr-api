.PHONY: setup

setup:
	cp .env-example .env
	docker-compose up -d
	docker-compose exec php composer install