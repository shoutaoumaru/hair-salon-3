<?php 
/* Template Name: privacy
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>プライバシーポリシー | </title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper animsition">
    <div class="c-privacy">
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
      <div class="c-privacy-text">
        <div class="c-container">
          <h1 class="c-title">プライバシーポリシー</h1>
          <div class="c-privacy-desc">
            <div class="c-privacy-item">
              <h3>このサイトが収集する個人データと収集の理由</h3>
              <p class="c-txt-sm">本プライバシーポリシーにおける「個人情報」とは，個人情報保護法にいう生存する個人に関する情報、ならびに特定の個人と結びついて使用されるメールアドレス、電話番号などの情報、および個人情報と一体となった趣味、家族構成、年齢、その他の個人に関する属性情報のことを指します。</p>
            </div>
            <div class="c-privacy-item">
              <h3>お申し込みフォーム</h3>
              <p class="c-txt-sm">当社では、お問い合わせ頂いた際にお名前・メールアドレス等の個人情報をご記入頂きます。これらの個人情報は、必要な情報をご連絡するために利用し、それ以外の目的では利用しません。</p>
            </div>
            <div class="c-privacy-item">
              <h3>個人情報の第三者への開示・提供の禁止</h3>
              <p class="c-txt-sm">当社は、収集した個人情報等を個人情報保護法及び行政書士法に基づき、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
              <p class="c-txt-sm">・本人のご了解がある場合 法令等への協力のため、開示が必要となる場合<br>・人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難である場合<br>・個人情報の安全対策<br>・警察や検察、裁判所、消費者センター等公的機関等によって開示を求められた場合<br></p>
              <p class="c-txt-sm">個人情報の開示・訂正・追加・削除・利用停止をご希望の場合には、ご本人であることを確認したうえで、速やかに対応致します。 なお、個人情報に関するお問い合わせはでお受けいたします。</p>
            </div>
          </div>
          <div class="c-privacy-btn">
            <a href="/contact">お問い合わせページ</a>
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
  <!-- /.superwrappers -->
  <?php get_template_part('includes/c-footer'); ?>
</body>
</html>