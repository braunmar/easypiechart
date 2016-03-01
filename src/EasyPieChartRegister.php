<?php

/**
 * @link https://github.com/braunmar/yii2-easypiechart
 * @copyright Copyright (c) 2016 Marek Braun
 * @license https://github.com/braunmar/yii2-easypiechart/blob/master/LICENSE
 */

namespace braunmar\yii\easypiechart;

use yii\base\Widget;

/**
 * Easy pie chart for multiple charts
 *
 * @author Marek Braun
 * @package braunmar/yii2-easypiechart
 * @see https://github.com/braunmar/yii2-easypiechart
 */
class EasyPieChartRegister extends Widget
{

    /**
     * Charts
     * @var array
     */
    public $charts = [];

    /**
     * Run widget
     * @return string
     */
    public function init()
    {
        foreach ($this->charts as $chart) {
            $options = json_encode($chart['pluginOptions']);
            $this->view->registerJs("$('{$chart['selector']}').easyPieChart({$options});");
        }

        EasyPieChartAsset::register($this->view);
    }

}
