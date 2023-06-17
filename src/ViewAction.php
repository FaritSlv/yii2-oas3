<?php

/**
 * Yii2 php swagger module
 *
 * @author    Simon Rodin <master@genx.ru>
 * @license   http://opensource.org/licenses/MIT MIT Public
 * @link      https://github.com/genxoft/yii2-oas3
 *
 */

namespace genxoft\swagger;

use Yii;
use yii\base\Action;
use yii\web\Response;

class ViewAction extends Action
{
    /**
     * @var string
     * Open Api Swagger Json URL
     */
    public $apiJsonUrl;
    public $oauth2RedirectUrl;

    public $uiLayout = 'StandaloneLayout';

    /**
     * Action runner
     * @return string
     */
    public function run()
    {
        Yii::$app->getResponse()->format = Response::FORMAT_HTML;

        return $this->controller->view->renderFile(__DIR__ . '/view.php', [
            'apiJsonUrl' => $this->apiJsonUrl,
            'oauth2RedirectUrl' => $this->oauth2RedirectUrl,
            'uiLayout' => $this->uiLayout,
        ], $this->controller);
    }
}
