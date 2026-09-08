<?php
require '../controlador/conexion.php';
require '../funciones/fn-65.php';
require '../funciones/fn-91.php';
$opc_mod = $_POST['dato_0'];
$fn65 = new Fn_65();
$fn91 = new Fn_91();

if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Documento</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="1" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="titulo_doc" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea  name="descripcion_doc" rows="5" cols="47" class="form-control"></textarea></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo</label>
                                <div class="col-sm-12">
                                    <select id="tipo2_doc"  name="tipo2_doc" onchange="verificartipo()" class="form-control">
                                        <option value="1">Interno</option>
                                        <option value="2">Externo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="url_doc">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text"  name="url_doc" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn65_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <script>
       verificartipo();
        function verificartipo(){
            
            var select = document.getElementById("tipo2_doc").value;
            if(select==1){
                document.getElementById('url_doc').style.display = 'none';
            }else {
                document.getElementById('url_doc').style.display = 'inline';
        	
            }

        }
        </script>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn65->fn65_rdocumentos_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar documentos</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12" id="div_editar"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editar" method="post">
                            <input type="hidden" value="2" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Título</label>
                                <div class="col-sm-12">
                                    <input type="text" name="titulo_doc" class="form-control" value="<?php echo ($tupla[0]['titulo_doc']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea  name="descripcion_doc" class="form-control" rows="5" cols="47"><?php echo ($tupla[0]['descripcion_doc']) ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo</label>
                                <div class="col-sm-12">
                                    <select  name="tipo2_doc" id="tipo2_doc" class="form-control" onchange="verificartipo2()">
                                        <option value="1" <?php if( ($tupla[0]['tipo2_doc']) == 1){echo("selected");}?>>Interno</option>
                                        <option value="2" <?php if( ($tupla[0]['tipo2_doc']) == 2){echo("selected");}?>>Externo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="url_doc">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text" name="url_doc" class="form-control" value="<?php echo ($tupla[0]['url_doc']) ?>">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn65_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
        <script>
       verificartipo2();
        function verificartipo2(){
            
            var select = document.getElementById("tipo2_doc").value;
            if(select==1){
                document.getElementById('url_doc').style.display = 'none';
            }else {
                document.getElementById('url_doc').style.display = 'inline';
        	
            }

        }
        </script>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn65->fn65_ravisos_x($id);
    ?>
    
    <?php
}

if ($opc_mod == 4) {
    $id = $_POST['dato_1'];
    ?>
    <div class="modal-content" id="content_sm">
        <div class="modal-header">
            <h5 class="modal-title">Eliminar registro</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" id="frm_delete">
                <input type="hidden" name="dato_0" value="4">
                <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                <label> Está seguro que desea eliminar este registro ?</label>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">NO</button>
                <button type="button" onclick="cn65_f10(8, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}



if ($opc_mod == 6) {
    $qImg= $_POST['dato_1'];
    $id_doc = $_POST['dato_2'];
    
    $tupla = $fn65->fn65_rdocumentos_x($id_doc);
    
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Subir documento</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de archivos  10mb</label>
                            </div>
                            <div class="form-group row offset-3">
                                 <?php if($qImg==1 ) {?>
                                <img src="../documentos/<?php echo ($tupla[0]['imagen_doc']) ?>" width="200px" />
                                 <?php }elseif($qImg==3 ) {?>
                                <a href="../documentos/<?php echo ($tupla[0]['url_doc']) ?>"><?php echo ($tupla[0]['url_doc']) ?></a>
                                 <?php }?> 
                            </div>
                            <input type="text" name="tipo_rep" id="tipo_rep" value="1" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="file" name="url_rep" id="url_rep" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="i_resmoddoc">
                    
                </div>
            </div>    
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn65_f6(<?php echo $qImg ?>,<?php echo $id_doc ?>)" 
                class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}
if ($opc_mod == 8) {
    $qImg= $_POST['dato_1'];
    $id_doc = $_POST['dato_2'];
    
    $tupla = $fn65->fn65_rdocumentos_x($id_doc);
    
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Documento</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de archivos  2mb</label>
                            </div>
                            <div class="form-group row offset-3">
                                 <?php if($qImg==1 ) {?>
                                <img src="../images/<?php echo ($tupla[0]['imagen_doc']) ?>" width="200px" />
                                 <?php }elseif($qImg==3 ) {?>
                                <a href="../images/<?php echo ($tupla[0]['url_doc']) ?>"><?php echo ($tupla[0]['url_doc']) ?></a>
                                 <?php }?> 
                            </div>
                            <input type="text" name="tipo_rep" id="tipo_rep" value="1" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="file" name="url_rep" id="url_rep" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn65_f6(<?php echo $qImg ?>,<?php echo $id_doc ?>)" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}