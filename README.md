# Readme

## 概要

自分の作れるレシピを登録し、ある期間の献立を自動で作成できるアプリです。

## 環境構築

vscodeでdockerコンテナー内での作業するための環境を構築する（windows）
WSL2上でdockerが使用できる状態が前提

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
