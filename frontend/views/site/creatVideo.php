           <?php

           /* @var $this yii\web\View */
           /* @var $form yii\bootstrap\ActiveForm */
           /* @var $model \frontend\models\SignupForm */

           use yii\helpers\Html;
           use yii\bootstrap\ActiveForm;


           $this->title = 'Creat Video';
           $this->params['breadcrumbs'][] = $this->title;
           ?>
           <div class="site-signup">
               <h1><?= Html::encode($this->title) ?></h1>

               <p>Please fill out the following fields to signup:</p>

               <div class="row">
                   <div class="col-lg-5">
                       <?php $form = ActiveForm::begin([
                           'options' => ['enctype' => 'multipart/form-data']
                       ]); ?>
                       <?= $form->field($model, 'videoTitle')->textInput(['autofocus' => true]) ?>
                       <?php $cate = ['Thể thao' => 'Thể thao', 'Giải trí' => 'Giải trí', 'Xã hội' => 'Xã hội']; ?>
                       <?= $form->field($model, 'cate')->dropDownList($cate, ['Prompt' => 'Select']); ?>

                        <?php $channel = ['Thể thao' => 'Thể thao', 'Giải trí' => 'Giải trí', 'Xã hội' => 'Xã hội']; ?>
                        <?= $form->field($model, 'channel')->dropDownList($channel, ['Prompt' => 'Select']); ?>

                       <?= $form->field($model, 'publistTime')->textInput(['type' => 'number']) ?>
                       <?= $form->field($model, 'videoDesc')->textInput() ?>
                       <?= $form->field($model, 'videoImage')->fileInput() ?>
                       <?= $form->field($model, 'videoMedia')->fileInput() ?>
                       <?php $item = ['Is New' => 'Is New', 'Is Hot' => 'Is Hot', 'Has Live' => 'Has Live']; ?>
                       <?= $form->field($model, 'items')->checkboxList($item, ['Prompt' => 'Select']);?>
                       <div class="form-group">
                           <?= Html::a( 'Back', Yii::$app->request->referrer); ?>
                       </div>
                       <div class="form-group">
                           <?= Html::submitButton('submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
                       </div>

                       <?php ActiveForm::end(); ?>
                   </div>
               </div>
           </div>