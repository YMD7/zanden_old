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
      <h2>Digital Signal Conditioner</h2>
      <h3>DSC-1</h3>
      <img src="<?php echo $domain ?>images/indiv-mdsc-1.jpg" alt="DSC-1" rel="dsc-1" />
    </div>
    
    <h4>Introduction</h4>
    <div id="intro">
      <p>
      CDやDVDなど高速で回転する光ディスクからデジタル信号を読み取る時、レーザーピックアップの動きを制御するソレノイドから低周波ノイズが発生します。それがD/A変換に影響し音質を劣化させています。この低周波ノイズの影響はPCやハードディスクプレーヤにおいても同様です。本製品をCDやBD/DVDプレーヤとD/Aコンバータだけでなく、ネットワークオーディオなどでもそれらの機器とD/Aコンバータの間に挿入することで低周波ノイズをカットし、大幅な音質改善につながります。
      </p>
    </div>
    
    <h4>Specification</h4>
    <div id="spec">
      <dl>
        <dt>Digital input</dt>
          <dd>BNC (RCA &amp; XLR available)</dd>
        <dt>Digital output</dt>
          <dd>BNC (RCA &amp; XLR available)</dd>
        <dt>Supported sampling rates</dt>
          <dd>32kHz / 44.1kHz / 96kHz</dd>
        <dt>Dimensions</dt>
          <dd>W:125mm / H:90mm / D:57mm</dd>
        <dt>Weight</dt>
          <dd>0.8kg</dd>
      </dl>
    </div>

    <script type="text/javascript">
	    $(document).ready(function() {
	    	$("#fancybox").fancybox();
	    });
    </script>

    <h4>Gallery</h4>
    <div id="gallery" class="dsc-1">
      <div class="box first">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/dsc1-1M.JPG">
        <h5>Front View<span>Click to Show</span></h5>
        </a>
      </div>
      <div class="box second">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/dsc1-2M.JPG">
        <h5>Rear View<span>Click to Show</span></h5>
        </a>
      </div>
    </div>
    
    <div id="BTT"><a href="#">Back to Top</a></div>

  </div> <!-- End div#right_column -->

<?php include "../sub-navi.php" ?>