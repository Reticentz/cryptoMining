<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Rounds */

$this->title = 'Create Rounds';
$this->params['breadcrumbs'][] = ['label' => 'Rounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rounds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
