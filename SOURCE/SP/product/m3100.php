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
				<span class="category"><a href="">プリアンプ</a></span>
				<h3>Model 3100</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="carousel">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m3100a.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m3100b.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Features</h4>
					<ul>
				        <li>- high gain</li>
				        <li>- unique circuitry</li>
				        <li>- fixed bias</li>
				        <li>- tube rectification</li>
				        <li>- no negative feedback</li>
				        <li>- output transformers</li>
				        <li>- full function remote control</li>
				        <li>- absolute polarity switch</li>
				        <li>- 3 layers of shielding on critical parts</li>
				    </ul>
				</article>
				<article>
					<h4>Specification</h4>
					<dl>
				        <dt>Frequency response</dt>
					        <dd>10Hz-20kHz(-0.5dB)</dd>
				        <dt>Input impedance</dt>
					        <dd>XLR: 10k&Omega;</dd>
					        <dd>RCA: 100k&Omega;</dd>
				        <dt>Output impedance</dt>
					        <dd>300&Omega;</dd>
				        <dt>Analog inputs</dt>
					        <dd>RCA x3</dd>
					        <dd>XLR x1</dd>
				        <dt>Analog outputs</dt>
					        <dd>RCA x2</dd>
					        <dd>XLR x2</dd>
				        <dt>Tube compliment</dt>
					        <dd>5687WB x2</dd>
				        <dt>Power consumption</dt>
					        <dd>25W</dd>
				        <dt>Dimensions</dt>
					        <dd>W: 398mm / H: 254mm / D: 103mm</dd>
				        <dt>Weight</dt>
					        <dd>9.0kg</dd>
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