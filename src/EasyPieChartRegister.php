<?php

namespace braunmar\yii\easypiechart;

use yii\base\Widget;

/**
 * Easy pie chart for multiple charts
 *
 * @author Marek Braun
 * @package braunmar/easypiechart
 * @see https://github.com/braunmar/easypiechart
 */
class EasyPieChartRegister extends Widget
{
    /**
     * Charts
     * @var array
     */
    public $charts = [];
    
    public function init()
    {
        foreach ($this->charts as $chart) {
            $options = json_encode($chart['options']);
            $this->view->registerJs("$('{$chart['selector']}').easyPieChart($options);");
        }
    }
}
