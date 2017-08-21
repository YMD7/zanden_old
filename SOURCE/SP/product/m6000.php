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
				<span class="category"><a href="">インテグレートアンプ</a></span>
				<h3>Model 6000</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="single">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m6000a.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Introduction</h4>
					<ul>
						<li>- class A/B</li>
						<li>- fully balanced operation</li>
						<li>- KT-120 output tubes</li>
						<li>- 2nd and 3rd stage are directly coupled</li>
						<li>- unique circuitry</li>
						<li>- fixed bias</li>
						<li>- minimal negative feedback</li>
						<li>- Asahi Kasei Fibers Pulshut high frequency noise absorption material</li>
						<li>- optional balanced inputs w/input transformers</li>
						<li>- full function remote control</li>
						<li>- absolute polarity switch</li>
				    </ul>
				</article>
				<article>
					<h4>Specification</h4>
					<dl>
				        <dt>Power output</dt>
					        <dd>Nominal power output: 90 watts/channel</dd>
					        <dd>Maximum power output: 100 watts/channel</dd>
				        <dt>Input impedance</dt>
					        <dd>100k&Omega; (RCA-standard)</dd>
					        <dd>10k&Omega; (XLR 3rd input-optional)</dd>
					        <dd>7k&Omega; (XLR unity gain-optional)</dd>
				        <dt>Output impedance</dt>
					        <dd>4&Omega; / 8&Omega;</dd>
				        <dt>Analog inputs</dt>
					        <dd>RCA including unity gain x4, (XLR-optional)</dd>
				        <dt>Frequency response</dt>
					        <dd>7Hz-60kHz (-1db)</dd>
				        <dt>Tube complement</dt>
					        <dd>KT-120 x4</dd>
					        <dd>12AU7 x4</dd>
				        <dt>Power consumption</dt>
					        <dd>270W</dd>
				        <dt>Dimensions</dt>
					        <dd>W: 426mm / H: 308mm / D: 379mm</dd>
				        <dt>Weight</dt>
					        <dd>46.2kg</dd>
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