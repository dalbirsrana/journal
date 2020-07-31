<div id="container">

<h2>Submit your Article</h2>

<?php
if($msg) {
 echo "<div class='alert alert-success'>". $msg ."</div>";
}
?>

<div id="form_container">

<?php echo form_open_multipart('articles/do_upload'); ?>

<div class="row">
<div class="col col-md-8">
<label for="dname">Name: </label>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
</div>
</div>

<div class="row">
<div class="col col-md-8">
<label for="demail">Email: </label>
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?>
</div>
</div>

<div class="row">
<div class="col col-md-8">
<label for="darticle">Select File: </label>
<input type="file" id="darticle" name="darticle" />
<p>Only pdf document of less than 2MB size allowed.</p>
</div>
</div>

<div class="row">
<div class="col">
<input type="checkbox" id="ddisclaimer" name="ddisclaimer" required  /> <small>I hereby certify that the research paper being submitted for the journal Academic Vision is based on my original research work. The article has not been submitted to any other journal/book for publication or consideration. Further, I shall be responsible for any complaints related to plegarism, copyright and any ethical issues related to religious, communal provocations.</small>
</div>
</div>


<div class="row">
<div class="col col-md-8 center">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
</div></div>


<?php echo form_close(); ?>

</div>

</div>