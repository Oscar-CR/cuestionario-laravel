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

   <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden mt-10">
      <div class="p-5 bg-green text-white bg-green-600">
         <p class="text-2xl font-bold mb-2">ENCUESTA A EGRESADOS ITIC's</p>
         <p class="text-xs font-semibold"> Agradecemos dar sus respuestas con mayor transparencia y veracidad a las siguientes preguntas, lo cual nos permitirá un acercamiento a la realidad concreta que viven los egresados del 2024, específicamente los Ingenieros en TIC's, así como deducir la problemática a la que se enfrentan.</p>
      </div>
      <form method="post" action="{{ route('form.store') }}" class="p-8">
         @csrf

         <h3>DATOS PERSONALES DEL EGRESADO</h3>

         <div class="flex flex-col space-y-4 md:flex-row  md:space-y-0 text-sm">
            <div class="flex-1 pt-4">
               <label for="id_apellido_paterno">1. Apellido Paterno:</label>
               <br>
               <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm mt-2" name="apellido_paterno" maxlength="100" required id="apellido_paterno">
            </div>
            <div class="flex-1 pt-4">
               <label for="id_apellido_materno">2. Apellido Materno:</label>
               <br>
               <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm mt-2" name="apellido_materno" maxlength="100" required id="apellido_materno">
            </div>
            <div class="flex-1 pt-4">
               <label for="id_nombres">3. Nombres:</label>
               <br>
               <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm mt-2" name="nombres" maxlength="100" required id="nombre">
            </div>
         </div>


         <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0 text-sm">
            <div class="flex-1 pt-4">
               <label for="id_fecha_nacimiento">4. Fecha de Nacimiento:</label>
               <br>
               <input type="date" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="fecha_nacimiento" required id="fecha_nacimiento">
            </div>
            <div class="flex-1 pt-4">
               <label for="id_email_personal">5. Email Personal:</label>
               <br>
               <input type="email" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="email" maxlength="320" required id="email">
            </div>
            <div class="flex-1 pt-4">
               <label for="id_telefono_celular">6. Teléfono Celular:</label>
               <br>
               <input type="text" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="telefono" maxlength="15" required id="celular">
            </div>
         </div>


         <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0 text-sm">
            <div class="flex-1 pt-4">
               <label for="id_mes_y_anio_egreso">7. Mes y Año de Egreso:</label>
               <br>
               <input type="month" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="fecha_egreso" maxlength="100" required id="id_mes_y_anio_egreso">
            </div>
            <div class="flex-1">

            </div>
            <div class="flex-1 ">

            </div>
         </div>



         <h3 class="font-bold mt-10">INSTRUCCIONES</h3>

         <p class="text-sm">Marque el nivel que considere usted pertinente para sus conocimientos, acciones, pensamientos, o forma de ser, solamente debe seleccionar una respuesta por cada pregunta, existen dos bloques de preguntas, cada una indica los estándares de evaluación de acuerdo a las preguntas que se realicen.</p>

         <p class="text-sm">Califique la calidad de la educación profesional proporcionada por el personal docente, asi como el Plan de Estudios de Ingeniería en Tecnologías de la Información y Comunicaciones que cursó y las condiciones del plantel en cuanto a infraestructura.</p>
         <div class="mt-6"> </div>
         <h3 class="font-bold mt-5">8. PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</h3>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
                  <tr>
                     <th style="min-width: 100px;"> </th>
                     <th style="min-width: 20px;">
                        <p>1</p>
                        <p class="text-sm">Muy malo</p>
                     </th>
                     <th style="min-width: 20px;">
                        <p>2</p>
                        <p class="text-sm">Malo</p>
                     </th>
                     <th style="min-width: 20px;">
                        <p>3</p>
                        <p class="text-sm">Regular</p>
                     </th>
                     <th style="min-width: 20px;">
                        <p>4</p>
                        <p class="text-sm">Bueno</p>
                     </th>
                     <th style="min-width: 20px;">
                        <p>5</p>
                        <p class="text-sm">Excelente</p>
                     </th>
                  </tr>
               </thead>
               <tbody class="divide-y divide-stone-200 overflow-x-auto">
                  <tr>
                     <td>
                        <label>1- Calidad de los docentes:</label>
                     </td>
                     <td>
                        <input type="radio" name="calidad_docentes" value="1" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="calidad_docentes" value="2" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="calidad_docentes" value="3" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="calidad_docentes" value="4" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="calidad_docentes" value="5" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>2- Plan de estudio:</label>
                     </td>
                     <td>
                        <input type="radio" name="plan_estudios" value="1" required id="plan_estudios" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="plan_estudios" value="2" required id="plan_estudios" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="plan_estudios" value="3" required id="plan_estudios" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="plan_estudios" value="4" required id="plan_estudios" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="plan_estudios" value="5" required id="plan_estudios" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>3- Oportunidad de participar en proyectos de investigación y desarrollo:</label>
                     </td>
                     <td>
                        <input type="radio" name="oportunidad_investigacion" value="1" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="oportunidad_investigacion" value="2" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="oportunidad_investigacion" value="3" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="oportunidad_investigacion" value="4" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="oportunidad_investigacion" value="5" required id="calidad_docentes" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>4- Satisfacción de las condiciones de estudio (infraestructural):</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="satisfaccion_condiciones_estudio" value="1" required id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="satisfaccion_condiciones_estudio" value="2" required id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="satisfaccion_condiciones_estudio" value="3" required id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="satisfaccion_condiciones_estudio" value="4" required id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="satisfaccion_condiciones_estudio" value="5" required id="satisfaccion_condiciones_estudio" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>

               </tbody>
               </table>

            </div>
         
      

         <div class="mt-6"> </div>
         <label class="font-bold">9. Actividad a la que se dedica actualmente:</label>

         <div id="id_actividad_actual text-sm">
            <div>
               <label for="id_actividad_actual_0" class="text-sm"><input type="radio" name="actividad_actual" value="1" required id="actividad_actual">
                  Trabaja</label>

            </div>
            <div>
               <label for="id_actividad_actual_1" class="text-sm"><input type="radio" name="actividad_actual" value="2" required id="actividad_actual">
                  Estudia</label>

            </div>
            <div>
               <label for="id_actividad_actual_2" class="text-sm"><input type="radio" name="actividad_actual" value="3" required id="actividad_actual">
                  Estudia y trabaja</label>

            </div>
            <div>
               <label for="id_actividad_actual_3" class="text-sm"><input type="radio" name="actividad_actual" value="4" required id="actividad_actual">
                  No estudia ni trabaja</label>

            </div>
         </div>

         <div class="mt-6"> </div>
         <label class="font-bold">10. Si está trabajando, su trabajo está relacionado con el área de Tics:</label>

         <div id="id_trabajo_tics text-sm">
            <div>
               <label for="trabajo_tics">
                  <input type="radio" name="trabajo_tics" value="1" required id="trabajo_tics">
                  Sí</label>

            </div>
            <div>
               <label for="id_trabajo_tics_1">
                  <input type="radio" name="trabajo_tics" value="0" required id="id_trabajo_tics_1">
                  No</label>

            </div>
         </div>


         <br><div class="mt-6"> </div>
         <h3 class="font-bold">DATOS DE LA EMPRESA U ORGANISMO</h3>
         <br>
         <div class="flex flex-col bg-white">
            <label for="id_razon_social" class="text-sm pt-4">11. Razón Social:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="razon_social" maxlength="100" required id="razon_social">



            <label for="id_domicilio" class="text-sm pt-4">12. Domicilio:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="domicilio" maxlength="100" required id="domicilio">


            <label for="id_calle_numero" class="text-sm pt-4">13. Calle y Número:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="calle_numero" maxlength="100" required id="calle_numero">


            <label for="id_colonia_cp_ciudad" class="text-sm pt-4">14. Colonia, C.P., Ciudad:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="colonia_cp_ciudad" maxlength="100" required id="colonia_cp_ciudad">



            <label for="id_municipio" class="text-sm pt-4">15. Municipio:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="municipio" maxlength="100" required id="municipio">


            <label for="id_estado" class="text-sm pt-4">16. Estado:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="estado" maxlength="100" required id="id_estado">


            <label for="id_telefonos" class="text-sm pt-4">17. Teléfonos:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="telefonos" maxlength="100" required id="id_telefonos">

            <label for="id_jefe_inmediato" class="text-sm pt-4">18. Nombre y Puesto del Jefe Inmediato:</label>
            <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent hadow-sm" name="jefe_inmediato" maxlength="100" required id="id_jefe_inmediato">

         </div>

         <br>

         <h3 class="font-bold">DESEMPEÑO PROFESIONAL DE LOS EGRESADOS (COHERENCIA ENTRE LA FORMACIÓN Y EL TIPO DE EMPLEO)</h3>
         <p class="text-sm">Marcar los campos que correspondan a su trayectoria profesional.</p>
         <br>

         <div class="mt-6"> </div>

         <label>19. Eficiencia para realizar las actividades laborales, en relación a su formación académica:</label>

         <div id="id_eficiencia_laboral">
            <div>
               <label for="id_eficiencia_laboral_0"><input type="radio" name="eficiencia_laboral" value="4" required id="eficiencia_laboral">
                  Muy eficiente</label>

            </div>
            <div>
               <label for="id_eficiencia_laboral_1"><input type="radio" name="eficiencia_laboral" value="3" required id="eficiencia_laboral">
                  Eficiente</label>

            </div>
            <div>
               <label for="id_eficiencia_laboral_2"><input type="radio" name="eficiencia_laboral" value="2" required id="eficiencia_laboral">
                  Poco eficiente</label>

            </div>
            <div>
               <label for="id_eficiencia_laboral_3"><input type="radio" name="eficiencia_laboral" value="1" required id="eficiencia_laboral">
                  Deficiente</label>

            </div>
         </div>

         <div class="mt-6"> </div>

         <label>20. Cómo califica su formación académica con respecto a su desempeño laboral:</label>

         <div id="id_calificacion_formacion_laboral">
            <div>
               <label for="id_calificacion_formacion_laboral_0"><input type="radio" name="calificacion_formacion_laboral" value="5" required id="calificacion_formacion_laboral">
                  Excelente</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_1"><input type="radio" name="calificacion_formacion_laboral" value="4" required id="calificacion_formacion_laboral">
                  Bueno</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_2"><input type="radio" name="calificacion_formacion_laboral" value="3" required id="calificacion_formacion_laboral">
                  Regular</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_3"><input type="radio" name="calificacion_formacion_laboral" value="2" required id="calificacion_formacion_laboral">
                  Malo</label>

            </div>
            <div>
               <label for="id_calificacion_formacion_laboral_4"><input type="radio" name="calificacion_formacion_laboral" value="1" required id="calificacion_formacion_laboral">
                  Pésimo</label>

            </div>
         </div>

         <div class="mt-6"> </div>

         <label>21. Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional:</label>

         <div id="id_utilidad_residencias_practicas">
            <div>
               <label for="id_utilidad_residencias_practicas_0"><input type="radio" name="utilidad_residencias_practicas" value="5" required id="utilidad_residencias_practicas">
                  Excelente</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_1"><input type="radio" name="utilidad_residencias_practicas" value="4" required id="utilidad_residencias_practicas">
                  Bueno</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_2"><input type="radio" name="utilidad_residencias_practicas" value="3" required id="utilidad_residencias_practicas">
                  Regular</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_3"><input type="radio" name="utilidad_residencias_practicas" value="2" required id="utilidad_residencias_practicas">
                  Malo</label>

            </div>
            <div>
               <label for="id_utilidad_residencias_practicas_4"><input type="radio" name="utilidad_residencias_practicas" value="1" required id="utilidad_residencias_practicas">
                  Pésimo</label>

            </div>
         </div>


         <p class="mt-6">22. Aspectos que valora la empresa u organismo para la contratación de los egresados:</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                     <td>
                        <input type="radio" name="area_estudio" value="1" required id="area_estudio" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="area_estudio" value="2" required id="area_estudio" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="area_estudio" value="3" required id="area_estudio" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="area_estudio" value="4" required id="area_estudio" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="area_estudio" value="5" required id="area_estudio" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>Titulación:</label>
                     </td>
                     <td>
                        <input type="radio" name="titulacion" value="1" required id="titulacion" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="titulacion" value="2" required id="titulacion" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="titulacion" value="3" required id="titulacion" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="titulacion" value="4" required id="titulacion" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="titulacion" value="5" required id="titulacion" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>Experiencia laboral/práctica (antes de egresar):</label>
                     </td>
                     <td>
                        <input type="radio" name="experiencia_laboral_egresar" value="1" required id="experiencia_laboral_egresar" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="experiencia_laboral_egresar" value="2" required id="experiencia_laboral_egresar" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="experiencia_laboral_egresar" value="3" required id="experiencia_laboral_egresar" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="experiencia_laboral_egresar" value="4" required id="experiencia_laboral_egresar" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="experiencia_laboral_egresar" value="5" required id="experiencia_laboral_egresar" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>Competencia Laboral:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_laboral" value="1" required id="competencia_laboral" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_laboral" value="2" required id="competencia_laboral" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_laboral" value="3" required id="competencia_laboral" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_laboral" value="4" required id="competencia_laboral" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_laboral" value="5" required id="competencia_laboral" class="mt-2 ml-14">
                     </td>



                  <tr>
                     <td>
                        <label>Posicionamiento de la Institución de Egreso:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="posicionamiento_institucion" value="1" required id="posicionamiento_institucion" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="posicionamiento_institucion" value="2" required id="posicionamiento_institucion" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="posicionamiento_institucion" value="3" required id="posicionamiento_institucion" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="posicionamiento_institucion" value="4" required id="posicionamiento_institucion" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="posicionamiento_institucion" value="5" required id="posicionamiento_institucion" class="mt-2 ml-14">
                     </td>
                  </tr>


                  <tr>
                     <td>
                        <label>Conocimiento de Idiomas Extranjeros:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimiento_idiomas" value="1" required id="conocimiento_idiomas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimiento_idiomas" value="2" required id="conocimiento_idiomas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimiento_idiomas" value="3" required id="conocimiento_idiomas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimiento_idiomas" value="4" required id="conocimiento_idiomas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimiento_idiomas" value="5" required id="conocimiento_idiomas" class="mt-2 ml-14">
                     </td>
                  </tr>




                  <tr>
                     <td>
                        <label>Recomendaciones/referencias:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="recomendaciones_referencias" value="1" required id="recomendaciones_referencias" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="recomendaciones_referencias" value="2" required id="recomendaciones_referencias" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="recomendaciones_referencias" value="3" required id="recomendaciones_referencias" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="recomendaciones_referencias" value="4" required id="recomendaciones_referencias" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="recomendaciones_referencias" value="5" required id="recomendaciones_referencias" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Personalidad/actitudes:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="personalidad_actitudes" value="1" required id="personalidad_actitudes" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="personalidad_actitudes" value="2" required id="personalidad_actitudes" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="personalidad_actitudes" value="3" required id="personalidad_actitudes" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="personalidad_actitudes" value="4" required id="personalidad_actitudes" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="personalidad_actitudes" value="5" required id="personalidad_actitudes" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Capacidad de liderazgo:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_liderazgo" value="1" required id="capacidad_liderazgo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_liderazgo" value="2" required id="capacidad_liderazgo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_liderazgo" value="3" required id="capacidad_liderazgo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_liderazgo" value="4" required id="capacidad_liderazgo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_liderazgo" value="5" required id="capacidad_liderazgo" class="mt-2 ml-14">
                     </td>

                  </tr>



                  <tr>
                     <td>
                        <label>Otros V. EXPECTATIVAS DE DESARROLLO, SUPERACIÓN PROFESIONAL Y DE ACTUALIZACIÓN:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="otros" value="1" required id="otros" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="otros" value="2" required id="otros" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="otros" value="3" required id="otros" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="otros" value="4" required id="otros" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="otros" value="5" required id="otros" class="mt-2 ml-14">
                     </td>

                  </tr>


               </tbody>
            </table>
         </div>
         

         <br>


         <p class="text-bold mt-6">ESTANDARES DE EVALUACION (SER)</p>

         <p class="mt-6">23. Compromiso</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                     <td>
                        <input type="radio" name="nivel_compromiso_trabajo" value="1" required id="nivel_compromiso_trabajo" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="nivel_compromiso_trabajo" value="2" required id="nivel_compromiso_trabajo" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="nivel_compromiso_trabajo" value="3" required id="nivel_compromiso_trabajo" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="nivel_compromiso_trabajo" value="4" required id="nivel_compromiso_trabajo" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="nivel_compromiso_trabajo" value="5" required id="nivel_compromiso_trabajo" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>Maneja un alto sentimiento de afinidad y fidelidad hacia la organización para la que labora:</label>
                     </td>
                     <td>
                        <input type="radio" name="afinidad_fidelidad" value="1" required id="afinidad_fidelidad" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="afinidad_fidelidad" value="2" required id="afinidad_fidelidad" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="afinidad_fidelidad" value="3" required id="afinidad_fidelidad" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="afinidad_fidelidad" value="4" required id="afinidad_fidelidad" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="afinidad_fidelidad" value="5" required id="afinidad_fidelidad" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>En su trabajo desarrolla sus capacidades y aprende nuevas capacidades:</label>
                     </td>
                     <td>
                        <input type="radio" name="desarrollo_capacidades" value="1" required id="desarrollo_capacidades" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="desarrollo_capacidades" value="2" required id="desarrollo_capacidades" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="desarrollo_capacidades" value="3" required id="desarrollo_capacidades" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="desarrollo_capacidades" value="4" required id="desarrollo_capacidades" class="mt-2 ml-14">
                     </td>
                     <td>
                        <input type="radio" name="desarrollo_capacidades" value="5" required id="desarrollo_capacidades" class="mt-2 ml-14">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <label>Sirve y aporta profesionalmente a favor de enaltecer su persona y el de la institución:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="aporte_profesional" value="1" required id="aporte_profesional" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="aporte_profesional" value="2" required id="aporte_profesional" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="aporte_profesional" value="3" required id="aporte_profesional" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="aporte_profesional" value="4" required id="aporte_profesional" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="aporte_profesional" value="5" required id="aporte_profesional" class="mt-2 ml-14">
                     </td>



                  <tr>
                     <td>
                        <label>Manifiesta iniciativa para resolver los problemas surgidos en el desempeño de su trabajo o en el de la empresa para la que labora:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="iniciativa_resolucion_problemas" value="1" required id="iniciativa_resolucion_problemas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="iniciativa_resolucion_problemas" value="2" required id="iniciativa_resolucion_problemas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="iniciativa_resolucion_problemas" value="3" required id="iniciativa_resolucion_problemas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="iniciativa_resolucion_problemas" value="4" required id="iniciativa_resolucion_problemas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="iniciativa_resolucion_problemas" value="5" required id="iniciativa_resolucion_problemas" class="mt-2 ml-14">
                     </td>
                  </tr>


                  <tr>
                     <td>
                        <label>Maneja un alto nivel de concordancia entre sus ideas y sus acciones apegado a lo que se considera normal dentro de la empresa:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="1" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="2" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="3" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="4" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="5" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>

                  </tr>

                  <tr>
                     <td>
                        <label>Expresa sus ideas y opiniones teniendo en cuenta las emociones de su interlocutor:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="expresion_ideas_opiniones" value="1" required id="expresion_ideas_opiniones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="expresion_ideas_opiniones" value="2" required id="expresion_ideas_opiniones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="expresion_ideas_opiniones" value="3" required id="expresion_ideas_opiniones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="expresion_ideas_opiniones" value="4" required id="expresion_ideas_opiniones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="expresion_ideas_opiniones" value="5" required id="expresion_ideas_opiniones" class="mt-2 ml-14">
                     </td>

                  </tr>


               </tbody>
            </table>
         </div>
         


         <p class="mt-6">24. Responsabilidad</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <input type="radio" name="responsabilidad_trabajo" value="1" required id="responsabilidad_trabajo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="responsabilidad_trabajo" value="2" required id="responsabilidad_trabajo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="responsabilidad_trabajo" value="3" required id="responsabilidad_trabajo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="responsabilidad_trabajo" value="4" required id="responsabilidad_trabajo" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="responsabilidad_trabajo" value="5" required id="responsabilidad_trabajo" class="mt-2 ml-14">
                     </td>
                  </tr>

                  <tr>
                     <td>
                        <label>Tiene por costumbre llegar y entregar en el tiempo acordado a sus compromisos y obligaciones:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="compromiso_obligaciones" value="1" required id="compromiso_obligaciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="compromiso_obligaciones" value="2" required id="compromiso_obligaciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="compromiso_obligaciones" value="3" required id="compromiso_obligaciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="compromiso_obligaciones" value="4" required id="compromiso_obligaciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="compromiso_obligaciones" value="5" required id="compromiso_obligaciones" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Realiza sus funciones apegado a la normatividad considerando el desarrollo de métodos eficientes, estableciendo metas y objetivos, así como el logro de ellos:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="apego_normatividad" value="1" required id="apego_normatividad" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="apego_normatividad" value="2" required id="apego_normatividad" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="apego_normatividad" value="3" required id="apego_normatividad" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="apego_normatividad" value="4" required id="apego_normatividad" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="apego_normatividad" value="5" required id="apego_normatividad" class="mt-2 ml-14">
                     </td>

                  </tr>

               </tbody>
            </table>
         </div>
         





         <p class="mt-6">25. Honestidad</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <input type="radio" name="concordancia_ideas_acciones" value="1" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="2" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="3" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="4" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="concordancia_ideas_acciones" value="5" required id="concordancia_ideas_acciones" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Expresa sus ideas y opiniones teniendo en cuenta las emociones de su interlocutor:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="emociones_interlocutor" value="1" required id="emociones_interlocutor" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="emociones_interlocutor" value="2" required id="emociones_interlocutor" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="emociones_interlocutor" value="3" required id="emociones_interlocutor" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="emociones_interlocutor" value="4" required id="emociones_interlocutor" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="emociones_interlocutor" value="5" required id="emociones_interlocutor" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Un gran amigo, que está buscando trabajo hace tiempo, te pide que escribas una referencia para un trabajo que consideras no está preparado:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="carta_referencia" value="1" required id="carta_referencia" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="carta_referencia" value="2" required id="carta_referencia" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="carta_referencia" value="3" required id="carta_referencia" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="carta_referencia" value="4" required id="carta_referencia" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="carta_referencia" value="5" required id="carta_referencia" class="mt-2 ml-14">
                     </td>

                  </tr>



               </tbody>
            </table>
         </div>
         


         <p class="mt-6">26. Respeto</p>
         
         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <input type="radio" name="informacion_procedimientos" value="1" required id="informacion_procedimientos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="informacion_procedimientos" value="2" required id="informacion_procedimientos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="informacion_procedimientos" value="3" required id="informacion_procedimientos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="informacion_procedimientos" value="4" required id="informacion_procedimientos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="informacion_procedimientos" value="5" required id="informacion_procedimientos" class="mt-2 ml-14">
                     </td>

                  </tr>




                  <tr>
                     <td>
                        <label>13.- Hace planes y toma decisiones considerando siempre a la institución y al personal con el que trabaja. Se considera el momento y forma oportuno para hacer las cosas:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planes_toma_decisiones" value="1" required id="planes_toma_decisiones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planes_toma_decisiones" value="2" required id="planes_toma_decisiones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planes_toma_decisiones" value="3" required id="planes_toma_decisiones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planes_toma_decisiones" value="4" required id="planes_toma_decisiones" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planes_toma_decisiones" value="5" required id="planes_toma_decisiones" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>14.- Se considera una personas razonable, correcta, moral y legalmente recta. Respeto a los derechos del ser humano y cumplimiento de normas, lineamientos y reglas.:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="persona_razonable" value="1" required id="persona_razonable" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="persona_razonable" value="2" required id="persona_razonable" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="persona_razonable" value="3" required id="persona_razonable" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="persona_razonable" value="4" required id="persona_razonable" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="persona_razonable" value="5" required id="persona_razonable" class="mt-2 ml-14">
                     </td>

                  </tr>



               </tbody>
            </table>
         </div>
         


         <p class="mt-6">27. Disciplina</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <input type="radio" name="instrumentos_areas_trabajos" value="1" required id="instrumentos_areas_trabajos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="instrumentos_areas_trabajos" value="2" required id="instrumentos_areas_trabajos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="instrumentos_areas_trabajos" value="3" required id="instrumentos_areas_trabajos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="instrumentos_areas_trabajos" value="4" required id="instrumentos_areas_trabajos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="instrumentos_areas_trabajos" value="5" required id="instrumentos_areas_trabajos" class="mt-2 ml-14">
                     </td>

                  </tr>

                  <tr>
                     <td>
                        <label>16.- Cuando inicia con algún proyecto laboral o personal mantiene su atención en él hasta lograr terminarlo:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="proyecto_laboral_personal" value="1" required id="proyecto_laboral_personal" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="proyecto_laboral_personal" value="2" required id="proyecto_laboral_personal" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="proyecto_laboral_personal" value="3" required id="proyecto_laboral_personal" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="proyecto_laboral_personal" value="4" required id="proyecto_laboral_personal" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="proyecto_laboral_personal" value="5" required id="proyecto_laboral_personal" class="mt-2 ml-14">
                     </td>

                  </tr>


               </tbody>
            </table>
         </div>
         




         <p class="mt-6">28.Redes</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <input type="radio" name="redes_wan_lan" value="1" required id="redes_wan_lan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="redes_wan_lan" value="2" required id="redes_wan_lan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="redes_wan_lan" value="3" required id="redes_wan_lan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="redes_wan_lan" value="4" required id="redes_wan_lan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="redes_wan_lan" value="5" required id="redes_wan_lan" class="mt-2 ml-14">
                     </td>

                  </tr>

                  <tr>
                     <td>
                        <label>Cuenta con la competencia para administrar, establecer niveles de seguridad y escalar redes LAN y WAN:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_lan_wan" value="1" required id="seguridad_lan_wan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_lan_wan" value="2" required id="seguridad_lan_wan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_lan_wan" value="3" required id="seguridad_lan_wan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_lan_wan" value="4" required id="seguridad_lan_wan" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_lan_wan" value="5" required id="seguridad_lan_wan" class="mt-2 ml-14">
                     </td>

                  </tr>


               </tbody>
            </table>
         </div>
         


         <p class="mt-6">29. DESARROLLO DE SOFTWARE, BASES DE DATOS DE SISTEMAS, PÁGINAS WEB, APLICACIONES MÓVILES1</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <input type="radio" name="competencia_analizar_disenar_programar" value="1" required id="competencia_analizar_disenar_programar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_analizar_disenar_programar" value="2" required id="competencia_analizar_disenar_programar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_analizar_disenar_programar" value="3" required id="competencia_analizar_disenar_programar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_analizar_disenar_programar" value="4" required id="competencia_analizar_disenar_programar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_analizar_disenar_programar" value="5" required id="competencia_analizar_disenar_programar" class="mt-2 ml-14">
                     </td>

                  </tr>




                  <tr>
                     <td>
                        <label>Determine su nivel de competencia al analizar, diseñar y desarrollar sistemas web, siguiendo estándares, con algún lenguaje específico como PHP, HTML5, ASP.NET, Ruby o algún otro:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="desarrollar_sistemas_web" value="1" required id="desarrollar_sistemas_web" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="desarrollar_sistemas_web" value="2" required id="desarrollar_sistemas_web" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="desarrollar_sistemas_web" value="3" required id="desarrollar_sistemas_web" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="desarrollar_sistemas_web" value="4" required id="desarrollar_sistemas_web" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="desarrollar_sistemas_web" value="5" required id="desarrollar_sistemas_web" class="mt-2 ml-14">
                     </td>

                  </tr>

                  <tr>
                     <td>
                        <label>Establezca cual es su nivel de competencia para analizar, diseñar, programar y documentar, siguiendo estándares, con algún lenguaje específico como Java, JavaScript, C, Python, o algún otro:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_documentar_estandares" value="1" required id="programar_documentar_estandares" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_documentar_estandares" value="2" required id="programar_documentar_estandares" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_documentar_estandares" value="3" required id="programar_documentar_estandares" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_documentar_estandares" value="4" required id="programar_documentar_estandares" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_documentar_estandares" value="5" required id="programar_documentar_estandares" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Cuenta con la competencia de analizar, diseñar y programar dispositivos móviles, siguiendo estándares, con alguna plataforma específica como Android, IOS, Movil App Development, Xmarin Studio, PhoneGap, Appery.io o algún otro:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_dispositivos_moviles" value="1" required id="programar_dispositivos_moviles" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_dispositivos_moviles" value="2" required id="programar_dispositivos_moviles" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_dispositivos_moviles" value="3" required id="programar_dispositivos_moviles" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_dispositivos_moviles" value="4" required id="programar_dispositivos_moviles" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="programar_dispositivos_moviles" value="5" required id="programar_dispositivos_moviles" class="mt-2 ml-14">
                     </td>

                  </tr>

                  <tr>
                     <td>
                        <label>Establezca cual es su nivel de competencia para diseñar y administrar bases de datos con algunos gestores como SQL, MySQL, Oracle o alguna otra:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="disenar_administrar_bases_datos" value="1" required id="disenar_administrar_bases_datos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="disenar_administrar_bases_datos" value="2" required id="disenar_administrar_bases_datos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="disenar_administrar_bases_datos" value="3" required id="disenar_administrar_bases_datos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="disenar_administrar_bases_datos" value="4" required id="disenar_administrar_bases_datos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="disenar_administrar_bases_datos" value="5" required id="disenar_administrar_bases_datos" class="mt-2 ml-14">
                     </td>

                  </tr>

                  <tr>
                     <td>
                        <label>Determine su nivel de competencia para diseñar y gestionar servicios de TI apegados a modelos y estándares como ITIL, COBIT, UML, CMMI, PMBOOK o algún otro:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="gestionar_servicios_ti" value="1" required id="gestionar_servicios_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="gestionar_servicios_ti" value="2" required id="gestionar_servicios_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="gestionar_servicios_ti" value="3" required id="gestionar_servicios_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="gestionar_servicios_ti" value="4" required id="gestionar_servicios_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="gestionar_servicios_ti" value="5" required id="gestionar_servicios_ti" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Cuenta con la competencia para aplicar y utilizar técnicas y herramientas que lleven a cabo pruebas de software como Bugzilla, Testopia, FitNesse, qaManager, qaBook o alguna otra:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_pruebas_software" value="1" required id="competencia_pruebas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_pruebas_software" value="2" required id="competencia_pruebas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_pruebas_software" value="3" required id="competencia_pruebas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_pruebas_software" value="4" required id="competencia_pruebas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="competencia_pruebas_software" value="5" required id="competencia_pruebas_software" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Cuenta con la competencia para aplicar y utilizar técnicas y herramientas que lleven a cabo pruebas de software como Bugzilla, Testopia, FitNesse, qaManager, qaBook o alguna otra:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="tecnicas_herramientas_software" value="1" required id="tecnicas_herramientas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="tecnicas_herramientas_software" value="2" required id="tecnicas_herramientas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="tecnicas_herramientas_software" value="3" required id="tecnicas_herramientas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="tecnicas_herramientas_software" value="4" required id="tecnicas_herramientas_software" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="tecnicas_herramientas_software" value="5" required id="tecnicas_herramientas_software" class="mt-2 ml-14">
                     </td>

                  </tr>



               </tbody>
            </table>
         </div>
         


         <p class="mt-6">30. SEGURIDAD LEGALIDAD, CONSULTORIA Y AUDITORIA</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <input type="radio" name="seguridad_informacion_hacking" value="1" required id="seguridad_informacion_hacking" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_informacion_hacking" value="2" required id="seguridad_informacion_hacking" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_informacion_hacking" value="3" required id="seguridad_informacion_hacking" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_informacion_hacking" value="4" required id="seguridad_informacion_hacking" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="seguridad_informacion_hacking" value="5" required id="seguridad_informacion_hacking" class="mt-2 ml-14">
                     </td>

                  </tr>



                  <tr>
                     <td>
                        <label>Conoce usted los temas necesarios en el campo legal y jurídico en torno a las tecnologías de la información, el manejo de los derechos de autor y la privacidad de datos, así como conocimientos en Normas, estándares y prácticas de Seguridad de la Información:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_legales" value="1" required id="conocimientos_legales" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_legales" value="2" required id="conocimientos_legales" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_legales" value="3" required id="conocimientos_legales" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_legales" value="4" required id="conocimientos_legales" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_legales" value="5" required id="conocimientos_legales" class="mt-2 ml-14">
                     </td>

                  </tr>

                  <tr>
                     <td>
                        <label>Determine su nivel de conocimiento para brindar asesoría en sistemas operativos como Linux, Mac, Windows, Solaris, entre otros:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_sistemas_operativos" value="1" required id="asesoria_sistemas_operativos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_sistemas_operativos" value="2" required id="asesoria_sistemas_operativos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_sistemas_operativos" value="3" required id="asesoria_sistemas_operativos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_sistemas_operativos" value="4" required id="asesoria_sistemas_operativos" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_sistemas_operativos" value="5" required id="asesoria_sistemas_operativos" class="mt-2 ml-14">
                     </td>

                  </tr>



                  <tr>
                     <td>
                        <label>Cuenta con el conocimiento para brindar asesoría en arquitectura de computadoras como AMD, INTEL y MAC:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_arquitectura_computadoras" value="1" required id="asesoria_arquitectura_computadoras" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_arquitectura_computadoras" value="2" required id="asesoria_arquitectura_computadoras" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_arquitectura_computadoras" value="3" required id="asesoria_arquitectura_computadoras" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_arquitectura_computadoras" value="4" required id="asesoria_arquitectura_computadoras" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="asesoria_arquitectura_computadoras" value="5" required id="asesoria_arquitectura_computadoras" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Tiene conocimientos para realizar Análisis y diseño de casos de pruebas, ejecución, levantamiento de defectos, Testing Funcional, Construcción y Ejecución de Entregables para la Metodología de pruebas aplicando Herramientas como QC, ALM, TFS ó Selenium entre otras:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_analisis_diseno_pruebas" value="1" required id="conocimientos_analisis_diseno_pruebas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_analisis_diseno_pruebas" value="2" required id="conocimientos_analisis_diseno_pruebas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_analisis_diseno_pruebas" value="3" required id="conocimientos_analisis_diseno_pruebas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_analisis_diseno_pruebas" value="4" required id="conocimientos_analisis_diseno_pruebas" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="conocimientos_analisis_diseno_pruebas" value="5" required id="conocimientos_analisis_diseno_pruebas" class="mt-2 ml-14">
                     </td>

                  </tr>

               </tbody>
            </table>
         </div>
         


         <p class="mt-6">31. CREAR EMPRESA DE TI Y ADMINISTRAR PROYECTOS</p>

         <div class="overflow-x-auto">
            <table class="overflow-x-auto table-fixed w-full divide-y divide-stone-200 border border-stone-50 text-sm overflow-x-auto" style="min-width:800px;">
               <thead class="bg-green-50 overflow-x-auto">
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
                        <label>Cuenta con la capacidad para detectar y ubicar las necesidades de Tecnologías de Información de una organización ,que le permita definir e integrar soluciones y servicios mediante el desarrollo de software:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_detectar_necesidades" value="1" required id="capacidad_detectar_necesidades" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_detectar_necesidades" value="2" required id="capacidad_detectar_necesidades" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_detectar_necesidades" value="3" required id="capacidad_detectar_necesidades" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_detectar_necesidades" value="4" required id="capacidad_detectar_necesidades" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="capacidad_detectar_necesidades" value="5" required id="capacidad_detectar_necesidades" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Planea , administra ejecuta y monitorea proyectos en TI, para alcanzar objetivos en un tiempo determinado, utilizando metodologías de gestión de proyectos:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planear_administrar_ejecutar" value="1" required id="planear_administrar_ejecutar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planear_administrar_ejecutar" value="2" required id="planear_administrar_ejecutar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planear_administrar_ejecutar" value="3" required id="planear_administrar_ejecutar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planear_administrar_ejecutar" value="4" required id="planear_administrar_ejecutar" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="planear_administrar_ejecutar" value="5" required id="planear_administrar_ejecutar" class="mt-2 ml-14">
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <label>Cuenta con habilidades de liderazgo que le permitan crear o dirigir empresas de TI .:</label>
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="habilidades_liderazgo_ti" value="1" required id="habilidades_liderazgo_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="habilidades_liderazgo_ti" value="2" required id="habilidades_liderazgo_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="habilidades_liderazgo_ti" value="3" required id="habilidades_liderazgo_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="habilidades_liderazgo_ti" value="4" required id="habilidades_liderazgo_ti" class="mt-2 ml-14">
                     </td>
                     <td class="mt-2 ml-20">
                        <input type="radio" name="habilidades_liderazgo_ti" value="5" required id="habilidades_liderazgo_ti" class="mt-2 ml-14">
                     </td>

                  </tr>

               </tbody>
            </table>
         </div>
         
         <button type="submit" class="w-full mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
      </form>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>