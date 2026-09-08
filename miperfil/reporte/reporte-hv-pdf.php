<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
date_default_timezone_set('Europe/London');
include '../controlador/conexion.php';
require '../../funciones/fn-formulario.php';
$fnformulario = new Fn_formulario();
$id_trabajo = 0;
if (isset($_GET['iset_t'])) {
    $id_trabajo = $_GET['iset_t'];
} else {
    header('Location: ../../index.php');
}
$hojadevida = $fnformulario->fnformulario_rhojavida_xid($id_trabajo);
$html = '

<table style="width:100%; " border=1>
<tr>
<td colspan="3" style="background-color: #08b89d; color:white;"><h5><b>VACANTE:</b> ' . $hojadevida[0]['nombres_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Fecha:</b> ' . $hojadevida[0]['fecha_trabajo'] . '</h5></td>
<td><h5><b>Cargo:</b> ' . $hojadevida[0]['cargo_trabajo'] . '</h5></td>
<td><h5><b>Aspiración Salarial:</b> ' . $hojadevida[0]['salarial_trabajo'] . '</h5></td>
</tr>


</table>
<table style="width:100%; " border=1>
<tr>
<td colspan="2" style="background-color: #08b89d; color:white;"><h5><b>1.- Antecedentes</b></h5></td>
</tr>
<tr>
<td><h5><b>¿Usted ha trabajado en la Coac Sumak Kawsay? </b></h5></td>
<td><h5>' . $hojadevida[0]['trabajoantes_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Último Cargo: </b> ' . $hojadevida[0]['ultimocargo_trabajo'] . '</h5></td>
<td><h5><b>Año: </b>' . $hojadevida[0]['anio_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>¿Anteriormente a presentado su carpeta en la institución? </b></h5><br>
De elegirse la opción SI especifique las siguientes opciones:
</td>
<td><h5>' . $hojadevida[0]['antes1carpeta_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Cargo al que aplicó: </b> ' . $hojadevida[0]['cargoaplico_trabajo'] . '</h5></td>
<td><h5><b>¿Fue entrevistado?: </b>' . $hojadevida[0]['entrevistadoantes_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>¿Le tomaron pruebas?: </b> ' . $hojadevida[0]['pruebasantes_trabajo'] . '</h5></td>
<td><h5><b>¿Estuvo en proceso de capacitación?: </b>' . $hojadevida[0]['capacitacionantes_trabajo'] . '</h5></td>
</tr>

</table>
<table style="width:100%; " border=1>
<tr>
<td colspan="2" style="background-color: #08b89d; color:white;"><h5><b>2. Datos personales</b></h5></td>
</tr>
<tr>
<td><h5><b>Apellidos: </b> ' . $hojadevida[0]['apellidos_trabajo'] . '</h5></td>
<td><h5><b>Nombres: </b>' . $hojadevida[0]['nombres_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>N° Cédula: </b> ' . $hojadevida[0]['cedula_trabajo'] . '</h5></td>
<td><h5><b>Lugar Nacimiento: </b>' . $hojadevida[0]['lugarnac_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Fecha de nacimiento (dd/mm/aa): </b> ' . $hojadevida[0]['fechanac_trabajo'] . '</h5></td>
<td><h5><b>Edad: </b>' . $hojadevida[0]['edad_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Dirección del domicilio actual: </b> ' . $hojadevida[0]['direccion_trabajo'] . '</h5></td>
<td><h5><b>Ciudad: </b>' . $hojadevida[0]['ciudad_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Teléfono fijo: </b> ' . $hojadevida[0]['fijopostulante_trabajo'] . '</h5></td>
<td><h5><b>Celular: </b>' . $hojadevida[0]['telefono_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>E-mail: </b> ' . $hojadevida[0]['email_trabajo'] . '</h5></td>
<td><h5><b>Otro teléfono donde se le pueda ubicar: </b>' . $hojadevida[0]['telefono2postulante_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Preguntar por: </b> ' . $hojadevida[0]['otronombrepostulante_trabajo'] . '</h5></td>
<td><h5><b>Nivel de endeudamiento en el sistema financiero (aproximado): </b>' . $hojadevida[0]['deudapostulante_trabajo'] . '</h5></td>
</tr>
<tr>
<td colspan="2"><h5><b>Disponibilidad de tiempo los fines de semana: </b> ' . $hojadevida[0]['finesdetrabajo1_trabajo'] . '</h5></td>

