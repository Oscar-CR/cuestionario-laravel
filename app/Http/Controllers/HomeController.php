<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()  { 

        $formularios = Form::all();

        $total_registros = count( $formularios);
        //8
        $pertinencia = [
            $calidad_docentes = 0,
            $plan_estudios = 0,
            $oportunidad_investigacion = 0,
            $satisfaccion_condiciones_estudio = 0,
        ];
        //9
        $actividad_actual = [
            $trabaja = 0,
            $estudia = 0,
            $estudia_y_trabaja = 0,
            $no_estudia_ni_trabaja = 0,
        ];
        //10
        $trabajo_tics = [
            $trabajo_tics_si = 0,
            $trabajo_tics_no = 0,
        ];
        //19
        $eficiencia_laboral = [
            $muy_eficiente = 0,
            $eficiente = 0,
            $poco_eficiente = 0,
            $deficiente = 0,
        ];
        //20
        $calificacion_formacion_laboral = [
            $excelente = 0,
            $bueno = 0,
            $regular = 0,
            $malo = 0,
            $pesimo = 0
        ];
        //21
        $utilidad_residencias_practicas = [
            $excelente = 0,
            $bueno = 0,
            $regular = 0,
            $malo = 0,
            $pesimo = 0
        ];
        //22
        $aspectos_contratacion = [
            $area_estudio = 0,
            $titulacion = 0,
            $experiencia_laboral_egresar = 0,
            $competencia_laboral = 0,
            $posicionamiento_institucion = 0,
            $conocimiento_idiomas = 0,
            $recomendaciones_referencias = 0,
            $personalidad_actitudes = 0,
            $capacidad_liderazgo = 0,
            $otros = 0,
        ];

        //23
        $compromiso = [
            $nivel_compromiso_trabajo = 0,
            $afinidad_fidelidad = 0,
            $desarrollo_capacidades = 0,
            $aporte_profesional = 0,
            $iniciativa_resolucion_problemas = 0,
            $concordancia_ideas_acciones = 0,
            $expresion_ideas_opiniones = 0,
            $afinidad_fidelidad = 0,
        ];
      
        //24
        $responsabilidad = [
            $responsabilidad_trabajo = 0,
            $compromiso_obligaciones = 0,
            $apego_normatividad = 0,
        ];
        //25
        $honestidad = [
            $concordancia_ideas_acciones = 0,
            $emociones_interlocutor = 0,
            $carta_referencia = 0,
        ];
        //26 
        $respeto = [
            $informacion_procedimientos = 0,
            $planes_toma_decisiones = 0,
            $persona_razonable = 0,
        ];
        //27
        $disciplina = [
            $instrumentos_areas_trabajos = 0,
            $proyecto_laboral_personal = 0,
        ];
        //28
        $redes = [
            $redes_wan_lan = 0,
            $seguridad_lan_wan = 0,
        ];
        //29
        $desarrollo_software = [
            $competencia_analizar_disenar_programar = 0,
            $desarrollar_sistemas_web = 0,
            $programar_documentar_estandares = 0,
            $programar_dispositivos_moviles = 0,
            $disenar_administrar_bases_datos = 0,
            $gestionar_servicios_ti = 0,
            $competencia_pruebas_software = 0,
            $tecnicas_herramientas_software = 0,
        ];
        //30
        $seguridad = [
            $seguridad_informacion_hacking = 0,
            $conocimientos_legales = 0,
            $asesoria_sistemas_operativos = 0,
            $asesoria_arquitectura_computadoras = 0,
            $conocimientos_analisis_diseno_pruebas = 0,
        ];
        //31
        $admin_proyectos = [
            $capacidad_detectar_necesidades = 0,
            $planear_administrar_ejecutar = 0,
            $habilidades_liderazgo_ti = 0,

        ];

        foreach($formularios  as $form){
           
        }


        return view('stadistics.index', compact('total_registros'));
    }
}
