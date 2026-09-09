<?php
require './controler/conexion.php';
include './fn/fn-credito.php';
require './funciones/fn-index.php';
$con = new Conecciones();
$fncredito = new Fn_credito();
$fnindex = new Fn_index();
//$listcredito = $fncredito->fncredito_xget_listcredito();
//$slider = $fncredito->fnindex_rslider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio - 15 de Agosto Cooperativa de Ahorro y Crédito</title>

        <!--=====FAB ICON=======-->
        <link rel="shortcut icon" href="assets/img/favicon-coop.png" type="image/x-icon">

        <?php include "head-v2.php"; ?>
    </head>
    <body class="v2">

        <!--===== PRELOADER STARTS =======-->
        <div class="preloader">
            <img src="assets/img/logo/logo2.png">
            <div class="loader"></div>
        </div>
        <!--===== PRELOADER ENDS =======-->

        <!--===== PROGRESS STARTS=======-->
        <div class="paginacontainer">
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                </svg>
            </div>
        </div>
        <!--===== PROGRESS ENDS=======-->

        <!--=====HEADER START=======-->
        <header class="homepage2-body">
            <?php include 'header.php'; ?>
        </header>
        <!--=====HEADER END =======-->

        
        <!--===== HERO AREA STARTS =======-->
        <div class="inner-pages-section-area" style="background-image: url(assets/img/banner-consejo.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="inner-header text-center">
                            <h2 style="font-size: 65px;">Reglamento</h2>
                            <div class="space24"></div>
                            <a href="index.php">Inicio <i class="fa-solid fa-angle-right"></i> <span>Reglamento</span></a>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                     <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <!--===============spacing==============-->
                        <div class="pd_top_80"></div>
                        <!--===============spacing==============-->
                        
                        <!--===============spacing==============-->
                        <div class="pd_bottom_80"></div>
                        <!--===============spacing==============-->
                     </div>
