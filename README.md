## 書籍管理Webアプリ
このアプリはLaravel10をベースに作られている．ローカルで動かすためには以下のコマンドを実行する必要がある．

適当なディレクトリを作成し（c:\laravelなど）そこに作業ディレクトリを移動
```shell
git clone https://github.com/YoshiyukiKido/Bookmanager.git
cd Bookmanager
composer update
composer install
npm install
npm run dev
```

次に環境の設定を行う必要がある
```
cp .env.example .env
```
を行い，.envにデータベースなどの情報を入力する．特に以下の箇所は変更する必要がある
```enviroment:.env
APP_URL=http://127.0.0.1

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=bookmanager
DB_USERNAME=root
DB_PASSWORD=
```
このサンプルはlocalhost上のMySQLサーバにデータベースbookmanagerがあるという設定なため，bookmanagerデータベースを作成しておく必要がある．
```
mysql -u root -p
create database bookmanager;
```

次にデータベースへのテーブル作成をlaravelのコマンドで行う必要がある．そのごseederを利用してテストデータ（categoryテーブルのみ）を挿入する
```shell
php artisan migrate
php artisan db:seed --class Categories
```

