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
 * @var User $model
 * @var Token $token
 */

use Da\User\Model\Token;
use Da\User\Model\User;

?>
<?= Yii::t('usuario', 'Hello') ?>,

<?= Yii::t('usuario', 'We have received a request to reset the password for your account on {0}', [Yii::$app->name]) ?>.
<?= Yii::t('usuario', 'Please click the link below to complete your password reset') ?>.

<?= $token->url ?>

<?= Yii::t('usuario', 'If you cannot click the link, please try pasting the text into your browser') ?>.

<?= Yii::t('usuario', 'If you did not make this request you can ignore this email') ?>.
