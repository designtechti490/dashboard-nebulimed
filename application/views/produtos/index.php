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

            <?php if ($message = $this->session->flashdata('error')): ?>
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
            <?php endif; ?>


            <?php if ($message = $this->session->flashdata('delete')): ?>
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
            <?php endif; ?>

            <?php if ($message = $this->session->flashdata('sucesso')): ?>
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
            <?php endif; ?>

            <!-- DataTales Example -->
            <div class="card">
                <div class="card-header" style="background-color:#f7f7f7 ; border-bottom: 1px solid #9e9e9e;">
                    <div class="row">
                        <div class="col-md-8 mt-2">
                            <h6 class="font-weight-bold text-primary text-left"><?php echo $titulo ?></h6></div>
                        <div class="col-md-4 text-right">
                            <a href="<?php echo base_url('produtos/add'); ?>" title="Cadastrar novo produto" class="btn btn-success btn-sm "><i class="fas fa-user-plus mr-1"></i>Novo</a>
                        </div>
                    </div>
                </div>  

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center no-sort">Código do produto</th>
                                    <th class="text-center no-sort">Nome do produto</th>
                                    <th class="text-center no-sort">Marca</th>
                                    <th class="text-center no-sort">Categoria</th>
                                    <th class="text-center no-sort">Estoque mínimo</th>
                                    <th class="text-center no-sort">Qtde estoque</th>
                                    <th class="text-center no-sort">Ativos</th>
                                    <th class="text-center no-sort">Ações</th>
                                </tr>
                            </thead>
                            <?php foreach ($produtos as $produto): ?>						   
                                <tr>
                                    <td class="text-center"><?php echo $produto->produto_id; ?></td>
                                    <td class="text-center"><?php echo $produto->produto_codigo; ?></td>
                                    <td class="text-center"><?php echo $produto->produto_descricao; ?></td>
                                    <td class="text-center"><?php echo $produto->produto_marca; ?></td>
                                    <td class="text-center"><?php echo $produto->produto_categoria; ?></td>
                                    <td class="text-center"><?php echo '<span class="badge badge-success badge-shadow btn-sm"> ' . $produto->produto_estoque_minimo . '</span>'; ?></td>
                                    <td class="text-center"><?php echo ($produto->produto_estoque_minimo == $produto->produto_qtde_estoque ? '<span class="badge badge-danger badge-shadow btn-sm">' . $produto->produto_qtde_estoque . '</span>' : '<span class="badge badge-dark badge-shadow btn-sm">' . $produto->produto_qtde_estoque . '</span>'); ?></td>
                                    <td class="text-center"><?php echo ($produto->produto_ativo == 1 ? '<span class="badge badge-success badge-shadow btn-sm">Sim</span>' : '<span class="badge badge-danger badge-shadow btn-sm">Não</span>'); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('produtos/edit/' . $produto->produto_id); ?>" class="btn btn-icon btn-primary mr-2"><i class="far fa-edit"></i></a>
                                        <a href="javascript(void)" data-toggle="modal" data-target="#user-<?php echo $produto->produto_id; ?>" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>    
                                </tr>

                                <!-- Logout Modal-->
                                <div class="modal fade" id="user-<?php echo $produto->produto_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url('produtos/del/' . $produto->produto_id); ?>">Sim</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


