<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Cuestionario</title>

   <!-- Fonts -->
   <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="flex flex-col justify-center items-center bg-green-100">


   <div class="max-w-7xl bg-white shadow-lg rounded-lg overflow-hidden mt-10">
      <div class="p-5 bg-green text-white bg-green-600">
         <p class="text-2xl font-bold mb-2">ENCUESTA A EGRESADOS ITIC's</p>
         <p class="text-xs font-semibold"> Agradecemos dar sus respuestas con mayor transparencia y veracidad a las siguientes preguntas, lo cual nos permitirá un acercamiento a la realidad concreta que viven los egresados del 2024, específicamente los Ingenieros en TIC's, así como deducir la problemática a la que se enfrentan.</p>
      </div>
      <form method="post" class="p-8">
         <input type="hidden" name="csrfmiddlewaretoken" value="WEbCNL9PSNUDoas9YzU0zmIg6z7e79xRYPIBxYv3K0UZ9Ac6XzpVCVqP9g2Jw7fX">



      <div class="flex space-x-4 text-sm">
            <div class="flex-1 p-4">
               <label for="id_apellido_paterno">Apellido Paterno:</label>
               <br>
               <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm mt-2" name="apellido_paterno" maxlength="100" required="" id="apellido_paterno">
            </div>
            <div class="flex-1 p-4">
               <label for="id_apellido_materno">Apellido Materno:</label>
               <br>
               <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm  mt-2" name="apellido_materno" maxlength="100" required="" id="apellido_materno">
            </div>
            <div class="flex-1 p-4">
               <label for="id_nombres">Nombres:</label>
               <br>
               <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm mt-2" name="nombres" maxlength="100" required="" id="nombre">
            </div>
      </div>


            
      <div class="flex space-x-4 text-sm">
            <div class="flex-1 p-4">
               <label for="id_fecha_nacimiento">Fecha de Nacimiento:</label>
               <br>
               <input type="text" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="fecha_nacimiento" required="" id="fecha_nacimiento">
            </div>
            <div class="flex-1 p-4">
               <label for="id_email_personal">Email Personal:</label>
               <br>
               <input type="email" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="email_personal" maxlength="320" required="" id="email">
            </div>
            <div class="flex-1 p-4">
               <label for="id_telefono_celular">Teléfono Celular:</label>
               <br>
               <input type="text" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="telefono_celular" maxlength="15" required="" id="celular">
            </div>
      </div>


      <div class="flex space-x-4 text-sm">
            <div class="flex-1 p-4">
               <label for="id_fecha_nacimiento">Fecha de Nacimiento:</label>
               <br>
               <input type="date" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="fecha_nacimiento" required="" id="fecha_nacimiento">
            </div>
            <div class="flex-1 p-4">
               <label for="id_mes_y_anio_egreso">Mes y Año de Egreso:</label>
               <br>
               <input type="text" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="mes_y_anio_egreso" maxlength="100" required="" id="id_mes_y_anio_egreso">
            </div>
            <div class="flex-1 p-4">
               
            </div>
      </div>


      <h2>INSTRUCCIONES</h2>
         
      <p>Marque el nivel que considere usted pertinente para sus conocimientos, acciones, pensamientos, o forma de ser, solamente debe seleccionar una respuesta por cada pregunta, existen dos bloques de preguntas, cada una indica los estándares de evaluación de acuerdo a las preguntas que se realicen.</p>

      <p>Califique la calidad de la educación profesional proporcionada por el personal docente, asi como el Plan de Estudios de Ingeniería en Tecnologías de la Información y Comunicaciones que cursó y las condiciones del plantel en cuanto a infraestructura.</p>

      <h3>PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</h3>


      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
         <tr>
            <td>
               <label>Calidad de los docentes:</label>
            </td>
            <td > 
               <input type="radio" name="calidad_docentes" value="1" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="calidad_docentes" value="2" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="calidad_docentes" value="3" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="calidad_docentes" value="4" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="calidad_docentes" value="5" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         <td>
               <label>Plan de estudio:</label>
            </td>
            <td> 
               <input type="radio" name="plan_estudios" value="1" required="" id="plan_estudios" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="plan_estudios" value="2" required="" id="plan_estudios" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="plan_estudios" value="3" required="" id="plan_estudios" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="plan_estudios" value="4" required="" id="plan_estudios" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="plan_estudios" value="5" required="" id="plan_estudios" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         <td>
               <label>Oportunidad de participar en proyectos de investigación y desarrollo:</label>
            </td>
            <td> 
               <input type="radio" name="oportunidad_investigacion" value="1" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="oportunidad_investigacion" value="2" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="oportunidad_investigacion" value="3" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="oportunidad_investigacion" value="4" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="oportunidad_investigacion" value="5" required="" id="calidad_docentes" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         <td>
               <label>Satisfacción de las condiciones de estudio (infraestructural):</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="satisfaccion_condiciones_estudio" value="1" required="" id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="satisfaccion_condiciones_estudio" value="2" required="" id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="satisfaccion_condiciones_estudio" value="3" required="" id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="satisfaccion_condiciones_estudio" value="4" required="" id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="satisfaccion_condiciones_estudio" value="5" required="" id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         
      </tbody>
      </table>


   <br>



         <label>Actividad a la que se dedica actualmente:</label>
     
         <div id="id_actividad_actual">
            <div>
               <label for="id_actividad_actual_0"><input type="radio" name="actividad_actual" value="trabaja" required="" id="id_actividad_actual_0">
                  Trabaja</label>

            </div>
            <div>
               <label for="id_actividad_actual_1"><input type="radio" name="actividad_actual" value="estudia" required="" id="id_actividad_actual_1">
                  Estudia</label>

            </div>
            <div>
               <label for="id_actividad_actual_2"><input type="radio" name="actividad_actual" value="estudia_y_trabaja" required="" id="id_actividad_actual_2">
                  Estudia y trabaja</label>

            </div>
            <div>
               <label for="id_actividad_actual_3"><input type="radio" name="actividad_actual" value="ni_estudia_ni_trabaja" required="" id="id_actividad_actual_3">
                  No estudia ni trabaja</label>

            </div>
         </div>


         <label>Si está trabajando, su trabajo está relacionado con el área de Tics:</label>
   
         <div id="id_trabajo_tics">
            <div>
               <label for="id_trabajo_tics_0"><input type="radio" name="trabajo_tics" value="si" required="" id="id_trabajo_tics_0">
                  Sí</label>

            </div>
            <div>
               <label for="id_trabajo_tics_1"><input type="radio" name="trabajo_tics" value="no" required="" id="id_trabajo_tics_1">
                  No</label>

            </div>
         </div>


         <br>
         <h1>DATOS DE LA EMPRESA U ORGANISMO</h1>
         <br>
         <div class="flex flex-col bg-white p-4">
         <label for="id_razon_social">Razón Social:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="razon_social" maxlength="100" required="" id="id_razon_social">



         <label for="id_domicilio">Domicilio:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="domicilio" maxlength="100" required="" id="id_domicilio">


         <label for="id_calle_numero">Calle y Número:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="calle_numero" maxlength="100" required="" id="id_calle_numero">


         <label for="id_colonia_cp_ciudad">Colonia, C.P., Ciudad:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="colonia_cp_ciudad" maxlength="100" required="" id="id_colonia_cp_ciudad">



         <label for="id_municipio">Municipio:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="municipio" maxlength="100" required="" id="id_municipio">


         <label for="id_estado">Estado:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="estado" maxlength="100" required="" id="id_estado">


         <label for="id_telefonos">Teléfonos:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="telefonos" maxlength="100" required="" id="id_telefonos">

         <label for="id_jefe_inmediato">Nombre y Puesto del Jefe Inmediato:</label>
         <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="jefe_inmediato" maxlength="100" required="" id="id_jefe_inmediato">

         </div>
        

         <br>

         <h2>DESEMPEÑO PROFESIONAL DE LOS EGRESADOS (COHERENCIA ENTRE LA FORMACIÓN Y EL TIPO DE EMPLEO)</h2>
         <p>Marcar los campos que correspondan a su trayectoria profesional.</p>
         <br>
         <label>Eficiencia para realizar las actividades laborales, en relación a su formación académica:</label>

         <div id="id_eficiencia_laboral">
            <div>
               <label for="id_eficiencia_laboral_0"><input type="radio" name="eficiencia_laboral" value="muy_eficiente" required="" id="id_eficiencia_laboral_0">
                  Muy eficiente</label>

            </div>
            <div>
               <label for="id_eficiencia_laboral_1"><input type="radio" name="eficiencia_laboral" value="eficiente" required="" id="id_eficiencia_laboral_1">
                  Eficiente</label>

            </div>
            <div>
               <label for="id_eficiencia_laboral_2"><input type="radio" name="eficiencia_laboral" value="poco_eficiente" required="" id="id_eficiencia_laboral_2">
                  Poco eficiente</label>

            </div>
            <div>
               <label for="id_eficiencia_laboral_3"><input type="radio" name="eficiencia_laboral" value="deficiente" required="" id="id_eficiencia_laboral_3">
                  Deficiente</label>

            </div>
         </div>

         <label>Cómo califica su formación académica con respecto a su desempeño laboral:</label>
       
         <div id="id_calificacion_formacion_laboral">
            <div>
               <label for="id_calificacion_formacion_laboral_0"><input type="radio" name="calificacion_formacion_laboral" value="excelente" required="" id="id_calificacion_formacion_laboral_0">
                  Excelente</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_1"><input type="radio" name="calificacion_formacion_laboral" value="bueno" required="" id="id_calificacion_formacion_laboral_1">
                  Bueno</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_2"><input type="radio" name="calificacion_formacion_laboral" value="regular" required="" id="id_calificacion_formacion_laboral_2">
                  Regular</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_3"><input type="radio" name="calificacion_formacion_laboral" value="malo" required="" id="id_calificacion_formacion_laboral_3">
                  Malo</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_4"><input type="radio" name="calificacion_formacion_laboral" value="pesimo" required="" id="id_calificacion_formacion_laboral_4">
                  Pésimo</label>

            </div>
         </div>


         <label>Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional:</label>
        
         <div id="id_utilidad_residencias_practicas">
            <div>
               <label for="id_utilidad_residencias_practicas_0"><input type="radio" name="utilidad_residencias_practicas" value="excelente" required="" id="id_utilidad_residencias_practicas_0">
                  Excelente</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_1"><input type="radio" name="utilidad_residencias_practicas" value="bueno" required="" id="id_utilidad_residencias_practicas_1">
                  Bueno</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_2"><input type="radio" name="utilidad_residencias_practicas" value="regular" required="" id="id_utilidad_residencias_practicas_2">
                  Regular</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_3"><input type="radio" name="utilidad_residencias_practicas" value="malo" required="" id="id_utilidad_residencias_practicas_3">
                  Malo</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_4"><input type="radio" name="utilidad_residencias_practicas" value="pesimo" required="" id="id_utilidad_residencias_practicas_4">
                  Pésimo</label>

            </div>
         </div>


         <p>Aspectos que valora la empresa u organismo para la contratación de los egresados:</p>







         <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
         <tr>
            <td>
               <label>Área o campo de estudio:</label>
            </td>
            <td > 
               <input type="radio" name="aspectos_valora_empresa_area_estudio" value="1" required="" id="aspectos_valora_empresa_area_estudio" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_area_estudio" value="2" required="" id="aspectos_valora_empresa_area_estudio" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_area_estudio" value="3" required="" id="aspectos_valora_empresa_area_estudio" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_area_estudio" value="4" required="" id="aspectos_valora_empresa_area_estudio" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_area_estudio" value="5" required="" id="aspectos_valora_empresa_area_estudio" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         <td>
               <label>Titulación:</label>
            </td>
            <td> 
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="1" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="2" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="3" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="4" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="5" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
            <td>
               <label>Experiencia laboral/práctica (antes de egresar):</label>
            </td>
            <td> 
               <input type="radio" name="id_aspectos_valora_empresa_experiencia_laboral_0" value="1" required="" id="id_aspectos_valora_empresa_experiencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_aspectos_valora_empresa_experiencia_laboral_0" value="2" required="" id="id_aspectos_valora_empresa_experiencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_aspectos_valora_empresa_experiencia_laboral_0" value="3" required="" id="id_aspectos_valora_empresa_experiencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_aspectos_valora_empresa_experiencia_laboral_0" value="4" required="" id="id_aspectos_valora_empresa_experiencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_aspectos_valora_empresa_experiencia_laboral_0" value="5" required="" id="id_aspectos_valora_empresa_experiencia_laboral_0" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         <td>
               <label>Competencia Laboral:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_aspectos_valora_empresa_competencia_laboral_0" value="1" required="" id="id_aspectos_valora_empresa_competencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_competencia_laboral_0" value="2" required="" id="id_aspectos_valora_empresa_competencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_competencia_laboral_0" value="3" required="" id="id_aspectos_valora_empresa_competencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_competencia_laboral_0" value="4" required="" id="id_aspectos_valora_empresa_competencia_laboral_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_competencia_laboral_0" value="5" required="" id="id_aspectos_valora_empresa_competencia_laboral_0" class="mt-2 ml-14">
            </td>



         <tr>
            <td>
               <label>Posicionamiento de la Institución de Egreso:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_aspectos_valora_empresa_posicionamiento_institucion_0" value="1" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_posicionamiento_institucion_0" value="2" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_posicionamiento_institucion_0" value="3" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_posicionamiento_institucion_0" value="4" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_posicionamiento_institucion_0" value="5" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
         </tr>
          

         <tr>
            <td>
               <label>Conocimiento de Idiomas Extranjeros:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_aspectos_valora_empresa_conocimiento_idiomas_0" value="1" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_conocimiento_idiomas_0" value="2" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_conocimiento_idiomas_0" value="3" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_conocimiento_idiomas_0" value="4" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_conocimiento_idiomas_0" value="5" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0" class="mt-2 ml-14">
            </td>
         </tr>

           


         <tr>
            <td>
               <label>Recomendaciones/referencias:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_aspectos_valora_empresa_recomendaciones_referencias_0" value="1" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_recomendaciones_referencias_0" value="2" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_recomendaciones_referencias_0" value="3" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_recomendaciones_referencias_0" value="4" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_recomendaciones_referencias_0" value="5" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_0" class="mt-2 ml-14">
            </td>

         </tr>
           

         <tr>
            <td>
               <label>Personalidad/actitudes:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_aspectos_valora_empresa_personalidad_actitudes_0" value="1" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_personalidad_actitudes_0" value="2" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_personalidad_actitudes_0" value="3" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_personalidad_actitudes_0" value="4" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_personalidad_actitudes_0" value="5" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_0" class="mt-2 ml-14">
            </td>

         </tr>

               
         <tr>
            <td>
               <label>Capacidad de liderazgo:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_aspectos_valora_empresa_capacidad_liderazgo_0" value="1" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_capacidad_liderazgo_0" value="2" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_capacidad_liderazgo_0" value="3" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_capacidad_liderazgo_0" value="4" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_capacidad_liderazgo_0" value="5" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_0" class="mt-2 ml-14">
            </td>

         </tr>



         <tr>
            <td>
               <label>Otros:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_aspectos_valora_empresa_otros_0" value="1" required="" id="id_aspectos_valora_empresa_otros_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_otros_0" value="2" required="" id="id_aspectos_valora_empresa_otros_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_otros_0" value="3" required="" id="id_aspectos_valora_empresa_otros_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_otros_0" value="4" required="" id="id_aspectos_valora_empresa_otros_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_aspectos_valora_empresa_otros_0" value="5" required="" id="id_aspectos_valora_empresa_otros_0" class="mt-2 ml-14">
            </td>

         </tr>

         
      </tbody>
      </table>

      <br>


      <p>ESTANDARES DE EVALUACION (SER)</p>
      
      <p>Compromiso</p>











      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
         <tr>
            <td>
               <label>Manifiesta un alto nivel de compromiso en el trabajo personal y del departamento, además de ser puntual y desarrollar su trabajo con un alto nivel de calidad.:</label>
            </td>
            <td > 
               <input type="radio" name="id_compromiso_nivel_compromiso_trabajo_0" value="1" required="" id="id_compromiso_nivel_compromiso_trabajo_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_nivel_compromiso_trabajo_0" value="2" required="" id="id_compromiso_nivel_compromiso_trabajo_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_nivel_compromiso_trabajo_0" value="3" required="" id="id_compromiso_nivel_compromiso_trabajo_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_nivel_compromiso_trabajo_0" value="4" required="" id="id_compromiso_nivel_compromiso_trabajo_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_nivel_compromiso_trabajo_0" value="5" required="" id="id_compromiso_nivel_compromiso_trabajo_0" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         <td>
               <label>Maneja un alto sentimiento de afinidad y fidelidad hacia la organización para la que labora:</label>
            </td>
            <td> 
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="1" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="2" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="3" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="4" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="aspectos_valora_empresa_titulacion" value="5" required="" id="aspectos_valora_empresa_titulacion" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
            <td>
               <label>En su trabajo desarrolla sus capacidades y aprende nuevas capacidades:</label>
            </td>
            <td> 
               <input type="radio" name="id_compromiso_desarrollo_capacidades_0" value="1" required="" id="id_compromiso_desarrollo_capacidades_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_desarrollo_capacidades_0" value="2" required="" id="id_compromiso_desarrollo_capacidades_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_desarrollo_capacidades_0" value="3" required="" id="id_compromiso_desarrollo_capacidades_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_desarrollo_capacidades_0" value="4" required="" id="id_compromiso_desarrollo_capacidades_0" class="mt-2 ml-14">
            </td>
            <td>
               <input type="radio" name="id_compromiso_desarrollo_capacidades_0" value="5" required="" id="id_compromiso_desarrollo_capacidades_0" class="mt-2 ml-14">
            </td>
         </tr>
         <tr>
         <td>
               <label>Sirve y aporta profesionalmente a favor de enaltecer su persona y el de la institución:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_compromiso_aporte_profesional_0" value="1" required="" id="id_compromiso_aporte_profesional_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_aporte_profesional_0" value="2" required="" id="id_compromiso_aporte_profesional_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_aporte_profesional_0" value="3" required="" id="id_compromiso_aporte_profesional_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_aporte_profesional_0" value="4" required="" id="id_compromiso_aporte_profesional_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_aporte_profesional_0" value="5" required="" id="id_compromiso_aporte_profesional_0" class="mt-2 ml-14">
            </td>



         <tr>
            <td>
               <label>Manifiesta iniciativa para resolver los problemas surgidos en el desempeño de su trabajo o en el de la empresa para la que labora:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_compromiso_iniciativa_resolucion_problemas_0" value="1" required="" id="id_compromiso_iniciativa_resolucion_problemas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_iniciativa_resolucion_problemas_0" value="2" required="" id="id_compromiso_iniciativa_resolucion_problemas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_iniciativa_resolucion_problemas_0" value="3" required="" id="id_compromiso_iniciativa_resolucion_problemas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_iniciativa_resolucion_problemas_0" value="4" required="" id="id_compromiso_iniciativa_resolucion_problemas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_compromiso_iniciativa_resolucion_problemas_0" value="5" required="" id="id_compromiso_iniciativa_resolucion_problemas_0" class="mt-2 ml-14">
            </td>
         </tr>
          

        




               
         <tr>
            <td>
               <label>Maneja un alto nivel de concordancia entre sus ideas y sus acciones apegado a lo que se considera normal dentro de la empresa:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="1" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="2" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="3" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="4" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="5" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>

         </tr>



         <tr>
            <td>
               <label>Expresa sus ideas y opiniones teniendo en cuenta las emociones de su interlocutor:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="1" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="2" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="3" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="4" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="5" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>

         </tr>

         
      </tbody>
      </table>


      <p>Responsabilidad</p>

   
      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">

      <tr>
            <td>
               <label>Realiza sus funciones con la certeza de que su trabajo está completo y bien hecho a la primera vez y siempre:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_responsabilidad_trabajo_completo_0" value="1" required="" id="id_responsabilidad_trabajo_completo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_trabajo_completo_0" value="2" required="" id="id_responsabilidad_trabajo_completo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_trabajo_completo_0" value="3" required="" id="id_responsabilidad_trabajo_completo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_trabajo_completo_0" value="4" required="" id="id_responsabilidad_trabajo_completo_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_trabajo_completo_0" value="5" required="" id="id_responsabilidad_trabajo_completo_0" class="mt-2 ml-14">
            </td>
         </tr>

           


         <tr>
            <td>
               <label>Tiene por costumbre llegar y entregar en el tiempo acordado a sus compromisos y obligaciones:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_responsabilidad_puntualidad_entrega_0" value="1" required="" id="id_responsabilidad_puntualidad_entrega_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_puntualidad_entrega_0" value="2" required="" id="id_responsabilidad_puntualidad_entrega_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_puntualidad_entrega_0" value="3" required="" id="id_responsabilidad_puntualidad_entrega_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_puntualidad_entrega_0" value="4" required="" id="id_responsabilidad_puntualidad_entrega_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_puntualidad_entrega_0" value="5" required="" id="id_responsabilidad_puntualidad_entrega_0" class="mt-2 ml-14">
            </td>

         </tr>
           

         <tr>
            <td>
               <label>Realiza sus funciones apegado a la normatividad considerando el desarrollo de métodos eficientes, estableciendo metas y objetivos, así como el logro de ellos:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_responsabilidad_normatividad_0" value="1" required="" id="id_responsabilidad_normatividad_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_normatividad_0" value="2" required="" id="id_responsabilidad_normatividad_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_normatividad_0" value="3" required="" id="id_responsabilidad_normatividad_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_normatividad_0" value="4" required="" id="id_responsabilidad_normatividad_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_responsabilidad_normatividad_0" value="5" required="" id="id_responsabilidad_normatividad_0" class="mt-2 ml-14">
            </td>

         </tr>
         
      </tbody>
      </table>





      <p>Honestidad</p>


      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
 
         <tr>
            <td>
               <label>Maneja un alto nivel de concordancia entre sus ideas y sus acciones apegado a lo que se considera normal dentro de la empresa:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="1" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="2" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="3" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="4" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_concordancia_ideas_acciones_0" value="5" required="" id="id_honestidad_concordancia_ideas_acciones_0" class="mt-2 ml-14">
            </td>

         </tr>



         <tr>
            <td>
               <label>Expresa sus ideas y opiniones teniendo en cuenta las emociones de su interlocutor:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="1" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="2" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="3" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="4" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_expresion_ideas_opiniones_0" value="5" required="" id="id_honestidad_expresion_ideas_opiniones_0" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Un gran amigo, que está buscando trabajo hace tiempo, te pide que escribas una referencia para un trabajo que consideras no está preparado:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_honestidad_carta_referencia_0" value="1" required="" id="id_honestidad_carta_referencia_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_carta_referencia_0" value="2" required="" id="id_honestidad_carta_referencia_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_carta_referencia_0" value="3" required="" id="id_honestidad_carta_referencia_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_carta_referencia_0" value="4" required="" id="id_honestidad_carta_referencia_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_honestidad_carta_referencia_0" value="5" required="" id="id_honestidad_carta_referencia_0" class="mt-2 ml-14">
            </td>

         </tr>


         
      </tbody>
      </table>





      <p>Respeto</p>
 
   
      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
 
         <tr>
            <td>
               <label>12.- Evalúa el uso de información, procedimientos, materiales, equipo y técnicas nuevas para mejorar el desempeño de su trabajo actual:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="evalua_uso_informacion_procedimientos" value="1" required="" id="evalua_uso_informacion_procedimientos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="evalua_uso_informacion_procedimientos" value="2" required="" id="evalua_uso_informacion_procedimientos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="evalua_uso_informacion_procedimientos" value="3" required="" id="evalua_uso_informacion_procedimientos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="evalua_uso_informacion_procedimientos" value="4" required="" id="evalua_uso_informacion_procedimientos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="evalua_uso_informacion_procedimientos" value="5" required="" id="evalua_uso_informacion_procedimientos" class="mt-2 ml-14">
            </td>

         </tr>




         <tr>
            <td>
               <label>13.- Hace planes y toma decisiones considerando siempre a la institución y al personal con el que trabaja. Se considera el momento y forma oportuno para hacer las cosas:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="hace_planes_y_toma_decisiones" value="1" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="2" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="3" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="4" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="5" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>14.- Se considera una personas razonable, correcta, moral y legalmente recta. Respeto a los derechos del ser humano y cumplimiento de normas, lineamientos y reglas.:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="se_considera_una_persona_razonable" value="1" required="" id="se_considera_una_persona_razonable" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="se_considera_una_persona_razonable" value="2" required="" id="se_considera_una_persona_razonable" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="se_considera_una_persona_razonable" value="3" required="" id="se_considera_una_persona_razonable" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="se_considera_una_persona_razonable" value="4" required="" id="se_considera_una_persona_razonable" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="se_considera_una_persona_razonable" value="5" required="" id="se_considera_una_persona_razonable" class="mt-2 ml-14">
            </td>

         </tr>


         
      </tbody>
      </table>


      <p>Disciplina</p>



      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
 
         <tr>
            <td>
               <label>15.- Mantener organizados sus instrumentos y área de trabajo:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="mantener_organizados_sus_instrumentos" value="1" required="" id="mantener_organizados_sus_instrumentos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="mantener_organizados_sus_instrumentos" value="2" required="" id="mantener_organizados_sus_instrumentos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="mantener_organizados_sus_instrumentos" value="3" required="" id="mantener_organizados_sus_instrumentos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="mantener_organizados_sus_instrumentos" value="4" required="" id="mantener_organizados_sus_instrumentos" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="mantener_organizados_sus_instrumentos" value="5" required="" id="mantener_organizados_sus_instrumentos" class="mt-2 ml-14">
            </td>

         </tr>




         <tr>
            <td>
               <label>16.- Cuando inicia con algún proyecto laboral o personal mantiene su atención en él hasta lograr terminarlo.:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="hace_planes_y_toma_decisiones" value="1" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="2" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="3" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="4" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="hace_planes_y_toma_decisiones" value="5" required="" id="hace_planes_y_toma_decisiones" class="mt-2 ml-14">
            </td>

         </tr>

         
      </tbody>
      </table>




      <p>28.Redes</p>
 
      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
 
         <tr>
            <td>
               <label>Cuenta con la competencia para diseñar y configurar redes LAN y WAN, siguiendo normas y estándares vigentes:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_diseno_configuracion_redes_0" value="1" required="" id="id_competencia_diseno_configuracion_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_diseno_configuracion_redes_0" value="2" required="" id="id_competencia_diseno_configuracion_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_diseno_configuracion_redes_0" value="3" required="" id="id_competencia_diseno_configuracion_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_diseno_configuracion_redes_0" value="4" required="" id="id_competencia_diseno_configuracion_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_diseno_configuracion_redes_0" value="5" required="" id="id_competencia_diseno_configuracion_redes_0" class="mt-2 ml-14">
            </td>

         </tr>




         <tr>
            <td>
               <label>Cuenta con la competencia para administrar, establecer niveles de seguridad y escalar redes LAN y WAN:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_administracion_seguridad_redes_0" value="1" required="" id="id_competencia_administracion_seguridad_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_administracion_seguridad_redes_0" value="2" required="" id="id_competencia_administracion_seguridad_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_administracion_seguridad_redes_0" value="3" required="" id="id_competencia_administracion_seguridad_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_administracion_seguridad_redes_0" value="4" required="" id="id_competencia_administracion_seguridad_redes_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_administracion_seguridad_redes_0" value="5" required="" id="id_competencia_administracion_seguridad_redes_0" class="mt-2 ml-14">
            </td>

         </tr>

         
      </tbody>
      </table>


      <p>DESARROLLO DE SOFTWARE, BASES DE DATOS DE SISTEMAS, PÁGINAS WEB, APLICACIONES MÓVILES1</p>


      <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
 
         <tr>
            <td>
               <label>Establezca cual es su nivel de competencia para analizar, diseñar, programar y documentar, siguiendo estándares, con algún lenguaje específico como Java, JavaScript, C, Python, o algún otro:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="1" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="2" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="3" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="4" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="5" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>

         </tr>




         <tr>
            <td>
               <label>Determine su nivel de competencia al analizar, diseñar y desarrollar sistemas web, siguiendo estándares, con algún lenguaje específico como PHP, HTML5, ASP.NET, Ruby o algún otro:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_desarrollar_sistemas_web_0" value="1" required="" id="id_competencia_desarrollar_sistemas_web_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_desarrollar_sistemas_web_0" value="2" required="" id="id_competencia_desarrollar_sistemas_web_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_desarrollar_sistemas_web_0" value="3" required="" id="id_competencia_desarrollar_sistemas_web_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_desarrollar_sistemas_web_0" value="4" required="" id="id_competencia_desarrollar_sistemas_web_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_desarrollar_sistemas_web_0" value="5" required="" id="id_competencia_desarrollar_sistemas_web_0" class="mt-2 ml-14">
            </td>

         </tr>

         <tr>
            <td>
               <label>Establezca cual es su nivel de competencia para analizar, diseñar, programar y documentar, siguiendo estándares, con algún lenguaje específico como Java, JavaScript, C, Python, o algún otro:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="1" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="2" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="3" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="4" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_analizar_disenar_programar_0" value="5" required="" id="id_competencia_analizar_disenar_programar_0" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Cuenta con la competencia de analizar, diseñar y programar dispositivos móviles, siguiendo estándares, con alguna plataforma específica como Android, IOS, Movil App Development, Xmarin Studio, PhoneGap, Appery.io o algún otro:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_programar_dispositivos_moviles_0" value="1" required="" id="id_competencia_programar_dispositivos_moviles_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_programar_dispositivos_moviles_0" value="2" required="" id="id_competencia_programar_dispositivos_moviles_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_programar_dispositivos_moviles_0" value="3" required="" id="id_competencia_programar_dispositivos_moviles_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_programar_dispositivos_moviles_0" value="4" required="" id="id_competencia_programar_dispositivos_moviles_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_programar_dispositivos_moviles_0" value="5" required="" id="id_competencia_programar_dispositivos_moviles_0" class="mt-2 ml-14">
            </td>

         </tr>



         <tr>
            <td>
               <label>Establezca cual es su nivel de competencia para diseñar y administrar bases de datos con algunos gestores como SQL, MySQL, Oracle o alguna otra:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_disenar_administrar_bases_datos_0" value="1" required="" id="id_competencia_disenar_administrar_bases_datos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_administrar_bases_datos_0" value="2" required="" id="id_competencia_disenar_administrar_bases_datos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_administrar_bases_datos_0" value="3" required="" id="id_competencia_disenar_administrar_bases_datos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_administrar_bases_datos_0" value="4" required="" id="id_competencia_disenar_administrar_bases_datos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_administrar_bases_datos_0" value="5" required="" id="id_competencia_disenar_administrar_bases_datos_0" class="mt-2 ml-14">
            </td>

         </tr>



         <tr>
            <td>
               <label>Determine su nivel de competencia para diseñar y gestionar servicios de TI apegados a modelos y estándares como ITIL, COBIT, UML, CMMI, PMBOOK o algún otro:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_disenar_gestionar_servicios_TI_0" value="1" required="" id="id_competencia_disenar_gestionar_servicios_TI_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_gestionar_servicios_TI_0" value="2" required="" id="id_competencia_disenar_gestionar_servicios_TI_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_gestionar_servicios_TI_0" value="3" required="" id="id_competencia_disenar_gestionar_servicios_TI_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_gestionar_servicios_TI_0" value="4" required="" id="id_competencia_disenar_gestionar_servicios_TI_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_disenar_gestionar_servicios_TI_0" value="5" required="" id="id_competencia_disenar_gestionar_servicios_TI_0" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Cuenta con la competencia para aplicar y utilizar técnicas y herramientas que lleven a cabo pruebas de software como Bugzilla, Testopia, FitNesse, qaManager, qaBook o alguna otra:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_pruebas_software_0" value="1" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="2" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="3" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="4" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="5" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Cuenta con la competencia para aplicar y utilizar técnicas y herramientas que lleven a cabo pruebas de software como Bugzilla, Testopia, FitNesse, qaManager, qaBook o alguna otra:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_competencia_pruebas_software_0" value="1" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="2" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="3" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="4" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_competencia_pruebas_software_0" value="5" required="" id="id_competencia_pruebas_software_0" class="mt-2 ml-14">
            </td>

         </tr>


         
      </tbody>
      </table>


 
        

   <p>SEGURIDAD LEGALIDAD, CONSULTORIA Y AUDITORIA</p>
 
   



   
   <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
 
         <tr>
            <td>
               <label>Considera usted que tiene los conocimientos necesarios para garantizar la seguridad en la información de los sistemas utilizando herramientas de seguridad y hacking de redes y sistemas de información:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_seguridad_informacion_hacking_0" value="1" required="" id="id_seguridad_informacion_hacking_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_seguridad_informacion_hacking_0" value="2" required="" id="id_seguridad_informacion_hacking_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_seguridad_informacion_hacking_0" value="3" required="" id="id_seguridad_informacion_hacking_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_seguridad_informacion_hacking_0" value="4" required="" id="id_seguridad_informacion_hacking_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_seguridad_informacion_hacking_0" value="5" required="" id="id_seguridad_informacion_hacking_0" class="mt-2 ml-14">
            </td>

         </tr>



         <tr>
            <td>
               <label>Conoce usted los temas necesarios en el campo legal y jurídico en torno a las tecnologías de la información, el manejo de los derechos de autor y la privacidad de datos, así como conocimientos en Normas, estándares y prácticas de Seguridad de la Información:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_conocimientos_legales_tecnologias_informacion_0" value="1" required="" id="id_conocimientos_legales_tecnologias_informacion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_legales_tecnologias_informacion_0" value="2" required="" id="id_conocimientos_legales_tecnologias_informacion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_legales_tecnologias_informacion_0" value="3" required="" id="id_conocimientos_legales_tecnologias_informacion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_legales_tecnologias_informacion_0" value="4" required="" id="id_conocimientos_legales_tecnologias_informacion_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_legales_tecnologias_informacion_0" value="5" required="" id="id_conocimientos_legales_tecnologias_informacion_0" class="mt-2 ml-14">
            </td>

         </tr>


         
         <tr>
            <td>
               <label>Determine su nivel de conocimiento para brindar asesoría en sistemas operativos como Linux, Mac, Windows, Solaris, entre otros:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_asesoria_sistemas_operativos_0" value="1" required="" id="id_asesoria_sistemas_operativos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_sistemas_operativos_0" value="2" required="" id="id_asesoria_sistemas_operativos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_sistemas_operativos_0" value="3" required="" id="id_asesoria_sistemas_operativos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_sistemas_operativos_0" value="4" required="" id="id_asesoria_sistemas_operativos_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_sistemas_operativos_0" value="5" required="" id="id_asesoria_sistemas_operativos_0" class="mt-2 ml-14">
            </td>

         </tr>



         <tr>
            <td>
               <label>Cuenta con el conocimiento para brindar asesoría en arquitectura de computadoras como AMD, INTEL y MAC:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_asesoria_arquitectura_computadoras_0" value="1" required="" id="id_asesoria_arquitectura_computadoras_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_arquitectura_computadoras_0" value="2" required="" id="id_asesoria_arquitectura_computadoras_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_arquitectura_computadoras_0" value="3" required="" id="id_asesoria_arquitectura_computadoras_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_arquitectura_computadoras_0" value="4" required="" id="id_asesoria_arquitectura_computadoras_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_asesoria_arquitectura_computadoras_0" value="5" required="" id="id_asesoria_arquitectura_computadoras_0" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Tiene conocimientos para realizar Análisis y diseño de casos de pruebas, ejecución, levantamiento de defectos, Testing Funcional, Construcción y Ejecución de Entregables para la Metodología de pruebas aplicando Herramientas como QC, ALM, TFS ó Selenium entre otras:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="1" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="2" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="3" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="4" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="5" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>

         </tr>


         
      </tbody>
      </table>





      <p>CREAR EMPRESA DE TI Y ADMINISTRAR PROYECTOS</p>




         
   <table class="table-fixed w-full divide-y divide-stone-200 border border-stone-50">
      <thead class="bg-green-50">
         <tr>
            <th style="width: 50%;"> </th>
            <th style="width: 10%;">
               <p>1</p>
               <p class="text-sm">Muy malo</p>
            </th>
            <th style="width: 10%;">
               <p>2</p>
               <p class="text-sm">Malo</p>
            </th>
            <th style="width: 10%;">
               <p>3</p>
               <p class="text-sm">Regular</p>
            </th>
            <th style="width: 10%;">
               <p>4</p>
               <p class="text-sm">Bueno</p>
            </th>
            <th style="width: 10%;">
               <p>5</p>
               <p class="text-sm">Excelente</p>
            </th>
         </tr>
      </thead>
      <tbody class="divide-y divide-stone-200">
 
         <tr>
            <td>
               <label>Tiene conocimientos para realizar Análisis y diseño de casos de pruebas, ejecución, levantamiento de defectos, Testing Funcional, Construcción y Ejecución de Entregables para la Metodología de pruebas aplicando Herramientas como QC, ALM, TFS ó Selenium entre otras:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="1" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="2" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="3" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="4" required="" id="id_conocimientos_analisis_diseno_pruebas_0" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="5" required="" id="id_seguridad_informacion_hacking_0" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Cuenta con la capacidad para detectar y ubicar las necesidades de Tecnologías de Información de una organización ,que le permita definir e integrar soluciones y servicios mediante el desarrollo de software:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="capacidad_de_detectar_y_ubicar" value="1" required="" id="capacidad_de_detectar_y_ubicar" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="capacidad_de_detectar_y_ubicar" value="2" required="" id="capacidad_de_detectar_y_ubicar" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="capacidad_de_detectar_y_ubicar" value="3" required="" id="capacidad_de_detectar_y_ubicar" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="capacidad_de_detectar_y_ubicar" value="4" required="" id="capacidad_de_detectar_y_ubicar" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="id_conocimientos_analisis_diseno_pruebas_0" value="5" required="" id="id_seguridad_informacion_hacking_0" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Planea , administra ejecuta y monitorea proyectos  en TI, para alcanzar objetivos en un tiempo determinado, utilizando metodologías de gestión de proyectos:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="planea_administra_ejecuta_monitorea_ti" value="1" required="" id="planea_administra_ejecuta_monitorea_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="planea_administra_ejecuta_monitorea_ti" value="2" required="" id="planea_administra_ejecuta_monitorea_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="planea_administra_ejecuta_monitorea_ti" value="3" required="" id="planea_administra_ejecuta_monitorea_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="planea_administra_ejecuta_monitorea_ti" value="4" required="" id="planea_administra_ejecuta_monitorea_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="planea_administra_ejecuta_monitorea_ti" value="5" required="" id="planea_administra_ejecuta_monitorea_ti" class="mt-2 ml-14">
            </td>

         </tr>


         <tr>
            <td>
               <label>Cuenta con habilidades de liderazgo que le permitan crear o dirigir empresas de TI .:</label>
            </td>
            <td class="mt-2 ml-20"> 
               <input type="radio" name="habilidades_liderazgo_ti" value="1" required="" id="habilidades_liderazgo_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="habilidades_liderazgo_ti" value="2" required="" id="habilidades_liderazgo_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="habilidades_liderazgo_ti" value="3" required="" id="habilidades_liderazgo_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="habilidades_liderazgo_ti" value="4" required="" id="habilidades_liderazgo_ti" class="mt-2 ml-14">
            </td>
            <td class="mt-2 ml-20">
               <input type="radio" name="planea_administra_ejecuta_monitorea_ti" value="5" required="" id="planea_administra_ejecuta_monitorea_ti" class="mt-2 ml-14">
            </td>

         </tr>



         
      </tbody>
      </table>


        

         <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
      </form>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>