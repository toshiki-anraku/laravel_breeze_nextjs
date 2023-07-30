# ToDo

-   [Laravel プロジェクトの初期設定](https://qiita.com/ucan-lab/items/8eab84e37421f907dea0) で追加した各種ツール類の説明を追加
-   API 定義書の自動生成ツール導入
-   GitHub のリポジトリの各種設定
-   GitHub Actions CI 設定
-   クリーンアーキテクチャ、DDD の導入
-   Docs フォルダの作成
-   テーブル定義書の自動生成ツールの導入

# 概要

Laravel Breeze を利用した API。開発環境では Laravel Sail を利用。

# コーディングルールについて

-   [PSR]() に準拠

## 命名規則

| 対象                | 命名規則      |
| ------------------- | ------------- |
| クラス              | PascalCase    |
| 関数                | camelCase     |
| 変数                | camelCase     |
| 定数                | CONSTANT_CASE |
| DB                  | snake_case    |
| URL                 | kebab-case    |
| Migration ファイル  | snake_case    |
| Seeder ファイル     | PascalCase    |
| Factory ファイル    | PascalCase    |
| View ファイル       | snake_case    |
| Model ファイル      | PascalCase    |
| Controller ファイル | PascalCase    |
| Gate 名             | kebab-case    |

# 使用技術

-   Laravel
-   Laravel Breeze
-   Laravel Sail
-   Laravel Pint
-   Laravel Telescope
-   Laravel IDE Helper
-   Larastan
-   PHP Insights
-   Laravel Dacapo
-   Laravel Dump Server

# 環境構築の手順

前提条件：最新の PHP と Composer が端末にインストールされている状態

## ライブラリのインストール

```
composer install
```

## .env ファイルを作成

```
cp .env.local .env
```

## コンテナの立ち上げ

```
./vendor/bin/sail up
```

## テーブル作成

```
./vendor/bin/sail php artisan migrate
```

# ディレクトリ構成

coming soon
