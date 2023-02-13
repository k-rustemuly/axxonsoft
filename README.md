Запуск
```sh
php artisan serve --port=8080
```

1. Построить "деревовидную" структуру
```sh
curl --location --request POST 'localhost:8080/api/tree' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--data-raw '{
    "array" : [
        {
            "id" : 1,
            "parent_id" : 0
        },
        {
            "id" : 2,
            "parent_id" : 0
        },
        {
            "id" : 3,
            "parent_id" : 1
        },
        {
            "id" : 4,
            "parent_id" : 1
        },
        {
            "id" : 5,
            "parent_id" : 3
        }
    ]
}'
```

2.Необходимо конвертировать чиcло в excel координату колонки.
```sh
curl --location --request GET 'http://localhost:8080/api/excel?index=26'
```
