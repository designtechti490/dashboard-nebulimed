<?php $this->load->view('layout/sidebar'); ?>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

		<?php $this->load->view('layout/topbar'); ?>

			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Page Heading -->
				<?php if($message = $this->session->flashdata('sucesso')): ?>
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong><ion-icon name="checkbox"></ion-icon>&nbsp;&nbsp;<?php echo $message; ?></strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
				<?php endif; ?>
				
				<h1 class="h3 mb-4 text-gray-800">Home</h1>

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->      
