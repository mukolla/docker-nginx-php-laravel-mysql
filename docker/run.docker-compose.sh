#!/bin/bash
source .env
export PROJECT_NAME

log_message()
{
    LOG_PREFIX="[$(date '+%Y-%m-%d %H:%M:%S')][rebuild]"
    MESSAGE=$1
    echo "$LOG_PREFIX $MESSAGE"
}


log_message "Stopping containers..."
docker compose -p ${PROJECT_NAME} stop

log_message "Removing containers..."
docker compose -p ${PROJECT_NAME} rm -f

log_message "Starting containers..."
docker compose -p ${PROJECT_NAME} up -d --remove-orphans --build

#docker compose -p security_app stop
#docker compose -p security_app rm -f
#docker compose -p security_app up -d --remove-orphans --build
