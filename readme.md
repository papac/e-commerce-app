## E Commerce App

This is e-commerce-app exemple make with [Bow Framework](https://github.com/bowphp) and Many Love.

## Installation

```bash
git clone https://github.com/papac/e-commerce-app
cd e-commerce-app
composer install
npm install
```

## Datase migration

```bash
cd e-commerce-app
php bow migration:migrate

php bow seed:table category
php bow seed:table users
php bow seed:table product
```

## Launch the server

```bash
php bow run:server --port=8000
```