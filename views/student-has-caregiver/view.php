<?php

use app\models\StudentHasCaregiver;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentHasCaregiver */

$this->title = $model->student->name;
?>
<div class="student-has-caregiver-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a($model->caregiver->name, ['caregiver/view', 'id' => $model->caregiver_id], ['class' => 'btn btn-success']) ?>
        <?= Html::a($model->student->name, ['student/view', 'id' => $model->student_id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Módosítás', ['update', 'student_id' => $model->student_id, 'caregiver_id' => $model->caregiver_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Törlés', ['delete', 'student_id' => $model->student_id, 'caregiver_id' => $model->caregiver_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'caregiver_id',
                'value' => static function (StudentHasCaregiver $model) {
                    return $model->caregiver->name;
                }
            ],
            [
                'attribute' => 'student_id',
                'value' => static function (StudentHasCaregiver $model) {
                    return $model->student->name;
                }
            ],
        ],
    ]) ?>
</div>
