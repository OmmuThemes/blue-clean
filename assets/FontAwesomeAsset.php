<?php
namespace themes\blueclean\assets;

class FontAwesomeAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/fortawesome/font-awesome';
	
	public $css = [
		'css/font-awesome.min.css',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}