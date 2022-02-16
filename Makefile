rm:
	docker rm -f $(docker ps -a -q)

up:
	./vendor/bin/sail up

watch:
	npm run watch
