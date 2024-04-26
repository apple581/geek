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

  $(window).on('load',function(){ //画面遷移時にギャラリーの画像が被らないように、すべての読み込みが終わった後に実行する

    //＝＝＝Muuriギャラリープラグイン設定
    var grid = new Muuri('.grid', {
    
    //アイテムの表示速度※オプション。入れなくても動作します
    showDuration: 600,
    showEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
    hideDuration: 600,
    hideEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
      
    // アイテムの表示/非表示状態のスタイル※オプション。入れなくても動作します
      visibleStyles: {
        opacity: '1',
        transform: 'scale(1)'
      },
      hiddenStyles: {
        opacity: '0',
        transform: 'scale(0.5)'
      }    
    });
    
    //＝＝＝並び替えボタン設定
    $('.sort-btn li').on('click',function(){      //並び替えボタンをクリックしたら
      $(".sort-btn .active").removeClass("active"); //並び替えボタンに付与されているactiveクラスを全て取り除き
      var className = $(this).attr("class");      //クラス名を取得
      className = className.split(' ');       //「sortXX active」のクラス名を分割して配列にする
      $("."+className[0]).addClass("active");     //並び替えボタンに付与されているクラス名とギャラリー内のリストのクラス名が同じボタンにactiveクラスを付与
      if(className[0] == "sort00"){           //クラス名がsort00（全て）のボタンの場合は、
         grid.show('');               //全ての要素を出す
      }else{                      //それ以外の場合は
        grid.filter("."+className[0]);        //フィルターを実行
      }
    });
    
    //＝＝＝ Fancyboxの設定
    $('[data-fancybox]').fancybox({
     thumbs: {
        autoStart: true, //グループのサムネイル一覧をデフォルトで出す。不必要であればfalseに
      },  
    });
      
    });