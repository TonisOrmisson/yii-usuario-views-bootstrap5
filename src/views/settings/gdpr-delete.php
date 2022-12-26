<?php
/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Da\User\Form\GdprDeleteForm;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var  GdprDeleteForm $model **/
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="m-0">
                    <?= Yii::t('usuario', 'Delete personal data') ?>
                </h3>
            </div>
            <div class="card-body">
                <p><?= Yii::t('usuario', 'You are about to delete all your personal data from this site.') ?></p>
                <p class="text-danger">
                    <?= Yii::t(
                        'usuario',
                        'Once you have deleted your data, you will not longer be able to sign in with this account.'
                    ) ?>
                </p>
                <hr>
                <?php
                $form = ActiveForm::begin([])
                ?>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?= Html::submitButton(Yii::t('usuario', 'Delete'), ['class' => 'btn btn-danger']) ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?= Html::a(Yii::t('usuario', 'Back to privacy settings'), ['/user/settings/privacy'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
                <?php
                ActiveForm::end();
                ?>
            </div>
        </div>
    </div>
</div>

