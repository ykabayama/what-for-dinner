# Readme

## 概要

自分の作れるレシピを登録し、ある期間の献立を自動で作成できるアプリです。

## 開発環境

```
$ php artisan -V
Laravel Framework 10.23.1

$ php -v
PHP 8.2.11 (cli) (built: Oct  6 2023 09:47:18) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.11, Copyright (c) Zend Technologies
    with Zend OPcache v8.2.11, Copyright (c), by Zend Technologies
    with Xdebug v3.2.1, Copyright (c) 2002-2023, by Derick Rethans

$ composer -v
Composer version 2.6.5 2023-10-06 10:11:52
```
## 環境構築

vscodeでdockerコンテナー内での作業するための環境を構築する（windows）

### 前提条件

- windows & wsl2 & docker
- WSL2上でdockerが使用できる状態が前提

### 1. clone

wsl ubuntuのhomeディレクトリ

```
git clone https://github.com/ykabayama/what-for-dinner.git
```

```
cd what-for-dinner
```

### 2. envファイルの準備

```
cp .env.example .env
```

### 3. vender等のインストール

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

### 4. コンテナ立ち上げ

```
./vendor/bin/sail up -d
```

またはエイリアスを登録している場合は下記
```
sail up -d
```

### 5. 開発コンテナにvscodeでアタッチ

プロジェクトルート上で (`~/what-for-dinner`)

```
code .
```

vscode上で ` Shift + Ctrl + p` でパネルを開き、下記を検索する
```
Dev container attach
```

「`what-for-dinner-laravel.test-1`」を選択しアタッチする

### 6. npm install

```
npm install
```

### 7. マイグレーション

```
php artisan migrate
```

必要に応じて、seederを利用

```
php artisan db:seed
```

### 8. Vite 開発サーバを起動

```
npm run dev
```

### 9. 確認

```
http://localhost/
```

### 10. 静的解析の確認

ルートディレクトリで下記を実施
```
./vendor/bin/phpstan analyse
```
または、
```
npm run larastan
```