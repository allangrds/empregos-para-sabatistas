stop:
	docker stop $(docker ps -a -q)

rm:
	docker rm -f $(docker ps -a -q)

rmi:
	docker rmi -f $(docker images -a -q)

up:
	./vendor/bin/sail up

watch:
	npm run watch