</tr>
<tr>
<td><h5><b>¿Posee carnet del CONADIS?: </b>' . $hojadevida[0]['conadis1_trabajo'] . '</h5></td>
<td><h5><b>Disponibilidad para viajar: </b>' . $hojadevida[0]['viajar1_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Especifique: </b>' . $hojadevida[0]['conadispordes1_trabajo'] . '</h5></td>
<td><h5><b>Posee transporte propio: </b>' . $hojadevida[0]['transportepostula1_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Tipo de transporte: </b>' . $hojadevida[0]['tipotranspostula_trabajo'] . '</h5></td>
<td><h5><b>Posee licencia de conducir: </b>' . $hojadevida[0]['licenciapostula_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Tipo de licencia: </b>' . $hojadevida[0]['tipolic_trabajo'] . '</h5></td>
<td><h5><b>Le gustaría trabajar: </b>' . $hojadevida[0]['gustotrabajar1_trabajo'] . '</h5></td>
</tr>
<tr>
<td colspan="2">
<h5><b>Tiene familiares dentro de la Cooperativa?: </b>' . $hojadevida[0]['familiacoop1_trabajo'] . '</h5>
  <small>(Familiares que se encuentren laborando o sean miembros del Consejo de Administración o
                                            miembros de la asamblea de Socios; hasta el 4to. grado de consanguinidad y 2do. de afinidad).</small>  
</td>

</tr>
<tr>
<td><h5><b>Nombre: </b>' . $hojadevida[0]['nomfamiliacoop_trabajo'] . '</h5></td>
<td><h5><b>Cargo: </b>' . $hojadevida[0]['cargofamiliacoop_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Grado de parentesco: </b>' . $hojadevida[0]['parentezcofamiliacoop_trabajo'] . '</h5></td>
<td><h5><b>Agencia en la que labora: </b>' . $hojadevida[0]['agenciafamiliacoop_trabajo'] . '</h5></td>
</tr>

</table>

<table style="width:100%; " border=1>
<tr>
<td colspan="2" style="background-color: #08b89d; color:white;"><h5><b>3. Datos familiares</b></h5></td>
</tr>
<tr>

<tr>
<td><h5><b>¿Su estado civil es?: </b>' . $hojadevida[0]['estadocivil_trabajo'] . '</h5></td>
<td><h5><b>Nº de cargas: </b>' . $hojadevida[0]['cargasfam_trabajo'] . '</h5></td>
</tr>

<tr>';
$datosfamiliares1=$hojadevida[0]['ultimocargopadre1_trabajo'];
$partesfamilia1= explode('*', $datosfamiliares1);
$datosfamiliares2=$hojadevida[0]['ultimocargomadre1_trabajo'];
$partesfamilia2= explode('*', $datosfamiliares2);
$datosfamiliares3=$hojadevida[0]['ultimocargoconyuge1_trabajo'];
$partesfamilia3= explode('*', $datosfamiliares3);
$html .= '<td colspan="2">
        <table style="width: 100%; text-align: center">
            <tr>
                <td></td>
                <td style="background-color: #01b69b; color: white;">Nombres y apellidos</td>
                <td style="background-color: #01b69b; color: white;">Lugar de trabajo</td>
                <td style="background-color: #01b69b; color: white;">Cargo</td>
                <td style="background-color: #01b69b; color: white;">Teléfono</td>
            </tr>
            <tr>
                <td style="background-color: #01b69b; color: white;">Su padre</td>
                <td>' . $partesfamilia1[0] . '</td>
                <td>' . $partesfamilia1[1] . '</td>
                <td>' . $partesfamilia1[2] . '</td>
                <td>' . $partesfamilia1[3] . '</td>
            </tr>
            <tr>
                <td style="background-color: #01b69b; color: white;">Su madre</td>
                <td>' . $partesfamilia2[0] . '</td>
                <td>' . $partesfamilia2[1] . '</td>
                <td>' . $partesfamilia2[2] . '</td>
                <td>' . $partesfamilia2[3] . '</td>
            </tr>
            <tr>
                <td style="background-color: #01b69b; color: white;">Su cónyuge</td>
                <td>' . $partesfamilia3[0] . '</td>
                <td>' . $partesfamilia3[1] . '</td>
                <td>' . $partesfamilia3[2] . '</td>
                <td>' . $partesfamilia3[3] . '</td>
            </tr>
        </table>
