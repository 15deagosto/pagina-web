<?php
require './funciones/fn-102.php';
$a = new Fn_102();
$tabla = $a->fn102_rcarrusel_all();
?>
<script src="./jsopc/jsopc-102.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">FTP </h4>
                    <div class="btn-group mb-2">
                        
<!--                        <button onclick="md102_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>-->
                    </div>
                </div>
                <div class="card-body">
                    <button onclick="md102_d5(5)" data-toggle="modal" 
                                                        data-target="#modalcontent_lg" class="btn btn-warning shadow sharp mr-1">
                                                    <i class="fa fa-upload"></i> SUBIR IMÁGENES
                                                </button>
                    <button onclick="md102_d6(6)" data-toggle="modal" 
                                                        data-target="#modalcontent_lg" class="btn btn-warning shadow sharp mr-1">
                                                    <i class="fa fa-upload"></i> SUBIR VIDEOS
                                                </button>
                    
                    <!-- Md modal  -->
                    <div class="modal fade" id="modalcontent_md">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" id="content_md">
                            </div>
                        </div>
                    </div>
                    <!-- Small modal -->
                    <div class="modal fade bd-example-modal-sm" id="modalcontent_sm" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content" id="content_sm">
                            </div>
                        </div>
                    </div>
                    <!-- lg modal -->
                    <div class="modal fade bd-example-modal-lg" id="modalcontent_lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="content_lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
