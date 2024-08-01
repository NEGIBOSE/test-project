# Character-Books
 景色の写真投稿サイトです。<br >
 旅行先の景色や好きな景色を位置情報付きで共有できます。 <br >
 レスポンシブ対応しているのでスマホからもご確認いただけます。

<img width="350" height="700" alt="スクリーンショット 2024-07-10 17 12 11" src="https://github.com/user-attachments/assets/962ce23f-e1e6-4c9e-be70-ac5ec09d0df4">
<img width="350" height="700" alt="スクリーンショット 2024-07-11 18 45 38" src="https://github.com/user-attachments/assets/20042b67-9951-4b60-883b-975aec0099db">
<img width="350" height="700" alt="スクリーンショット 2024-07-10 17 13 54" src="https://github.com/user-attachments/assets/7d0ac52d-0c21-42dd-8f5e-49b57273afdf">
<img width="350" height="700" alt="スクリーンショット 2024-07-10 17 05 42" src="https://github.com/user-attachments/assets/2e2c4561-4894-4b2a-9795-b56d5cd796e8">


# URL
[http://character-books-test/](https://www.youtube.com/watch?v=PrFkiPA7CAg) <br >
作成中なので、ローカル環境での動作確認動画です。

# 使用技術
- Laravel Framework 11.3.1
    - PHP 8.3.6
    - node 22.2.0
    - npm 10.7.0
    - composer 2.7.2
- MAMP 6.9
    -　Apache 2.4.58 
    - MySQL 8.3.0


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
