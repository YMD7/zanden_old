<?php include "../header.php" ?>

<!--      #MAIN      -->
<div id="main" class="indiv">
  <div class="wrapper">
  
  <div id="right_column">

    <div id="langSelect" class="hidden">
        <div class="up"></div>
        <ul><!--
            --><li class="en"><a href="">English</a></li><!--
            --><li class="jp"><a href="">日本語</a></li>
        </ul>
    </div>
    
    <div id="top">
      <h2>Line Preamplifier</h2>
      <h3>Model 300</h3>
      <img src="<?php echo $domain ?>images/indiv-m300.jpg" alt="Model 300" rel="m300" />
    </div>
    
    <h4>Introduction</h4>
    <div id="intro">
      <p>
      パワーアンプとの接続が比較的距離の短い場合、音量調節と入力ソースの選択にはこのModel 300mk2は有効です。入力ソースの出力回路の能力が高ければ、Model 300mk2は一般的なラインアンプの音質を超えることは十分可能です。
      </p>
    </div>

    <h4>Specification</h4>
    <div id="spec">
      <dl>
        <dt>Input impedance</dt>
          <dd>10k&Omega;</dd>
        <dt>Dimensions</dt>
          <dd>W: 214mm / H: 77mm / D: 86mm</dd>
        <dt>Weight</dt>
          <dd>2.0kg</dd>
      </dl>
    </div>

    <script type="text/javascript">
	    $(document).ready(function() {
	    	$("#fancybox").fancybox();
	    });
    </script>

    <h4>Gallery</h4>
    <div id="gallery" class="m300">
      <div class="box first">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/M300-1M.JPG">
        <h5>Front View<span>Click to Show</span></h5>
        </a>
      </div>
      <div class="box second">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/M300-2M.JPG">
        <h5>Rear View<span>Click to Show</span></h5>
        </a>
      </div>
    </div>
    
    <div id="BTT"><a href="#">Back to Top</a></div>

  </div> <!-- End div#right_column -->

<?php include "../sub-navi.php" ?>