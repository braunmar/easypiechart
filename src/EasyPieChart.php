<?php

namespace braunmar\yii\easypiechart;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Easy pie chart for single chart
 *
 * @author Marek Braun
 * @package braunmar/easypiechart
 * @see https://github.com/braunmar/easypiechart
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
     * Element id prefix
     * @var string
     */
    public $dataIdPrefix = 'pie-chart-';
    
    public function init()
    {
        $id = $this->dataIdPrefix . $this->id;
        $html = Html::tag($this->element, '', array_merge($this->options, ['data-chart-id' => $id]));
        
        $pluginOptions = json_encode($this->pluginOptions);
        $this->view->registerJs("$('[data-chart-id='{$id}']').easyPieChart({$pluginOptions});");
        
        return $html;
    }
}
