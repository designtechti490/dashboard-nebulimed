<?php $this->load->view('layout/sidebar'); ?>
<!-- Main Content -->
<div id="content">
    <?php $this->load->view('layout/topbar'); ?>            
    <!-- Begin Page Content -->
    <div class="container-fluid">
       <!-- Page Heading -->
       <!-- DataTales Example -->
       <div class="card shadow mb-4 ">
        <div class="card-header py-3 " style="background-color:#f5f5f5; border-bottom: 1px solid #9e9e9e;">
            <h6 class="m-0 font-weight-bold text-primary float-left mt-2"><?php echo $titulo ?></h6>
        </div>
        <div class="card-body">
            <form method="post" name="form_add" class="user">
             
            <?php if($message = $this->session->flashdata('error')): ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong class="text-white"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>            
                </div>                          
            </div>
        <?php endif;?>
        <?php if($message = $this->session->flashdata('sucesso')): ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong class="text-white"><i class="far fa-smile-beam"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>            
            </div>                          
        </div>
    <?php endif;?>

    <fieldset class="mt-4 border p-2">
        <legend class="font-small"><i class="fas fa-truck mr-2"></i>Dados Vendedor</legend>
        <div class="form-group row">
            <div class="col-sm-4 ">
                <label>Nome completo</label>
                <input type="text" name="vendedor_nome_completo" class="form-control form-control-user" value="<?php echo set_value('vendedor_nome_completo') ?>" placeholder="Nome completo">
                <?php echo form_error('vendedor_nome_completo','<small class="form-text text-danger">','</small>'); ?>
            </div>
            <div class="col-sm-4">
                <label>CPF</label>
                <input type="text" name="vendedor_cpf" class="form-control form-control-user cpf" value="<?php echo set_value('vendedor_cpf') ?>"
                placeholder="CPF">
                <?php echo form_error('vendedor_cpf','<small class="form-text text-danger">','</small>'); ?>
            </div>

            <div class="col-sm-4 mb-3">
                
                <div class="pessoa_juridica">
                    <label>RG</label>
                    <input type="text" name="vendedor_rg" class="form-control form-control-user " value="<?php echo set_value('vendedor_rg');?>" placeholder="RG">
                </div>
            </div>
            
            

            <div class="col-sm-2">
                <label>Celular</label>
                <input type="text" name="vendedor_celular" class="form-control form-control-user phone_with_ddd" 
                value="<?php echo set_value('vendedor_celular')?>" placeholder="Celular">
                <?php echo form_error('vendedor_celular','<small class="form-text text-danger">','</small>');?>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <label>Email</label>
                <input type="email" name="vendedor_email" class="form-control form-control-user" value="<?php echo set_value('vendedor_email') ?>" placeholder="Email">
                <?php echo form_error('cliente_email','<small class="form-text text-danger">','</small>'); ?>
            </div>
           

            <div class="col-sm-2 mb-3 mb-sm-0">
                <label>Telefone Res:</label>
                <input type="text" name="vendedor_telefone" class="form-control form-control-user phone_with_ddd" value="<?php echo set_value('vendedor_telefone') ?>" placeholder="Telefone Residencial">
                <?php echo form_error('vendedor_telefone','<small class="form-text text-danger">','</small>'); ?>
            </div>
             <div class="col-sm-3 mb-3 mb-sm-0">
                <label>Mátricula :</label>
                <input type="text" name="vendedor_codigo" class="form-control form-control-user " value="<?php echo $vendedor_codigo ?>" readonly="" placeholder="Mátricula do vendor">
               
            </div>
           

        </div>
    </fieldset>

    <fieldset class="mt-3 border p-2">
        <legend class="font-small"><i class="fas fa-map-marker-alt mr-2"></i>Endereço é histórico</legend>

        <div class="form-group row">

            <div class="col-sm-4">
                <label>Endereço</label>
                <input type="text" name="vendedor_endereco" class="form-control form-control-user" value="<?php echo set_value('vendedor_endereco') ?>"
                placeholder="Endereço" >
                <?php echo form_error('vendedor_endereco','<small class="form-text text-danger">','</small>'); ?>
            </div>

            <div class="col-sm-2 mb-3">
                <label>CEP</label>
                <input type="text" name="vendedor_cep" class="form-control form-control-user cep" value="<?php echo set_value('vendedor_cep') ?>"
                placeholder="CEP do Vendedor" >
                <?php echo form_error('vendedor_cep','<small class="form-text text-danger">','</small>'); ?>
            </div>
            <div class="col-sm-2 mb-3">
                <label>Bairro</label>
                <input type="text" name="vendedor_bairro" class="form-control form-control-user " value="<?php echo set_value('vendedor_bairro') ?>"
                placeholder="Bairro do Vendedor" >
                <?php echo form_error('vendedor_bairro','<small class="form-text text-danger">','</small>'); ?>
            </div>
            <div class="col-sm-2 mb-3 mb-sm-0">
                <label>Número</label>
                <input type="text" name="vendedor_numero_endereco" class="form-control form-control-user cep" value="<?php echo set_value('vendedor_numero_endereco') ?>" placeholder="Número">
                <?php echo form_error('vendedor_numero_endereco','<small class="form-text text-danger">','</small>'); ?>
            </div>

            <div class="col-sm-2 ">
                <label>Compremento</label>
                <input type="text" name="vendedor_complemento" class="form-control form-control-user" value="<?php echo set_value('vendedor_complemento') ?>" placeholder="Compremento">
                <?php echo form_error('vendedor_complemento','<small class="form-text text-danger">','</small>'); ?>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <label>Cidade</label>
                <input type="text" name="vendedor_cidade" class="form-control form-control-user" value="<?php echo set_value('vendedor_cidade') ?>" 
                placeholder="Cidade" >
                <?php echo form_error('vendedor_cidade','<small class="form-text text-danger">','</small>'); ?>
            </div>
            <div class="col-sm-3 mb-3">
                <label>Estado</label>
                <input type="text" name="vendedor_estado" class="form-control form-control-user uf" value="<?php echo set_value('vendedor_estado') ?>" placeholder="Estado">
                <?php echo form_error('vendedor_estado','<small class="form-text text-danger">','</small>'); ?>
            </div>
            <div class="col-sm-6">
                <label>Ativo</label>
                <select class="form-control form-control-ativo" name="vendedor_ativo">
                  <option value="1" class="text-success">Sim</option>
                  <option value="2">Não</option>
              </select>

          </div>
          <div class="col-sm-12">
            <label>Histórico do Vendedor</label>
            <textarea name="vendedor_obs" placeholder="Histórico"class="form-control form-control-user"><?php echo set_value('vendedor_obs')?></textarea>
            <?php echo form_error('vendedor_obs','<small class="form-text text-danger">','</small>'); ?>
        </div>
    </div>
    <button class="btn btn-primary mr-2 float-right" style="border-radius: 0;">Salvar</button>
    <a href="<?php echo base_url($this->router->fetch_class()); ?>" title="Voltar" style="border-radius: 0;" class="btn btn-secondary mr-2 float-right "><i class="fas fa-arrow-left mr-1"></i>Voltar</a>

</div>
</form>
</div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

