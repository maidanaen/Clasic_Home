
<!--iniciar sesion-->
<section class="login" id="login">
    <!--mensaje de error-->
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?=session()->getFlashdata('msg');?>
        </div>
    <?php endif?>
    <div class="row d-flex justify-content-center ">
        <div class="col-6 colum_reg">
                <div class="inicio_sesion ">
                    <form method="post" action="<?php echo base_url("/enviarlogin")?>">
                        <h4>Iniciar Sesion</h4>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
                            </div>
                        <button type="submit" class="btn btn-outline-secondary p-2">Ingresar</button>
                        <button type="reset" class="btn btn-outline-secondary p-2"> Cancelar</button>
                        <h5>¿Aun no se reisgto?</h5><a href="<?php echo base_url('/registro')?>" id="link_registro">registrarse aqui</a>
                    </form>
                </div>
        </div>
    </div>
            
</section>
