# Readme

## 概要

自分の作れるレシピを登録し、ある期間の献立を自動で作成できるアプリです。

## 環境構築

vscodeでdockerコンテナー内での作業するための環境を構築する（windows）
WSL2上でdockerが使用できる状態が前提

## 環境

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

### 1.githubアカウントとの接続

TODO

### 2.clone

ubuntuのhomeディレクトリ

```
git clone https://github.com/ykabayama/what-for-dinner.git
```

```
cd what-for-dinner
```

vender等のインストール
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

```
./vendor/bin/sail up
```

エイリアスを登録している場合は
```
sail up -d
```

### 開発コンテナにvscodeでアタッチ

プロジェクトルート上で (`~/what-for-dinner`)

```
code .
```

vscode上で ` Shift + Ctrl + p` でパネルを開き、下記を検索する
```
Dev container attach
```

「 what-for-dinner-laravel.test-1」を選択しアタッチする

アタッチ後、Vite 開発サーバを起動
```
npm run dev
```

### 静的解析

ルートディレクトリで下記を実施
```
./vendor/bin/phpstan analyse
```
