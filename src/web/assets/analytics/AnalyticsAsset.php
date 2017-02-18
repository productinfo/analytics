<?php
namespace dukt\analytics\web\assets\analytics;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;
use craft\helpers\ChartHelper;
use craft\web\View;
use craft\helpers\Json;
use dukt\analytics\Plugin as Analytics;

class AnalyticsAsset extends AssetBundle
{
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = '@dukt/analytics/resources';

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/Analytics.js',
            'js/AccountExplorer.js',
        ];

        $this->css = [
            'css/AccountExplorer.css',
            'css/settings.css',
        ];

        parent::init();
    }

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $continents = Analytics::$plugin->metadata->getContinents();
        $subContinents = Analytics::$plugin->metadata->getSubContinents();
        $formats = ChartHelper::formats();
        $currency = Analytics::$plugin->analytics->getD3LocaleDefinitionCurrency();

        $js = 'var Analytics = {};';

        $js .= 'Analytics.GoogleVisualizationCalled = false;';
        $js .= 'Analytics.GoogleVisualizationReady = false;';
        $js .= 'Analytics.reports = {};';

        $js .= 'Analytics.continents = '.Json::encode($continents).';';
        $js .= 'Analytics.subContinents = '.Json::encode($subContinents).';';
        $js .= 'Analytics.formats = '.Json::encode($formats).';';
        $js .= 'Analytics.currency = '.Json::encode($currency).';';

        $view->registerJs($js, View::POS_BEGIN);
    }
}