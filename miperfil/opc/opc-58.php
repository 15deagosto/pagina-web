<?php
require './funciones/fn-58.php';
$a = new Fn_58();
$tabla = $a->fn58_rtrabajonosotros_all();
$fhasta = date('Y-m-d');
?>
<script src="./jsopc/jsopc-58.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Solicitudes de trabajo </h4>
                    <div class="col-xl-3 col-md-3">
<!--                        <button class="btn btn-success" onclick="reporte1()" type="button" style="background-color: white; color: #000000;">
                        <i style="color: green;" class="fa fa-file-excel-o"></i> DESCARGAR EXCEL 
                        </button>-->
                    </div>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=55"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md58_002_d1(2)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-filter"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table58">
                        <form id="frm_filtro" method="post">
                            <input type="text" hidden="" id="desde" name="desde" value="">
                            <input type="text" hidden="" id="hasta" name="hasta" value="<?php echo $fhasta ?>">
                            <input type="text" hidden="" id="va" name="va" value="">
                            <input type="text" hidden="" id="st" name="st" value="">
                        </form>
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Usuario</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Aplica</th>
                                    <th>Documento</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['est_vacanusu'];
                                    $id = $menu['id_vacanusu'];
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['fecha_vacanusu']) ?> </td>
                                        <td> <?php echo ($menu['nombre_vacanusu'].' '.$menu['apellido_vacanusu']) ?> </td>
                                        <td> <?php echo ($menu['telefono_vacanusu']) ?> </td>
                                        <td> <?php echo ($menu['email_vacanusu']) ?> </td>
                                        <td> <?php echo ($menu['nombre_vacante']) ?> </td>
                                        <td> 
                                            <?php 
                                            if($menu['documento_vacanusu']!=''){
                                            ?> 
                                            <a href="../documentos/<?php echo ($menu['documento_vacanusu'])  ?>">IR A CURRICULUM</a>
                                            <?php 
                                            }else{
                                            ?> 
                                            NO DOCUMENTO
                                            <?php 
                                            }
                                            ?> 
                                        </td>
                                        <td> 
                                            <div id="i_estado<?php echo $id ?>">
                                            <?php
                                            if($st==0){
                                               ?>
                                            <label><input type="checkbox" value="1" onchange="cn58_001_2(1,this.value,<?php echo $id ?>)"> PENDIENTE</label> 
                                            <?php
                                            }else{
                                               ?>
                                            <label><input checked="" type="checkbox" value="0" onchange="cn58_001_2(1,this.value,<?php echo $id ?>)"> ATENDIDO</label> 
                                            <?php 
                                            }
                                            ?>
                                            </div>
                                        </td>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md58_d1(1,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></button>
                                            </div>												
                                        </td>												
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="div_grafico1" style="width: 50% !important ; height: 800px !important; display: block; box-sizing: border-box;">
                        <?php
                        $limite = 10;
                        $tabla = $a->fn58_rtrabajonosotros_xvacante($limite);
                        
                        if ($tabla->num_rows > 0) {
                            $arrayname = '';
                            $arraynum = '';
                            while ($data = $tabla->fetch_assoc()) {
                                $arrayname.="'". trim(($data['nombre_vacante']))."',";
                                $arraynum.="".$data['cv'].",";
                            }
                            $arrayname = substr($arrayname, 0, -1); 
                            $arraynum = substr($arraynum, 0, -1); 
                            
                        ?>
                        <canvas id="myChart" ></canvas>
                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: [<?php echo $arrayname ?>],
                                    datasets: [{
                                        label: 'Visitas',
                                        data: [<?php echo $arraynum ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 2
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    plugins: {
                                      legend: {
                                        position: 'bottom'
                                        
                                      },
                                      title: {
                                        display: true,
                                        text: '<?php echo $limite ?> VACANTES MAS BUSCADAS'
                                      }
                                    }
                                    
                                    
                                }
                            });
                        </script>
                        <?php
                            
                        }
                        ?>
                    </div>
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
