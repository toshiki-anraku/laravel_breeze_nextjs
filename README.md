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

# 参考サイト

- [Laravel プロジェクトの初期設定](https://qiita.com/ucan-lab/items/8eab84e37421f907dea0)
- [エンジニアが開発しやすい環境作りをする](https://zenn.dev/sutamac/articles/5a262f0096176a)
- [Laravel スターターキット Breeze と Next.js／API](https://readouble.com/laravel/10.x/ja/starter-kits.html)
- [5 年間 Laravel を使って辿り着いた，全然頑張らない「なんちゃってクリーンアーキテクチャ」という落としどころ](https://zenn.dev/mpyw/articles/ce7d09eb6d8117)
- [ddd-backend-with-laravel](https://github.com/hiroki-it/ddd-backend-with-laravel)
- [【PHPerKaigi2022 後日談】なんちゃって Entity を導入しよう](https://zenn.dev/yumemi_inc/articles/ae349b2dcbddad)
