<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="row">
    <div class="col-sm-6">
        <?php
            // if(Yii::$app->session->hasFlash('success')){
            //     echo "<div class='alert alert-success'>" .
            //             Yii::$app->session->getFlash('success') .
            //         "</div>";
            // }
        ?>
        <?php
            $form = ActiveForm::begin([
                'method' => 'post',
                'action' => Url::to(['site/form-pekerja']) 
            ]);
        ?>

        <?= $form->field($model, 'nama')->textInput() ?>
        <?= $form->field($model, 'jabatan')->dropDownList($model->dataJabatan(), [
            'class' => 'form-control', 'prompt'=>'- Pilih Jabatan -'
        ]) ?>
        <?= $form->field($model, 'email')->textInput() ?>
        <?= $form->field($model, 'keterangan')->textarea() ?>
        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        </div>
        <?php
            ActiveForm::end();
        ?>
    </div>
</div>