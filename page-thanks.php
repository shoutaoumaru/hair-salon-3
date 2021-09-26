<?php 
/* Template Name: thanks
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせありがとうございます | </title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper animsition">
    <div class="c-thanks">
      <header id="header" class="header">
        <div class="mobile-container">
          <div class="logo__img">
            <a class="animsition-link" href="/">
              <div class="logo inview"></div>
            </a>
          </div>
          <div class="mobile-button">
              <button class="mobile-menu__btn">
                <span></span>
                <span></span>
                <span></span>
              </button>
          </div>
        </div>
          <!-- /.mobile-container -->
          <div class="pc-container">
            <div class=" logo__img">
              <a class="animsition-link" href="/">
                <div class="logo inview"></div>
              </a>
            </div>
            <nav class="pc-nav">
              <ul class="pc-nav-list">
                <li class="pc-nav-item">
                  <a class="pc-nav-link animsition-link" href="/"><span>top</span></a>
                </li>
                <li class="pc-nav-item">
                <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span>Staff</span></a>
                </li>
                <li class="pc-nav-item">
                <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span>Recruit</span></a>
                </li>
                <li class="pc-nav-item">
                <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>News</span></a>
                </li>
                <li class="pc-nav-item">
                  <a target="_blank" class="pc-nav-link reserve-btn"
                    href="https://beauty.hotpepper.jp/"><span>reserve</span></a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- /.pc-container -->
      </header>
      <!-- /.header -->
      <div class="c-thanks-text">
        <div class="c-container">
          <h2 class="c-title">お問い合わせありがとうございます。</h2>
          <div class="c-thanks-desc">
            <div class="c-thanks-item">
              <p class="c-txt-sm">ご入力いただいた情報は無事に送信されました。<br>お客様に受付完了メールを1通送信しましたのでご確認下さい。</p>
            </div>
            <div class="c-thanks-item">
              <h3>受付完了メールが届かない場合</h3>
              <p class="c-txt-sm">ご利用のメールサービスの設定によっては迷惑フォルダへ送られている場合もございますので、迷惑メールフォルダも合わせてご確認下さい。</p>
              <p class="c-txt-sm">もし、24時間経っても受付完了メールが届かない場合は、お手数ですが再度お問い合わせフォームかお電話にてお問い合わせ下さい</p>
            </div>
          </div>
          <div class="c-thanks-btn">
            <a class="animsition-link" href="/">トップページに戻る</a>
          </div>
        </div>
      </div>
      <footer class="p-footer">
        <div class="c-container">
          <div class="p-footer__sns">
            <div class="sns-insta">
              <a class="sns-link" href="#"><i></i></a>
            </div>
            <div class="sns-fb">
              <a class="sns-link" href="#"><i></i></a>
            </div>
          </div>
          <div class="c-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="">
          </div>
          <div class="copyright">
            © RivRound.inc
          </div>
        </div>
      </footer>
      <!-- /.p-footer -->
      <div class="mobile-menu">
        <nav class="mobile-menu__nav">
          <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
              <a class="animsition-link" href="/">TOP</a>
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">STAFF</a>
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">RECRUIT</a>
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
            </li>
          </ul>
          <div class="reserve-btn-wrap">
            <div class="reserve-btn-tel">
              <h4>電話予約はこちら</h4>
              <div class="reserve-btn">
                <a href="tel:092-686-7954"><span>092-686-7954</span></a>
              </div>
            </div>
            <div class="reserve-btn-net">
              <h4>ネット予約はこちら</h4>
              <div class="reserve-btn">
                <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- /.mobile-menu -->
    </div>
    <!-- /.c-contact -->
  </div>
  <!-- /.superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>
</html>