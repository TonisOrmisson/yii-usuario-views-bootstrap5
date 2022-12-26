<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Da\User\Model\User;
use Da\User\Module;
use yii\authclient\Collection;
use yii\helpers\Html;
use yii\web\Application;
use yii\widgets\Menu;

/** @var Module $module */
$module = Yii::$app->getModule('user');

/** @var Application $app */
$app = Yii::$app;

/** @var User $user */
$user = $app->user->identity;
/** @var Collection $authClientCollection */
$authClientCollection = $app->get('authClientCollection');
$networksVisible = count($authClientCollection->clients) > 0;

?>

<div class="card ">
    <div class="card-header">
        <h3 class="m-0">
            <?= Html::img(
               strval($user->profile->getAvatarUrl(24)),
                [
                    'class' => 'img-rounded',
                    'alt' => $user->username,
                ]
            ) ?>
            <?= $user->username ?>
        </h3>
    </div>
    <div class="card-body">
        <?= Menu::widget(
            [
                'options' => [
                    'class' => 'nav nav-pills nav-stacked flex-column',
                ],
                'items' => [
                    ['label' => Yii::t('usuario', 'Profile'), 'url' => ['/user/settings/profile']],
                    ['label' => Yii::t('usuario', 'Account'), 'url' => ['/user/settings/account']],
                    ['label' => Yii::t('usuario', 'Privacy'),
                        'url' => ['/user/settings/privacy'],
                        'visible' => $module->enableGdprCompliance
                    ],
                    [
                        'label' => Yii::t('usuario', 'Networks'),
                        'url' => ['/user/settings/networks'],
                        'visible' => $networksVisible,
                    ],
                ],
            ]
        ) ?>
    </div>
</div>