</td>
</tr>

<tr>
<td><h5><b>Nº de hijos: </b>' . $hojadevida[0]['numhijos_trabajo'] . '</h5></td>
<td><h5><b>Edades: </b>' . $hojadevida[0]['edadeshijos_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Niños con discapacidad: </b>' . $hojadevida[0]['hijocapacidades1_trabajo'] . '</h5></td>
<td><h5><b>Cuántos: </b>' . $hojadevida[0]['numdiscapacidad_trabajo'] . '</h5></td>
</tr>
<tr>
<td><h5><b>Distancia desde su domicilio a la agencia que postula: </b>' . $hojadevida[0]['distanciapostula_trabajo'] . ' minutos</h5></td>
<td><h5><b>Medio de transporte: </b>' . $hojadevida[0]['transportepostula2_trabajo'] . '</h5></td>
</tr>
</table>

<table style="width:100%; " border=1>
<tr>
<td colspan="2" style="background-color: #08b89d; color:white;"><h5><b>4. Educación</b></h5></td>
</tr>

<tr>
<td colspan="2">';
$primaria=$hojadevida[0]['primaria_trabajo'];
$partesprimaria= explode('*', $primaria);
$secundaria=$hojadevida[0]['secundaria_trabajo'];
$partessecundaria= explode('*', $secundaria);
$universidad=$hojadevida[0]['universidad_trabajo'];
$partesuniversidad= explode('*', $universidad);
$otrasestudios=$hojadevida[0]['otroestudio_trabajo'];
$partesotras= explode('*', $otrasestudios);
$html .= '<table style="width: 100%; text-align: center">
    <tr>
    <td style="background-color: #01b69b; color: white;">Instrucción</td>
    <td style="background-color: #01b69b; color: white;">Establecimiento</td>
    <td style="background-color: #01b69b; color: white;">Años aprobados</td>
    <td style="background-color: #01b69b; color: white;">Egresado</td>
    <td style="background-color: #01b69b; color: white;">Título obtenido o por obtener</td>
    </tr>
    <tr>
    <td style="background-color: #01b69b; color: white;">Primaria</td>
    <td>' . $partesprimaria[0] . '</td>
    <td>
        <label>' . $partesprimaria[1] . '</label>
    </td>
    <td>' . $partesprimaria[2] . '</td>
    <td>' . $partesprimaria[3] . '</td>
    </tr>
    <tr>
    <td style="background-color: #01b69b; color: white;">Secundaria</td>
    <td>' . $partessecundaria[0] . '</td>
    <td>
        <label>' . $partessecundaria[1] . '</label>
    </td>
    <td>' . $partessecundaria[2] . '</td>
    <td>' . $partessecundaria[3] . '</td>
    </tr>
    <tr>
    <td style="background-color: #01b69b; color: white;">Universitaria</td>
    <td>' . $partesuniversidad[0] . '</td>
    <td>
        <label>' . $partesuniversidad[1] . '</label>
    </td>
    <td>' . $partesuniversidad[2] . '</td>
    <td>' . $partesuniversidad[3] . '</td>
    </tr>
    <tr>
    <td style="background-color: #01b69b; color: white;">Otros</td>
    <td colspan="2">' . $partesotras[0] . '</td>
    <td>' . $partesotras[1] . '</td>
    <td>' . $partesotras[2] . '</td>
    </tr>
    <tr>
    <td style="background-color: #01b69b; color: white;">Horario de estudio</td>
    <td colspan="4"></td>
    </tr>
    </table>

