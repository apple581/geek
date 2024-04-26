<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易掲示板</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header id="header">
        <h1><img src="img/logo.PNG" alt=""></h1>
        <nav id="g-navi">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="acter.html">ACTER</a></li>
          <li><a href="book.html">BOOK</a></li>
          <li><a href="music.html">MUSIC</a></li>
        </ul>
      </nav>
      </header>
      
      <div class="openbtn1"><span></span><span></span><span></span></div>
      <div class=tittle><h3>掲示板<h3></div>

<style>
 /*------------------------------
 Reset Style
 
------------------------------*/
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

.main{
    padding:50px;
}

h3{
    text-align: center;
    font-size:min(8vw,4em);
    margin-top:1em;
}


article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}
nav ul {
    list-style:none;
}
blockquote, q {
    quotes:none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}
a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}
/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}
del {
    text-decoration: line-through;
}
abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}
table {
    border-collapse:collapse;
    border-spacing:0;
}
hr {
    display:block;
    height:1px;
    border:0;
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}
input, select {
    vertical-align:middle;
}
/*------------------------------
Common Style
------------------------------*/
body {
	
	font-size: 100%;
	font-family:'ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
	color: #222;
	background: #f7f7f7;
}
a {
    color: #007edf;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
h1 {
	
    font-size: 100%;
    color: #222;
    text-align: center;
}
/*-----------------------------------
入力エリア
-----------------------------------*/
label {
    display: block;
    margin-bottom: 7px;
    font-size: 86%;
}
input[type="text"],
textarea {
	margin-bottom: 20px;
	padding: 10px;
	font-size: 86%;
    border: 1px solid #ddd;
    border-radius: 3px;
    background: #fff;
}
input[type="text"] {
	width: 200px;
}
textarea {
	width: 50%;
	max-width: 50%;
	height: 70px;
}
input[type="submit"] {
	appearance: none;
    -webkit-appearance: none;
    padding: 10px 20px;
    color: #fff;
    font-size: 86%;
    line-height: 1.0em;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    background-color: #37a1e5;
}
input[type=submit]:hover,
button:hover {
    background-color: #2392d8;
}
hr {
	margin: 20px 0;
	padding: 0;
}
.success_message {
    margin-bottom: 20px;
    padding: 10px;
    color: #48b400;
    border-radius: 10px;
    border: 1px solid #4dc100;
}
.error_message {
    margin-bottom: 20px;
    padding: 10px;
    color: #ef072d;
    list-style-type: none;
    border-radius: 10px;
    border: 1px solid #ff5f79;
}
.success_message,
.error_message li {
    font-size: 86%;
    line-height: 1.6em;
}
/*-----------------------------------
掲示板エリア
-----------------------------------*/
article {
	margin-top: 20px;
	padding: 20px;
	border-radius: 10px;
	background: #fff;
}
article.reply {
    position: relative;
    margin-top: 15px;
    margin-left: 30px;
}
article.reply::before {
    position: absolute;
    top: -10px;
    left: 20px;
    display: block;
    content: "";
    border-top: none;
    border-left: 7px solid #f7f7f7;
    border-right: 7px solid #f7f7f7;
    border-bottom: 10px solid #fff;
}
	.info {
		margin-bottom: 10px;
	}
	.info h2 {
		display: inline-block;
		margin-right: 10px;
		color: #222;
		line-height: 1.6em;
		font-size: 86%;
	}
	.info time {
		color: #999;
		line-height: 1.6em;
		font-size: 72%;
	}
    article p {
        color: #555;
        font-size: 86%;
        line-height: 1.6em;
    }
@media only screen and (max-width: 1000px) {

    input[type="text"] {
        width: 100%;
    }
    textarea {
        width: 100%;
        max-width: 100%;
        height: 70px;
    }
}

#footer{
background:rgb(230, 230, 230);
padding:20px;
}

small{
color:rgb(22, 22, 22);
display: block;
text-align: center;
}

/*ボタン全体の形状*/
  
