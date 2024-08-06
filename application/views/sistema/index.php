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
						<h6 class="m-0 font-weight-bold text-primary"><?php echo $titulo; ?></h6>
						<a title="Voltar" href="/" class="btn btn-success btn-sm float-right"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>&nbsp;Voltar</a>
					</div>
					<div class="card-body">
						<form method="POST" name="form_edit">
							<div class="form-group row">
								<div class="col-md-3">
									<label>Razão Social</label>
									<input type="text" class="form-control" name="sistema_razao_social" value="<?php echo $sistema->sistema_razao_social; ?>" placeholder="Razão Social">
									<?php echo form_error('sistema_razao_social', '<small class="form-text text-danger">','</small>'); ?>
								</div>
								<div class="col-md-3">
									<label>Nome Fantasia</label>
									<input type="text" class="form-control" name="sistema_nome_fantasia" value="<?php echo $sistema->sistema_nome_fantasia; ?>" placeholder="Nome Fantasia">
									<?php echo form_error('sistema_nome_fantasia', '<small class="form-text text-danger">','</small>'); ?>
								</div>
								<div class="col-md-3">
									<label>CNPJ</label>
									<input type="text" class="form-control cnpj" name="sistema_cnpj" value="<?php echo $sistema->sistema_cnpj; ?>" placeholder="00.000.000/0000-00">
									<?php echo form_error('sistema_cnpj', '<small class="form-text text-danger">','</small>'); ?>
								</div>
								<div class="col-md-3">
									<label>Inscrição Estadual</label>
									<input type="text" class="form-control" name="sistema_ie" placeholder="Inscrição Estadual" value="<?php echo $sistema->sistema_ie; ?>"/>
									<?php echo form_error('sistema_ie', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-2">
									<label>Telefone Fixo</label>
									<input type="text" class="form-control phone_with_ddd" name="sistema_telefone_fixo" placeholder="(00) 0000.0000" value="<?php echo $sistema->sistema_telefone_fixo; ?>"/>
									<?php echo form_error('sistema_telefone_fixo', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
								<div class="col-md-2">
									<label>Celular</label>
									<input type="text" class="form-control sp_celphones" name="sistema_telefone_movel" placeholder="(00) 90000.0000" value="<?php echo $sistema->sistema_telefone_movel; ?>"/>
									<?php echo form_error('sistema_telefone_movel', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
								<div class="col-md-3">
									<label>E-mail</label>
									<input type="email" class="form-control" name="sistema_email" placeholder="usuario@site.com.br" value="<?php echo $sistema->sistema_email; ?>"/>
									<?php echo form_error('sistema_email', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
								<div class="col-md-5">
									<label>URL do Site</label>
									<input type="text" class="form-control" name="sistema_site_url" placeholder="http://www.site.com.br" value="<?php echo $sistema->sistema_site_url; ?>"/>
									<?php echo form_error('sistema_site_url', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-2">
									<label>CEP</label>
									<input type="text" class="form-control cep" name="sistema_cep" placeholder="00.000-000" value="<?php echo $sistema->sistema_cep; ?>"/>
									<?php echo form_error('sistema_cep', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
								<div class="col-md-3">
									<label>Endereço</label>
									<input type="text" class="form-control" name="sistema_endereco" placeholder="Endereço" value="<?php echo $sistema->sistema_endereco; ?>"/>
									<?php echo form_error('sistema_endereco', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
								<div class="col-md-2">
									<label>Nº</label>
									<input type="text" class="form-control" name="sistema_numero" placeholder="Nº da rua" value="<?php echo $sistema->sistema_numero; ?>"/>
									<?php echo form_error('sistema_numero', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
								<div class="col-md-3">
									<label>Cidade</label>
									<input type="text" class="form-control" name="sistema_cidade" placeholder="Digite sua Cidade" value="<?php echo $sistema->sistema_cidade; ?>"/>
									<?php echo form_error('sistema_cidade', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
								<div class="col-md-2">
									<label>UF</label>
									<input type="text" class="form-control uf" name="sistema_estado" placeholder="Estado" value="<?php echo $sistema->sistema_estado; ?>"/>
									<?php echo form_error('sistema_estado', '<small class="form-text text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label>Texto ordem de serviço</label>
									<textarea name="sistema_txt_ordem_servico" placeholder="Digite aqui o texto" class="form-control" rows="3"></textarea>
									<?php echo form_error('sistema_txt_ordem_servico', '<small class="form-text text-danger">', '</small>'); ?>

								</div>
							</div>
					
							<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
						</form>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->      
