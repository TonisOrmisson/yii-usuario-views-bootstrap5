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
 * @var Permission $model
 * @var yii\web\View $this
 * @var string[] $unassignedItems
 * @var Module $module
 */

use Da\User\Model\Permission;
use Da\User\Module;

$this->title = Yii::t('usuario', 'Update permission');
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent($module->viewPath . '/shared/admin_layout.php') ?>

<?= $this->render(
    '/permission/_form',
    [
        'model' => $model,
        'unassignedItems' => $unassignedItems,
    ]
) ?>

<?php $this->endContent() ?>