.openbtn1{
      /*はじめは非表示に*/
    display: none;
      /*ボタンの位置*/
    position:fixed;
    top:10px;
    right: 10px;
    z-index: 999;
      /*ボタンの形状*/
    background:#666;
    cursor: pointer;
      width: 50px;
      height:50px;
    border-radius: 5px;
  }
  
  /*ボタンのアイコン設定*/
  .openbtn1 span{
      display: inline-block;
      transition: all .4s;
      position: absolute;
      left: 14px;
      height: 3px;
      border-radius: 2px;
    background-color: #fff;
      width: 45%;
    }
  
  .openbtn1 span:nth-of-type(1) {
    top:15px; 
  }
  
  .openbtn1 span:nth-of-type(2) {
    top:23px;
  }
  
  .openbtn1 span:nth-of-type(3) {
    top:31px;
  }
  
  /*activeクラスが付与された後のボタンのアイコン設定*/
  .openbtn1.active span:nth-of-type(1) {
      top: 18px;
      left: 18px;
      transform: translateY(6px) rotate(-45deg);
      width: 30%;
  }
  
  .openbtn1.active span:nth-of-type(2) {
    opacity: 0;
  }
  
  .openbtn1.active span:nth-of-type(3){
      top: 30px;
      left: 18px;
      transform: translateY(-6px) rotate(45deg);
      width: 30%;
  }
  
  /*fadeDownクラスが付与された後のボタンの出現アニメーション設定*/
  .fadeDown {
      animation-name: fadeDownAnime;
      animation-duration: 0.5s;
      animation-fill-mode: forwards;
      opacity: 0;
      display: block;
  }
  @keyframes fadeDownAnime{
    from {
      opacity: 0;
    transform: translateY(-100px);
    }
  
    to {
      opacity: 1;
    transform: translateY(0);
    }
  }
  
  
  /*========= ヘッダーナビゲーションのためのCSS ===============*/
  
  /*==ヘッダーの形状*/
  #header{
    height: 70px;
    width:auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background:rgb(255, 255, 255);
    color:#fff;
    text-align: center;
    padding: 10px;
   
   
  }
  
  .back img{
    text-align: center;
    animation-name: fade;
    animation-duration:2s;
    max-width: 100%;
    height: auto;
    
  }
  
  @keyframes fade{
    0%{
      opacity: 0;
    }
    100%{
      opacity: 5;
    }
  }
  
  h1 img{
    width: 130px;
    height: auto;
    margin-top: 10px;
    z-index: 99;
  }
  
  /*.doneクラスがついたヘッダー*/
  #header.dnone {
    opacity: 0;/*透過0にして非表示に*/
  }
  
  /*メニューボタンをクリックした際に付与されるpanelactiveクラスがついたら*/
  #header.dnone.panelactive {
    opacity: 1;/*不透明にして出現*/
  }
  
  
  /*==ヘッダーのテキストナビゲーションの形状*/
  #g-navi ul{
    list-style: none;
    display: flex;
    justify-content: center;
  }
  
  #g-navi ul li a{
    display: block;
    text-decoration: none;
    color: #666;
    padding:10px;
  }
  
  #g-navi ul li.current a,
  #g-navi ul li a:hover{
    color:rgb(197, 197, 197); 
  }
  
  /*.doneクラスがついたヘッダーのテキストナビゲーションの形状*/
  #header.dnone #g-navi{
      /*固定位置にして最背面に*/
      position:fixed;
    top: 0;
      left: 0;
    z-index: -1;
      /*高さと幅*/  
    width:100%;
    height: 100vh;
      /*天地中央＆テキスト中央揃え*/  
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
      /*はじめは透過0に*/  
      opacity: 0;
    transition: all 0.4s;
  }
  
  /*メニューボタンをクリックした際に付与されるpanelactiveクラスがついたナビゲーションの形状*/
  #header.dnone.panelactive #g-navi{
    opacity: 1;/*不透明に*/
    z-index:3;/*最前面に*/
    background:#eee;
  }
  
  #header.dnone.panelactive #g-navi ul{
    display:block;/*flexの横並びをblockにして縦並びに*/
  }
  
  
  /*リストの形状*/
  
  #header.dnone.panelactive #g-navi li a{
    color: #333;
    text-decoration: none;
    padding:10px;
    display: block;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: bold;
    transition:all 0.3s;
  }
  
  
  
    .heading{
      position: relative;
     
      font-size:50px;
    margin: 0;
    }
  
    .heading span{
      position: relative;
      z-index: 2;
      font-size: 10vh;
      display: block;
      text-align: center;
    margin-top: 13px;
    }
  
    .heading::before{
      content:attr(data-number);
      position: absolute;
      top: -60px;
      left: 0;
      color: #9292924d;
      font-size: 50px;
      font-weight: 800;
      z-index: -3;
      font-size: 17vh;
      margin-top: -14px;
    }
</style>
<div class="main">
<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">

<div class=name>
<label for="name">ニックネーム</label>
<input type="text" name="personal_name"  rows="10" cols="100"><br><br>
</div>

<div class=mese>
<label for="text">メッセージを記入して下さい</label><br>
<textarea name="contents" rows="10" cols="100">
</textarea><br><br>
</div>

<div class="btn btn--orange btn--radius">
<input type="submit" name="btn1" value="投稿する">
</div>
</form>
<hr>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    writeData();
}

readData();

function readData(){
    $keijban_file = 'keijiban.txt';

    $fp = fopen($keijban_file, 'rb');

    if ($fp){
        if (flock($fp, LOCK_SH)){
            while (!feof($fp)) {
                $buffer = fgets($fp);
                print($buffer);
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

function writeData(){
    $personal_name = $_POST['personal_name'];
    $contents = $_POST['contents'];
    $contents = nl2br($contents);

    $data = "<hr>";
    $data = $data."<p>投稿者:".$personal_name."</p>";
    $data = $data."<p>".$contents."</p>";

    $keijban_file = 'keijiban.txt';

    $fp = fopen($keijban_file, 'ab');

    if ($fp){
        if (flock($fp, LOCK_EX)){
            if (fwrite($fp,  $data) === FALSE){
                print('ファイル書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

?>
</div>
<footer id="footer">
        <small> copyright</small>  
      </footer>
<script src="js/music.js"></script>
</body>
</html>




