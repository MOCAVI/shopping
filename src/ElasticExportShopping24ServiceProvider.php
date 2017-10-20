<?php

namespace ElasticExportShopping24;

use ElasticExportIdealoDEmocaviMOD\Helper\PriceHelper;
use ElasticExportIdealoDEmocaviMOD\Helper\PropertyHelper;
use ElasticExportIdealoDEmocaviMOD\Helper\StockHelper;
use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

class ElasticExportShoping24ServiceProvider extends DataExchangeServiceProvider
{
    public function register()
    {

    }

    public function exports(ExportPresetContainer $container)
    {
        $container->add(
            'Shopping24-Plugin-MOCAVI',
            'ElasticExportIdealoShopping24\ResultField\Shopping24',
            'ElasticExportIdealoShopping24\Generator\Shopping24',
            '',
            true,
            true
        );
    }
}
