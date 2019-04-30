@echo off
docker run --rm -it -v %cd%:/app php:7.2-cli %*