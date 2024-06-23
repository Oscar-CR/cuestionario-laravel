<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()  { 

        $formularios = Form::all();
        $ultimos_registros = Form::latest('id')->take(10)->get();

        $usuarios = User::all();

        //8
        $pertinencia = [
            'calidad_docentes' => [
                'uno' => 0, 
                'dos' => 0, 
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'plan_estudios' => [
                'uno' => 0, 
                'dos' => 0, 
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'oportunidad_investigacion' => [
                'uno' => 0, 
                'dos' => 0, 
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'satisfaccion_condiciones_estudio' => [
                'uno' => 0, 
                'dos' => 0, 
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //9
        $actividad_actual = [
            'trabaja' => 0,
            'estudia' => 0,
            'estudia_y_trabaja' => 0,
            'no_estudia_ni_trabaja' => 0,
        ];
        
        //10
        $trabajo_tics = [
            'trabajo_tics_si' => 0,
            'trabajo_tics_no' => 0,
        ];
        
        //19
        $eficiencia_laboral = [
            'muy_eficiente' => 0,
            'eficiente' => 0,
            'poco_eficiente' => 0,
            'deficiente' => 0,
        ];
        
        //20
        $calificacion_formacion_laboral = [
            'excelente' => 0,
            'bueno' => 0,
            'regular' => 0,
            'malo' => 0,
            'pesimo' => 0
        ];
        
        //21
        $utilidad_residencias_practicas = [
            'excelente' => 0,
            'bueno' => 0,
            'regular' => 0,
            'malo' => 0,
            'pesimo' => 0
        ];

        //22
        $aspectos_contratacion = [
            'area_estudio' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'titulacion' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'experiencia_laboral_egresar' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'competencia_laboral' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'posicionamiento_institucion' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'conocimiento_idiomas' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'recomendaciones_referencias' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'personalidad_actitudes' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'capacidad_liderazgo' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'otros' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //23
        $compromiso = [
            'nivel_compromiso_trabajo' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'afinidad_fidelidad' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'desarrollo_capacidades' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'aporte_profesional' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'iniciativa_resolucion_problemas' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'concordancia_ideas_acciones' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'expresion_ideas_opiniones' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'afinidad_fidelidad' => [ // Nota: Esta clave está duplicada, deberías revisarla.
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //24
        $responsabilidad = [
            'responsabilidad_trabajo' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'compromiso_obligaciones' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'apego_normatividad' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //25
        $honestidad = [
            'concordancia_ideas_acciones' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'emociones_interlocutor' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'carta_referencia' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //26
        $respeto = [
            'informacion_procedimientos' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'planes_toma_decisiones' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'persona_razonable' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //27
        $disciplina = [
            'instrumentos_areas_trabajos' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'proyecto_laboral_personal' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //28
        $redes = [
            'redes_wan_lan' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'seguridad_lan_wan' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //29
        $desarrollo_software = [
            'competencia_analizar_disenar_programar' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'desarrollar_sistemas_web' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'programar_documentar_estandares' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'programar_dispositivos_moviles' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'disenar_administrar_bases_datos' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'gestionar_servicios_ti' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'competencia_pruebas_software' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'tecnicas_herramientas_software' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //30
        $seguridad = [
            'seguridad_informacion_hacking' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'conocimientos_legales' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'asesoria_sistemas_operativos' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'asesoria_arquitectura_computadoras' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'conocimientos_analisis_diseno_pruebas' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        //31
        $admin_proyectos = [
            'capacidad_detectar_necesidades' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'planear_administrar_ejecutar' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
            'habilidades_liderazgo_ti' => [
                'uno' => 0,
                'dos' => 0,
                'tres' => 0,
                'cuatro' => 0,
                'cinco' => 0
            ],
        ];

        foreach($formularios  as $form){
            $respuesta_actividad_actual = $form->actividad_actual; 
            $respuesta_trabajo_tics = $form->trabajo_tics;
            $respuesta_eficiencia_laboral = $form->eficiencia_laboral;
            $respuesta_calificacion_formacion_laboral = $form->calificacion_formacion_laboral;
            $respuesta_utilidad_residencias_practicas = $form->utilidad_residencias_practicas;

            switch ($form->pertinencia) {
                case 1:
                    $pertinencia['calidad_docentes']['uno'] += 1;;
                    break;
                case 2:
                    $pertinencia['calidad_docentes']['dos'] += 1;;
                    break;
                case 3:
                    $pertinencia['calidad_docentes']['tres'] += 1;;
                    break;
                case 4:
                    $pertinencia['calidad_docentes']['cuatro'] += 1;;
                    break;
                case 5:
                    $pertinencia['calidad_docentes']['cinco'] += 1;;
                    break;
                
            }


            switch ($form->plan_estudios) {
                case 1:
                    $pertinencia['plan_estudios']['uno'] += 1;;
                    break;
                case 2:
                    $pertinencia['plan_estudios']['dos'] += 1;;
                    break;
                case 3:
                    $pertinencia['plan_estudios']['tres'] += 1;;
                    break;
                case 4:
                    $pertinencia['plan_estudios']['cuatro'] += 1;;
                    break;
                case 5:
                    $pertinencia['plan_estudios']['cinco'] += 1;;
                    break;
                
            }

            switch ($form->oportunidad_investigacion) {
                case 1:
                    $pertinencia['oportunidad_investigacion']['uno'] += 1;;
                    break;
                case 2:
                    $pertinencia['oportunidad_investigacion']['dos'] += 1;;
                    break;
                case 3:
                    $pertinencia['oportunidad_investigacion']['tres'] += 1;;
                    break;
                case 4:
                    $pertinencia['oportunidad_investigacion']['cuatro'] += 1;;
                    break;
                case 5:
                    $pertinencia['oportunidad_investigacion']['cinco'] += 1;;
                    break;
                
            }

            switch ($form->satisfaccion_condiciones_estudio) {
                case 1:
                    $pertinencia['satisfaccion_condiciones_estudio']['uno'] += 1;;
                    break;
                case 2:
                    $pertinencia['satisfaccion_condiciones_estudio']['dos'] += 1;;
                    break;
                case 3:
                    $pertinencia['satisfaccion_condiciones_estudio']['tres'] += 1;;
                    break;
                case 4:
                    $pertinencia['satisfaccion_condiciones_estudio']['cuatro'] += 1;;
                    break;
                case 5:
                    $pertinencia['satisfaccion_condiciones_estudio']['cinco'] += 1;;
                    break;
                
            }

            
            
            switch ($form->actividad_actual) {
                case 1:
                    $actividad_actual['trabaja'] += 1;;
                    break;
                case 2:
                    $actividad_actual['estudia'] += 1;;
                    break;
                case 3:
                    $actividad_actual['estudia_y_trabaja']+= 1;;
                    break;
                case 4:
                    $actividad_actual['no_estudia_ni_trabaja'] += 1;;
                    break;
            }


            

            switch ($form->trabajo_tics) {
                case 1:
                    $trabajo_tics['trabajo_tics_si'] += 1;
                    break;
                case 2:
                    $trabajo_tics['trabajo_tics_no'] += 1;
                    break;
            }

            
            

            switch ($form->eficiencia_laboral) {
                case 1:
                    $eficiencia_laboral['muy_eficiente'] += 1;
                    break;
                case 2:
                    $eficiencia_laboral['eficiente'] += 1;
                    break;
                case 3:
                    $eficiencia_laboral['poco_eficiente'] += 1;
                    break;
                case 4:
                    $eficiencia_laboral['deficiente'] += 1;
                    break;
            }


            switch ($form->calificacion_formacion_laboral) {
                case 1:
                    $calificacion_formacion_laboral['excelente'] += 1;
                    break;
                case 2:
                    $calificacion_formacion_laboral['bueno'] += 1;
                    break;
                case 3:
                    $calificacion_formacion_laboral['regular'] += 1;
                    break;
                case 4:
                    $calificacion_formacion_laboral['malo'] += 1;
                    break;
                case 5:
                    $calificacion_formacion_laboral['pesimo'] += 1;
                    break;
            }

            

            switch ($form->utilidad_residencias_practicas) {
                case 1:
                    $utilidad_residencias_practicas['excelente'] += 1;
                    break;
                case 2:
                    $utilidad_residencias_practicas['bueno'] += 1;
                    break;
                case 3:
                    $utilidad_residencias_practicas['regular'] += 1;
                    break;
                case 4:
                    $utilidad_residencias_practicas['malo'] += 1;
                    break;
                case 5:
                    $utilidad_residencias_practicas['pesimo'] += 1;
                    break;
            }
          

            switch ($form->area_estudio) {
                case 1:
                    $aspectos_contratacion['area_estudio']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['area_estudio']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['area_estudio']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['area_estudio']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['area_estudio']['cinco'] += 1;
                    break;
            }

            switch ($form->titulacion) {
                case 1:
                    $aspectos_contratacion['titulacion']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['titulacion']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['titulacion']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['titulacion']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['titulacion']['cinco'] += 1;
                    break;
            }


            switch ($form->experiencia_laboral_egresar) {
                case 1:
                    $aspectos_contratacion['experiencia_laboral_egresar']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['experiencia_laboral_egresar']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['experiencia_laboral_egresar']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['experiencia_laboral_egresar']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['experiencia_laboral_egresar']['cinco'] += 1;
                    break;
            }


            switch ($form->competencia_laboral) {
                case 1:
                    $aspectos_contratacion['competencia_laboral']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['competencia_laboral']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['competencia_laboral']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['competencia_laboral']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['competencia_laboral']['cinco'] += 1;
                    break;
            }


            switch ($form->posicionamiento_institucion) {
                case 1:
                    $aspectos_contratacion['posicionamiento_institucion']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['posicionamiento_institucion']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['posicionamiento_institucion']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['posicionamiento_institucion']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['posicionamiento_institucion']['cinco'] += 1;
                    break;
            }

            switch ($form->conocimiento_idiomas) {
                case 1:
                    $aspectos_contratacion['conocimiento_idiomas']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['conocimiento_idiomas']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['conocimiento_idiomas']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['conocimiento_idiomas']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['conocimiento_idiomas']['cinco'] += 1;
                    break;
            }


            switch ($form->recomendaciones_referencias) {
                case 1:
                    $aspectos_contratacion['recomendaciones_referencias']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['recomendaciones_referencias']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['recomendaciones_referencias']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['recomendaciones_referencias']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['recomendaciones_referencias']['cinco'] += 1;
                    break;
            }

            switch ($form->personalidad_actitudes) {
                case 1:
                    $aspectos_contratacion['personalidad_actitudes']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['personalidad_actitudes']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['personalidad_actitudes']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['personalidad_actitudes']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['personalidad_actitudes']['cinco'] += 1;
                    break;
            }

            switch ($form->capacidad_liderazgo) {
                case 1:
                    $aspectos_contratacion['capacidad_liderazgo']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['capacidad_liderazgo']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['capacidad_liderazgo']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['capacidad_liderazgo']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['capacidad_liderazgo']['cinco'] += 1;
                    break;
            }

            switch ($form->otros) {
                case 1:
                    $aspectos_contratacion['otros']['uno'] += 1;
                    break;
                case 2:
                    $aspectos_contratacion['otros']['dos'] += 1;
                    break;
                case 3:
                    $aspectos_contratacion['otros']['tres'] += 1;
                    break;
                case 4:
                    $aspectos_contratacion['otros']['cuatro'] += 1;
                    break;
                case 5:
                    $aspectos_contratacion['otros']['cinco'] += 1;
                    break;
            }



            switch ($form->nivel_compromiso_trabajo) {
                case 1:
                    $compromiso['nivel_compromiso_trabajo']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['nivel_compromiso_trabajo']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['nivel_compromiso_trabajo']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['nivel_compromiso_trabajo']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['nivel_compromiso_trabajo']['cinco'] += 1;
                    break;
            }


            switch ($form->afinidad_fidelidad) {
                case 1:
                    $compromiso['afinidad_fidelidad']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['afinidad_fidelidad']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['afinidad_fidelidad']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['afinidad_fidelidad']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['afinidad_fidelidad']['cinco'] += 1;
                    break;
            }

            switch ($form->desarrollo_capacidades) {
                case 1:
                    $compromiso['desarrollo_capacidades']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['desarrollo_capacidades']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['desarrollo_capacidades']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['desarrollo_capacidades']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['desarrollo_capacidades']['cinco'] += 1;
                    break;
            }

            switch ($form->aporte_profesional) {
                case 1:
                    $compromiso['aporte_profesional']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['aporte_profesional']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['aporte_profesional']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['aporte_profesional']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['aporte_profesional']['cinco'] += 1;
                    break;
            }


            switch ($form->iniciativa_resolucion_problemas) {
                case 1:
                    $compromiso['iniciativa_resolucion_problemas']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['iniciativa_resolucion_problemas']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['iniciativa_resolucion_problemas']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['iniciativa_resolucion_problemas']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['iniciativa_resolucion_problemas']['cinco'] += 1;
                    break;
            }


            switch ($form->concordancia_ideas_acciones) {
                case 1:
                    $compromiso['concordancia_ideas_acciones']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['concordancia_ideas_acciones']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['concordancia_ideas_acciones']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['concordancia_ideas_acciones']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['concordancia_ideas_acciones']['cinco'] += 1;
                    break;
            }

            switch ($form->expresion_ideas_opiniones) {
                case 1:
                    $compromiso['expresion_ideas_opiniones']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['expresion_ideas_opiniones']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['expresion_ideas_opiniones']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['expresion_ideas_opiniones']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['expresion_ideas_opiniones']['cinco'] += 1;
                    break;
            }

            switch ($form->afinidad_fidelidad) {
                case 1:
                    $compromiso['afinidad_fidelidad']['uno'] += 1;
                    break;
                case 2:
                    $compromiso['afinidad_fidelidad']['dos'] += 1;
                    break;
                case 3:
                    $compromiso['afinidad_fidelidad']['tres'] += 1;
                    break;
                case 4:
                    $compromiso['afinidad_fidelidad']['cuatro'] += 1;
                    break;
                case 5:
                    $compromiso['afinidad_fidelidad']['cinco'] += 1;
                    break;
            }



            
            switch ($form->responsabilidad_trabajo) {
                case 1:
                    $responsabilidad['responsabilidad_trabajo']['uno'] += 1;
                    break;
                case 2:
                    $responsabilidad['responsabilidad_trabajo']['dos'] += 1;
                    break;
                case 3:
                    $responsabilidad['responsabilidad_trabajo']['tres'] += 1;
                    break;
                case 4:
                    $responsabilidad['responsabilidad_trabajo']['cuatro'] += 1;
                    break;
                case 5:
                    $responsabilidad['responsabilidad_trabajo']['cinco'] += 1;
                    break;
            }


            switch ($form->compromiso_obligaciones) {
                case 1:
                    $responsabilidad['compromiso_obligaciones']['uno'] += 1;
                    break;
                case 2:
                    $responsabilidad['compromiso_obligaciones']['dos'] += 1;
                    break;
                case 3:
                    $responsabilidad['compromiso_obligaciones']['tres'] += 1;
                    break;
                case 4:
                    $responsabilidad['compromiso_obligaciones']['cuatro'] += 1;
                    break;
                case 5:
                    $responsabilidad['compromiso_obligaciones']['cinco'] += 1;
                    break;
            }


            switch ($form->apego_normatividad) {
                case 1:
                    $responsabilidad['apego_normatividad']['uno'] += 1;
                    break;
                case 2:
                    $responsabilidad['apego_normatividad']['dos'] += 1;
                    break;
                case 3:
                    $responsabilidad['apego_normatividad']['tres'] += 1;
                    break;
                case 4:
                    $responsabilidad['apego_normatividad']['cuatro'] += 1;
                    break;
                case 5:
                    $responsabilidad['apego_normatividad']['cinco'] += 1;
                    break;
            }



            switch ($form->concordancia_ideas_acciones) {
                case 1:
                    $honestidad['concordancia_ideas_acciones']['uno'] += 1;
                    break;
                case 2:
                    $honestidad['concordancia_ideas_acciones']['dos'] += 1;
                    break;
                case 3:
                    $honestidad['concordancia_ideas_acciones']['tres'] += 1;
                    break;
                case 4:
                    $honestidad['concordancia_ideas_acciones']['cuatro'] += 1;
                    break;
                case 5:
                    $honestidad['concordancia_ideas_acciones']['cinco'] += 1;
                    break;
            }

            switch ($form->emociones_interlocutor) {
                case 1:
                    $honestidad['emociones_interlocutor']['uno'] += 1;
                    break;
                case 2:
                    $honestidad['emociones_interlocutor']['dos'] += 1;
                    break;
                case 3:
                    $honestidad['emociones_interlocutor']['tres'] += 1;
                    break;
                case 4:
                    $honestidad['emociones_interlocutor']['cuatro'] += 1;
                    break;
                case 5:
                    $honestidad['emociones_interlocutor']['cinco'] += 1;
                    break;
            }


            switch ($form->carta_referencia) {
                case 1:
                    $honestidad['carta_referencia']['uno'] += 1;
                    break;
                case 2:
                    $honestidad['carta_referencia']['dos'] += 1;
                    break;
                case 3:
                    $honestidad['carta_referencia']['tres'] += 1;
                    break;
                case 4:
                    $honestidad['carta_referencia']['cuatro'] += 1;
                    break;
                case 5:
                    $honestidad['carta_referencia']['cinco'] += 1;
                    break;
            }



            switch ($form->informacion_procedimientos) {
                case 1:
                    $respeto['informacion_procedimientos']['uno'] += 1;
                    break;
                case 2:
                    $respeto['informacion_procedimientos']['dos'] += 1;
                    break;
                case 3:
                    $respeto['informacion_procedimientos']['tres'] += 1;
                    break;
                case 4:
                    $respeto['informacion_procedimientos']['cuatro'] += 1;
                    break;
                case 5:
                    $respeto['informacion_procedimientos']['cinco'] += 1;
                    break;
            }

            switch ($form->planes_toma_decisiones) {
                case 1:
                    $respeto['planes_toma_decisiones']['uno'] += 1;
                    break;
                case 2:
                    $respeto['planes_toma_decisiones']['dos'] += 1;
                    break;
                case 3:
                    $respeto['planes_toma_decisiones']['tres'] += 1;
                    break;
                case 4:
                    $respeto['planes_toma_decisiones']['cuatro'] += 1;
                    break;
                case 5:
                    $respeto['planes_toma_decisiones']['cinco'] += 1;
                    break;
            }

            switch ($form->persona_razonable) {
                case 1:
                    $respeto['persona_razonable']['uno'] += 1;
                    break;
                case 2:
                    $respeto['persona_razonable']['dos'] += 1;
                    break;
                case 3:
                    $respeto['persona_razonable']['tres'] += 1;
                    break;
                case 4:
                    $respeto['persona_razonable']['cuatro'] += 1;
                    break;
                case 5:
                    $respeto['persona_razonable']['cinco'] += 1;
                    break;
            }




            switch ($form->instrumentos_areas_trabajos) {
                case 1:
                    $disciplina['instrumentos_areas_trabajos']['uno'] += 1;
                    break;
                case 2:
                    $disciplina['instrumentos_areas_trabajos']['dos'] += 1;
                    break;
                case 3:
                    $disciplina['instrumentos_areas_trabajos']['tres'] += 1;
                    break;
                case 4:
                    $disciplina['instrumentos_areas_trabajos']['cuatro'] += 1;
                    break;
                case 5:
                    $disciplina['instrumentos_areas_trabajos']['cinco'] += 1;
                    break;
            }


            switch ($form->proyecto_laboral_personal) {
                case 1:
                    $disciplina['proyecto_laboral_personal']['uno'] += 1;
                    break;
                case 2:
                    $disciplina['proyecto_laboral_personal']['dos'] += 1;
                    break;
                case 3:
                    $disciplina['proyecto_laboral_personal']['tres'] += 1;
                    break;
                case 4:
                    $disciplina['proyecto_laboral_personal']['cuatro'] += 1;
                    break;
                case 5:
                    $disciplina['proyecto_laboral_personal']['cinco'] += 1;
                    break;
            }



            switch ($form->redes_wan_lan) {
                case 1:
                    $redes['redes_wan_lan']['uno'] += 1;
                    break;
                case 2:
                    $redes['redes_wan_lan']['dos'] += 1;
                    break;
                case 3:
                    $redes['redes_wan_lan']['tres'] += 1;
                    break;
                case 4:
                    $redes['redes_wan_lan']['cuatro'] += 1;
                    break;
                case 5:
                    $redes['redes_wan_lan']['cinco'] += 1;
                    break;
            }

            switch ($form->redes_wan_lan) {
                case 1:
                    $redes['seguridad_lan_wan']['uno'] += 1;
                    break;
                case 2:
                    $redes['seguridad_lan_wan']['dos'] += 1;
                    break;
                case 3:
                    $redes['seguridad_lan_wan']['tres'] += 1;
                    break;
                case 4:
                    $redes['seguridad_lan_wan']['cuatro'] += 1;
                    break;
                case 5:
                    $redes['seguridad_lan_wan']['cinco'] += 1;
                    break;
            }


            switch ($form->competencia_analizar_disenar_programar) {
                case 1:
                    $desarrollo_software['competencia_analizar_disenar_programar']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['competencia_analizar_disenar_programar']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['competencia_analizar_disenar_programar']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['competencia_analizar_disenar_programar']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['competencia_analizar_disenar_programar']['cinco'] += 1;
                    break;
            }

            switch ($form->desarrollar_sistemas_web) {
                case 1:
                    $desarrollo_software['desarrollar_sistemas_web']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['desarrollar_sistemas_web']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['desarrollar_sistemas_web']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['desarrollar_sistemas_web']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['desarrollar_sistemas_web']['cinco'] += 1;
                    break;
            }


            switch ($form->programar_documentar_estandares) {
                case 1:
                    $desarrollo_software['programar_documentar_estandares']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['programar_documentar_estandares']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['programar_documentar_estandares']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['programar_documentar_estandares']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['programar_documentar_estandares']['cinco'] += 1;
                    break;
            }

            switch ($form->programar_dispositivos_moviles) {
                case 1:
                    $desarrollo_software['programar_dispositivos_moviles']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['programar_dispositivos_moviles']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['programar_dispositivos_moviles']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['programar_dispositivos_moviles']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['programar_dispositivos_moviles']['cinco'] += 1;
                    break;
            }

            switch ($form->disenar_administrar_bases_datos) {
                case 1:
                    $desarrollo_software['disenar_administrar_bases_datos']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['disenar_administrar_bases_datos']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['disenar_administrar_bases_datos']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['disenar_administrar_bases_datos']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['disenar_administrar_bases_datos']['cinco'] += 1;
                    break;
            }

            switch ($form->gestionar_servicios_ti) {
                case 1:
                    $desarrollo_software['gestionar_servicios_ti']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['gestionar_servicios_ti']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['gestionar_servicios_ti']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['gestionar_servicios_ti']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['gestionar_servicios_ti']['cinco'] += 1;
                    break;
            }


            switch ($form->competencia_pruebas_software) {
                case 1:
                    $desarrollo_software['competencia_pruebas_software']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['competencia_pruebas_software']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['competencia_pruebas_software']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['competencia_pruebas_software']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['competencia_pruebas_software']['cinco'] += 1;
                    break;
            }

            switch ($form->tecnicas_herramientas_software) {
                case 1:
                    $desarrollo_software['tecnicas_herramientas_software']['uno'] += 1;
                    break;
                case 2:
                    $desarrollo_software['tecnicas_herramientas_software']['dos'] += 1;
                    break;
                case 3:
                    $desarrollo_software['tecnicas_herramientas_software']['tres'] += 1;
                    break;
                case 4:
                    $desarrollo_software['tecnicas_herramientas_software']['cuatro'] += 1;
                    break;
                case 5:
                    $desarrollo_software['tecnicas_herramientas_software']['cinco'] += 1;
                    break;
            }



            switch ($form->seguridad_informacion_hacking) {
                case 1:
                    $seguridad['seguridad_informacion_hacking']['uno'] += 1;
                    break;
                case 2:
                    $seguridad['seguridad_informacion_hacking']['dos'] += 1;
                    break;
                case 3:
                    $seguridad['seguridad_informacion_hacking']['tres'] += 1;
                    break;
                case 4:
                    $seguridad['seguridad_informacion_hacking']['cuatro'] += 1;
                    break;
                case 5:
                    $seguridad['seguridad_informacion_hacking']['cinco'] += 1;
                    break;
            }

            switch ($form->conocimientos_legales) {
                case 1:
                    $seguridad['conocimientos_legales']['uno'] += 1;
                    break;
                case 2:
                    $seguridad['conocimientos_legales']['dos'] += 1;
                    break;
                case 3:
                    $seguridad['conocimientos_legales']['tres'] += 1;
                    break;
                case 4:
                    $seguridad['conocimientos_legales']['cuatro'] += 1;
                    break;
                case 5:
                    $seguridad['conocimientos_legales']['cinco'] += 1;
                    break;
            }


            switch ($form->asesoria_sistemas_operativos) {
                case 1:
                    $seguridad['asesoria_sistemas_operativos']['uno'] += 1;
                    break;
                case 2:
                    $seguridad['asesoria_sistemas_operativos']['dos'] += 1;
                    break;
                case 3:
                    $seguridad['asesoria_sistemas_operativos']['tres'] += 1;
                    break;
                case 4:
                    $seguridad['asesoria_sistemas_operativos']['cuatro'] += 1;
                    break;
                case 5:
                    $seguridad['asesoria_sistemas_operativos']['cinco'] += 1;
                    break;
            }

            switch ($form->asesoria_arquitectura_computadoras) {
                case 1:
                    $seguridad['asesoria_arquitectura_computadoras']['uno'] += 1;
                    break;
                case 2:
                    $seguridad['asesoria_arquitectura_computadoras']['dos'] += 1;
                    break;
                case 3:
                    $seguridad['asesoria_arquitectura_computadoras']['tres'] += 1;
                    break;
                case 4:
                    $seguridad['asesoria_arquitectura_computadoras']['cuatro'] += 1;
                    break;
                case 5:
                    $seguridad['asesoria_arquitectura_computadoras']['cinco'] += 1;
                    break;
            }

            switch ($form->conocimientos_analisis_diseno_pruebas) {
                case 1:
                    $seguridad['conocimientos_analisis_diseno_pruebas']['uno'] += 1;
                    break;
                case 2:
                    $seguridad['conocimientos_analisis_diseno_pruebas']['dos'] += 1;
                    break;
                case 3:
                    $seguridad['conocimientos_analisis_diseno_pruebas']['tres'] += 1;
                    break;
                case 4:
                    $seguridad['conocimientos_analisis_diseno_pruebas']['cuatro'] += 1;
                    break;
                case 5:
                    $seguridad['conocimientos_analisis_diseno_pruebas']['cinco'] += 1;
                    break;
            }



            switch ($form->capacidad_detectar_necesidades) {
                case 1:
                    $admin_proyectos['capacidad_detectar_necesidades']['uno'] += 1;
                    break;
                case 2:
                    $admin_proyectos['capacidad_detectar_necesidades']['dos'] += 1;
                    break;
                case 3:
                    $admin_proyectos['capacidad_detectar_necesidades']['tres'] += 1;
                    break;
                case 4:
                    $admin_proyectos['capacidad_detectar_necesidades']['cuatro'] += 1;
                    break;
                case 5:
                    $admin_proyectos['capacidad_detectar_necesidades']['cinco'] += 1;
                    break;
            }

            switch ($form->planear_administrar_ejecutar) {
                case 1:
                    $admin_proyectos['planear_administrar_ejecutar']['uno'] += 1;
                    break;
                case 2:
                    $admin_proyectos['planear_administrar_ejecutar']['dos'] += 1;
                    break;
                case 3:
                    $admin_proyectos['planear_administrar_ejecutar']['tres'] += 1;
                    break;
                case 4:
                    $admin_proyectos['planear_administrar_ejecutar']['cuatro'] += 1;
                    break;
                case 5:
                    $admin_proyectos['planear_administrar_ejecutar']['cinco'] += 1;
                    break;
            }

            switch ($form->habilidades_liderazgo_ti) {
                case 1:
                    $admin_proyectos['habilidades_liderazgo_ti']['uno'] += 1;
                    break;
                case 2:
                    $admin_proyectos['habilidades_liderazgo_ti']['dos'] += 1;
                    break;
                case 3:
                    $admin_proyectos['habilidades_liderazgo_ti']['tres'] += 1;
                    break;
                case 4:
                    $admin_proyectos['habilidades_liderazgo_ti']['cuatro'] += 1;
                    break;
                case 5:
                    $admin_proyectos['habilidades_liderazgo_ti']['cinco'] += 1;
                    break;
            }
            
        }

    /*   dd($disciplina); */
        return view('stadistics.index', 
        compact('usuarios','ultimos_registros', 'formularios', 'pertinencia', 'actividad_actual',
         'trabajo_tics', 'eficiencia_laboral','calificacion_formacion_laboral', 
         'utilidad_residencias_practicas','aspectos_contratacion', 'compromiso', 
         'responsabilidad', 'honestidad', 'respeto', 'disciplina', 'redes',
          'desarrollo_software', 'seguridad', 'admin_proyectos'));
    }
}
