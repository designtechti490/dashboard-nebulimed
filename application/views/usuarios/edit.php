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
						<li class="breadcrumb-item"><a href="/usuarios">Usuários</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
					</ol>
				</nav>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<p><strong><ion-icon name="time"></ion-icon>&nbsp;Último login: &nbsp;</strong><?php echo formata_data_banco_com_hora($usuario->last_modification);?></p>
						<a title="Voltar" href="/usuarios" class="btn btn-success btn-sm float-right"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>&nbsp;Voltar</a>
					</div>
					<div class="card-body">
						<form method="POST" name="form_edit">
							<div class="form-group row">
								<div class="col-md-4">
									<label>Nome</label>
									<input type="text" class="form-control" name="first_name" value="<?php echo $usuario->first_name; ?>" placeholder="Digite seu nome">
									<?php echo form_error('first_name', '<small class="form-text text-danger">','</small>'); ?>
								</div>
								<div class="col-md-4">
									<label>Sobrenome</label>
									<input type="text" class="form-control" name="last_name" value="<?php echo $usuario->last_name; ?>" placeholder="Digite seu sobrenome">
									<?php echo form_error('last_name', '<small class="form-text text-danger">','</small>'); ?>
								</div>
								<div class="col-md-4">
									<label>E-mail</label>
									<input type="email" class="form-control" name="email" value="<?php echo $usuario->email; ?>" placeholder="Digite seu e-mail">
									<?php echo form_error('email', '<small class="form-text text-danger">','</small>'); ?>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-4">
									<label>Usuário</label>
									<input type="text" class="form-control" name="username" value="<?php echo $usuario->username; ?>" placeholder="Digite seu nome de usuário">
									<?php echo form_error('username', '<small class="form-text text-danger">','</small>'); ?>
								</div>
								<div class="col-md-4">
									<label>Ativo</label>
									<select name="active" id="active" class="form-control">
										<option value="0" <?php echo ($usuario->active == 0) ? 'selected' : ''; ?>>Não</option>
										<option value="1" <?php echo ($usuario->active == 1) ? 'selected' : ''; ?>>Sim</option>
									</select>								
								</div>
								<div class="col-md-4">
									<label>Perfil de acesso</label>
									<select class="custom-select" name="perfil_usuario">
										<option value="2" <?php echo ($perfil->id == 2) ? 'selected' : '' ?>>Vendedor</option>
										<option value="1" <?php echo ($perfil->id == 1) ? 'selected' : '' ?>>Administrador</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<label for="password">Senha antiga</label>
									<input type="password" class="form-control" name="password" placeholder="Digite sua senha">
									<?php echo form_error('password', '<small class="form-text text-danger">','</small>'); ?>

								</div>
								<div class="col-md-6">
									<label for="password">Nova senha</label>
									<input type="password" class="form-control" name="confirm_password" placeholder="Confirme sua senha">
									<?php echo form_error('confirm_password', '<small class="form-text text-danger">','</small>'); ?>

								</div>
								<input type="hidden" name="usuario_id" value="<?php echo $usuario->id; ?>">
							</div>						
							<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
						</form>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->      
