#!/bin/bash

### クイックスタート用シェルスクリプト ###
# コンテナが存在する場合は処理を中断する
# -f をオプションで指定すると、コンテナの状態に関わらず強制再起動する

# エラー発生時、未定義変数使用時は処理を中断するよう設定
set -eu
# dockerディレクトリへ移動
cd docker
# コンテナ強制再実行用オプション
RECREATE_OPTION=""
# オプションに -f が指定されているかどうか
if [ $# -gt 0 ] && [ $1 = "-f" ];
    then
        # オプションが設定されている場合、コンテナの強制再起動用オプションコマンドを設定
        RECREATE_OPTION="--force-recreate"

    else
        # オプションなしの場合、コンテナの存在確認を実行
        echo "--- Checking Container States... ---"
        # コンテナ一覧を取得し、ヘッダー部を含めた行数をSERVICE_LISTへ格納
        SERVICE_LIST=`docker-compose ps | wc -l`
        # コンテナが存在する（ヘッダー部以上の行数が存在する）場合
        if [ $SERVICE_LIST -gt 2 ]; then
            # 実行中プロセスが存在する場合、処理を中断
            echo "Error: Containers is Existing. For Starting My-classic, Please Use 'docker-compose up -d' Or Use Option '-f'"
            exit 0;
        fi
fi
# 実行中プロセスが存在しない場合、My-classicの立ち上げ処理を実行
echo "--- My-classic is Starting ---"
# Dockerビルド・起動
# 1. 各Dockerイメージのビルド
echo "--- Containers is Building ---"
docker-compose build --no-cache
# 2. 各Dockerコンテナ起動 & デーモン立ち上げ
echo "--- Containers is Starting ---"
docker-compose up -d $RECREATE_OPTION
# 3. Dockerコンテナの立ち上げリスト表示
echo "--- Containers is Running ---"
docker-compose ps

# Laravelの初期処理
# my-classic-php コンテナプロセスへアタッチし、下記コマンドを実行
# 1. /opt/src/app に移動
# 2. 環境設定ファイルをコピー
# 3. composer.jsonをもとにLaravel のライブラリインストール
# 4. データベースの初期化
echo "--- my-classic-php is Initializing ---"
docker exec -it my-classic-php bash -c "
cd app;
cp .env.example .env;
composer install;
php artisan migrate:refresh --seed"
# Vue.jsの初期処理
# my-classic-vuejs コンテナプロセスへアタッチし、下記コマンドを実行
# 1. /opt/src/app に移動
# 2. package.jsonをもとにライブラリのインストール実行
# 3. Vue.jsのビルド処理　＆　ソース変更監視処理実行
echo "--- my-classic-vuejs is Initializing ---"
docker exec -it my-classic-vuejs bash -c "
cd app;
yarn;
yarn run build"

# http://localhost/# で My-classicを立ち上げている旨を表示
echo "My-classic is running at http://localhost/#/"
