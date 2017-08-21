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
				<span class="category"><a href="">CDトランスポート</a></span>
				<h3>Model 2000 Premium</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="carousel">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m2000a.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m2000b.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m2000c.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m2000d.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m2000e.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Introduction</h4>
					<p>
						過去に数々の受賞暦を持つCD-Transportです。発売当時、世界最高精度のダブルオーブンクリスタルジェネレイター（OCXO）を内蔵した初めての製品でした。それは、今、始まろうとしているハイエンドPCオーディオに対応したD/Aコンバータにも受け継がれるべきアイデアです。その音質は今でもトップクラスを維持し続けています。
					</p>
				</article>
				<article>
					<h4>Specification</h4>
					<dl>
				        <dt>CD drive</dt>
					        <dd>Philips CD-PRO2LF with modification</dd>
				        <dt>Custom crystal oscillator</dt>
					        <dd>OCXO</dd>
					        <dd>Stability: 2 x 10<sup>-10</sup></dd>
				        <dt>Digital outputs</dt>
					        <dd>S/PDIF</dd>
					        <dd>AES/EBU</dd>
					        <dd>I<sup>2</sup>S (custom)</dd>
					        <dd>BNC (word clock)</dd>
				        <dt>Dimensions</dt>
					        <dd>(main) W: 398mm / H: 137mm / D: 398mm</dd>
					        <dd>(power) W: 352mm / H: 60mm / D: 349mm</dd>
				        <dt>Weight</dt>
					        <dd>(main) 12.5kg</dd>
					        <dd>(power) 8.0kg</dd>
				    </dl>
				</article>
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