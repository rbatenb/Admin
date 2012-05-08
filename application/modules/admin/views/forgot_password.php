<?=validation_errors();?>

<?=form_open('admin/forgot_password');?>

E-mail: <input type="text" name="email">
<input type="submit" name="submit" value="Verzenden">

<?=form_close();?>