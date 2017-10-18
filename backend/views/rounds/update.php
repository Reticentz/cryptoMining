<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Rounds */

$this->title = 'Update Rounds: ' . $model->block_number;
$this->params['breadcrumbs'][] = ['label' => 'Rounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->block_number, 'url' => ['view', 'id' => $model->block_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rounds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
