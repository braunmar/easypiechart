<?php

/**
 * @link https://github.com/braunmar/yii2-easypiechart
 * @copyright Copyright (c) 2016 Marek Braun
 * @license https://github.com/braunmar/yii2-easypiechart/blob/master/LICENSE
 */

namespace braunmar\yii\easypiechart;

/**
 * Easy pie chart asset
 *
 * @author Marek Braun
 * @package braunmar/yii2-easypiechart
 * @see https://github.com/braunmar/yii2-easypiechart
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
