
<?php echo include('header.php');?>

<?php echo include('topheader.php');?>

<?php echo include('mainslider.php');?>


<!-- Welcome !-->
<br /><br />
<div class='text-center bottom-space'><h1 class='size-lg no-padding'>WELCOME TO <span class='logo-font custom-color'>Seikō</span> STORE</h1><div class='line-divider'></div>
<p class='custom-color-alt'>Lorem ipsum dolor sit amet, ex eam mundi populo accusamus, aliquam quaestio petentium te cum.
<br>Vim ei oblique tacimates, usu cu iudico graeco. Graeci eripuit inimicus vel eu, eu mel unum laoreet splendide, cu integre apeirian has.</p></div>
<div class='block'><div class='container'><div class='row'><div class='col-sm-4'><div class='box style2 bgcolor1 text-center'>
<div class='box-icon'><i class='icon icon-truck'></i></div><h3 class='box-title'>FREE SHIPPING</h3>
<div class='box-text'>Free shipping on all orders over $199</div></div></div>
<div class='col-sm-4'><div class='box text-center style2 bgcolor2'>
<div class='box-icon'><i class='icon icon-dollar'></i></div><h3 class='box-title'>MONEY BACK</h3>
<div class='box-text'>100% money back guarantee</div></div></div><div class='col-sm-4'>
<div class='box text-center style2 bgcolor3'><div class='box-icon'><i class='icon icon-help'></i></div><h3 class='box-title'>ONLINE SUPPORT</h3>
<div class='box-text'>Service support fast 24/7</div></div></div></div></div></div>
<!-- End Welcome!-->


<?php echo include('product.php');?>



<!-- Banner Layout !-->
    <div class="block full-nopad fullwidth bottom-space">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="col-content">
						<a href="#" class="banner-wrap">
							<div class="banner style-7 autosize-text image-hover-scale" data-fontratio="9.6">
								<img src="https://cdn.shopify.com/s/files/1/1323/8471/files/banner-layout-5.jpg?15212424862871340357" alt="Banner"></img>
								<div class="banner-caption horr vertc">
									<div class="vert-wrapper">
										<div class="vert">
											<div class="text-3">
												<span class="text-3-inner">
													-5% Sale
												</span>
											</div>
											<div class="text-1">
												Spring in Style
											</div>
											<div class="text-2">
												Run collection
											</div>
											<div class="banner-btn text-hoverslide" data-hcolor="#f82e56">
												<span>
													<span class="text">
														SHOP NOW
													</span>
													<span class="hoverbg">
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="col-content">
						<a href="#" class="banner-wrap">
							<div class="banner style-8 autosize-text image-hover-scale" data-fontratio="10">
								<img src="https://cdn.shopify.com/s/files/1/1323/8471/files/banner-layout-6.jpg?15212424862871340357" alt="Banner"></img>
								<div class="banner-caption horr vertc">
									<div class="vert-wrapper">
										<div class="vert">
											<div class="text-1">	Even the
												<span>
													hottest
												</span> day wont’t slow you down
											</div>
											<div class="banner-btn text-hoverslide" data-hcolor="#67E0FA">
												<span>
													<span class="text">
														SHOP NOW
													</span>
													<span class="hoverbg">
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Banner Layout !-->




<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/instafeed.min.js?18321598552377106331" type="text/javascript"></script>
<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 'self',
        accessToken: '3489650088.1d65fda.fffa13214cd847439dfb6e8639f98b2b',
        limit:20,
        sortBy: 'most-recent',
        resolution:'low_resolution',

    });
    userFeed.run();
</script>
<div class="block fullwidth full-nopad">
    <div class="container">
        <div class="instagramm-feed-full"  id="instafeed"></div>
        <div class="instagramm-title">Seiko</div>
    </div>
</div>
</main>

<?php include('footer.php');?>
