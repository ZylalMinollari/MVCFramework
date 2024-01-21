<?php 
use app\core\form\Form;
/**
 * @var $model \app\models\User
 */
?>

<h1>Log In</h1>

<?php $form = Form::begin('', "post") ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>

<button type="submit" class="btn btn-primary mt-3">Submit</button>
<?php echo Form::end() ?>