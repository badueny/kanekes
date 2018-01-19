# Kanekes

Kanekes is one of laravel base theme for bantenprov application.

## Release

| Release   | Description                          |
|-----------|--------------------------------------|
| v0.1.0    | init project                         |
| v0.2.0    | add admin page                       |
| v0.2.1    | enhancement with componen            |
| v0.3.0    | Add sign-in and sign-up page starter |
| v0.3.1    | Redesign login and register page     |
| v0.3.2    | Redesign layout and head             |
| dev       | experimantal - very unstable         |
| alpha     | development alpha stage              |
| master    | master branch                        |

## How to install

```
$ composer create-project bantenprov/kanekes:"0.3.2"
```

### Update config/app.php

```php
// config/app.php

'providers' => [
    '...',
    Eusonlito\LaravelMeta\MetaServiceProvider::class,
];

'aliases' => [
    '...',
    'Meta'    => Eusonlito\LaravelMeta\Facade::class,
];
```

### publish the package's assets to public folder

```php
$ php artisan vendor:publish --provider="Eusonlito\LaravelMeta\MetaServiceProvider"
```
### npm
- install npm in your doc root
```sh
$ npm install
```
- in your development stage
```sh
$ npm run dev
```
- in your production stage
```sh
$ npm run prod
```

## Feature:

- Bootstrap [twbs/bootstrap](https://github.com/twbs/bootstrap/).
- Metatag from [eusonlito/laravel-Meta](https://github.com/eusonlito/laravel-Meta).
- Schema.org from [spatie/schema-org](https://github.com/spatie/schema-org).
