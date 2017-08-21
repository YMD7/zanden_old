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
      The Model 300 passive type volume controller does not contain an integral amplifier circuit. This Model 300 is effective for volume adjustment and selection of input source when the signal path to the power amplifier is relatively short. If the output circuit of a CD player, for example, has a high capacity, the Model 300 can more than sufficiently exceed the tonal quality of most preamplfiers.
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