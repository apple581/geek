//スクロールをするとハンバーガーメニューに変化するための設定を関数でまとめる
function FixedAnime() {
    //ヘッダーの高さを取得
    var headerH = $('#header').outerHeight(true);
    var scroll = $(window).scrollTop();
    if (scroll >= headerH){//ヘッダーの高さ以上までスクロールしたら
        $('.openbtn1').addClass('fadeDown');//.openbtnにfadeDownというクラス名を付与して
        $('#header').addClass('dnone');//#headerにdnoneというクラス名を付与
      }else{//それ以外は
        $('.openbtn1').removeClass('fadeDown');//fadeDownというクラス名を除き
        $('#header').removeClass('dnone');//dnoneというクラス名を除く
      }
  }
  
  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    FixedAnime();//スクロールをするとハンバーガーメニューに変化するための関数を呼ぶ
  });
  
  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {
    FixedAnime();//スクロールをするとハンバーガーメニューに変化するための関数を呼ぶ
  });
  
  
  //ボタンをクリックした際のアニメーションの設定
  $(".openbtn1").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
      $("#header").toggleClass('panelactive');//ヘッダーにpanelactiveクラスを付与
  });
  $("#g-navi li a").click(function () {//ナビゲーションのリンクがクリックされたら
      $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
      $("#header").removeClass('panelactive');//ヘッダーのpanelactiveクラスも除去
  });
  
  
  //リンク先のidまでスムーススクロール
  //※ページ内リンクを行わない場合は不必要なので削除してください
      $('#g-navi li a').click(function () {
    var elmHash = $(this).attr('href');
    var pos = $(elmHash).offset().top-0;
    $('body,html').animate({scrollTop: pos}, 1000);
    return false;
  });
  

  $('.slider').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 3,//スライドを画面に3枚見せる
    slidesToScroll: 3,//1回のスクロールで3枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    dots: true,//下部ドットナビゲーションの表示
    responsive: [
      {
      breakpoint: 769,//モニターの横幅が769px以下の見せ方
      settings: {
        slidesToShow: 2,//スライドを画面に2枚見せる
        slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
      }
    },
    {
      breakpoint: 426,//モニターの横幅が426px以下の見せ方
      settings: {
        slidesToShow: 1,//スライドを画面に1枚見せる
        slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
      }
    }
  ]
  });