</td>
</tr>
</table>';

$curso1=$hojadevida[0]['curso1_trabajo'];
$partescurso1= explode('*', $curso1);
$curso2=$hojadevida[0]['curso2_trabajo'];
$partescurso2= explode('*', $curso2);
$curso3=$hojadevida[0]['curso3_trabajo'];
$partescurso3= explode('*', $curso3);
$html .= '<table style="width:100%; " border=1>
<tr>
<td colspan="2" style="background-color: #08b89d; color:white;"><h5><b>5. Cursos recibidos</b></h5></td>
</tr>
<tr>
<td colspan="2" style="">
<table style="width: 100%; text-align: center">
    <tr>
        <td style="background-color: #01b69b; color: white;">Nombre del curso</td>
        <td style="background-color: #01b69b; color: white;">Mes y año</td>
        <td style="background-color: #01b69b; color: white;">Duración</td>
    </tr>
    <tr>
        <td>' . $partescurso1[0] . '</td>
        <td>' . $partescurso1[1] . '</td>
        <td>' . $partescurso1[2] . '</td>
    </tr>
    <tr>
        <td>' . $partescurso2[0] . '</td>
        <td>' . $partescurso2[1] . '</td>
        <td>' . $partescurso2[2] . '</td>
    </tr>
    <tr>
        <td>' . $partescurso3[0] . '</td>
        <td>' . $partescurso3[1] . '</td>
        <td>' . $partescurso3[2] . '</td>
    </tr>
</table>

</td>
</tr>
</table>
<table style="width:100%; " border=1>
<tr>
<td colspan="2" style="background-color: #08b89d; color:white;"><h5><b>6. Conocimientos adicionales</b></h5></td>
</tr>

<tr>
<td><h5><b>Sistemas informáticos: </b>' . $hojadevida[0]['ofimaticapostula_trabajo'] . '</h5></td>
<td><h5><b>Otros (especifique según su profesión): </b>' . $hojadevida[0]['otroscualidadespostula_trabajo'] . '</h5></td>
</tr>
<tr>
<td colspan="2"><h5><b>Inglés: </b>' . $hojadevida[0]['inglespostula_trabajo'] . '</h5></td>
</tr>
<tr>
<td colspan="2"><h5><b>Otro Idioma: </b>' . $hojadevida[0]['otroidiomapostula1_trabajo'] . '</h5></td>
</tr>
<tr>
<td colspan="2"><h5><b>Otro Idioma: </b>' . $hojadevida[0]['otroidiomapostula2_trabajo'] . '</h5></td>
</tr>
</table>';

$experiencia1=$hojadevida[0]['experiencialaboral1_trabajo'];
$partesexperiencia1= explode('*', $curso1);
$experiencia2=$hojadevida[0]['experiencialaboral2_trabajo'];
$partesexperiencia2= explode('*', $curso2);
$experiencia3=$hojadevida[0]['experiencialaboral3_trabajo'];
$partesexperiencia3= explode('*', $curso3);

$html .= '<table style="width:100%; " border=1>
    
