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
				<span class="group"><a href="">Digital Components</a></span>
				<span class="category"><a href="">D/Aコンバーター</a></span>
				<h3>Model 5000 Signature</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="carousel">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m5000a.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m5000b.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Introduction</h4>
					<p>
						Model 5000から現在のModel 5000Sまでおよそ１０年間のロングセラー製品です。US-PATENTのアナログフィルタ技術をベースしたNo-Digital Filter & No-Oversampling Multi Bit Type D/Aコンバータです。DAC-ICには　Philips TDA-1541A Double Crownを採用したもので、その再生音のリアリティは私たちを魅了し続けています。最新のDAC-ICをしてもそれには及びません。
					</p>
				</article>
				<article>
					<h4>Specification</h4>
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