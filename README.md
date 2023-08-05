## 書籍管理Webアプリ
このアプリはLaravel10をベースに作られている．ローカルで動かすためには以下のコマンドを実行する必要がある．

適当なディレクトリを作成し（c:\laravelなど）そこに作業ディレクトリを移動
git clone https://github.com/YoshiyukiKido/Bookmanager.git

cd Bookmanager
composer update
composer install
npm install
npm run dev

次に環境の設定を行う必要がある
cp .env.example .env
を行い，.envにデータベースなどの情報を入力する．