<tr>
<td colspan="2" style="background-color: #08b89d; color:white;"><h5><b>7. Experiencia laboral (últimos tres empleos desde el más reciente, en trabajos bajo dependencia)</b></h5></td>
</tr>';
if(count($partesexperiencia1)>4){
    $html .= '<td colspan="2" style="text-align: center; background-color:#efedee; ">EMPRESA 1</td>
<tr>
<td><h5><b>Nombre de la empresa: </b>' . $partesexperiencia1[0] . '</h5></td>
<td><h5><b>Teléfono: </b>' . $partesexperiencia1[1] . '</h5></td>
</tr>
<tr>
<td><h5><b>Sueldo percibido: </b>' . $partesexperiencia1[2] . '</h5></td>
<td><h5><b>Cargo(s) desempeñados: </b>' . $partesexperiencia1[3] . '</h5></td>
</tr>
<tr>
<td><h5><b>Funciones realizadas: </b>' . $partesexperiencia1[4] . '</h5></td>
<td><h5><b>Desde: </b>' . $partesexperiencia1[5] . '</h5></td>
</tr>
<tr>
<td><h5><b>Hasta: </b>' . $partesexperiencia1[6] . '</h5></td>
<td><h5><b>Motivo del retiro: </b>' . $partesexperiencia1[7] . '</h5></td>
</tr>
<tr>
<td><h5><b>Nombre jefe inmediato: </b>' . $partesexperiencia1[8] . '</h5></td>
<td><h5><b>Teléfono: </b>' . $partesexperiencia1[9] . '</h5></td>
</tr>
<tr>';
}
if(count($partesexperiencia2)>4){
$html .= '<td colspan="2" style="text-align: center; background-color:#efedee; ">EMPRESA 2</td>
</tr>
<tr>
<td><h5><b>Nombre de la empresa: </b>' . $partesexperiencia2[0] . '</h5></td>
<td><h5><b>Teléfono: </b>' . $partesexperiencia2[1] . '</h5></td>
</tr>
<tr>
<td><h5><b>Sueldo percibido: </b>' . $partesexperiencia2[2] . '</h5></td>
<td><h5><b>Cargo(s) desempeñados: </b>' . $partesexperiencia2[3] . '</h5></td>
</tr>
<tr>
<td><h5><b>Funciones realizadas: </b>' . $partesexperiencia2[4] . '</h5></td>
<td><h5><b>Desde: </b>' . $partesexperiencia2[5] . '</h5></td>
</tr>
<tr>
<td><h5><b>Hasta: </b>' . $partesexperiencia2[6] . '</h5></td>
<td><h5><b>Motivo del retiro: </b>' . $partesexperiencia2[7] . '</h5></td>
</tr>
<tr>
<td><h5><b>Nombre jefe inmediato: </b>' . $partesexperiencia2[8] . '</h5></td>
<td><h5><b>Teléfono: </b>' . $partesexperiencia2[9] . '</h5></td>
</tr>';
}
if(count($partesexperiencia2)>4){
   $html .= '<tr>
<td colspan="2" style="text-align: center; background-color:#efedee; ">EMPRESA 3</td>
</tr>
<tr>
<td><h5><b>Nombre de la empresa: </b>' . $partesexperiencia3[0] . '</h5></td>
<td><h5><b>Teléfono: </b>' . $partesexperiencia3[1] . '</h5></td>
</tr>
<tr>
<td><h5><b>Sueldo percibido: </b>' . $partesexperiencia3[2] . '</h5></td>
<td><h5><b>Cargo(s) desempeñados: </b>' . $partesexperiencia3[3] . '</h5></td>
</tr>
<tr>
<td><h5><b>Funciones realizadas: </b>' . $partesexperiencia3[4] . '</h5></td>
<td><h5><b>Desde: </b>' . $partesexperiencia3[5] . '</h5></td>
</tr>
<tr>
<td><h5><b>Hasta: </b>' . $partesexperiencia3[6] . '</h5></td>
<td><h5><b>Motivo del retiro: </b>' . $partesexperiencia3[7] . '</h5></td>
</tr>
<tr>
<td><h5><b>Nombre jefe inmediato: </b>' . $partesexperiencia3[8] . '</h5></td>
<td><h5><b>Teléfono: </b>' . $partesexperiencia3[9] . '</h5></td>
</tr>'; 
}


$html .= '</table>';

