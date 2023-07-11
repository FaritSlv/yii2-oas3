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

use faritslv\swagger\RedocAssets;

RedocAssets::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="UTF-8">
    <title>Redoc</title>
    <!-- needed for adaptive design -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--
    Redoc doesn't change outer page styles
    -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <!--
    Redoc element with link to your OpenAPI definition
    -->
    <redoc spec-url="<?= $apiJsonUrl; ?>"></redoc>
    <!--
    Link to Redoc JavaScript on CDN for rendering standalone element
    -->
    <script src="https://cdn.redoc.ly/redoc/latest/bundles/redoc.standalone.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>