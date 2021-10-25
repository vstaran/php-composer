# PHP Advanced - Composser

В своем скрипте использовать готовую библиотеку.

## Основные команды

- init - инициализирует новый composer проект и генерует composer.json файла

```sh
composer init
```

- install - читает файл composer.json, разрешает зависимости и ставит их в директорию vendor, генерирует файл composer.lock

```sh
composer install
```

- update - обновляет пакеты и файл composer.lock

```sh
composer update
```

- required - добавляет новые зависимости в composer.json и устанавливает их

```sh
composer require laravel/laravel
```


- remove - удаляет зависимости

```sh
composer remove laravel/laravel
```


- dump-autoload - обновляет автозагрузчик классов

```sh
composer dump-autoload
```


- show --installed - список установленных пакетов с описанием

```sh
show --installed
```


## Подключение свих классов и файлов

Для Автозагрузки добавить в composer.json 

```json
"autoload": {
        "psr-4": {
            "Src\\": "src/"
        }
    },
```