<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\bootstrap5\Alert;
use yii\web\Application;

/**
 * @var yii\web\View $this
 * @var Da\User\Module $module
 */
/** @var Application $app */
$app = Yii::$app;

?>

<?php if ($module->enableFlashMessages): ?>
    <div class="row">
        <div class="col-xs-12">
            <?php foreach ($app->getSession()->getAllFlashes(true) as $type => $message): ?>
                <?php if (in_array($type, ['success', 'danger', 'warning', 'info'], true)): ?>
                    <?= Alert::widget(
                        [
                            'options' => ['class' => 'alert-dismissible alert-' . $type],
                            'body' => $message,
                        ]
                    ) ?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>
