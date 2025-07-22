<?php
require 'navbar.php' ?>
<style>
    /* Estilo para el body general */
    body {
        background-color: #121212;
        /* fondo oscuro */
        color: #eee;
        /* letras claras */
        font-family: 'Segoe UI', sans-serif;
        margin: 0;
        padding: 0;
    }
</style>

<div id="main-content" style="padding-top: 70px;">
    <div class="content-wrapper" style="padding:20px; background-color:#1e1e1e;">
        <section class="content" style="margin-bottom: 20px;">
            <div class="box"
                style="background-color:#2a2a2a; border-radius:8px; padding:20px 20px 30px 20px; box-shadow: 0 0 10px #000;">
                <div class="box-header with-border" style="margin-bottom:30px;">
                    <h1
                        style="color:#eee; font-weight:bold; display:flex; align-items:center; gap:10px; margin-bottom: 20px;">
                        Usuarios
                        <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"
                            style="background-color:#555; color:#fff; border:none; padding:10px 16px; border-radius:4px; cursor:pointer; font-weight:bold;">
                            <i class="fa fa-plus-circle"></i> Agregar
                        </button>
                    </h1>
                </div>
                <div id="listadoregistro" class="panel-body table-responsive" style="margin-bottom: 25px;">
                    <style>
                        /* Margen inferior para el contenedor del filtro (input buscar) */
                        #listadoregistro .dataTables_filter {
                            margin-bottom: 20px;
                        }
                    </style>

                    <table id="tbllistado" class="table table-striped table-bordered table-hover"
                        style="width:100%; border-collapse: separate; border-spacing: 0 10px; background-color:#333; color:#eee;">
                        <thead style="background-color:#444;">
                            <tr>
                                <th style="padding:10px; border:1px solid #555;">Opciones</th>
                                <th style="padding:10px; border:1px solid #555;">Usuario</th>
                                <th style="padding:10px; border:1px solid #555;">Nombre Completo</th>
                                <th style="padding:10px; border:1px solid #555;">Correo</th>
                                <th style="padding:10px; border:1px solid #555;">Rol</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#2c2c2c; vertical-align: middle;"></tbody>
                        <tfoot style="background-color:#444;">
                            <tr>
                                <th style="padding:10px; border:1px solid #555;">Opciones</th>
                                <th style="padding:10px; border:1px solid #555;">Usuario</th>
                                <th style="padding:10px; border:1px solid #555;">Nombre Completo</th>
                                <th style="padding:10px; border:1px solid #555;">Correo</th>
                                <th style="padding:10px; border:1px solid #555;">Rol</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>



                <div id="formularioregistros" class="panel-body" style="display:none; margin-top:40px;">
                    <form id="formulario" method="POST" style="display:flex; flex-wrap: wrap; gap: 25px; color:#eee;">
                        <input type="hidden" name="idusuario" id="idusuario">
                        <div class="form-group col-md-6" style="flex: 1 1 45%;">
                            <label style="display:block; margin-bottom:10px; font-weight:bold;">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required
                                style="width:100%; padding:12px; border-radius:4px; border:1px solid #555; background:#222; color:#eee;">
                        </div>
                        <div class="form-group col-md-6" style="flex: 1 1 45%;">
                            <label style="display:block; margin-bottom:10px; font-weight:bold;">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" required
                                style="width:100%; padding:12px; border-radius:4px; border:1px solid #555; background:#222; color:#eee;">
                        </div>
                        <div class="form-group col-md-6" style="flex: 1 1 45%;">
                            <label style="display:block; margin-bottom:10px; font-weight:bold;">Usuario (login)</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" required
                                style="width:100%; padding:12px; border-radius:4px; border:1px solid #555; background:#222; color:#eee;">
                        </div>
                        <div class="form-group col-md-6" style="flex: 1 1 45%;">
                            <label style="display:block; margin-bottom:10px; font-weight:bold;">Correo</label>
                            <input type="email" class="form-control" name="correo" id="correo" required
                                style="width:100%; padding:12px; border-radius:4px; border:1px solid #555; background:#222; color:#eee;">
                        </div>
                        <div class="form-group col-md-6" style="flex: 1 1 45%;">
                            <label style="display:block; margin-bottom:10px; font-weight:bold;">Contraseña</label>
                            <input type="password" class="form-control" name="clave" id="clave"
                                style="width:100%; padding:12px; border-radius:4px; border:1px solid #555; background:#222; color:#eee;">
                        </div>
                        <div class="form-group col-md-6" style="flex: 1 1 45%;">
                            <label style="display:block; margin-bottom:10px; font-weight:bold;">Rol</label>
                            <select name="rol" id="rol" class="form-control"
                                style="width:100%; padding:12px; border-radius:4px; border:1px solid #555; background:#222; color:#eee;">
                                <option value="usuario" style="background:#222; color:#eee;">Usuario</option>
                                <option value="admin" style="background:#222; color:#eee;">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12" style="width:100%; display:flex; gap:15px; margin-top:30px;">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"
                                style="background-color:#555; color:#fff; border:none; padding:14px 24px; border-radius:4px; cursor:pointer; font-weight:bold;">
                                <i class="fa fa-save"></i> Guardar
                            </button>
                            <button class="btn btn-danger" type="button" onclick="cancelarform()"
                                style="background-color:#555; color:#fff; border:none; padding:14px 24px; border-radius:4px; cursor:pointer; font-weight:bold;">
                                <i class="fa fa-arrow-circle-left"></i> Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<?php require 'footer.php'; ?>
<script src="js/usuario.js" type="text/javascript"></script>
