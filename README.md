# Character-Books
 景色の写真投稿サイトです。<br >
 旅行先の景色や好きな景色を位置情報付きで共有できます。 <br >
 レスポンシブ対応しているのでスマホからもご確認いただけます。

<img width="350" alt="スクリーンショット 2024-07-10 17 12 11" src="https://github.com/user-attachments/assets/962ce23f-e1e6-4c9e-be70-ac5ec09d0df4"><br >
<img width="350" alt="スクリーンショット 2024-07-11 18 45 38" src="https://github.com/user-attachments/assets/20042b67-9951-4b60-883b-975aec0099db"><br >
<img width="350" alt="スクリーンショット 2024-07-10 17 13 54" src="https://github.com/user-attachments/assets/7d0ac52d-0c21-42dd-8f5e-49b57273afdf">

# URL
http://the-view.work/ <br >
画面中部のゲストログインボタンから、メールアドレスとパスワードを入力せずにログインできます。

# 使用技術
- Ruby 2.5.7
- Ruby on Rails 5.2.4
- MySQL 5.7
- Nginx
- Puma
- AWS
  - VPC
  - EC2
  - RDS
  - Route53
- Docker/Docker-compose
- CircleCi CI/CD
- Capistrano3
- RSpec
- Google Maps API

# AWS構成図
<img width="995" alt="スクリーンショット 2020-05-07 11 14 01" src="https://user-images.githubusercontent.com/60876388/81247155-3ccde300-9054-11ea-91eb-d06eb38a63b3.png">

## CircleCi CI/CD
- Githubへのpush時に、RspecとRubocopが自動で実行されます。
- masterブランチへのpushでは、RspecとRubocopが成功した場合、EC2への自動デプロイが実行されます

# 機能一覧
- ユーザー登録、ログイン機能(devise)
- 投稿機能
  - 画像投稿(refile)
  - 位置情報検索機能(geocoder)
- いいね機能(Ajax)
  - ランキング機能
- コメント機能(Ajax)
- フォロー機能(Ajax)
- ページネーション機能(kaminari)
  - 無限スクロール(Ajax)
- 検索機能(ransack)

# テスト
- RSpec
  - 単体テスト(model)
  - 機能テスト(request)
  - 統合テスト(feature)
