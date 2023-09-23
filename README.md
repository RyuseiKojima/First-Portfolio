# 1. サイト概要
<h3>要約</h3>
<p>ポートフォリオとして、<strong>"Shared killing time"</strong>というWebサイトを開発しました。</p>
<p>各ユーザーのお気に入り動画をシェアするサイトです。</p>
<img src="/assets/images/readme-1.jpg" width="500">
<img src="/assets/images/readme-2.jpg" width="500">
<h3>背景</h3>
<p>私は、2023年5月にKredo Online Campに入校し、以降アプリ開発の学習を継続しています。</p>
<p>Kredoは全授業が英語で実施され、このサイトはその一環として制作し始めたため、英語表記となっています。</p>
<p>このサイトを作った目的は、おもしろ動画や動物系など、<strong>自身が好むジャンルの動画を他人と共有すること</strong>です。</p>
 
# 2. 使用技術
<h3>フロントエンド</h3>
<ul>
 <li>HTML</li>
 <li>CSS</li>
 <li>Bootstrap</li>
 <li>JavaScript</li>
</ul>

<h3>バックエンド</h3>
<ul>
 <li>PHP 8.2.0</li>
 <li>phpMyAdmin 5.2.0</li>
</ul>

<h3>インフラ</h3>
<ul>
 <li>Visual Studio Code</li>
 <li>Apache 2.4.54 (Win64)</li>
</ul>

<h3>その他</h3>
<ul>
 <li>Git/Github</li>
</ul>

# 3. ER図
<img src="/assets/images/readme-er.png" width="500">

# 4. 機能一覧
<h3>ポスト</h3>
<ul>
 <li>動画リンク投稿 (add-post.php)</li>
 <p>自分のお気に入り動画のリンクをコメント付きで共有できます。</p>
 <li>投稿内容の閲覧 (animal.php, baby.php, funny.php, nature.php, post-detail.php)</li>
 <p>カテゴリーごとに各ユーザーの投稿を確認できます。</p>
 <img src="/assets/images/readme-funny.png" width="500">
 <br>
 <img src="/assets/images/readme-post-detail.png" width="500">
 
 <li>投稿内容の編集 (edit-post.php)</li>
 <p>自分の投稿については編集できます。</p>
 <img src="/assets/images/readme-edit-post.png" width="500">
 </ul>
<br>
<h3>プロフィール</h3>
<ul>
 <li>自身のプロフィール閲覧 (profile.php)</li>
 <p>自分の投稿、"いいね"した投稿を閲覧できます。また、プロフィール画像を登録できます。</p>
 <img src="/assets/images/readme-profile.png" width="500">
 <li>投稿内容の閲覧 (edit-profile.php)</li>
 <p>自身のユーザー情報について編集できます。</p>
 <img src="/assets/images/readme-profile-edit.png" width="500">
 </ul>
<br>
<h3>問い合わせ (contact.php)</h3>
<p>管理者へ使用上の問題点などを送信できます。</p>
<img src="/assets/images/readme-contact.png" width="500">
<br>
<h3>認証機能</h3>
<ul>
 <li>ユーザー登録 (signup.php, signup-retry.php)</li>
 <p>使用済みのユーザー名が入力された際、再入力を促します。</p>
 <li>ログイン (login.php)</li>
 <li>ログアウト (../actions/logout.php)</li>
</ul>
<br>
<h3>管理者画面 (admin.php, admin-….php)</h3>
<p>"admin"でログインすると管理者画面に移行し、ユーザー情報、投稿、問い合わせを管理できます。</p>
 <img src="/assets/images/readme-admin.png" width="500">
 <img src="/assets/images/readme-admin-2.png" width="500">
<br>
<h3>いいね機能</h3>
<p><strong>最も時間をかけて作成した機能です。</strong>DB上にブーリアン型の値を用意し、ボタンを押したときに数値や色が変化する仕様となっています。</p>
<img src="/assets/images/readme-good.png" width="200">

# 5. 今後の課題
<ul>
 <li>リリース（個人情報の保護）</li>
 <li>ユーザー情報の削除機能</li>
 <li>相互フォロー機能</li>
 <li>コメント機能</li>
 <li>プロフィールの共有</li>
</ul>
<p>※2023/9/23時点</p>

# 6. 作成者
<ul>
 <li>小島隆聖 Ryusei Kojima</li>
 <li>jiko.likegc@gmail.com</li>
</ul>
