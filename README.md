# Readme

## 概要

自分の作れるレシピを登録し、ある期間の献立を自動で作成できるアプリです。

## 環境構築

### 1.githubアカウントとの接続

TODO

### 2.clone

任意のディレクトリにて

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

