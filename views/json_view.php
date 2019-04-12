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


<?php include "menu_view.php" ?>

<div class="container">
		<div class="card-deck-wrapper">
			<div class="card-deck">

				<?php foreach ($mangkq as $key => $value): ?>
					
				
				<div class="card">
					<div class="card-block">
						<h4 class="card-title">Tên : <?= $value->ten ?></h4>
						<p class="card-text"> Số điện thoại : <?= $value->sdt ?></p>
						<a href="json/xoa_json/<?= $value->sdt ?>" class="btn btn-danger">Xoá  <i class="fa fa-remove"></i></a>
						
					</div>
				</div>
				
				<?php endforeach ?>
			</div>
		</div>
</div>
<div class="container">
<form method="post" action="json/add_data">
	<fieldset class="form-group">
		<label for="formGroupExampleInput">Tên</label>
		<input name="ten" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
	</fieldset>
	<fieldset class="form-group">
		<label for="formGroupExampleInput2">Số điện thoại</label>
		<input name="sdt" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example input">
	</fieldset>
	<fieldset class="form-group">
		<input type="submit" class="form-control btn btn-info" id="formGroupExampleInput2"  value="Thêm dữ liệu">
	</fieldset>
</form>
	</div>
</body>
</html>