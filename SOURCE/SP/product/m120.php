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
				<h3>Model 120</h3>
				<a class="product-list-link" href="<?php echo PATH_TO_ROOT ?>product.php">製品一覧 ></a>
			</div>
			<div id="product_image">
				<div class="carousel">
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m120a.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-m120b.png" alt=""></div>
					</div>
					<div class="product-image-wrapper">a
						<div class="thumbs-image"><img src="<?php echo PATH_TO_ROOT ?>images/products/thumb-powerbox3a.png" alt=""></div>
					</div>
				</div>
			</div>
			<div class="description">
				<article>
					<h4>Introduction</h4>
					<p>
						ステレオLPレコードの録音特性はRIAAに統一されていると一般的に言われてきました。しかし、弊社の調査結果ではRIAA以外にTELDEC, EMI, COLUMBIAそしてDECCAが存在するという結論に達しました。また、ステレオLPレコードの録音極性は現在のステレオLPカートリッジの出力極性を基準とした場合、非常に多くの逆極性(Inverted Phase)録音の存在が確認されています。これらの事実は、ステレオLPに対する常識を覆すものです。弊社Model 1200mk3はこれらの問題点をすべて解決しています。正しいイコライゼーションカーブと極性で再生するステレオLPは今まで体験できなかったすばらしい音楽世界を私たちに届けてくれます。
					</p>
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
				        	<dd>High MC: 56dB (1kHz, RIAA)</dd>
				        <dt>Frequency deflection</dt>
				        	<dd>0.5dB (20Hz - 20kHz) maximum</dd>
				        <dt>Total harmonic distortion</dt>
				        	<dd>0.1% @ 300mv RMS output, 1kHz</dd>
				        <dt>Signal to Noise</dt>
				        	<dd>-70dB (IHF-A, 5.0mv RMS)</dd>
				        <dt>Tube compliment</dt>
				        	<dd>6922 x4</dd>
				        	<dd>6CA4 x1</dd>
				        <dt>Channel balance</dt>
				        	<dd>0.5dB maximum</dd>
				        <dt>Power consumption</dt>
				        	<dd>44W</dd>
				        <dt>Dimensions</dt>
				        	<dd>(main) W: 398mm / H: 103mm / D: 405mm</dd>
				        	<dd>(power) W: 155mm / H: 163mm / D: 336mm</dd>
				        <dt>Weight</dt>
				        	<dd>(main) 8.0kg</dd>
				        	<dd>(power) 6.2kg</dd>
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