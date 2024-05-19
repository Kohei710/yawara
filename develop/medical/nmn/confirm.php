
<?php
// 変数の初期化
$page_flag = 0;
if( !empty($_POST['btn_confirm']) ) {
	$page_flag = 1;
} elseif( !empty($_POST['btn_submit']) ) {

	$page_flag = 2;
	// 変数とタイムゾーンを初期化
	$header = null;
	$auto_reply_subject = null;
	$auto_reply_text = null;
	$admin_reply_subject = null;
	$admin_reply_text = null;
	date_default_timezone_set('Asia/Tokyo');
	$header = "MIME-Version: 1.0\n";
	$header .= "From: 和（やわら）皮ふ科クリニック <info@yawara.clinic>\n";
	$header .= "Reply-To: 和（やわら）皮ふ科クリニック <info@yawara.clinic>\n";
	// 件名を設定
	$auto_reply_subject = '[和（やわら）皮ふ科クリニック]お問い合わせありがとうございます。';
	// 本文を設定
	$auto_reply_text = "この度は『NMN点滴』へのお問い合せいただき、誠にありがとうございます。\n\nお送りいただきました内容を確認の上、改めて担当者よりご連絡をさせていただきます。
  今しばらくお待ちくださいませ。\n\n";
	$auto_reply_text .= "お名前：" . $_POST['name'] . "樣\n\n";
	$auto_reply_text .= "ふりがな：" . $_POST['your_company'] . "樣\n\n";
	$auto_reply_text .= "性別：" . $_POST['seibetsu'] . "\n\n";
  $auto_reply_text .= "年齢：" . $_POST['age'] . "歳\n\n";
	$auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
	$auto_reply_text .= "お電話番号：" . $_POST['tel'] . "\n\n";

  $auto_reply_text .= "ご来店第1希望日：" . $_POST['date1'] . $_POST['time1'] . "\n\n";
  $auto_reply_text .= "ご来店第2希望日：" . $_POST['date2'] . $_POST['time2'] . "\n\n";
  $auto_reply_text .= "ご来店第3希望日：" . $_POST['date3'] . $_POST['time3'] . "\n\n";

	$auto_reply_text .= "--------------------------------------------------------------------------------
和（やわら）皮ふ科クリニック\n
＜所在地＞
大阪府大阪市北区天神橋5丁目7-10さかしん天神橋ビル4F
＜TEL＞
06-6881-1000
＜休診日＞
日曜・祝日 ※第2日曜日は診療します
＜ホームページ＞
https://yawara.clinic/";
	// 自動返信メール送信
	mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);
	// 運営側へ送るメールの件名
	$admin_reply_subject = "『NMN点滴』サイトよりお問い合わせがありました";

	$admin_reply_text .= "お名前：" . $_POST['name'] . "樣\n\n";
	$admin_reply_text .= "ふりがな：" . $_POST['your_company'] . "樣\n\n";
	$admin_reply_text .= "性別：" . $_POST['seibetsu'] . "\n\n";
  $admin_reply_text .= "年齢：" . $_POST['age'] . "歳\n\n";
	$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
	$admin_reply_text .= "お電話番号：" . $_POST['tel'] . "\n\n";

  $admin_reply_text .= "ご来店第1希望日：" . $_POST['date1'] . $_POST['time1'] . "\n\n";
  $admin_reply_text .= "ご来店第2希望日：" . $_POST['date2'] . $_POST['time2'] . "\n\n";
  $admin_reply_text .= "ご来店第3希望日：" . $_POST['date3'] . $_POST['time3'] . "\n\n";
	// 管理者へメール送信
	mb_send_mail( 'saik8743@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap"
      rel="stylesheet"
    />
    <link href="./src/css/style.css?20220214" rel="stylesheet" />
    <meta name="robots" content="noindex" />
    <title>お問い合わせフォーム・確認画面 | 和 皮ふ科クリニック</title>
  </head>
  <body>
    <style>
      .confirm {
        background-color: #fff2f4;
        text-align: center;
        padding: 50px;
        margin-bottom: 60px;
        font-size: 30px;
        letter-spacing: 3px;
        color: var(--main-pink);
        font-weight: bold;
      }

      .confirm_submit {
        display: flex;
      }

      .sec-contact .container_small .confirm_submit .submit-btn {
        background-color: var(--main-pink);
        width: 45%;
      }

      .sec-contact .container_small .confirm_submit .submit-btn.n1 {
        background-color: #ccc;
      }

      @media only screen and (max-width: 550px) {
        .confirm_submit {
    display: block;
}

.sec-contact .container_small .confirm_submit .submit-btn {
    width: 80%;
}
      }

    </style>

    <div class="wrapper">
      <header class="header">
        <div class="header-inner">
          <a href="/" class="logo">
            <img src="./src/images/logo.png" alt="和皮ふ科クリニック" />
          </a>

          <div class="right">
            <p class="guide">まずはお気軽にお問い合わせください</p>
            <div class="guide-col">
              <a href="tel:06-6881-1000" class="guide-tel">06-6881-1000</a>
              <a href="#link-contact" class="guide-rev" target="_blank">
                <i class="guide-icon">
                  <img src="./src/images/header_mail.svg" alt="" />
                </i>
                <span>来院予約</span>
              </a>
            </div>
          </div>
          <!-- ./right -->
        </div>
        <!-- ./inner -->
      </header>

      <section class="sec-contact" id="link-contact">
        <div class="confirm">確認画面</div>
        <div class="container_small">
          <form action="thanks.php" method="post">
            <div class="form-group">
              <h3 class="form-group-head">ご連絡先</h3>
              <dl class="form-group-row">
                <dt class="form-group-ttl">
                  <span class="form-group-label">お名前</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data">
                  <div class="foerm-normal">
                    <?php echo $_POST["name"]; ?>
                  </div>
                </dl>
              </dl>
              <dl class="form-group-row">
                <dt class="form-group-ttl">
                  <span class="form-group-label">ふりがな</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data">
                  <div class="foerm-normal">
                    <?php echo $_POST["furigana"]; ?>
                  </div>
                </dl>
              </dl>
              <dl class="form-group-row">
                <dt class="form-group-ttl">
                  <span class="form-group-label">性別</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data">
                  <div><?php echo $_POST["seibetsu"]; ?></div>
                </dl>
              </dl>
              <dl class="form-group-row">
                <dt class="form-group-ttl">
                  <span class="form-group-label">年齢</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data">
                  <div><?php echo $_POST["age"]; ?></div>
                  <p class="year">歳</p>
                </dl>
              </dl>
              <dl class="form-group-row">
                <dt class="form-group-ttl">
                  <span class="form-group-label">メールアドレス</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data">
                  <div><?php echo $_POST["email"]; ?></div>
                </dl>
              </dl>
              <dl class="form-group-row">
                <dt class="form-group-ttl">
                  <span class="form-group-label">電話番号</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data">
                  <div><?php echo $_POST["tel"]; ?></div>
                </dl>
              </dl>
            </div>

            <div class="form-group">
              <h3 class="form-group-head">ご来院希望日</h3>
              <dl class="form-group-row --date">
                <dt class="form-group-ttl">
                  <span class="form-group-label">第一希望</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data --date">
                  <div><?php echo $_POST["date1"]; ?></div>
                  <div class="sel-wrap">
                    <div><?php echo $_POST["time1"]; ?></div>
                  </div>
                </dl>
              </dl>
              <dl class="form-group-row --date">
                <dt class="form-group-ttl">
                  <span class="form-group-label">第二希望</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data --date">
                  <div><?php echo $_POST["date2"]; ?></div>
                  <div class="sel-wrap">
                    <div><?php echo $_POST["time2"]; ?></div>
                  </div>
                </dl>
              </dl>
              <dl class="form-group-row --date">
                <dt class="form-group-ttl">
                  <span class="form-group-label">第三希望</span>
                  <span class="form-group-ra">必須</span>
                </dt>
                <dl class="form-group-data --date">
                  <div><?php echo $_POST["date3"]; ?></div>
                  <div class="sel-wrap">
                    <div><?php echo $_POST["time1"]; ?></div>
                  </div>
                </dl>
              </dl>
            </div>
            <div class="confirm_submit">
              <input
                type="button"
                value="前のページへ戻る"
                onclick="history.back();"
                class="submit-btn n1"
              />

              <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
              <input type="hidden" name="furigana" value="<?php echo $_POST["furigana"]; ?>">
              <input type="hidden" name="seibetsu" value="<?php echo $_POST["seibetsu"]; ?>">
              <input type="hidden" name="age" value="<?php echo $_POST["age"]; ?>">
              <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
              <input type="hidden" name="tel" value="<?php echo $_POST["tel"]; ?>">
              <input type="hidden" name="date1" value="<?php echo $_POST["date1"]; ?>">
              <input type="hidden" name="time1" value="<?php echo $_POST["time1"]; ?>">
              <input type="hidden" name="date2" value="<?php echo $_POST["date2"]; ?>">
              <input type="hidden" name="time2" value="<?php echo $_POST["time2"]; ?>">
              <input type="hidden" name="date3" value="<?php echo $_POST["date3"]; ?>">
              <input type="hidden" name="time3" value="<?php echo $_POST["time3"]; ?>">

              <input type="submit" value="送信する" class="submit-btn" name="btn_submit"/>
            </div>
          </form>
        </div>
      </section>

      <footer class="footer">
        <a href="/" class="logo">
          <img src="./src/images/logo.png" alt="" />
        </a>

        <p class="text">大阪府大阪市北区天神橋5丁目7-10さかしん天神橋ビル4F</p>
      </footer>
    </div>
    <!-- ./l-warpper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./src/scripts/intersectAciton.min.js"></script>
    <script src="./src/scripts/scripts.js?20220214"></script>
  </body>
</html>
