
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about | ソロナビ</title>
    <link rel="stylesheet" href="stylesheet.min.css">
    <link rel="stylesheet" href="contact.min.css">
    <link rel="stylesheet" href="responsive.min.css"><!-- レスポンシブ対応 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>


  <body>
    <!-- ページ周り余白カットのため -->
    <div class="wrap">

     <header >
       <!-- header left -->
      <div class="header-left">
          <a href="index.html"><i class="fas fa-coffee"></i>ソロナビ</a>
      </div>
      <!-- header right -->
      <div class="header-right">
        <a href="about.html">about</a>
        <a href="contact.html">contact</a>

      </div>
      <!-- header レスポンシブ時 -->
      <div id="menu-icon">
        <span class="fa fa-bars"></span>
        <div class="header-menu">
          <a href="about.html">about</a>
          <a href="contact.html">contact</a>
        </div>
      </div>


    </header>

    <main>
      <div id="contents">
        <div id="main-contents">
          <div class="text-contents">
              <ul class="links">
                <li>
                  <a href="index.html"><i class="fa fa-home fa-lg"></i> ホーム</a>
                </li>
              </ul>

              <h2>送信完了</h2>
              <p>お問い合わせありがとうございます。<br />以下の内容で受け付けました。</p>
              <table class="confirm-text">
                 <tr>
                   <th>お名前</th>
                   <td><?php echo $_POST["name"];?></td>
                 </tr>
                 <tr>
                   <th>メールアドレス</th>
                   <td><?php echo $_POST["addres"];?></td>
                 </tr>
                 <tr>
                   <th>内容</th>
                   <td><?php echo $_POST["contents"];?></td>
                 </tr>

               </table>


            </div>
        </div>


      </div>

    </main>
    <!--　👇フッター -->
    <footer>

      <!--　ページ内トップへ行くボタン -->
      <div id="top-link">
        <a href="#" id="top-link-btn">TOP</a>
      </div>

      <!--　各種リンク　-->
      <div id="footer-menu">
					<div >
            <a href="index.html" class=home-link><i class="fa fa-home fa-lg"></i> HOME</a>
					</div>
					<nav>
						<div class="page-links">

                <a href="about.html">about</a>
                <a href="contact.html">contact</a>

            </div>

          </nav>
					<p class="copyright">一人でも入りやすいお店検索サイト　<i class="fas fa-coffee"></i>ソロナビ</p>
				</div>
    </footer>

  </div>

  　
  　　<!--  javascript読込 -->

  　<script src="script.js"></script>

  </body>
</html>
