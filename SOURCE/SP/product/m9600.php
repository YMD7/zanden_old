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
				<span class="category"><a href="">パワーアンプ</a></span>
				<h3>Model 9600</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="carousel">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m9600a.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m9600b.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m9600c.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m9600d.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m9600e.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Introduction</h4>
					<p>
						Model 9600はZandenのパワーアンプのフラッグシップ製品です。パワーチューブにはKR845を使用し、真空管アンプでは困難なハイパワーと高音質の両方を得ることに成功しています。フラッグシップにふさわしく、外装ケースもアルミパネルとステンレスを巧みに組み合わせた重厚で風格のあるデザインと仕上げになっています。回路構成は固定バイアス＆完全フルバランスプッシュプルです。電源回路はすべて真空管による整流方式を採用しています。回路、デザインそして組み立てに妥協のない製品です。
					</p>
				</article>
				<article>
					<h4>Specification</h4>
					<dl>
				        <dt>Power output</dt>
					        <dd>60W (class A) / 100W (class AB)</dd>
				        <dt>Input</dt>
					        <dd>XLR</dd>
				        <dt>Input impedance</dt>
					        <dd>7.5k&Omega;</dd>
				        <dt>Output impedance</dt>
					        <dd>2&Omega; / 4&Omega; / 8&Omega;</dd>
				        <dt>Analog inputs</dt>
					        <dd>XLR</dd>
				        <dt>Frequency response</dt>
					        <dd>6Hz - 50KHz (-3dB)</dd>
				        <dt>Tube complement</dt>
					        <dd>KR845 x2</dd>
					        <dd>5687WB x3</dd>
					        <dd>5AR4 x1</dd>
					        <dd>5R4WGB x2</dd>
				        <dt>Dimensions</dt>
					        <dd>W: 320mm / H: 440mm / D: 450mm</dd>
				        <dt>Weight</dt>
					        <dd>42.5kg</dd>
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