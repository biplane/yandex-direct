CLI_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
$(eval $(sort $(subst :,\:,$(CLI_ARGS))):;@:)

##
## Build
## -----

clear: ## Remove auto-generated code
	@rm -rf ../src/Api/V4/Contract
	@rm -rf ../src/Api/V5/Contract
.PHONY: clear

generate: clear ## Generate contracts from WSDL
	php bin/console generate $(CLI_ARGS)
	php vendor/bin/rector
.PHONY: generate

##
## Tools
## -----

cs-check: ## Check code style
	composer cs-check $(CLI_ARGS)
.PHONY: cs-check

cs-fix: ## Fix code style issues
	composer cs-fix $(CLI_ARGS)
.PHONY: cs-fix

psalm: ## Run static code analyzer
	composer analyse $(CLI_ARGS)
.PHONY: psalm

test: ## Run tests
	composer test $(CLI_ARGS)
.PHONY: test

qa: cs-check psalm test ## Run all checks
.PHONY: qa

# -----

help:
	@awk ' \
		BEGIN {RS=""; FS="\n"} \
		function printCommand(line) { \
			split(line, command, ":.*?## "); \
        	printf "\033[32m%-28s\033[0m %s\n", command[1], command[2]; \
        } \
		/^[0-9a-zA-Z_-]+: [0-9a-zA-Z_-]+\n[0-9a-zA-Z_-]+: .*?##.*$$/ { \
			split($$1, alias, ": "); \
			sub(alias[2] ":", alias[2] " (" alias[1] "):", $$2); \
			printCommand($$2); \
			next; \
		} \
		$$1 ~ /^[0-9a-zA-Z_-]+: .*?##/ { \
			printCommand($$1); \
			next; \
		} \
		/^##(\n##.*)+$$/ { \
			gsub("## ?", "\033[33m", $$0); \
			print $$0; \
			next; \
		} \
	' $(MAKEFILE_LIST) && printf "\033[0m"
.PHONY: help

.DEFAULT_GOAL := help
