<link rel="stylesheet" a href="register.css">
<?php if(count($errors)>0):?>
    <div class="error">
<?php foreach ($errors as $error): ?>
    <p><?php echo $error; ?></p>
 <?php endforeach ?>
</div>
<?php endif ?>
