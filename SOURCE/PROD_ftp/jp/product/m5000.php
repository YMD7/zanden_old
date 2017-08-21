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
      <h2>D/A Converter</h2>
      <h3>Model 5000 Signature</h3>
      <img src="<?php echo $domain ?>images/indiv-m5000.jpg" alt="Model 5000 Signature" rel="m5000" />
    </div>
    
    <h4>Introduction</h4>
    <div id="intro">
      <p>
      Model 5000から現在のModel 5000 Signatureまでおよそ１０年間のロングセラー製品です。US-PATENTのアナログフィルタ技術をベースしたNo-Digital Filter & No-Oversampling Multi Bit Type D/Aコンバータです。DAC-ICには　Philips TDA-1541A Double Crownを採用したもので、その再生音のリアリティは私たちを魅了し続けています。最新のDAC-ICをしてもそれには及びません。
      </p>
    </div>
    
    <h4>Specification</h4>
    <div id="spec">
      <dl>
        <dt>DAC-IC</dt>
          <dd>Philips TDA-1541A: 2 crown</dd>
        <dt>Digital inputs</dt>
          <dd>I<sup>2</sup>S (custom)</dd>
          <dd>AES/EBU</dd>
          <dd>BNC</dd>
          <dd>RCA</dd>
        <dt>Output impedance</dt>
          <dd>3k&Omega;</dd>
        <dt>Tube compliment</dt>
          <dd>6922 x1</dd>
          <dd>6X4 x1</dd>
          <dd>6CA4 x2</dd>
        <dt>Dimensions</dt>
          <dd>(main) W:398mm / H:103mm / D:254mm</dd>
          <dd>(power) W:155mm / H:163mm / D:336mm</dd>
        <dt>Weight</dt>
          <dd>(main) 9.2kg</dd>
          <dd>(power) 6.3kg</dd>
      </dl>
    </div>

    <script type="text/javascript">
	    $(document).ready(function() {
	    	$("#fancybox").fancybox();
	    });
    </script>

    <h4>Gallery</h4>
    <div id="gallery" class="m5000">
      <div class="box first">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/M5000-1M.JPG">
        <h5>Front View<span>Click to Show</span></h5>
        </a>
      </div>
      <div class="box second">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/M5000-2M.JPG">
        <h5>Rear View<span>Click to Show</span></h5>
        </a>
      </div>
      <div class="box third">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/dc-1M.JPG">
        <h5>Front of PowerBox<span>Click to Show</span></h5>
        </a>
      </div>
      <div class="box fourth">
        <a id="fancybox"
         href="<?php echo $domain ?>images/gallery/photo/dc-2M.JPG">
        <h5>Rear of PowerBox<span>Click to Show</span></h5>
        </a>
      </div>
    </div>
    
    <div id="BTT"><a href="#">Back to Top</a></div>

  </div> <!-- End div#right_column -->
      
<?php include "../sub-navi.php" ?>