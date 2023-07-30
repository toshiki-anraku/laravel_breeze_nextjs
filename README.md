# 概要

Laravel Breeze と Next.js を利用したシステムのサンプルリポジトリ

# コーディングルールについて

フロントエンド、バックエンドそれぞれのフォルダにある README を参照

# 開発構成の概要

- フロントエンド：Next.js
- バックエンド　：Laravel

# 各種リポジトリのリンク

特になし

# 使用技術

- Laravel10
- Next.js13

# 環境構築の手順

## リポジトリのクローン

```
git@github.com:toshiki-anraku/laravel_breeze_nextjs.git
```

フロントエンド、バックエンドの環境構築はそれぞれのフォルダにある README を参照

# ディレクトリ構成

```
laravel_breeze_nextjs/
    ├─backend/        # Laravel
    ├─frontend/       # Next.js
```

# Git と GitHub の運用方法

develop ブランチが開発環境で master が本番環境です。

| ブランチ名 | 役割                             | 派生元  | マージ先        |
| ---------- | -------------------------------- | ------- | --------------- |
| master     | 公開するものを置くブランチ       |         |                 |
| develop    | 開発中のものを置くブランチ       | master  | master          |
| feature/\* | 新機能開発中に使うブランチ       | develop | develop         |
| hotfix/\*  | 公開中のもののバグ修正用ブランチ | master  | develop, master |
| bugfix/\*  | 開発中のもののバグ修正用ブランチ | develop | develop         |
