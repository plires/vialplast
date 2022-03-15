<div id="notifications" class="row">
	<div class="col-md-12">
		<?php if (isset($msg_success)): ?>

		  <div id="msg_success" class="alert alert-success alert-dismissible fade show" role="alert">
		    <strong>¡Consulta recibida!</strong>
		    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		    <ul style="padding: 0;">
		      <li><?php echo $msg_success; ?></li>
		    </ul>
		  </div>

		<?php endif ?>
	</div>

	<div class="col-md-12">
		<?php if (isset($errors) && !empty($errors) ): ?>

		  <div id="error_seguro" class="alert alert-danger alert-dismissible fade show" role="alert">
		    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		    <ul style="padding: 0;">

		      <?php foreach ($errors as $error): ?>
		        <li><?= $error ?> </li>
		      <?php endforeach ?>

		    </ul>
		  </div>

		<?php endif ?>
	</div>
</div>