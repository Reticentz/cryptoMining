<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\gpu */

$this->title = 'Create Gpu';
$this->params['breadcrumbs'][] = ['label' => 'Gpus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gpu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
