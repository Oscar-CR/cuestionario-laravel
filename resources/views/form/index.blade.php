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
            <td>Malcolm Lockyer</td>
            <td>1961</td>
         </tr>
         <tr>
            <td>
               <input type="radio" name="calidad_docentes" value="1" required="" id="calidad_docentes_0">
            </td>
            <td>The Eagles</td>
            <td>1972</td>
         </tr>
         <tr>
            <td>
               <input type="radio" name="calidad_docentes" value="2" required="" id="calidad_docentes_0">
            </td>
            <td>Earth, Wind, and Fire</td>
            <td>1975</td>
         </tr>
         <tr>
            <td>
               <input type="radio" name="calidad_docentes" value="2" required="" id="calidad_docentes_0">
            </td>
            <td>Earth, Wind, and Fire</td>
            <td>1975</td>
         </tr>
         <tr>
            <td>
               <input type="radio" name="calidad_docentes" value="2" required="" id="calidad_docentes_0">
            </td>
            <td>Earth, Wind, and Fire</td>
            <td>1975</td>
         </tr>
         <tr>
            <td>
               <input type="radio" name="calidad_docentes" value="2" required="" id="calidad_docentes_0">
            </td>
            <td>Earth, Wind, and Fire</td>
            <td>1975</td>
         </tr>
      </tbody>
      </table>



     
 
         <div id="calidad_docentes">
            <div>
               <label for="calidad_docentes_0"><input type="radio" name="calidad_docentes" value="1" required="" id="calidad_docentes_0">
                  1</label>

            </div>
            <div>
               <label for="calidad_docentes_1"><input type="radio" name="calidad_docentes" value="2" required="" id="calidad_docentes_1">
                  2</label>

            </div>
            <div>
               <label for="calidad_docentes_2"><input type="radio" name="calidad_docentes" value="3" required="" id="calidad_docentes_2">
                  3</label>

            </div>
            <div>
               <label for="calidad_docentes_3"><input type="radio" name="calidad_docentes" value="4" required="" id="calidad_docentes_3">
                  4</label>

            </div>
            <div>
               <label for="calidad_docentes_4"><input type="radio" name="calidad_docentes" value="5" required="" id="calidad_docentes_4">
                  5</label>

            </div>
         </div>






         <label>Plan de estudios:</label>
    
         <div id="id_plan_estudios">
            <div>
               <label for="id_plan_estudios_0"><input type="radio" name="plan_estudios" value="1" required="" id="id_plan_estudios_0">
                  1</label>

            </div>
            <div>
               <label for="id_plan_estudios_1"><input type="radio" name="plan_estudios" value="2" required="" id="id_plan_estudios_1">
                  2</label>

            </div>
            <div>
               <label for="id_plan_estudios_2"><input type="radio" name="plan_estudios" value="3" required="" id="id_plan_estudios_2">
                  3</label>

            </div>
            <div>
               <label for="id_plan_estudios_3"><input type="radio" name="plan_estudios" value="4" required="" id="id_plan_estudios_3">
                  4</label>

            </div>
            <div>
               <label for="id_plan_estudios_4"><input type="radio" name="plan_estudios" value="5" required="" id="id_plan_estudios_4">
                  5</label>

            </div>
         </div>



         <label>Oportunidad de participar en proyectos de investigación y desarrollo:</label>
    
         <div id="id_oportunidad_investigacion">
            <div>
               <label for="id_oportunidad_investigacion_0"><input type="radio" name="oportunidad_investigacion" value="1" required="" id="id_oportunidad_investigacion_0">
                  1</label>

            </div>
            <div>
               <label for="id_oportunidad_investigacion_1"><input type="radio" name="oportunidad_investigacion" value="2" required="" id="id_oportunidad_investigacion_1">
                  2</label>

            </div>
            <div>
               <label for="id_oportunidad_investigacion_2"><input type="radio" name="oportunidad_investigacion" value="3" required="" id="id_oportunidad_investigacion_2">
                  3</label>

            </div>
            <div>
               <label for="id_oportunidad_investigacion_3"><input type="radio" name="oportunidad_investigacion" value="4" required="" id="id_oportunidad_investigacion_3">
                  4</label>

            </div>
            <div>
               <label for="id_oportunidad_investigacion_4"><input type="radio" name="oportunidad_investigacion" value="5" required="" id="id_oportunidad_investigacion_4">
                  5</label>

            </div>
         </div>



         <label>Satisfacción de las condiciones de estudio (infraestructural):</label>
  
         <div id="id_satisfaccion_condiciones_estudio">
            <div>
               <label for="id_satisfaccion_condiciones_estudio_0"><input type="radio" name="satisfaccion_condiciones_estudio" value="1" required="" id="id_satisfaccion_condiciones_estudio_0">
                  1</label>

            </div>
            <div>
               <label for="id_satisfaccion_condiciones_estudio_1"><input type="radio" name="satisfaccion_condiciones_estudio" value="2" required="" id="id_satisfaccion_condiciones_estudio_1">
                  2</label>

            </div>
            <div>
               <label for="id_satisfaccion_condiciones_estudio_2"><input type="radio" name="satisfaccion_condiciones_estudio" value="3" required="" id="id_satisfaccion_condiciones_estudio_2">
                  3</label>

            </div>
            <div>
               <label for="id_satisfaccion_condiciones_estudio_3"><input type="radio" name="satisfaccion_condiciones_estudio" value="4" required="" id="id_satisfaccion_condiciones_estudio_3">
                  4</label>

            </div>
            <div>
               <label for="id_satisfaccion_condiciones_estudio_4"><input type="radio" name="satisfaccion_condiciones_estudio" value="5" required="" id="id_satisfaccion_condiciones_estudio_4">
                  5</label>

            </div>
         </div>



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

         <label>Área o campo de estudio:</label>
        
         <div id="id_aspectos_valora_empresa_area_estudio">
            <div>
               <label for="id_aspectos_valora_empresa_area_estudio_0"><input type="radio" name="aspectos_valora_empresa_area_estudio" value="1" required="" id="id_aspectos_valora_empresa_area_estudio_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_area_estudio_1"><input type="radio" name="aspectos_valora_empresa_area_estudio" value="2" required="" id="id_aspectos_valora_empresa_area_estudio_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_area_estudio_2"><input type="radio" name="aspectos_valora_empresa_area_estudio" value="3" required="" id="id_aspectos_valora_empresa_area_estudio_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_area_estudio_3"><input type="radio" name="aspectos_valora_empresa_area_estudio" value="4" required="" id="id_aspectos_valora_empresa_area_estudio_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_area_estudio_4"><input type="radio" name="aspectos_valora_empresa_area_estudio" value="5" required="" id="id_aspectos_valora_empresa_area_estudio_4">
                  5</label>

            </div>
         </div>

         <label>Titulación:</label>
        
         <div id="id_aspectos_valora_empresa_titulacion">
            <div>
               <label for="id_aspectos_valora_empresa_titulacion_0"><input type="radio" name="aspectos_valora_empresa_titulacion" value="1" required="" id="id_aspectos_valora_empresa_titulacion_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_titulacion_1"><input type="radio" name="aspectos_valora_empresa_titulacion" value="2" required="" id="id_aspectos_valora_empresa_titulacion_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_titulacion_2"><input type="radio" name="aspectos_valora_empresa_titulacion" value="3" required="" id="id_aspectos_valora_empresa_titulacion_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_titulacion_3"><input type="radio" name="aspectos_valora_empresa_titulacion" value="4" required="" id="id_aspectos_valora_empresa_titulacion_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_titulacion_4"><input type="radio" name="aspectos_valora_empresa_titulacion" value="5" required="" id="id_aspectos_valora_empresa_titulacion_4">
                  5</label>

            </div>
         </div>


      
            <label>Experiencia laboral/práctica (antes de egresar):</label>
         
         <div id="id_aspectos_valora_empresa_experiencia_laboral">
            <div>
               <label for="id_aspectos_valora_empresa_experiencia_laboral_0"><input type="radio" name="aspectos_valora_empresa_experiencia_laboral" value="1" required="" id="id_aspectos_valora_empresa_experiencia_laboral_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_experiencia_laboral_1"><input type="radio" name="aspectos_valora_empresa_experiencia_laboral" value="2" required="" id="id_aspectos_valora_empresa_experiencia_laboral_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_experiencia_laboral_2"><input type="radio" name="aspectos_valora_empresa_experiencia_laboral" value="3" required="" id="id_aspectos_valora_empresa_experiencia_laboral_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_experiencia_laboral_3"><input type="radio" name="aspectos_valora_empresa_experiencia_laboral" value="4" required="" id="id_aspectos_valora_empresa_experiencia_laboral_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_experiencia_laboral_4"><input type="radio" name="aspectos_valora_empresa_experiencia_laboral" value="5" required="" id="id_aspectos_valora_empresa_experiencia_laboral_4">
                  5</label>

            </div>
         </div>


  


       
            <label>Competencia Laboral:</label>
       
         <div id="id_aspectos_valora_empresa_competencia_laboral">
            <div>
               <label for="id_aspectos_valora_empresa_competencia_laboral_0"><input type="radio" name="aspectos_valora_empresa_competencia_laboral" value="1" required="" id="id_aspectos_valora_empresa_competencia_laboral_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_competencia_laboral_1"><input type="radio" name="aspectos_valora_empresa_competencia_laboral" value="2" required="" id="id_aspectos_valora_empresa_competencia_laboral_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_competencia_laboral_2"><input type="radio" name="aspectos_valora_empresa_competencia_laboral" value="3" required="" id="id_aspectos_valora_empresa_competencia_laboral_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_competencia_laboral_3"><input type="radio" name="aspectos_valora_empresa_competencia_laboral" value="4" required="" id="id_aspectos_valora_empresa_competencia_laboral_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_competencia_laboral_4"><input type="radio" name="aspectos_valora_empresa_competencia_laboral" value="5" required="" id="id_aspectos_valora_empresa_competencia_laboral_4">
                  5</label>

            </div>
         </div>


       
            <label>Posicionamiento de la Institución de Egreso:</label>
         
         <div id="id_aspectos_valora_empresa_posicionamiento_institucion">
            <div>
               <label for="id_aspectos_valora_empresa_posicionamiento_institucion_0"><input type="radio" name="aspectos_valora_empresa_posicionamiento_institucion" value="1" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_posicionamiento_institucion_1"><input type="radio" name="aspectos_valora_empresa_posicionamiento_institucion" value="2" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_posicionamiento_institucion_2"><input type="radio" name="aspectos_valora_empresa_posicionamiento_institucion" value="3" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_posicionamiento_institucion_3"><input type="radio" name="aspectos_valora_empresa_posicionamiento_institucion" value="4" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_posicionamiento_institucion_4"><input type="radio" name="aspectos_valora_empresa_posicionamiento_institucion" value="5" required="" id="id_aspectos_valora_empresa_posicionamiento_institucion_4">
                  5</label>

            </div>
         </div>


         
            <label>Conocimiento de Idiomas Extranjeros:</label>
      
         <div id="id_aspectos_valora_empresa_conocimiento_idiomas">
            <div>
               <label for="id_aspectos_valora_empresa_conocimiento_idiomas_0"><input type="radio" name="aspectos_valora_empresa_conocimiento_idiomas" value="1" required="" id="id_aspectos_valora_empresa_conocimiento_idiomas_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_conocimiento_idiomas_1"><input type="radio" name="aspectos_valora_empresa_conocimiento_idiomas" value="2" required="" id="id_aspectos_valora_empresa_conocimiento_idiomas_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_conocimiento_idiomas_2"><input type="radio" name="aspectos_valora_empresa_conocimiento_idiomas" value="3" required="" id="id_aspectos_valora_empresa_conocimiento_idiomas_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_conocimiento_idiomas_3"><input type="radio" name="aspectos_valora_empresa_conocimiento_idiomas" value="4" required="" id="id_aspectos_valora_empresa_conocimiento_idiomas_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_conocimiento_idiomas_4"><input type="radio" name="aspectos_valora_empresa_conocimiento_idiomas" value="5" required="" id="id_aspectos_valora_empresa_conocimiento_idiomas_4">
                  5</label>

            </div>
         </div>


            <label>Recomendaciones/referencias:</label>
       
         <div id="id_aspectos_valora_empresa_recomendaciones_referencias">
            <div>
               <label for="id_aspectos_valora_empresa_recomendaciones_referencias_0"><input type="radio" name="aspectos_valora_empresa_recomendaciones_referencias" value="1" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_recomendaciones_referencias_1"><input type="radio" name="aspectos_valora_empresa_recomendaciones_referencias" value="2" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_recomendaciones_referencias_2"><input type="radio" name="aspectos_valora_empresa_recomendaciones_referencias" value="3" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_recomendaciones_referencias_3"><input type="radio" name="aspectos_valora_empresa_recomendaciones_referencias" value="4" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_recomendaciones_referencias_4"><input type="radio" name="aspectos_valora_empresa_recomendaciones_referencias" value="5" required="" id="id_aspectos_valora_empresa_recomendaciones_referencias_4">
                  5</label>

            </div>
         </div>


    
            <label>Personalidad/actitudes:</label>
        
         <div id="id_aspectos_valora_empresa_personalidad_actitudes">
            <div>
               <label for="id_aspectos_valora_empresa_personalidad_actitudes_0"><input type="radio" name="aspectos_valora_empresa_personalidad_actitudes" value="1" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_personalidad_actitudes_1"><input type="radio" name="aspectos_valora_empresa_personalidad_actitudes" value="2" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_personalidad_actitudes_2"><input type="radio" name="aspectos_valora_empresa_personalidad_actitudes" value="3" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_personalidad_actitudes_3"><input type="radio" name="aspectos_valora_empresa_personalidad_actitudes" value="4" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_personalidad_actitudes_4"><input type="radio" name="aspectos_valora_empresa_personalidad_actitudes" value="5" required="" id="id_aspectos_valora_empresa_personalidad_actitudes_4">
                  5</label>

            </div>
         </div>


        
            <label>Capacidad de liderazgo:</label>
     
         <div id="id_aspectos_valora_empresa_capacidad_liderazgo">
            <div>
               <label for="id_aspectos_valora_empresa_capacidad_liderazgo_0"><input type="radio" name="aspectos_valora_empresa_capacidad_liderazgo" value="1" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_capacidad_liderazgo_1"><input type="radio" name="aspectos_valora_empresa_capacidad_liderazgo" value="2" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_capacidad_liderazgo_2"><input type="radio" name="aspectos_valora_empresa_capacidad_liderazgo" value="3" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_capacidad_liderazgo_3"><input type="radio" name="aspectos_valora_empresa_capacidad_liderazgo" value="4" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_capacidad_liderazgo_4"><input type="radio" name="aspectos_valora_empresa_capacidad_liderazgo" value="5" required="" id="id_aspectos_valora_empresa_capacidad_liderazgo_4">
                  5</label>

            </div>
         </div>


            <label>Otros:</label>
         <div id="id_aspectos_valora_empresa_otros">
            <div>
               <label for="id_aspectos_valora_empresa_otros_0"><input type="radio" name="aspectos_valora_empresa_otros" value="1" required="" id="id_aspectos_valora_empresa_otros_0">
                  1</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_otros_1"><input type="radio" name="aspectos_valora_empresa_otros" value="2" required="" id="id_aspectos_valora_empresa_otros_1">
                  2</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_otros_2"><input type="radio" name="aspectos_valora_empresa_otros" value="3" required="" id="id_aspectos_valora_empresa_otros_2">
                  3</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_otros_3"><input type="radio" name="aspectos_valora_empresa_otros" value="4" required="" id="id_aspectos_valora_empresa_otros_3">
                  4</label>

            </div>
            <div>
               <label for="id_aspectos_valora_empresa_otros_4"><input type="radio" name="aspectos_valora_empresa_otros" value="5" required="" id="id_aspectos_valora_empresa_otros_4">
                  5</label>

            </div>
         </div>


      
            <label>Manifiesta un alto nivel de compromiso en el trabajo personal y del departamento, además de ser puntual y desarrollar su trabajo con un alto nivel de calidad.</label>
       
         <div id="id_compromiso_nivel_compromiso_trabajo">
            <div>
               <label for="id_compromiso_nivel_compromiso_trabajo_0"><input type="radio" name="compromiso_nivel_compromiso_trabajo" value="1" required="" id="id_compromiso_nivel_compromiso_trabajo_0">
                  1</label>

            </div>
            <div>
               <label for="id_compromiso_nivel_compromiso_trabajo_1"><input type="radio" name="compromiso_nivel_compromiso_trabajo" value="2" required="" id="id_compromiso_nivel_compromiso_trabajo_1">
                  2</label>

            </div>
            <div>
               <label for="id_compromiso_nivel_compromiso_trabajo_2"><input type="radio" name="compromiso_nivel_compromiso_trabajo" value="3" required="" id="id_compromiso_nivel_compromiso_trabajo_2">
                  3</label>

            </div>
            <div>
               <label for="id_compromiso_nivel_compromiso_trabajo_3"><input type="radio" name="compromiso_nivel_compromiso_trabajo" value="4" required="" id="id_compromiso_nivel_compromiso_trabajo_3">
                  4</label>

            </div>
            <div>
               <label for="id_compromiso_nivel_compromiso_trabajo_4"><input type="radio" name="compromiso_nivel_compromiso_trabajo" value="5" required="" id="id_compromiso_nivel_compromiso_trabajo_4">
                  5</label>

            </div>
         </div>


      
            <label>Maneja un alto sentimiento de afinidad y fidelidad hacia la organización para la que labora.</label>
     
         <div id="id_compromiso_sentimiento_afinidad">
            <div>
               <label for="id_compromiso_sentimiento_afinidad_0"><input type="radio" name="compromiso_sentimiento_afinidad" value="1" required="" id="id_compromiso_sentimiento_afinidad_0">
                  1</label>

            </div>
            <div>
               <label for="id_compromiso_sentimiento_afinidad_1"><input type="radio" name="compromiso_sentimiento_afinidad" value="2" required="" id="id_compromiso_sentimiento_afinidad_1">
                  2</label>

            </div>
            <div>
               <label for="id_compromiso_sentimiento_afinidad_2"><input type="radio" name="compromiso_sentimiento_afinidad" value="3" required="" id="id_compromiso_sentimiento_afinidad_2">
                  3</label>

            </div>
            <div>
               <label for="id_compromiso_sentimiento_afinidad_3"><input type="radio" name="compromiso_sentimiento_afinidad" value="4" required="" id="id_compromiso_sentimiento_afinidad_3">
                  4</label>

            </div>
            <div>
               <label for="id_compromiso_sentimiento_afinidad_4"><input type="radio" name="compromiso_sentimiento_afinidad" value="5" required="" id="id_compromiso_sentimiento_afinidad_4">
                  5</label>

            </div>
         </div>


            <label>En su trabajo desarrolla sus capacidades y aprende nuevas capacidades.</label>
         
         <div id="id_compromiso_desarrollo_capacidades">
            <div>
               <label for="id_compromiso_desarrollo_capacidades_0"><input type="radio" name="compromiso_desarrollo_capacidades" value="1" required="" id="id_compromiso_desarrollo_capacidades_0">
                  1</label>

            </div>
            <div>
               <label for="id_compromiso_desarrollo_capacidades_1"><input type="radio" name="compromiso_desarrollo_capacidades" value="2" required="" id="id_compromiso_desarrollo_capacidades_1">
                  2</label>

            </div>
            <div>
               <label for="id_compromiso_desarrollo_capacidades_2"><input type="radio" name="compromiso_desarrollo_capacidades" value="3" required="" id="id_compromiso_desarrollo_capacidades_2">
                  3</label>

            </div>
            <div>
               <label for="id_compromiso_desarrollo_capacidades_3"><input type="radio" name="compromiso_desarrollo_capacidades" value="4" required="" id="id_compromiso_desarrollo_capacidades_3">
                  4</label>

            </div>
            <div>
               <label for="id_compromiso_desarrollo_capacidades_4"><input type="radio" name="compromiso_desarrollo_capacidades" value="5" required="" id="id_compromiso_desarrollo_capacidades_4">
                  5</label>

            </div>
         </div>


      
            <label>Sirve y aporta profesionalmente a favor de enaltecer su persona y el de la institución.</label>
    
         <div id="id_compromiso_aporte_profesional">
            <div>
               <label for="id_compromiso_aporte_profesional_0"><input type="radio" name="compromiso_aporte_profesional" value="1" required="" id="id_compromiso_aporte_profesional_0">
                  1</label>

            </div>
            <div>
               <label for="id_compromiso_aporte_profesional_1"><input type="radio" name="compromiso_aporte_profesional" value="2" required="" id="id_compromiso_aporte_profesional_1">
                  2</label>

            </div>
            <div>
               <label for="id_compromiso_aporte_profesional_2"><input type="radio" name="compromiso_aporte_profesional" value="3" required="" id="id_compromiso_aporte_profesional_2">
                  3</label>

            </div>
            <div>
               <label for="id_compromiso_aporte_profesional_3"><input type="radio" name="compromiso_aporte_profesional" value="4" required="" id="id_compromiso_aporte_profesional_3">
                  4</label>

            </div>
            <div>
               <label for="id_compromiso_aporte_profesional_4"><input type="radio" name="compromiso_aporte_profesional" value="5" required="" id="id_compromiso_aporte_profesional_4">
                  5</label>

            </div>
         </div>


            <label>Manifiesta iniciativa para resolver los problemas surgidos en el desempeño de su trabajo o en el de la empresa para la que labora.</label>
         </p>
         <div id="id_compromiso_iniciativa_resolucion_problemas">
            <div>
               <label for="id_compromiso_iniciativa_resolucion_problemas_0"><input type="radio" name="compromiso_iniciativa_resolucion_problemas" value="1" required="" id="id_compromiso_iniciativa_resolucion_problemas_0">
                  1</label>

            </div>
            <div>
               <label for="id_compromiso_iniciativa_resolucion_problemas_1"><input type="radio" name="compromiso_iniciativa_resolucion_problemas" value="2" required="" id="id_compromiso_iniciativa_resolucion_problemas_1">
                  2</label>

            </div>
            <div>
               <label for="id_compromiso_iniciativa_resolucion_problemas_2"><input type="radio" name="compromiso_iniciativa_resolucion_problemas" value="3" required="" id="id_compromiso_iniciativa_resolucion_problemas_2">
                  3</label>

            </div>
            <div>
               <label for="id_compromiso_iniciativa_resolucion_problemas_3"><input type="radio" name="compromiso_iniciativa_resolucion_problemas" value="4" required="" id="id_compromiso_iniciativa_resolucion_problemas_3">
                  4</label>

            </div>
            <div>
               <label for="id_compromiso_iniciativa_resolucion_problemas_4"><input type="radio" name="compromiso_iniciativa_resolucion_problemas" value="5" required="" id="id_compromiso_iniciativa_resolucion_problemas_4">
                  5</label>

            </div>
         </div>


         
            <label>Realiza sus funciones con la certeza de que su trabajo está completo y bien hecho a la primera vez y siempre.</label>
         </p>
         <div id="id_responsabilidad_trabajo_completo">
            <div>
               <label for="id_responsabilidad_trabajo_completo_0"><input type="radio" name="responsabilidad_trabajo_completo" value="1" required="" id="id_responsabilidad_trabajo_completo_0">
                  1</label>

            </div>
            <div>
               <label for="id_responsabilidad_trabajo_completo_1"><input type="radio" name="responsabilidad_trabajo_completo" value="2" required="" id="id_responsabilidad_trabajo_completo_1">
                  2</label>

            </div>
            <div>
               <label for="id_responsabilidad_trabajo_completo_2"><input type="radio" name="responsabilidad_trabajo_completo" value="3" required="" id="id_responsabilidad_trabajo_completo_2">
                  3</label>

            </div>
            <div>
               <label for="id_responsabilidad_trabajo_completo_3"><input type="radio" name="responsabilidad_trabajo_completo" value="4" required="" id="id_responsabilidad_trabajo_completo_3">
                  4</label>

            </div>
            <div>
               <label for="id_responsabilidad_trabajo_completo_4"><input type="radio" name="responsabilidad_trabajo_completo" value="5" required="" id="id_responsabilidad_trabajo_completo_4">
                  5</label>

            </div>
         </div>


            <label>Tiene por costumbre llegar y entregar en el tiempo acordado a sus compromisos y obligaciones.</label>
       
         <div id="id_responsabilidad_puntualidad_entrega">
            <div>
               <label for="id_responsabilidad_puntualidad_entrega_0"><input type="radio" name="responsabilidad_puntualidad_entrega" value="1" required="" id="id_responsabilidad_puntualidad_entrega_0">
                  1</label>

            </div>
            <div>
               <label for="id_responsabilidad_puntualidad_entrega_1"><input type="radio" name="responsabilidad_puntualidad_entrega" value="2" required="" id="id_responsabilidad_puntualidad_entrega_1">
                  2</label>

            </div>
            <div>
               <label for="id_responsabilidad_puntualidad_entrega_2"><input type="radio" name="responsabilidad_puntualidad_entrega" value="3" required="" id="id_responsabilidad_puntualidad_entrega_2">
                  3</label>

            </div>
            <div>
               <label for="id_responsabilidad_puntualidad_entrega_3"><input type="radio" name="responsabilidad_puntualidad_entrega" value="4" required="" id="id_responsabilidad_puntualidad_entrega_3">
                  4</label>

            </div>
            <div>
               <label for="id_responsabilidad_puntualidad_entrega_4"><input type="radio" name="responsabilidad_puntualidad_entrega" value="5" required="" id="id_responsabilidad_puntualidad_entrega_4">
                  5</label>

            </div>
         </div>


       
            <label>Realiza sus funciones apegado a la normatividad considerando el desarrollo de métodos eficientes, estableciendo metas y objetivos, así como el logro de ellos.</label>
      
         <div id="id_responsabilidad_normatividad">
            <div>
               <label for="id_responsabilidad_normatividad_0"><input type="radio" name="responsabilidad_normatividad" value="1" required="" id="id_responsabilidad_normatividad_0">
                  1</label>

            </div>
            <div>
               <label for="id_responsabilidad_normatividad_1"><input type="radio" name="responsabilidad_normatividad" value="2" required="" id="id_responsabilidad_normatividad_1">
                  2</label>

            </div>
            <div>
               <label for="id_responsabilidad_normatividad_2"><input type="radio" name="responsabilidad_normatividad" value="3" required="" id="id_responsabilidad_normatividad_2">
                  3</label>

            </div>
            <div>
               <label for="id_responsabilidad_normatividad_3"><input type="radio" name="responsabilidad_normatividad" value="4" required="" id="id_responsabilidad_normatividad_3">
                  4</label>

            </div>
            <div>
               <label for="id_responsabilidad_normatividad_4"><input type="radio" name="responsabilidad_normatividad" value="5" required="" id="id_responsabilidad_normatividad_4">
                  5</label>

            </div>
         </div>


      
            <label>Maneja un alto nivel de concordancia entre sus ideas y sus acciones apegado a lo que se considera normal dentro de la empresa.</label>
       
         <div id="id_honestidad_concordancia_ideas_acciones">
            <div>
               <label for="id_honestidad_concordancia_ideas_acciones_0"><input type="radio" name="honestidad_concordancia_ideas_acciones" value="1" required="" id="id_honestidad_concordancia_ideas_acciones_0">
                  1</label>

            </div>
            <div>
               <label for="id_honestidad_concordancia_ideas_acciones_1"><input type="radio" name="honestidad_concordancia_ideas_acciones" value="2" required="" id="id_honestidad_concordancia_ideas_acciones_1">
                  2</label>

            </div>
            <div>
               <label for="id_honestidad_concordancia_ideas_acciones_2"><input type="radio" name="honestidad_concordancia_ideas_acciones" value="3" required="" id="id_honestidad_concordancia_ideas_acciones_2">
                  3</label>

            </div>
            <div>
               <label for="id_honestidad_concordancia_ideas_acciones_3"><input type="radio" name="honestidad_concordancia_ideas_acciones" value="4" required="" id="id_honestidad_concordancia_ideas_acciones_3">
                  4</label>

            </div>
            <div>
               <label for="id_honestidad_concordancia_ideas_acciones_4"><input type="radio" name="honestidad_concordancia_ideas_acciones" value="5" required="" id="id_honestidad_concordancia_ideas_acciones_4">
                  5</label>

            </div>
         </div>


        
            <label>Expresa sus ideas y opiniones teniendo en cuenta las emociones de su interlocutor.</label>
       
         <div id="id_honestidad_expresion_ideas_opiniones">
            <div>
               <label for="id_honestidad_expresion_ideas_opiniones_0"><input type="radio" name="honestidad_expresion_ideas_opiniones" value="1" required="" id="id_honestidad_expresion_ideas_opiniones_0">
                  1</label>

            </div>
            <div>
               <label for="id_honestidad_expresion_ideas_opiniones_1"><input type="radio" name="honestidad_expresion_ideas_opiniones" value="2" required="" id="id_honestidad_expresion_ideas_opiniones_1">
                  2</label>

            </div>
            <div>
               <label for="id_honestidad_expresion_ideas_opiniones_2"><input type="radio" name="honestidad_expresion_ideas_opiniones" value="3" required="" id="id_honestidad_expresion_ideas_opiniones_2">
                  3</label>

            </div>
            <div>
               <label for="id_honestidad_expresion_ideas_opiniones_3"><input type="radio" name="honestidad_expresion_ideas_opiniones" value="4" required="" id="id_honestidad_expresion_ideas_opiniones_3">
                  4</label>

            </div>
            <div>
               <label for="id_honestidad_expresion_ideas_opiniones_4"><input type="radio" name="honestidad_expresion_ideas_opiniones" value="5" required="" id="id_honestidad_expresion_ideas_opiniones_4">
                  5</label>

            </div>
         </div>


 
            <label>Un gran amigo, que está buscando trabajo hace tiempo, te pide que escribas una referencia para un trabajo que consideras no está preparado. ¿Le escribes la carta de referencia?</label>
         </p>
         <div id="id_honestidad_carta_referencia">
            <div>
               <label for="id_honestidad_carta_referencia_0"><input type="radio" name="honestidad_carta_referencia" value="1" required="" id="id_honestidad_carta_referencia_0">
                  1</label>

            </div>
            <div>
               <label for="id_honestidad_carta_referencia_1"><input type="radio" name="honestidad_carta_referencia" value="2" required="" id="id_honestidad_carta_referencia_1">
                  2</label>

            </div>
            <div>
               <label for="id_honestidad_carta_referencia_2"><input type="radio" name="honestidad_carta_referencia" value="3" required="" id="id_honestidad_carta_referencia_2">
                  3</label>

            </div>
            <div>
               <label for="id_honestidad_carta_referencia_3"><input type="radio" name="honestidad_carta_referencia" value="4" required="" id="id_honestidad_carta_referencia_3">
                  4</label>

            </div>
            <div>
               <label for="id_honestidad_carta_referencia_4"><input type="radio" name="honestidad_carta_referencia" value="5" required="" id="id_honestidad_carta_referencia_4">
                  5</label>

            </div>
         </div>


 
            <label>Cuenta con la competencia para diseñar y configurar redes LAN y WAN, siguiendo normas y estándares vigentes.</label>
         
         <div id="id_competencia_diseno_configuracion_redes">
            <div>
               <label for="id_competencia_diseno_configuracion_redes_0"><input type="radio" name="competencia_diseno_configuracion_redes" value="1" required="" id="id_competencia_diseno_configuracion_redes_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_diseno_configuracion_redes_1"><input type="radio" name="competencia_diseno_configuracion_redes" value="2" required="" id="id_competencia_diseno_configuracion_redes_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_diseno_configuracion_redes_2"><input type="radio" name="competencia_diseno_configuracion_redes" value="3" required="" id="id_competencia_diseno_configuracion_redes_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_diseno_configuracion_redes_3"><input type="radio" name="competencia_diseno_configuracion_redes" value="4" required="" id="id_competencia_diseno_configuracion_redes_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_diseno_configuracion_redes_4"><input type="radio" name="competencia_diseno_configuracion_redes" value="5" required="" id="id_competencia_diseno_configuracion_redes_4">
                  5</label>

            </div>
         </div>


 
            <label>Cuenta con la competencia para administrar, establecer niveles de seguridad y escalar redes LAN y WAN.</label>
     
         <div id="id_competencia_administracion_seguridad_redes">
            <div>
               <label for="id_competencia_administracion_seguridad_redes_0"><input type="radio" name="competencia_administracion_seguridad_redes" value="1" required="" id="id_competencia_administracion_seguridad_redes_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_administracion_seguridad_redes_1"><input type="radio" name="competencia_administracion_seguridad_redes" value="2" required="" id="id_competencia_administracion_seguridad_redes_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_administracion_seguridad_redes_2"><input type="radio" name="competencia_administracion_seguridad_redes" value="3" required="" id="id_competencia_administracion_seguridad_redes_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_administracion_seguridad_redes_3"><input type="radio" name="competencia_administracion_seguridad_redes" value="4" required="" id="id_competencia_administracion_seguridad_redes_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_administracion_seguridad_redes_4"><input type="radio" name="competencia_administracion_seguridad_redes" value="5" required="" id="id_competencia_administracion_seguridad_redes_4">
                  5</label>

            </div>
         </div>


 
            <label>Establezca cual es su nivel de competencia para analizar, diseñar, programar y documentar, siguiendo estándares, con algún lenguaje específico como Java, JavaScript, C, Python, o algún otro.</label>
       
         <div id="id_competencia_analizar_disenar_programar">
            <div>
               <label for="id_competencia_analizar_disenar_programar_0"><input type="radio" name="competencia_analizar_disenar_programar" value="1" required="" id="id_competencia_analizar_disenar_programar_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_analizar_disenar_programar_1"><input type="radio" name="competencia_analizar_disenar_programar" value="2" required="" id="id_competencia_analizar_disenar_programar_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_analizar_disenar_programar_2"><input type="radio" name="competencia_analizar_disenar_programar" value="3" required="" id="id_competencia_analizar_disenar_programar_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_analizar_disenar_programar_3"><input type="radio" name="competencia_analizar_disenar_programar" value="4" required="" id="id_competencia_analizar_disenar_programar_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_analizar_disenar_programar_4"><input type="radio" name="competencia_analizar_disenar_programar" value="5" required="" id="id_competencia_analizar_disenar_programar_4">
                  5</label>

            </div>
         </div>


 
            <label>Determine su nivel de competencia al analizar, diseñar y desarrollar sistemas web, siguiendo estándares, con algún lenguaje específico como PHP, HTML5, ASP.NET, Ruby o algún otro.</label>
       
         <div id="id_competencia_desarrollar_sistemas_web">
            <div>
               <label for="id_competencia_desarrollar_sistemas_web_0"><input type="radio" name="competencia_desarrollar_sistemas_web" value="1" required="" id="id_competencia_desarrollar_sistemas_web_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_desarrollar_sistemas_web_1"><input type="radio" name="competencia_desarrollar_sistemas_web" value="2" required="" id="id_competencia_desarrollar_sistemas_web_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_desarrollar_sistemas_web_2"><input type="radio" name="competencia_desarrollar_sistemas_web" value="3" required="" id="id_competencia_desarrollar_sistemas_web_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_desarrollar_sistemas_web_3"><input type="radio" name="competencia_desarrollar_sistemas_web" value="4" required="" id="id_competencia_desarrollar_sistemas_web_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_desarrollar_sistemas_web_4"><input type="radio" name="competencia_desarrollar_sistemas_web" value="5" required="" id="id_competencia_desarrollar_sistemas_web_4">
                  5</label>

            </div>
         </div>


 
            <label>Cuenta con la competencia de analizar, diseñar y programar dispositivos móviles, siguiendo estándares, con alguna plataforma específica como Android, IOS, Movil App Development, Xmarin Studio, PhoneGap, Appery.io o algún otro.</label>
        
         <div id="id_competencia_programar_dispositivos_moviles">
            <div>
               <label for="id_competencia_programar_dispositivos_moviles_0"><input type="radio" name="competencia_programar_dispositivos_moviles" value="1" required="" id="id_competencia_programar_dispositivos_moviles_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_programar_dispositivos_moviles_1"><input type="radio" name="competencia_programar_dispositivos_moviles" value="2" required="" id="id_competencia_programar_dispositivos_moviles_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_programar_dispositivos_moviles_2"><input type="radio" name="competencia_programar_dispositivos_moviles" value="3" required="" id="id_competencia_programar_dispositivos_moviles_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_programar_dispositivos_moviles_3"><input type="radio" name="competencia_programar_dispositivos_moviles" value="4" required="" id="id_competencia_programar_dispositivos_moviles_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_programar_dispositivos_moviles_4"><input type="radio" name="competencia_programar_dispositivos_moviles" value="5" required="" id="id_competencia_programar_dispositivos_moviles_4">
                  5</label>

            </div>
         </div>


 
            <label>Establezca cual es su nivel de competencia para diseñar y administrar bases de datos con algunos gestores como SQL, MySQL, Oracle o alguna otra.</label>
        
         <div id="id_competencia_disenar_administrar_bases_datos">
            <div>
               <label for="id_competencia_disenar_administrar_bases_datos_0"><input type="radio" name="competencia_disenar_administrar_bases_datos" value="1" required="" id="id_competencia_disenar_administrar_bases_datos_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_disenar_administrar_bases_datos_1"><input type="radio" name="competencia_disenar_administrar_bases_datos" value="2" required="" id="id_competencia_disenar_administrar_bases_datos_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_disenar_administrar_bases_datos_2"><input type="radio" name="competencia_disenar_administrar_bases_datos" value="3" required="" id="id_competencia_disenar_administrar_bases_datos_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_disenar_administrar_bases_datos_3"><input type="radio" name="competencia_disenar_administrar_bases_datos" value="4" required="" id="id_competencia_disenar_administrar_bases_datos_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_disenar_administrar_bases_datos_4"><input type="radio" name="competencia_disenar_administrar_bases_datos" value="5" required="" id="id_competencia_disenar_administrar_bases_datos_4">
                  5</label>

            </div>
         </div>

         <label>Determine su nivel de competencia para diseñar y gestionar servicios de TI apegados a modelos y estándares como ITIL, COBIT, UML, CMMI, PMBOOK o algún otro.</label>

         <div id="id_competencia_disenar_gestionar_servicios_TI">
            <div>
               <label for="id_competencia_disenar_gestionar_servicios_TI_0"><input type="radio" name="competencia_disenar_gestionar_servicios_TI" value="1" required="" id="id_competencia_disenar_gestionar_servicios_TI_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_disenar_gestionar_servicios_TI_1"><input type="radio" name="competencia_disenar_gestionar_servicios_TI" value="2" required="" id="id_competencia_disenar_gestionar_servicios_TI_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_disenar_gestionar_servicios_TI_2"><input type="radio" name="competencia_disenar_gestionar_servicios_TI" value="3" required="" id="id_competencia_disenar_gestionar_servicios_TI_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_disenar_gestionar_servicios_TI_3"><input type="radio" name="competencia_disenar_gestionar_servicios_TI" value="4" required="" id="id_competencia_disenar_gestionar_servicios_TI_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_disenar_gestionar_servicios_TI_4"><input type="radio" name="competencia_disenar_gestionar_servicios_TI" value="5" required="" id="id_competencia_disenar_gestionar_servicios_TI_4">
                  5</label>

            </div>
         </div>



         <label>Cuenta con la competencia para aplicar y utilizar técnicas y herramientas que lleven a cabo pruebas de software como Bugzilla, Testopia, FitNesse, qaManager, qaBook o alguna otra.</label>

         <div id="id_competencia_pruebas_software">
            <div>
               <label for="id_competencia_pruebas_software_0"><input type="radio" name="competencia_pruebas_software" value="1" required="" id="id_competencia_pruebas_software_0">
                  1</label>

            </div>
            <div>
               <label for="id_competencia_pruebas_software_1"><input type="radio" name="competencia_pruebas_software" value="2" required="" id="id_competencia_pruebas_software_1">
                  2</label>

            </div>
            <div>
               <label for="id_competencia_pruebas_software_2"><input type="radio" name="competencia_pruebas_software" value="3" required="" id="id_competencia_pruebas_software_2">
                  3</label>

            </div>
            <div>
               <label for="id_competencia_pruebas_software_3"><input type="radio" name="competencia_pruebas_software" value="4" required="" id="id_competencia_pruebas_software_3">
                  4</label>

            </div>
            <div>
               <label for="id_competencia_pruebas_software_4"><input type="radio" name="competencia_pruebas_software" value="5" required="" id="id_competencia_pruebas_software_4">
                  5</label>

            </div>
         </div>

         <label>Considera usted que tiene los conocimientos necesarios para garantizar la seguridad en la información de los sistemas utilizando herramientas de seguridad y hacking de redes y sistemas de información.</label>

         <div id="id_seguridad_informacion_hacking">
            <div>
               <label for="id_seguridad_informacion_hacking_0"><input type="radio" name="seguridad_informacion_hacking" value="1" required="" id="id_seguridad_informacion_hacking_0">
                  1</label>

            </div>
            <div>
               <label for="id_seguridad_informacion_hacking_1"><input type="radio" name="seguridad_informacion_hacking" value="2" required="" id="id_seguridad_informacion_hacking_1">
                  2</label>

            </div>
            <div>
               <label for="id_seguridad_informacion_hacking_2"><input type="radio" name="seguridad_informacion_hacking" value="3" required="" id="id_seguridad_informacion_hacking_2">
                  3</label>

            </div>
            <div>
               <label for="id_seguridad_informacion_hacking_3"><input type="radio" name="seguridad_informacion_hacking" value="4" required="" id="id_seguridad_informacion_hacking_3">
                  4</label>

            </div>
            <div>
               <label for="id_seguridad_informacion_hacking_4"><input type="radio" name="seguridad_informacion_hacking" value="5" required="" id="id_seguridad_informacion_hacking_4">
                  5</label>

            </div>
         </div>


         <label>Conoce usted los temas necesarios en el campo legal y jurídico en torno a las tecnologías de la información, el manejo de los derechos de autor y la privacidad de datos, así como conocimientos en Normas, estándares y prácticas de Seguridad de la Información.</label>

         <div id="id_conocimientos_legales_tecnologias_informacion">
            <div>
               <label for="id_conocimientos_legales_tecnologias_informacion_0"><input type="radio" name="conocimientos_legales_tecnologias_informacion" value="1" required="" id="id_conocimientos_legales_tecnologias_informacion_0">
                  1</label>

            </div>
            <div>
               <label for="id_conocimientos_legales_tecnologias_informacion_1"><input type="radio" name="conocimientos_legales_tecnologias_informacion" value="2" required="" id="id_conocimientos_legales_tecnologias_informacion_1">
                  2</label>

            </div>
            <div>
               <label for="id_conocimientos_legales_tecnologias_informacion_2"><input type="radio" name="conocimientos_legales_tecnologias_informacion" value="3" required="" id="id_conocimientos_legales_tecnologias_informacion_2">
                  3</label>

            </div>
            <div>
               <label for="id_conocimientos_legales_tecnologias_informacion_3"><input type="radio" name="conocimientos_legales_tecnologias_informacion" value="4" required="" id="id_conocimientos_legales_tecnologias_informacion_3">
                  4</label>

            </div>
            <div>
               <label for="id_conocimientos_legales_tecnologias_informacion_4"><input type="radio" name="conocimientos_legales_tecnologias_informacion" value="5" required="" id="id_conocimientos_legales_tecnologias_informacion_4">
                  5</label>

            </div>
         </div>

         <label>Determine su nivel de conocimiento para brindar asesoría en sistemas operativos como Linux, Mac, Windows, Solaris, entre otros.</label>

         <div id="id_asesoria_sistemas_operativos">
            <div>
               <label for="id_asesoria_sistemas_operativos_0"><input type="radio" name="asesoria_sistemas_operativos" value="1" required="" id="id_asesoria_sistemas_operativos_0">
                  1</label>

            </div>
            <div>
               <label for="id_asesoria_sistemas_operativos_1"><input type="radio" name="asesoria_sistemas_operativos" value="2" required="" id="id_asesoria_sistemas_operativos_1">
                  2</label>

            </div>
            <div>
               <label for="id_asesoria_sistemas_operativos_2"><input type="radio" name="asesoria_sistemas_operativos" value="3" required="" id="id_asesoria_sistemas_operativos_2">
                  3</label>

            </div>
            <div>
               <label for="id_asesoria_sistemas_operativos_3"><input type="radio" name="asesoria_sistemas_operativos" value="4" required="" id="id_asesoria_sistemas_operativos_3">
                  4</label>

            </div>
            <div>
               <label for="id_asesoria_sistemas_operativos_4"><input type="radio" name="asesoria_sistemas_operativos" value="5" required="" id="id_asesoria_sistemas_operativos_4">
                  5</label>

            </div>
         </div>


         <label>Cuenta con el conocimiento para brindar asesoría en arquitectura de computadoras como AMD, INTEL y MAC.</label>

         <div id="id_asesoria_arquitectura_computadoras">
            <div>
               <label for="id_asesoria_arquitectura_computadoras_0"><input type="radio" name="asesoria_arquitectura_computadoras" value="1" required="" id="id_asesoria_arquitectura_computadoras_0">
                  1</label>

            </div>
            <div>
               <label for="id_asesoria_arquitectura_computadoras_1"><input type="radio" name="asesoria_arquitectura_computadoras" value="2" required="" id="id_asesoria_arquitectura_computadoras_1">
                  2</label>

            </div>
            <div>
               <label for="id_asesoria_arquitectura_computadoras_2"><input type="radio" name="asesoria_arquitectura_computadoras" value="3" required="" id="id_asesoria_arquitectura_computadoras_2">
                  3</label>

            </div>
            <div>
               <label for="id_asesoria_arquitectura_computadoras_3"><input type="radio" name="asesoria_arquitectura_computadoras" value="4" required="" id="id_asesoria_arquitectura_computadoras_3">
                  4</label>

            </div>
            <div>
               <label for="id_asesoria_arquitectura_computadoras_4"><input type="radio" name="asesoria_arquitectura_computadoras" value="5" required="" id="id_asesoria_arquitectura_computadoras_4">
                  5</label>

            </div>
         </div>

         <label>Tiene conocimientos para realizar Análisis y diseño de casos de pruebas, ejecución, levantamiento de defectos, Testing Funcional, Construcción y Ejecución de Entregables para la Metodología de pruebas aplicando Herramientas como QC, ALM, TFS ó Selenium entre otras.</label>

         <div id="id_conocimientos_analisis_diseno_pruebas">
            <div>
               <label for="id_conocimientos_analisis_diseno_pruebas_0"><input type="radio" name="conocimientos_analisis_diseno_pruebas" value="1" required="" id="id_conocimientos_analisis_diseno_pruebas_0">
                  1</label>

            </div>
            <div>
               <label for="id_conocimientos_analisis_diseno_pruebas_1"><input type="radio" name="conocimientos_analisis_diseno_pruebas" value="2" required="" id="id_conocimientos_analisis_diseno_pruebas_1">
                  2</label>

            </div>
            <div>
               <label for="id_conocimientos_analisis_diseno_pruebas_2"><input type="radio" name="conocimientos_analisis_diseno_pruebas" value="3" required="" id="id_conocimientos_analisis_diseno_pruebas_2">
                  3</label>

            </div>
            <div>
               <label for="id_conocimientos_analisis_diseno_pruebas_3"><input type="radio" name="conocimientos_analisis_diseno_pruebas" value="4" required="" id="id_conocimientos_analisis_diseno_pruebas_3">
                  4</label>

            </div>
            <div>
               <label for="id_conocimientos_analisis_diseno_pruebas_4"><input type="radio" name="conocimientos_analisis_diseno_pruebas" value="5" required="" id="id_conocimientos_analisis_diseno_pruebas_4">
                  5</label>

            </div>
         </div>

         <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
      </form>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>