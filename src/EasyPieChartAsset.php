<?php

namespace braunmar\yii\easyPieChartAsset;

/**
 * Easy pie chart asset
 *
 * @author Marek Braun
 * @package braunmar/easypiechart
 * @see https://github.com/braunmar/easypiechart
 */
class EasyPieChartAsset extends \yii\web\AssetBundle
{
    /**
     * Bower path
     * @var string
     */
    public $sourcePath = '@bower/jquery.easy-pie-chart';
    
    /**
     * Javascript files
     * @var array
     */
    public $js = [
        'dist/jquery.easypiechart.min.js',
    ];
    
    /**
     * Asset dependences
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
