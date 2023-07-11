<?php
/**
 * Yii2 php swagger module
 *
 * @author    Simon Rodin <master@genx.ru>
 * @license   http://opensource.org/licenses/MIT MIT Public
 * @link      https://github.com/genxoft/yii2-oas3
 *
 */

namespace faritslv\swagger;

use yii\web\AssetBundle;
use yii\web\View;

class BowerAssets extends AssetBundle
{
    public $sourcePath = '@bower';

    public $js = [
        'swagger-ui/dist/swagger-ui-bundle.js',
        'swagger-ui/dist/swagger-ui-standalone-preset.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $css = [
        [
            'swagger-ui/dist/swagger-ui.css',
            'font-roboto/dist/styles/roboto.min.css',
            'montserrat-webfont/css/montserrat-webfont.min.css',
            'media' => 'screen, print',
        ],
    ];
}
