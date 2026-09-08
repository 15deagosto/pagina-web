<?php
//consultar agencias y cajeros 
include '../controler/conexion.php';
require '../funciones/fn-index.php';
$fnindex = new Fn_index();

$opc = $_POST['dato_0'];

if ($opc == 1) {
    $tipo = $_POST['dato_1'];
    if ($tipo == 1) {
        $listagencia = $fnindex->fnindex_rnosotros_alles(1);
        while ($menuagencia = $listagencia->fetch_assoc()) {
            ?>
            <div class="col-md-12" style="margin-bottom: 20px;display: flex; padding: 15px; border: 1px solid silver; border-radius: 5px;">
                <img src="images/mapa.svg" style="width: 60px; ">
                <div style="margin-left: 10px;">
                    <b><span class="text-pink-coop">AGENCIA</span></b><br>
                    <span class="text-blue-coop" style=" font-weight: 800"><?php echo utf8_encode($menuagencia['nombre_nosotros']) ?></span><br>
                    <span>Dir.: <?php echo utf8_encode($menuagencia['direccion_nosotros']) ?></span><br>
                    <span>Hor.: <?php echo utf8_encode($menuagencia['horario_nosotros']) ?></span><br>
                    <span>Tlfno.: <?php echo $menuagencia['tele1_nosotros'] ?></span><br>
                    <span style="color:green">Abierto</span><br>
                </div>
                <div>
                    <a href="<?php echo $menuagencia['waze_nosotros'] ?>" target="_blank">
                        <button class="btn-pink-coop text-white-coop" style="font-size: 10px; border-radius: 5px; padding: 5px; margin-top: 85px;">
                            <img src="images/hombre-palo.svg" style="width: 35px; margin-bottom: 5px;">
                            COMO LLEGAR
                        </button>
                    </a>
                </div>
            </div>
            <?php
        }
    }
    if ($tipo == 2) {
        $listagencia = $fnindex->fnindex_rnosotros_alles(2);
        while ($menuagencia = $listagencia->fetch_assoc()) {
            ?>
            <div class="col-md-12" style="margin-bottom: 20px;display: flex; padding: 15px; border: 1px solid silver; border-radius: 5px;">
                <img src="images/mapa.svg" style="width: 60px; ">
                <div style="margin-left: 10px;">
                    <b><span class="text-pink-coop">CAJERO</span></b><br>
                    <span class="text-blue-coop" style=" font-weight: 800"><?php echo utf8_encode($menuagencia['nombre_nosotros']) ?></span><br>
                    <span>Dir.: <?php echo utf8_encode($menuagencia['direccion_nosotros']) ?></span><br>
                    <span>Hor.: <?php echo utf8_encode($menuagencia['horario_nosotros']) ?></span><br>
                    <span>Tlfno.: <?php echo $menuagencia['tele1_nosotros'] ?></span><br>
                    <span style="color:green">Abierto</span><br>
                </div>
                <div>
                    <a href="<?php echo $menuagencia['waze_nosotros'] ?>" target="_blank">
                        <button class="btn-pink-coop text-white-coop" style="font-size: 10px; border-radius: 5px; padding: 5px; margin-top: 85px;">
                            <img src="images/hombre-palo.svg" style="width: 35px; margin-bottom: 5px;">
                            COMO LLEGAR
                        </button>
                    </a>
                </div>
            </div>
            <?php
        }
    }
}
if ($opc == 2) {
    $id = $_POST['dato_1'];
    $detinversion = $fnindex->fnindex_rproducto_xtextoses($id);
    //print_r($detproducto);
    ?>
    <div class="col-lg-8 col-md-8 col-sm-8 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
        <div class="credit-caracteristic" >
            <!--            <div class="img" style=" background: url(images/icon-squar-blue-02.png); background-repeat: no-repeat; background-size:100%;">
                            <img style="width: 80px;padding: 10px;" src="images/credit-union.svg" alt="IMG_ICON">
                        </div>-->
            <div class="list">
                <!--<h4 class="title fw-bold"><b>Características</b></h4>-->
                <?php echo $detinversion[0]['texto1_prod'] ?>
                <hr>
                <!--<h4><b>Requisitos</b></h4>--> 
                <?php echo $detinversion[0]['texto2_prod'] ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
        <img style="width: 100%; padding: 10px; border-radius: 20px;" src="images/<?php echo $detinversion[0]['imagen1_prod'] ?>">
    </div>
    <?php
}
if ($opc == 5) {
    $id = $_POST['dato_1'];
    $detinversion = $fnindex->fnindex_rproducto_xtextoses($id);
    print_r($detproducto);
    ?>
    <div class="container mb-5">
        <div class="title-requisitos row d-flex align-items-center" >
            <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInLeft" data-wow-delay="300ms">
                <h3>Requisitos</h3> 
            </div>
        </div>
        <?php echo $detinversion[0]['texto2_prod'] ?>
    </div>
    <?php
}

