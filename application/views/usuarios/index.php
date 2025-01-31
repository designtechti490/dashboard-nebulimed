<?php $this->load->view('layout/sidebar'); ?>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

		<?php $this->load->view('layout/topbar'); ?>

			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Breadcrumb Menu -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
					</ol>
				</nav>

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

				<?php if($message = $this->session->flashdata('error')): ?>

					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong><ion-icon name="warning"></ion-icon>&nbsp;&nbsp;<?php echo $message; ?></strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
					
				<?php endif; ?>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<a title="Cadastrar novo usuário" href="<?php echo base_url('usuarios/add'); ?>" class="btn btn-success float-right"><ion-icon name="person-add"></ion-icon>&nbsp;Novo</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th>Usuário</th>
										<th>Login</th>
										<th>Perfil</th>
										<th class="text-center">Ativo</th>
										<th class="text-right no-sort pr-3">Ações</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($usuarios as $user): ?>
									<tr>
										<td><?php echo $user->id ?></td>
										<td><?php echo $user->username ?></td>
										<td><?php echo $user->email ?></td>
										<td><?php echo ($this->ion_auth->is_admin($user->id) ? 'Administrador' : 'Vendedor'); ?></td>
										<td class="text-center pr-4"><?php echo ($user->active == 1 ? '<span class="badge badge-success btn-sm">Sim</span>' : '<span class="badge badge-danger btn-sm">Não</span>') ?></td>
										<td class="text-right">
											<a title="Editar" href="<?php echo base_url('usuarios/edit/'.$user->id);?>" class="btn btn-small btn-primary"><ion-icon name="create-sharp"></ion-icon></a>
											<a title="Excluir" href="javascript(void);" data-toggle="modal" data-target="#user-<?php echo $user->id; ?>" class="btn btn-small btn-danger"><ion-icon name="person-remove"></ion-icon></a>
										</td>
									</tr>
									<div class="modal fade" id="user-<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
										aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Deletar usuário?</h5>
													<button class="close" type="button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">Tem realmente certeza que quer excluí-lo? <br><br>Para excluir o registro clique em <strong>"sim"</strong>. Para cancelar, clique em <strong>"Não"</strong></div>
												<div class="modal-footer">
													<button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
													<a class="btn btn-primary btn-sm" href="<?php echo base_url('usuarios/del/'.$user->id); ?>">Sim</a>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach;?>									
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->      
