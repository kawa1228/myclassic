# Memo
開発用備忘録

## Vue
```
$ docker exec -it myclassic-vuejs bash
```
### watch
```
$ docker exec -it myclassic-vuejs bash -c "cd /opt/src/app && yarn run build --watch"
```
## Laravel
```
$ docker exec -it myclassic-php bash
```
### migrate
```
# create migrate file
$ php artisan make:migration create_products_table
```
```
# run migrate
$ php artisan migrate
```
```
# run migrate refresh
$ php artisan migrate:refresh
```
### seeder
```
# create seeder file
php artisan make:seeder DatabaseUsersSeeder
```
```
# シーダクラスを書き上げたら、Composerのオートローダを再生成
composer dump-autoload
```
```
# run seeder
php artisan db:seed
```
### refresh migrate & seed
```
php artisan migrate:refresh --seed
```
