<?php
	define("PATH_TO_ROOT", "../");
?>

<?php include PATH_TO_ROOT . "head.php" ?>

<div id="wrapper">
	<?php include PATH_TO_ROOT . "navigation-header.php" ?>
	<div id="main" class="product">
		<section class="product-indiv">
			<h2>PRODUCT</h2>
			<div class="product-title">
				<span class="group"><a href="">Analog Components</a></span>
				<span class="category"><a href="">フォノイコライザー</a></span>
				<h3>Model 1300</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="carousel">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m1300a.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m1300b.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Features</h4>
					<ul>
				        <li>- (5) selectable EQ curves (RIAA, TELDEC, EMI, COLUMBIA, DECCA)</li>
				        <li>- LCR type equalization circuit</li>
				        <li>- absolute polarity switch</li>
				        <li>- 6922 / 7308 type tubes for amplification </li>
				        <li>- unique circuitry</li>
				        <li>- fixed bias</li>
				        <li>- tube rectification</li>
				        <li>- no negative feedback</li>
				        <li>- (2) Jensen step up transformers to accommodate a wide range of cartridges</li>
					    <li>- 3 layers of shielding on critical parts</li>
				    </ul>
				</article>
				<article>
					<h4>Specification</h4>
					<dl>
				        <dt>EQ curve positions</dt>
				        	<dd>RIAA, TELDEC, EMI, COLUMBIA, DECCA</dd>
				        <dt>Inputs</dt>
				        	<dd>Low impedance MC cartridge x1</dd>
				        	<dd>High impedance MC cartridge x1</dd>
				        <dt>Input impedance</dt>
				        	<dd>low: 36&Omega;</dd>
				        	<dd>hi: 470&Omega;</dd>
				        <dt>Output impedance</dt>
				        	<dd>3k&Omega;</dd>
				        <dt>Gain</dt>
				        	<dd>Low MC: 68dB (1kHz, RIAA)</dd>
				        	<dd>High MC: 54dB (1kHz, RIAA)</dd>
				        <dt>Frequency deflection</dt>
				        	<dd>0.5dB (20Hz - 20kHz) maximum</dd>
				        <dt>Total harmonic distortion</dt>
				        	<dd>0.1% @ 300mv RMS output, 1kHz</dd>
				        <dt>Signal to Noise</dt>
				        	<dd>-70dB (IHF-A, 5.0mv RMS)</dd>
				        <dt>Tube compliment</dt>
				        	<dd>6922 x4</dd>
				        	<dd>6CA4 x2</dd>
				        <dt>Channel balance</dt>
				        	<dd>0.5dB maximum</dd>
				        <dt>Power consumption</dt>
				        	<dd>44W</dd>
				        <dt>Dimensions</dt>
				        	<dd>W: 398mm / H: 103mm / D: 354mm</dd>
				        <dt>Weight</dt>
				        	<dd>8.0kg</dd>
				    </dl>
				</article>
			</div>
			<div id="other_products">
				<a href="<?php echo PATH_TO_ROOT ?>product.php">その他の製品を見る</a>
			</div>
		</section>
	</div>
	<!--/main-->
	<footer>
		<div class="to-the-top">
			<a href="#">ページTOPへ↑</a>
		</div>
		<div class="contact">
			<a href="">
				<img src="<?php echo PATH_TO_ROOT ?>images/common/mail_icon@2x.gif" alt="">
				<span>お問い合わせ</span>
			</a>
		</div>
		<div class="fb-components">
			<div class="fb-like" data-href="http://zandenaudio.com" data-width="90" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		<div class="sub-nav">
			<ul>
			    <li>PRODUCT</li>
			    <li>WHERE TO BUY</li>
			    <li>COMPANY</li>
			</ul>
		</div>
		<div class="copyright">
			<p>
				© 2014 Zanden Audio Systems Ltd.
			</p>
		</div>
	</footer>
</div>

<!--Slick http://kenwheeler.github.io/slick/ -->
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('.carousel').slick({
		dots: true,
		arrows: false,
		centerMode: false,
		centerPadding: '30px',
		slidesToShow: 3,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					dots: true,
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
		]
	});
});
</script>
<!--/Slick-->

</body>
</html>