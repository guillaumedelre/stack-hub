# define standard colors
BLACK        := $(shell tput -Txterm setaf 0)
RED          := $(shell tput -Txterm setaf 1)
GREEN        := $(shell tput -Txterm setaf 2)
YELLOW       := $(shell tput -Txterm setaf 3)
PURPLE   	 := $(shell tput -Txterm setaf 4)
PURPLE       := $(shell tput -Txterm setaf 5)
BLUE         := $(shell tput -Txterm setaf 6)
WHITE        := $(shell tput -Txterm setaf 7)
RESET 		 := $(shell tput -Txterm sgr0)

DOCKER_COMPOSE  = docker-compose
EXEC_PHP        = $(DOCKER_COMPOSE) exec php
SYMFONY         = $(EXEC_PHP) bin/console
COMPOSER        = $(EXEC_PHP) composer

##
## Docker
## -------
##

dcd: ## Stop the docker composition
	@echo "${PURPLE}Sending SIGKILL to the containers${RESET}\n"
	$(DOCKER_COMPOSE) kill
	@echo "${PURPLE}Stopping docker composition, removing volumes and orphans${RESET}\n"
	$(DOCKER_COMPOSE) -f docker-compose.yml -f docker-compose.override.yml down --volumes --remove-orphans

dcb: ## Build the docker image
	@echo "${PURPLE}Building and starting docker composition${RESET}\n"
	$(DOCKER_COMPOSE) -f docker-compose.yml -f docker-compose.override.yml up -d --remove-orphans --build --force-recreate

dcup: ## Start the docker composition
	@echo "${PURPLE}Starting docker composition${RESET}\n"
	$(DOCKER_COMPOSE) -f docker-compose.yml -f docker-compose.override.yml up -d --remove-orphans --no-recreate

dcps: ## List the docker composition services
	@echo "${PURPLE}Listing docker composition services${RESET}\n"
	$(DOCKER_COMPOSE) ps

.PHONY: dcd dcb dcup dcps

.DEFAULT_GOAL := help
help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
.PHONY: help
