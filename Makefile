SHELL := /bin/bash # Use bash syntax
.PHONY: run in stop clean build mysql

# Configure environment.
# ----------------------

export TZ=America/Sao_Paulo
export USER_ID=$(shell id -u)
export GROUP_ID=$(shell id -g)

run:
	docker-compose run --service-ports --rm nginx

in:
	docker exec -it $(shell docker-compose ps -q app) /bin/bash

stop:
	docker-compose stop

clean:
	docker-compose down
	docker rmi nginx

mysql:
	docker exec -it drupal-db mysql -h localhost -u root -ppassword drupal

build:
	docker-compose build nginx

default: run