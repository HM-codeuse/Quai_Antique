include .env
ifneq ("$(wildcard .env.local)","")
	include .env.local
endif

DOCKER=docker compose
COMPOSER=symfony composer
CONSOLE=@php bin/console
GIT=@git

help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9_-]+:.*?## .*$$)|(^## )' Makefile | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

cc:
	symfony console cache:clear

## —— Docker ————————————————————————————————————————————————————————————————
docker-up: ## Start the docker container
	$(DOCKER) up -d

docker-logs: ## List the docker containers
	$(DOCKER) logs -f

docker-ps: ## List the docker containers
	$(DOCKER) ps -a

docker-build: ## Build the docker container
	$(DOCKER) build

docker-down: ## down the stack
	$(DOCKER) down --remove-orphans

docker-sh: ## Connect to the docker container
	$(DOCKER) exec -it php zsh

docker-restart: docker-down docker-up docker-ps ## Reset the docker container