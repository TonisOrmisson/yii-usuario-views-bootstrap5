<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

/**
 * @var Rule $model
 * @var yii\web\View $this
 * @var string[] $unassignedItems
 */

use Da\User\Model\Rule;
use Da\User\Module;

$this->title = Yii::t('usuario', 'Create new rule');
$this->params['breadcrumbs'][] = $this->title;

/** @var Module $module */
$module = Yii::$app->getModule('user');

?>

<?php $this->beginContent($module->viewPath . '/shared/admin_layout.php') ?>

<?= $this->render(
    '/rule/_form',
    [
        'model' => $model,
    ]
) ?>

<?php $this->endContent() ?>
