<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>1.css">
</head>
<body>
	<?php include 'menu_view.php' ?>

	<form method="post" action="jsonedit/do_edit">
	<div class="container">
		
		<?php $stt =0 ?>
		<?php foreach ($mangdl as $key): ?>
			
			<?php $stt++; ?>

			<h2>Contact số : <?= $stt ?></h2>
			<hr>
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Tên</label>
				<input name="ten[]" value="<?= $key['ten'] ?>" type="text" class="form-control" placeholder="Example input">
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Số điện thoại</label>
				<input name="sdt[]" value="<?= $key['sdt'] ?>" type="text" class="form-control" placeholder="Example input">
			</fieldset>
		
		<?php endforeach ?>
		<fieldset class="form-group">
				<input type="submit" class="form-control btn btn-info" id="formGroupExampleInput2"  value="Lưu dữ liệu">
		</fieldset>
	</div>
	</form>
</body>
</html>