<!--                     <div class="col-lg-4 hidden-md image_column">
                        <div class="slider_image margin_extra" style="position: absolute;
                     text-align: right;margin: -250px -158px -330px 0px !important;">
                           <img style="max-width: 45%;
                         height: auto;" src="assets/img/all-images/about/cal-img.png" class="img-fluid" alt="slider image">
                        </div>
                     </div>-->
                  </div>
                
            </div>
        </div>
        <!--===== HERO AREA ENDS =======-->

 <!--===== ABOUT AREA STARTS =======-->
        <div class="about3-section-area sp1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="row body-form form title d-flex align-items-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-sm-start text-justify wow fadeInLeft" data-wow-delay="300ms" style="text-align: justify !important; visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                                <p>
                                    La Cooperativa de Ahorro y Crédito <b>“15 DE AGOSTO”</b> Ltda., en adelante “Cooperativa”,
                                    en atención y cumplimiento a la <b>LEY ORGÁNICA DE PROTECCIÓN DE DATOS PERSONALES</b>
                                    informa a socios y clientes, acerca del tratamiento de sus datos personales.<br>
                                    El contenido del presente documento es estrictamente informativo.
                                </p>
                                <p>
                                    </p><h5><b>a. Glosario de términos</b></h5><br>
                                    <b>Titular:</b> Persona Natural o Jurídica cuyos datos personales serán objeto de tratamiento.
                                <p></p>       
                                <p>
                                    </p><h5><b>Responsable del tratamiento:</b></h5><br>
                                    Persona natural o jurídica pública o privada, autoridad
                                    pública u otro organismo que sola o conjuntamente trate datos personales a nombre y
                                    por cuenta de un responsable de tratamiento de datos personales. 
                                <p></p>
                                <p>
                                    </p><h5><b>Datos sensibles:</b></h5>
                                    Categorías especiales de datos, como origen racial o étnico, salud,
                                    información genética, creencias, afiliación sindical, opiniones políticas, preferencia
                                    sexual; que afectan la esfera más íntima de la persona, o cuyo mal uso pueda ser causa
                                    de discriminación o provocarle un riesgo grave, que requieren tratamientos específicos. 
                                <p></p>
                                <p>
                                    </p><h5><b>Tratamiento:</b></h5>
                                    Cualquier operación realizada con datos personales (sean automatizadas
                                    o no), que incluyen, pero no se limitan a: recopilar, registrar, organizar, estructurar,
                                    almacenar, modificar, consultar, usar, publicar, combinar, borrar y destruir datos.
                                <p></p>   
                                <p>
                                    </p><h5><b>Base de datos:</b></h5>
                                    Conjunto estructurado de datos que pertenecen a un mismo contexto, y
                                    que pueden almacenar grandes cantidades de información, de manera que se puede
                                    consultar, insertar, acceder, administrar, actualizar, eliminar, fácilmente.
                                <p></p>
                                <p>
                                    </p><h5><b>Dato Personal:</b></h5>
                                    Dato que por sí solo o en conjunto con otros, permite identificar o hace
                                    identificable a una persona natural directa o indirectamente.  
                                <p></p>
                                <p>
                                    </p><h5><b>Autorización:</b></h5>
                                    Manifestación de voluntad libre, específica, informada e inequívoca,
                                    brindada por el titular para el posterior tratamiento de sus datos. 
                                <p></p>
                                <p>
                                    </p><h5><b>b. Acerca del tratamiento de datos personales</b></h5><br>

                                    Responsable del tratamiento de datos personales:
                                <p></p>
                                <p>
                                    </p><h5><b>Cooperativa de Ahorro y Crédito “15 DE AGOSTO” Ltda.</b></h5><br>
                                <p></p>
                                <p>
                                    <b>Dirección: </b> --------<br>
                                    <b>Teléfono:</b> 03- 0000000<br>
                                    <b>Correo:</b> protecciondatos@cooperativa15deagosto.fin.ec<br>
                                </p>
                                <p>
                                </p><h5><b>Finalidad del tratamiento:</b></h5>
                                    La Cooperativa utilizará sus datos personales para la
                                    realización de actividades de intermediación financiera.
                                <p></p>
                                <p>
                                    </p><h5><b>Destinatarios.</b></h5>
                                    La Cooperativa no compartirá los datos personales de sus socios y clientes
                                    con terceros, salvo autorización del titular o requerimiento de autoridad competente.
                                <p></p>
                                <p>
                                    </p><h5><b>Derechos:</b></h5>
                                    El titular de los datos en cualquier momento podrá ejercer sus derechos
                                    respecto a la protección de estos, ello conforme lo prescribe la Ley Orgánica de
                                    Protección de Datos.
                                <p></p>
                                <p>
                                    </p><h5><b>c. Información acerca del uso de Datos Personales.</b></h5><br>
                                    La Cooperativa en cumplimiento de la Ley Orgánica de Protección de Datos, informa a
                                    sus socios acerca del tratamiento de datos personales que se realiza durante el ejercicio
                                    de actividades de intermediación financiera (prestación de productos y servicios
                                    financieros), dicho tratamiento se lo realizará acorde a las disposiciones de la antes
                                    citada norma.
                                <p></p> 
                                <p>
                                    </p><h5><b>d. Política General de Seguridad de la Información</b></h5><br>
                                    El diseño, operación, uso y administración de los sistemas de información de la
                                    Cooperativa observa todos aquellos requerimientos propios de la normativa vigente;
                                    para lo cual:
                                <ul>
                                    <li>La Cooperativa adquiere el compromiso de velar por el cumplimiento de la
                                        legislación vigente en materia de protección y seguridad de la información y de
                                        los sistemas de información, aplicable a todos sus procesos de negocio;</li>
                                    <li>La Cooperativa, sus directivos y trabajadores se comprometen al uso y
                                        explotación de los servicios de información, adoptando las medidas necesarias
                                        para cumplir con la legislación vigente; y,</li>
                                    <li>Los usuarios de Información de la Cooperativa deberán cumplir con las políticas,
                                        procesos y procedimientos de Seguridad de la Información que aplicaren, a fin
                                        de proteger y garantizar los niveles de confidencialidad, integridad y
                                        disponibilidad de la información y los recursos que soportan la misma.</li>
                                </ul>
                                <p></p>    
                                <p>
                                    </p><h5><b>e. Finalidad del tratamiento</b></h5><br>
                                <ul>
                                    <li>Ofrecer de manera individual o conjunta productos o servicios financieros
                                        brindados por la Cooperativa a través de cualquier medio, ya sea digital o físico,
                                        incluyendo la posibilidad de contactar al titular para dichos propósitos.</li>
                                    <li>Como elemento de análisis en etapas precontractuales, contractuales y pos
                                        contractuales y para mantener cualquier relación contractual con la Cooperativa.</li>
                                    <li>Para la contratación de servicios o productos financieros entre el titular de los
                                        datos y la Cooperativa.</li>
                                    <li>Para la validación de información o confirmación de transacciones realizadas por
                                        el titular en las cuales pueda intervenir datos personales.</li>
                                    <li>Para la gestión, en caso de incumplimiento, de cualquiera de las obligaciones que
                                        el titular adquiere a favor de la Cooperativa.</li>
                                    <li>Para el cumplimiento de la normativa vigente.</li>
                                    <li>Para análisis estadístico y encuestas de satisfacción acerca de productos
                                        financieros ofertados por la Cooperativa.</li>
                                    <li>Para verificar capacidad de endeudamiento, capacidad crediticia y demás
                                        información que la Cooperativa requiera para otorgar sus servicios o productos.</li>
                                    <li>Para garantizar la seguridad de las personas, así como de los bienes e
                                        instalaciones físicas de la Institución.</li>
                                    <li>Para facturación de productos ofertados por la institución.</li>
                                </ul>
                                <p></p>  
                                <p>
                                    </p><h5><b>f. Destinatarios de la información</b></h5><br>
                                    La Cooperativa informa que, para brindar algunos de sus servicios, podrá contar con el
                                    apoyo de terceros (proveedores), los cuales podrían acceder a datos personales de
                                    socios y clientes. La relación contractual estará sujeta a la Ley Orgánica de Protección de
                                    Datos, quienes están obligados a salvaguardar dichos datos personales, identificando al
                                    tercero como Encargado de los datos.<br>
                                    La Cooperativa agota estrictos criterios de selección de proveedores con la finalidad de
                                    dar cumplimiento a las obligaciones establecidas en la normativa en materia de
                                    protección de datos.
                                <p></p>    
                                <p>
                                    </p><h5><b>g. Derechos del titular de los datos</b></h5><br>
                                    En cualquier momento el titular de los datos podrá hacer uso de sus derechos prescritos
                                    en la Ley Orgánica de Protección de Datos:
                                <ul>
                                    <li>Conocer, actualizar y/o rectificar sus datos personales.</li>
                                    <li>Ser informado, previa solicitud, sobre el uso y tratamiento que la Cooperativa da
                                        a sus datos personales.</li>
                                    <li>Revocar la autorización y solicitar la suspensión del tratamiento cuando el
                                        tratamiento no respete los principios, derechos y garantías legales, siempre y
                                        cuando esta solicitud no interfiera con las obligaciones adquiridas con la
                                        Cooperativa por parte del titular y con exigencias normativas y legales.</li>
                                </ul>
                                <p></p>
                                <p>
                                    </p><h5><b>h. Autorización para el Tratamiento de Datos Personales</b></h5><br>
                                    La Cooperativa solicita al titular de la información la autorización para el tratamiento de
                                sus datos personales en el momento de la recolección de los mismos o en el inicio de un
                                contrato de servicio o producto mediante los canales oficiales de la Institución, ya sean
                                físicos o digitales, de esta manera el usuario acepta y autoriza el tratamiento de sus
                                datos; la Cooperativa mediante dicha autorización recolectará, almacenará y procesará
                                dicha información según considere necesario y con el fin de brindar servicios, productos
                                e información promocional relacionada con los mismos. La autorización del titular no
                                será necesaria cuando se trate de información requerida por un ente legal o por orden
                                de autoridad competente.
                                <p></p>    
                                <p>
                                    </p><h5><b>i. ¿Cómo protegemos sus datos personales?</b></h5><br>
                                    La Cooperativa utiliza los datos del titular únicamente para fines específicos, explícitos y
                                exactos. Durante el tratamiento de los datos se asegura que la información utilizada es
                                la adecuada, pertinente y limitada para cada actividad dentro de la Institución.
                                Durante el tratamiento de la información se aplica todas las medidas de seguridad que
                                garanticen la protección de la información del titular. La Cooperativa conserva los datos
                                personales del titular durante el tiempo estrictamente necesario y en cumplimiento de
                                normas legales pertinentes, transcurrido este tiempo los datos serán eliminados o en su
                                defecto se mantendrán bloqueados y almacenados en bases históricas por motivos de
                                consultas y auditorías.<br>
                                Mediante la aplicación de medidas técnicas y organizativas la Cooperativa garantiza la
                                protección de la información en contra de accesos no autorizados, actividades ilícitas, o
                                cualquier forma de vulneración de la información del titular, la Cooperativa aplica
                                medidas para garantizar la confidencialidad, integridad, y disponibilidad de esta.
                                <p></p> 
                                <p>
                                    </p><h5><b>j. Tratamiento de datos en canales digitales</b></h5><br>
                                    <b>- Tratamiento de datos en sitios web</b><br>
                                    La Cooperativa en beneficio de sus usuarios pone a disposición los siguientes portales
                                web oficiales:<br>
                                <a href="https://cooperativa15deagostofin.ec/">https://cooperativa15deagosto.fin.ec/</a><br>
                                <a href="https://enlinea.cooperativa15deagosto.fin.ec/">https://enlinea.cooperativa15deagosto.fin.ec/</a>
                                <p></p>
                                <p>
                                    Dichos sitios web, así como páginas derivadas de estas o enlaces a páginas que se
                                encuentren dentro de los portales mencionados, sirven única y específicamente para
                                procesos relacionados con la Institución.
                                
                                </p>
                                <p>
                                    La Cooperativa establece los términos sobre el uso y protección de la información que
                                es proporcionada por el usuario al momento de utilizar las plataformas web, dicho esto,
                                implementa altos niveles de seguridad para resguardar esta información con la finalidad
                                de brindar una mejor experiencia al usuario o para poder acceder a servicios ofertados
                                por la institución.
                                
                                </p>
                                <p>
                                    Los portales web oficiales de la Cooperativa pueden contener enlaces a sitios externos,
                                en los cuales la Cooperativa no tiene responsabilidad de la información que traten, por
                                lo que se recomienda al usuario verificar la seguridad de los sitios a los que accede y que
                                no son parte de la Institución.
                                
                                </p>
                                <p>
                                </p><h5><b>- Tratamiento de datos en aplicaciones móviles</b></h5><br> 
                                   Las aplicaciones móviles de la Cooperativa cuentan con altos estándares de seguridad
                                para resguardar la información de los usuarios, estas aplicaciones solicitarán información
                                personal al usuario para su correcto funcionamiento, señalando expresamente que en
                                ningún momento será requerida información catalogada como sensible.
                                Estas aplicaciones móviles requieren de permisos específicos pertenecientes al
                                dispositivo móvil para su correcto funcionamiento, que deben ser aceptados por el
                                usuario.
                                <p></p>
                                <p>
                                </p><h5><b>- Uso de cookies en plataformas digitales</b></h5><br> 
                                   Las cookies se pueden definir como cualquier archivo, fichero o fragmento de texto que
                                se guarda en el dispositivo del usuario cuando visita una página web, este fichero
                                almacena información sobre el usuario con la finalidad de generar patrones de
                                comportamiento e identificar hábitos sobre la navegación del usuario, lo cual da como
                                resultado una mejor experiencia de navegación y facilita el uso de la página web, las
                                cookies se almacenan en el navegador de los dispositivos que el usuario utilice para
                                acceder a las páginas web ya sea (Ordenador, Smartphone, Dispositivo inteligente, etc.).
                                <p></p>
                                <p>
                                   En el caso del portal web oficial https://cooperativa15deagostofin.ec/ la Cooperativa informa a
                                los usuarios y socios que dicho portal web no ocupa cookies para el funcionamiento del
                                mismo.
                                
                                </p>
                                <p>
                                   En el caso del portal web transaccional https://enlinea.cooperativa15deagosto.fin.ec/ utiliza
                                cookies las cuales se detallan en el siguiente enlace.
                                
                                </p>
                                <p>
                                </p><h5><b>- Tratamiento de datos mediante videovigilancia</b></h5><br>
                                   Por cumplimiento normativo la Cooperativa utiliza diversos medios de videovigilancia
                                instalados en diferentes sitios dentro de las instalaciones, agencias y oficinas de la
                                institución, así como en sitios externos a la Cooperativa. La información recolectada
                                mediante estos dispositivos es utilizada para garantizar la seguridad de las personas, así
                                como de los bienes e instalaciones de la Institución, además previo requerimiento, podrá
                                ser empleada por autoridades judiciales, administrativas, fiscalía, etc.; y/o, la propia
                                Institución.<br>
                                  Sobre la existencia de este procedimiento se dispone de la comunicación hacia las
                                personas a través de leyendas informativas colocadas en las oficinas o instalaciones de
                                la Cooperativa teniendo en cuenta que al momento de ingresar a nuestros
                                establecimientos se interpretará como una acción de autorización expresa e informada
                                para llevar a cabo el tratamiento de estas imágenes, amparados en la ley. 
                                <p></p>
                                <p>
                                </p><h5><b>- Tratamiento de datos en canales presenciales</b></h5><br>
                                En las agencias o establecimientos que pertenecen a la Cooperativa se encuentran las
                                áreas operativas de cajas, servicio al cliente, inversiones y créditos, dentro de las cuales,
                                para poder brindar productos o servicios, se solicitan datos personales a los socios y
                                clientes que servirán para brindar los servicios financieros que la Institución pone a su
                                disposición.<br>
                                Esta información es tratada bajo los mismos procedimientos de seguridad y protección
                                que se han detallado anteriormente y con la finalidad de brindar un entorno financiero
                                seguro al usuario.
                                <p></p>
                                <p>
                                </p><h5><b>- Cambios en las políticas o en el aviso de privacidad</b></h5><br>
                                La Cooperativa de Ahorro y Crédito “15 DE AGOSTO” Ltda., informará por este medio
                                cualquier cambio en las Políticas de Tratamiento de los Datos Personales o en los avisos
                                de privacidad.
                                <p></p>
                          
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== ABOUT AREA ENDS =======-->
        <!--===== FOOTER AREA STARTS =======-->
        <div class="vl-footer2-section-area">
            <?php include './footer.php' ?>
        </div>
        <!--===== FOOTER AREA ENDS =======-->

        <?php include "scripts-v2.php"; ?>
</body>
</html>