if ($opc == 6) {
    $id_tiposerv = $_POST['dato_1'];
    $listservicio = $fnindex->fnindex_rservicio_xtipo($id_tiposerv);
    ?>
<div style="height: 300px; overflow-y: scroll; padding: 15px;">
<?php
    while ($menuservicio = $listservicio->fetch_assoc()) {
        ?>
        <div class="row tarifa-body">
            <div class="col-md-2"><p class="text-justify"><?php echo $menuservicio['nombre_tiposerv'] ?></p></div>
            <div class="col-md-8"><span class=""><?php echo utf8_encode($menuservicio['empresa_servicio']) ?></span><span class="float-right"></span></div>
            <div class="col-md-2"><span class="">$ <?php echo number_format($menuservicio['costo_servicio'], 2) ?></span></div>
        </div>
        <?php
    }
    ?>
    </div>
<?php
}

if ($opc == 7) {
    $id_doc = $_POST['dato_1'];
    $documento = $fnindex->fnindex_r_documentos_xid($id_doc);
    //echo $documento[0]['url_doc'];   
    if ($documento[0]['url_doc'] != "") {
//        echo "HOLA".$documento[0]['tipo3_doc'];
        $nombretrans = $fnindex->fnindex_tipotrans_xtipo($documento[0]['tipo3_doc']);
        ?>
        <div class="modal-header" style="background: #213e97;">
            <center><h5 class="modal-title" id="exampleModalLabel" style="color: #ffffff"><?php echo $nombretrans ?></h5></center>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <embed src="./documentos/<?php echo $documento[0]['url_doc'] ?>" style="width: 100%; height: 400px" type="application/pdf"></embed>
                </div>
            </div>

        </div>
        <div class="modal-footer"></div>

        <?php
    }
}

if ($opc == 8) {
    $id_tasapa = $_POST['dato_1'];
    $tasapa = $fnindex->fnindex_r_tasaspa_xid($id_tasapa);
    //echo $documento[0]['url_doc'];   
    ?>
    <div class="modal-header" style="background-color: #01b69b; color: #fff">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $tasapa[0]['nombre_tasapa'] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <br>
                <?php echo utf8_encode($tasapa[0]['desc_tasapa']) ?>
            </div>

        </div>
        <br><br>
        <p> * Aplican restricciones</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
    </div>

    <?php
}
if ($opc == 9) {
    $id_nosotros = $_POST['dato_1'];
    //echo $documento[0]['url_doc'];   
    $detagenciamatriz = $fnindex->fnindex_rnosotros_id($id_nosotros);
    ?>
    <div class="row" style="margin-top: 20px" >
        <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms">
            <div style=" visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;" class="heading-title darkcolor wow fadeInUp" data-wow-delay="300ms">
                <h2 class="font-normal" style="font-size: 24px !important; text-align: center;"><?php echo ($detagenciamatriz[0]['nombre_nosotros']) ?>
                    <span class="defaultcolor textblue">  Sumak Kawsay
                    </span>
                </h2>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight text-center">
            <img style="width: 70%; padding: 5px;" src="images/<?php echo $detagenciamatriz[0]['imagen_nosotros'] ?>">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
            <div style="margin-top: 0px;">
                <span style="font-size: 13px;"><b style="color:#1e4295 !important;">Dirección:</b> <?php echo $detagenciamatriz[0]['direccion_nosotros'] ?></span><br>
                <span style="font-size: 13px;"><b style="color:#1e4295 !important;">Teléfono:</b> <?php echo $detagenciamatriz[0]['tele1_nosotros'] ?></span><br>
                <span style="font-size: 13px;"><b style="color:#1e4295 !important;">Horario:</b>  <?php echo ($detagenciamatriz[0]['horario_nosotros']) ?></span>
            </div>
        </div>
    </div>
    <?php
}