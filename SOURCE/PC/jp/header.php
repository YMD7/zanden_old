<?php $domain = "http://localhost/"; ?>

<?php $lang = "jp/"; ?>
<?php $home = $domain . $lang; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="ザンデンオーディオシステムは、1980年に設立。主に真空管を用いたオーディオアンプブランドです。第一に、空間表現も含め忠実な音楽再生を実現すること。第二に、あたかも楽器のように何世代にも受け継がれ、使い続けられる美しい製品をうみだすことです。">
<meta name="keywords" content="ザンデンオーディオシステム,フォノイコライザー,カーブ切り替え,真空管アンプ,位相切り替え">


<title>Zanden Audio Systems Ltd.</title>


<link rel="shortcut icon" href="<?php echo $domain ?>images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $domain ?>style_20181223.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $domain ?>js/fancybox/source/jquery.fancybox.css"/>
<link href='http://fonts.googleapis.com/css?family=Cardo:400' rel='stylesheet' type='text/css'>
<script src="https://use.typekit.net/ljp5zhr.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script type="text/javascript" src="<?php echo $domain ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $domain ?>js/fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $domain ?>js/jquery.zanden_20170318.js"></script>

<!--    Google Analytics    -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12477934-2']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!--    Google Analytics    -->

</head>
<body>
<div id="container">

<!--      #HEADER      -->
<div id="header">
  <div class="wrapper">

    <a href="<?php echo $home ?>">
    <h1>Zanden Audio Systems Ltd.</h1></a>
    <div id="gnavi">
      <ul>
        <li>
          <a href="<?php echo $home ?>">Home</a>
        </li>
        <li>
          <a href="<?php echo $home ?>product.php">Product</a>
        </li>
        <li>
          <a href="<?php echo $home ?>awards.php">Awards</a>
        </li>
        <li>
          <a href="<?php echo $home ?>wheretobuy.php">Where to buy</a>
        </li>
        <li>
          <a href="<?php echo $home ?>company.php">Company</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--      HEADER#      -->
<!--      #UTILITY      -->
<div id="util">
  <div class="wrapper">
    <div class="lang-text">
      <span class="no-display">Language</span>
      <div id="langSelect" class="hidden">
        <div class="up"></div>
          <ul><!--
          --><li class="en"><a href="">English</a></li><!--
          --><li class="jp"><a href="">日本語</a></li>
          </ul>
        </div>
    </div>
    <div class="fb-like" data-href="http://www.zandenaudio.com" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-font="arial">
    </div>
  </div>
</div>
<!--      UTILITY#      -->
