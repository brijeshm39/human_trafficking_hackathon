<?php
	if(validation_errors()){
//    echo "hi";die();
		?>
		<div class="col-lg-12">
			<div class="alert alert-dismissable alert-danger">
				<button type="button" class="close" data-dismiss="alert"></button>
				<?php echo validation_errors(); ?>
			</div>
		</div>

	<?php
	}

	if( $this->session->flashdata('success')){
		?>
		<div class="col-lg-12">
			<div class="alert alert-dismissable alert-success">
				<button type="button" class="close" data-dismiss="alert"></button>
				<strong>Task completed!<br></strong>
				<?php echo $this->session->flashdata("success"); ?>.
			</div>
		</div>
	<?php
	}

	if( $this->session->flashdata('error')){
//    echo "hi";die();
		?>
		<div class="col-lg-12">
			<div class="alert alert-dismissable alert-danger">
				<button type="button" class="close" data-dismiss="alert"></button>
				<b>Oops! Something went wrong.</b><br>
				<?php echo $this->session->flashdata("error")."<br>";
					if(validation_errors()){
						echo validation_errors();
					}?>.
			</div>
		</div>
	<?php
	}

	if(isset($error)){
		?>
		<div class="col-lg-12">
			<div class="alert alert-dismissable alert-danger">
				<button type="button" class="close" data-dismiss="alert"></button>
				<strong>Oops! Something went wrong.<br></strong>
				<?php echo $error; ?>.
			</div>
		</div>

	<?php
	}