<?php
$email_entered = "null"
?>
<!DOCTYPE html>
<p>Please enter your email:</p>
<input type="text" name="email" class="form-control" value="<?php $email_entered; ?>">
<input type="submit" class="btn btn-primary" value="Submit">
</html>

<?php
echo $email_entered
?>