$referencia1=$hojadevida[0]['referenciapersonal1_trabajo'];
$partesreferencia1= explode('*', $referencia1);
$referencia2=$hojadevida[0]['referenciapersonal2_trabajo'];
$partesexperiencia2= explode('*', $referencia2);
$referencia3=$hojadevida[0]['referenciapersonal3_trabajo'];
$partesexperiencia3= explode('*', $referencia3);
$html .= '<table style="width:100%; " border=1>
<tr>
<td style="background-color: #08b89d; color:white;"><h5><b>8. Referencias personales (no familiares)</b></h5></td>
</tr>
<tr>
<td>
<table style="width: 100%">
<tr>
    <td style="background-color: #01b69b; color: white;">Nombre</td>
    <td style="background-color: #01b69b; color: white;">Tipo de relación</td>
    <td style="background-color: #01b69b; color: white;">Lugar de trabajo</td>
    <td style="background-color: #01b69b; color: white;">Cargo</td>
    <td style="background-color: #01b69b; color: white;">Teléfono</td>
</tr>
<tr>
    <td>' . $partesreferencia1[0] . '</td>
    <td>' . $partesreferencia1[1] . '</td>
    <td>' . $partesreferencia1[2] . '</td>
    <td>' . $partesreferencia1[3] . '</td>
    <td>' . $partesreferencia1[4] . '</td>
</tr>
<tr>
    <td>' . $partesexperiencia2[0] . '</td>
    <td>' . $partesexperiencia2[1] . '</td>
    <td>' . $partesexperiencia2[2] . '</td>
    <td>' . $partesexperiencia2[3] . '</td>
    <td>' . $partesexperiencia2[4] . '</td>
</tr>
<tr>
    <td>' . $partesexperiencia3[0] . '</td>
    <td>' . $partesexperiencia3[1] . '</td>
    <td>' . $partesexperiencia3[2] . '</td>
    <td>' . $partesexperiencia3[3] . '</td>
    <td>' . $partesexperiencia3[4] . '</td>
</tr>

</table>
</td>
</tr>
</table>

<table style="width:100%; " border=1>
<tr>
<td style="background-color: #08b89d; color:white;"><h5><b>9. ¿Por que medio se entero de la vacante?</b></h5></td>
</tr>
<tr>
<td><h5>' . $hojadevida[0]['enterovacante_trabajo'] . '</h5></td>
<td><h5>' . $hojadevida[0]['conocioespecifica_trabajo'] . '</h5></td>
</tr>
</table>

<table style="width:100%; " border=1>
<tr>
<td style="background-color: #08b89d; color:white;"><h5><b>LINK PARA HOJA DE VIDA</b><a href="https://www.sumakkawsay.fin.ec/documentos/' . $hojadevida[0]['hojavida_trabajo'] . '"></a></h5></td>
</tr>
</table>
<table style="width:100%; " border=1>
<tr>
<td style="">
<p>
Yo:' . $hojadevida[0]['nombres_trabajo'] . ' ' . $hojadevida[0]['apellidos_trabajo'] . ',certifico que la información anterior es fidedigna y autorizo a la
Cooperativa a verificar los datos proporcionados, acepto que cualquier declaración falsa en este formulario, será suficiente para que se
elimine del proceso de selección y de la base de datos de la Cooperativa, de ser contratado será motivo de terminación laboral. Además
considero que la recepción de este formulario, no conlleva ninguna obligación por parte de la Cooperativa.
</p>
<p>
De manera expresa autorizo a la <b>Cooperativa de Ahorro y Creditó Sumak Kawsay Ltda.</b> y sus funcionarios, a consultar e investigar mi historial
y comportamiento crediticio en las bases de datos consignadas por las empresas de prestación de servicios de referencia crediticia que
estimen convenientes.
</p>

</td>
</tr>
</table>
';
echo $html;
/*
  require_once '../libs/dompdf/autoload.php';

  use Dompdf\Dompdf;
  $fecha=date('d').''.date('m').''.date('y');
  $dompdf = new Dompdf();
  $options = $dompdf->getOptions();
  $options->set(array('isRemoteEnabled' => true));
  $dompdf->setOptions($options);
  $dompdf->loadHtml($html);
  $dompdf->setPaper('letter');
  $dompdf->render();
  $dompdf->stream("hojadevida_.pdf", array("Attachment" => false));
 * 
 */
?>