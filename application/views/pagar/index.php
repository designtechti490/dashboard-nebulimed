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
                        
                       <!-- Page Heading -->

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

                       
                       <?php if($message = $this->session->flashdata('info')): ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong class="text-danger"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="text-danger">&times;</span>
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
                    
                    <!-- DataTales Example -->
                    <div class="card">
                                     <div class="card-header" style="background-color:#f7f7f7 ; border-bottom: 1px solid #9e9e9e;">
                        <div class="row">
                            <div class="col-md-8 mt-2">
                                <h6 class="font-weight-bold text-primary text-left"><?php echo $titulo ?></h6></div>
                                <div class="col-md-4 text-right">
                                 <a href="<?php echo base_url('pagar/add'); ?>" title="Cadastrar nova conta" class="btn btn-success btn-sm "><i class="fas fa-user-plus mr-1"></i>Novo</a>
                             </div>
                         </div>
                     </div>  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center no-sort">Fornecedor</th>
                                            <th class="text-center no-sort">Valor da conta</th>
                                            <th class="text-center no-sort">Data de vencimento</th>
                                            <th class="text-center no-sort">Data de pagamento</th>
                                           
                                            <th class="text-center no-sort">Situação</th>
                                            <th class="text-center no-sort">Ações</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($contas_pagar as $contas): ?>
                                     <tr>
                                            <td class="text-center"><?php echo $contas->conta_pagar_id ;?></td>
                                            <td class="text-center"><?php echo $contas->fornecedor; ?></td>
                                            <td class="text-center"><?php echo 'R$ &nbsp;'.$contas->conta_pagar_valor; ?></td>
                                            <td class="text-center"><?php echo formata_data_banco_sem_hora($contas->conta_pagar_data_vencimento); ?></td>


                      <td class="text-center"><?php echo ($contas->conta_pagar_status  == 1 ? formata_data_banco_com_hora($contas->conta_pagar_data_pagamento) :'<span class="badge badge-danger badge-shadow btn-sm">Aguardando pagamento</span>');?></td>
                                            
                                            
                                          <td class="text-center">
                                            
                                                  <?php 

                                                  if($contas->conta_pagar_status  == 1){
                                                    echo'<span class="badge badge-success badge-shadow btn-sm">Paga</span>';
                                    }else if(strtotime($contas->conta_pagar_data_vencimento) > strtotime(date('Y-m-d'))){

                                        echo'<span class="badge badge-secondary badge-shadow btn-sm">A pagar</span>';
                                    }else if(strtotime($contas->conta_pagar_data_vencimento) == strtotime(date('Y-m-d'))){
                                                     echo'<span class="badge badge-warning badge-shadow btn-sm">Vence hoje </span>';

                                        }else{
                                        echo'<span class="badge badge-danger badge-shadow btn-sm">Vencida</span>';
                                                  }

                                                  ?>

                                          </td>

                <td class="text-center">
                      <a href="<?php echo base_url('pagar/edit/'.$contas->conta_pagar_id); ?>" class="btn btn-icon btn-primary mr-2"><i class="far fa-edit"></i></a>
                      <a href="javascript(void)" data-toggle="modal" data-target="#user-<?php echo $contas->conta_pagar_id;?>" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                    </td>    
                                        </tr>

                                           <!-- Logout Modal-->
                                        <div class="modal fade" id="user-<?php echo $contas->conta_pagar_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header badge-danger">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirma a exclusão do registro? </h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Para a exclusão do registro clique em <strong>"Sim"</strong><br>
                                                        Para cancelar a exclusão do registro clique em <strong>"Não"</strong>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
                                                        <a class="btn btn-danger btn-sm" href="<?php echo base_url('pagar/del/'.$contas->conta_pagar_id); ?>">Sim</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                     
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
