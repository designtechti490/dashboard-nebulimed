    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="margin-top: 10rem !important;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row ">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
										<img src="<?php echo base_url('public/img/logo.png'); ?>" alt="Logo" class="bg-login-image">
                                        <h1 class="h4 text-gray-900 mb-4">Seja Bem-Vindo!</h1>
                                    </div>
                                    <form class="user" name="form_auth" method="POST" action="<?php echo base_url('login/auth'); ?>">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" placeholder="Entre com seu e-mail...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Senha">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Entrar
										</button>
                                    </form>
									<?php if($message = $this->session->flashdata('error')): ?>
										<hr>
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

								<?php if($message = $this->session->flashdata('info')): ?>
										<hr>
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-info alert-dismissible fade show" role="alert">
													<strong><ion-icon name="warning"></ion-icon>&nbsp;&nbsp;<?php echo $message; ?></strong>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
											</div>
										</div>
								<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


 
