.PHONY: build up bash down restart logs clean

# イメージをビルド
build:
	docker-compose build

# コンテナを起動
up:
	docker-compose up -d

# コンテナでコマンドを実行 (ディレクトリ指定付き)
bash:
	docker-compose exec php-apache /bin/bash -c "cd /var/www && exec bash"

# コンテナを停止
down:
	docker-compose down

# コンテナを再起動
restart:
	docker-compose down && docker-compose up -d

# ログを表示
logs:
	docker-compose logs -f

# コンテナと関連するボリュームを削除
clean:
	docker-compose down --volumes --rmi all
