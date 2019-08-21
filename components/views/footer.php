<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\blueclean\assets\ThemeAsset::register($this);
$context = $this->context;
?>

<footer>
	<div class="container pt-4 pb-4">
		<div class="row">
			<div class="col-lg-2">
				<h5 class="pb-3 mb-3">Tentang DPAD</h5>
			</div>
			<div class="col-lg-2">
				<h5 class="pb-3 mb-3">Link Terkait</h5>
			</div>
			<div class="col-lg-3">
				<h5 class="pb-3 mb-3">Statistik</h5>
			</div>
			<div class="col-lg-5 address">
				<h5 class="pb-3 mb-3">Dinas Perpustakaan dan Arsip Daerah
					<span class="h6 d-block mb-0">Daerah Istimewa Yogyakarta</span>
				</h5>
				<p><i class="fa fa-map-marker"></i> <?php echo $context->address;?></p>
				<p><i class="fa fa-envelope"></i> <?php echo $context->email;?></p>
				<p><i class="fa fa-phone"></i> <?php echo $context->phone;?></p>
			</div>
		</div>
	</div>
	<div class="copyright text-center text-md-left">
		<div class="container pt-4 pb-4">
			<?php echo Yii::t('app', 'Copyright &copy; {year} {siteName}. All rights reserved.', ['year'=>date("Y"), 'siteName'=>$context->siteName]);?>
			<?php if($isDemoTheme) {?>
				<span class="d-block d-md-inline"><?php echo Yii::t('app', 'Powered by {ommu}', ['ommu'=>Html::a('OMMU', 'http://ommu.co', ['title'=>'OMMU', 'target'=>'_blank'])]);?></span>
			<?php }?>
		</div>
	</div>
</footer>