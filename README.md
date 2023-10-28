# Развертование проекта

Подтянуть зависимости
```
composer i
```
Запуск контейнеров
```
docker compose up -d
```
Миграция производится в bash оболочке
```
<!-- Запуск bash -->
docker exec -it blog_app bash

<!-- Команда для миграции -->
php artisan migrate --seed
```
Адрес
```
http://localhost:8876/
```
