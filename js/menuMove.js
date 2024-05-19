var beforePos = 0;//スクロールの値の比較用の設定

//スクロール途中でヘッダーが消え、上にスクロールすると復活する設定を関数にまとめる
function ScrollAnime() {
  let scroll = $(window).scrollTop();
  let windowWidth = $(window).width();
  let menuOpen = document.getElementById("menu-checkbox").checked;

  if (windowWidth < 800 && !menuOpen) {
    //画面幅800w以下かつメニューが閉じているときのみヘッダーの出し入れをする
    if (scroll == beforePos) {
      //ここはIE11対策
    } else if (0 > (scroll - beforePos)) {
      //ヘッダーが上から出現する
      $('#js-header').removeClass('UpMove');	//#headerにUpMoveというクラス名を除き
      $('#js-header').addClass('DownMove');//#headerにDownMoveのクラス名を追加
    } else {
      //ヘッダーが上に消える
      $('#js-header').removeClass('DownMove');//#headerにDownMoveというクラス名を除き
      $('#js-header').addClass('UpMove');//#headerにUpMoveのクラス名を追加
    }
    
    beforePos = scroll;//現在のスクロール値を比較用のbeforePosに格納
  }
}


// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  ScrollAnime();//スクロール途中でヘッダーが消え、上にスクロールすると復活する関数を呼ぶ
});