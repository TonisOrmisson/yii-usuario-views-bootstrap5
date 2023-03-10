<?php

use Da\User\Module;
use Da\User\Search\RuleSearch;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;

/**
 * @var ActiveDataProvider $dataProvider
 * @var RuleSearch $searchModel
 * @var yii\web\View $this
 * @var Module $module
 */

$this->title = Yii::t('usuario', 'Rules');
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent($module->viewPath . '/shared/admin_layout.php') ?>
<div class="table-responsive">
<?= GridView::widget(
    [
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => "{items}\n{pager}",
        'columns' => [
            [
                'attribute' => 'name',
                'label' => Yii::t('usuario', 'Name'),
                'options' => [
                    'style' => 'width: 20%'
                ],
            ],
            [
                'attribute' => 'className',
                'label' => Yii::t('usuario', 'Class'),
                'value' => function ($row) {
                    $rule = unserialize($row['data']);
                    return get_class($rule);
                },
                'options' => [
                    'style' => 'width: 20%'
                ],
            ],
            [
                'attribute' => 'created_at',
                'label' => Yii::t('usuario', 'Created at'),
                'format' => 'datetime',
                'options' => [
                    'style' => 'width: 20%'
                ],
            ],
            [
                'attribute' => 'updated_at',
                'label' => Yii::t('usuario', 'Updated at'),
                'format' => 'datetime',
                'options' => [
                    'style' => 'width: 20%'
                ],
            ],
            [
                'class' => ActionColumn::class,
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, $model) {
                    return Url::to(['/user/rule/' . $action, 'name' => $model['name']]);
                },
                'options' => [
                    'style' => 'width: 5%'
                ],
            ]
        ],
    ]
) ?>
</div>

<?php $this->endContent() ?>
