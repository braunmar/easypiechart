<?php

/**
 * @link https://github.com/braunmar/yii2-easypiechart
 * @copyright Copyright (c) 2016 Marek Braun
 * @license https://github.com/braunmar/yii2-easypiechart/blob/master/LICENSE
 */

namespace braunmar\yii\easypiechart;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Easy pie chart for single chart
 *
 * 
 * @author Marek Braun
 * @package braunmar/yii2-easypiechart
 * @see https://github.com/braunmar/yii2-easypiechart
 */
class EasyPieChart extends Widget
{
    /**
     * Options for easy pie chart jquery plugin
     * @var array
     */
    public $pluginOptions = [];
    
    /**
     * Options for element
     * @var array
     */
    public $options = [];
    
    /**
     * Element to use
     * @var string
     */
    public $element = 'div';
    
    /**
     * Content of element
     * @var string 
     */
    public $content = '';
    
    /**
     * Element id prefix
     * @var string
     */
    public $dataIdPrefix = 'pie-chart-';
    
    /**
     * Run widget
     * @return string
     */
    public function run()
    {
        $id = $this->dataIdPrefix . $this->id;
        $html = Html::tag($this->element, $this->content, array_merge($this->options, ['data-chart-id' => $id]));
        
        $pluginOptions = json_encode($this->pluginOptions);
        $this->view->registerJs("$('[data-chart-id=\"{$id}\"]').easyPieChart({$pluginOptions});");
        
        EasyPieChartAsset::register($this->view);
        
        return $html;
    }
}
