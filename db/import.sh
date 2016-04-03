#!/bin/bash
[[ -f ./env ]] || echo "./env  file not found" && exit 1
. ./env
docker exec phpdev-db mysql -u 'root' -p '$MYSQL_ROOT_PASSWORD' '$$MYSQL_DATABASE' < $1
