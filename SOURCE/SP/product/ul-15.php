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
				<span class="group"><a href="">Accessory</a></span>
				<span class="category"><a href="">ケーブル</a></span>
				<h3>Model UL-15A</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="single">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m1200.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Introduction</h4>
					<p>
						電源ケーブルは電気を供給するためになくてはならないものです。そのケーブルを通って外部から様々なノイズが機器に入ってきます。しかし、ハイエンドオーディオ機器はノイズの影響に敏感です。これまでの電源ケーブルはそのノイズをシールディングのみでそれらのノイズを防ごうとしていました。しかし、Zandenの電源ケーブルは電磁波吸収材を使用し、ノイズそのものをできるだけ吸収除去する構造です。その効果はこれまでに経験したことがないほど想像を超えるものです。お使いのオーディオ機器の本当の実力を発見できるのです。
					</p>
				</article>
				<article>
					<h4>Specification</h4>
					<dl>
				        <dt>Connectors</dt>
					        <dd>Furutech IEC Connectors</dd>
					        <dd>Furutech Power Connectors</dd>
				        <dt>Cable</dt>
					        <dd>15 AWG &alpha;-Conductor (1.82 Sq.mm)</dd>
				        <dt>Special material</dt>
					        <dd>AsahiKASEI Exclusive RF noise absorption material "PULSHUT"</dd>
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