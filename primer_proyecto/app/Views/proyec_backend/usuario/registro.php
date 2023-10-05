<!--registo-->
<section class="registro" id="registro">
    <h4>Registrar Usuario</h4>
    <?php $validation = \Config\Services::validation(); ?> <!--nos permite hacer la validacion desde codinaiter-->
    <!--evita que se vean los datos que cargamos en el navegador-->
    <form method="post" action="<?php echo base_url('/enviar-form') ?>">
        <?= csrf_field(); ?>
        <?= csrf_field(); ?>
        <!--metodos de validacion-->
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('fail'); ?>
            </div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('sucess'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>
    <div class="row d-flex justify-content-center">
        <div class="col-7  colum_reg">
            <div class="formulario_registo m-3" id="formulario_regist">
                <form>
                        <div>
                            <label for="" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control">
                            <!--Error-->
                            <?php if ($validation->getError('nombre')) { ?>
                                <div class='alert alert-danger mt2'>
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php } ?>
                            <label for="" class="form-label">Apellido</label>
                            <input name="apellido"type="text"  class="form-control">
                            <!--Error-->
                            <?php if ($validation->getError('apellido')) { ?>
                                <div class='alert alert-danger mt2'>
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php } ?>
                            <label for="" class="form-label">Correo Electronico</label>
                            <input name="email" type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!--Error-->
                            <?php if ($validation->getError('email')) { ?>
                                <div class='alert alert-danger mt2'>
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php } ?>
                            <div class="mb-3">
                                <label for="" class="form-label">Contraseña</label>
                                <input name="contraseña" type="password" class="form-control" id="exampleInputPassword1">
                                <!--Error-->
                                <?php if ($validation->getError('contraseña')) { ?>
                                    <div class='alert alert-danger mt2'>
                                        <?= $error = $validation->getError('contraseña'); ?>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-outline-secondary p-2">Registrar</button>
                        <button type="reset" class="btn btn-outline-secondary p-2"> Cancelar</button>
                    </form>
            </div>
        </div>
    </div>
</section>