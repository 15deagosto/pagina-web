<div class="container contact-inner-area">
    <div class="row">
        <div class="col-lg-6">
            <div class="maps-area">
                <img src="assets/img/img-simulador-01.png">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="contact-header-area heading1">
                <div class="space16"></div>
                <div style="display: flex;
                         padding-bottom: 15px !important;">
                        <div style="height: 47px; width: 3px; background-color: #ba0001;margin-right: 15px;"><p></p></div><h2>Simulador de crédito</h2><br><br>
                    </div>
                
                <div class="space16"></div>
                <br>
                <div class="row mt-30">
                    <form method="POST" id="formularioCredito">
                        <input type="hidden" name="tasa_calcula" value="">
                        <input type="hidden" name="tipocred_calcula" value="<?php echo $tipoCredito ?>">
                        <div class="col-lg-12" style="margin-bottom: 25px;">
                            <p style="font-size: 20px;">Monto total*</p>
                            <div class="input-area">
                                <input name="monto_calcula" type="text" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-12" style="margin-bottom: 25px;">
                            <p style="font-size: 20px;">Tiempo*</p>
                            <div class="input-area">
                                <input name="plazo_calcula" type="email" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-12" style="margin-bottom: 25px;">
                            <p style="font-size: 20px;">Tipo amortización*</p>

                            <div style="width: 100%;">
                                <select name="tipoamortiza" class="input-area form-control" style="width: 100%;">
                                     <option value="1"> Cuotas Fijas</option>
                                     <option value="2"> Cuotas Variables</option>
                                </select>
                                <br><br><br><br>
                            </div>
                        </div>

                        <div class="col-lg-12" style="margin-bottom: 5px;">
                            <div class="space16"></div>
                            <div class="input-area">
                                <button onclick="abrirModal()"  type="button" class="vl-btn1" style="font-size: 20px;">CALCULAR AHORA</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>