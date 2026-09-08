<?php
session_start();
require './funciones/fn-42.php';
require './sesiones/abrir.php';
$a = new Fn42();
$tabla = $a->get_visitas();
?>
<script src="./jsopc/jsopc-42.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
<div class="container-fluid"> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Estadisticas de visitas</h2>
                    <div class="btn-group mb-2">
                        
                        <a href="index.php?opc=42"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md42_001_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-filter"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table42">
                        <table id="myTable"  class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Página</th>
                                    <th>Visitas</th>
                                    <th>Navegador</th>
                                    <th>SO</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($tabla->num_rows > 0) {
                                    while ($data = $tabla->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo ($data['nombre_pagina']) ?></td>
                                            <td><?php echo $data['vp'] ?></td>
                                            <td><?php echo $data['browser_pagina'] ?></td>
                                            <td><?php echo $data['sistema_pagina'] ?></td>
                                            <td><?php echo $data['final_pagina'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="div_grafico1" style="width: 50% !important ; display: block; box-sizing: border-box;">
                        <?php
                        $masvisitado = 10;
                        $tabla = $a->get_visitas_limit($masvisitado);
                        
                        if ($tabla->num_rows > 0) {
                            $arrayname = '';
                            $arraynum = '';
                            while ($data = $tabla->fetch_assoc()) {
                                $arrayname.="'".trim(($data['nombre_pagina']))."',";
                                $arraynum.="".$data['vp'].",";
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
                                        text: '<?php echo $masvisitado ?> PÁGINAS MÁS VISITADAS'
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