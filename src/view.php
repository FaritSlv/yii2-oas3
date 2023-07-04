<?php

/**
 * Yii2 php swagger module
 *
 * @author    Simon Rodin <master@genx.ru>
 * @license   http://opensource.org/licenses/MIT MIT Public
 * @link      https://github.com/genxoft/yii2-oas3
 *
 */

/** @var string $apiJsonUrl */

use faritslv\swagger\Assets;

Assets::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <?php $this->head() ?>
</head>

<body style="margin:0;">
    <?php $this->beginBody() ?>
    <div id="swagger-ui"></div>
    <script>
        window.onload = function() {
            // Begin Swagger UI call region
            let ui = SwaggerUIBundle({
                url: '<?= $apiJsonUrl; ?>',
                oauth2RedirectUrl: '<?= $oauth2RedirectUrl; ?>',
                dom_id: '#swagger-ui',
                deepLinking: true,
                presets: [
                    SwaggerUIBundle.presets.apis,
                    <?= empty($uiLayout) ? 'undefined' : 'SwaggerUIStandalonePreset' ?>,
                ],
                plugins: [
                    SwaggerUIBundle.plugins.DownloadUrl
                ],
                <?= empty($uiLayout) ? '' : "layout: '$uiLayout'" ?>
            });
            window.ui = ui
        }
    </script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>