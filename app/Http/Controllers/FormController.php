<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)  {
        $validatedData = $request->validate([
            'apellido_paterno' => 'required|string|max:50',
            'apellido_materno' => 'required|string|max:50',
            'nombres' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
            'email' => 'required|email|max:100',
            'telefono' => 'required|string|max:20',
            'fecha_egreso' => 'required|date_format:Y-m',

            'calidad_docentes' => 'required|integer',
            'plan_estudios' => 'required|integer',
            'oportunidad_investigacion' => 'required|integer',
            'satisfaccion_condiciones_estudio' => 'required|integer',

            'actividad_actual' => 'required|integer',
            'trabajo_tics' => 'required|integer',

            'razon_social' => 'required|string',
            'domicilio' => 'required|string',
            'calle_numero' => 'required|string',
            'colonia_cp_ciudad' => 'required|string',
            'municipio' => 'required|string',
            'estado' => 'required|string',
            'telefonos' => 'required|string',
            'jefe_inmediato' => 'required|string',

            'eficiencia_laboral' => 'required|string',
            'calificacion_formacion_laboral' => 'required|string',
            'utilidad_residencias_practicas' => 'required|string',

            'area_estudio' => 'required|integer',
            'titulacion' => 'required|integer',
            'experiencia_laboral_egresar' => 'required|integer',
            'competencia_laboral' => 'required|integer',
            'posicionamiento_institucion' => 'required|integer',
            'conocimiento_idiomas' => 'required|integer',
            'recomendaciones_referencias' => 'required|integer',
            'personalidad_actitudes' => 'required|integer',
            'capacidad_liderazgo' => 'required|integer',
            'otros' => 'required|integer',

            'nivel_compromiso_trabajo' => 'required|integer',
            'afinidad_fidelidad' => 'required|integer',
            'desarrollo_capacidades' => 'required|integer',
            'aporte_profesional' => 'required|integer',
            'iniciativa_resolucion_problemas' => 'required|integer',
            'concordancia_ideas_acciones' => 'required|integer',
            'expresion_ideas_opiniones' => 'required|integer',

            'responsabilidad_trabajo' => 'required|integer',
            'compromiso_obligaciones' => 'required|integer',
            'apego_normatividad' => 'required|integer',

            'emociones_interlocutor' => 'required|integer',
            'carta_referencia' => 'required|integer',
            'informacion_procedimientos' => 'required|integer',
            'planes_toma_decisiones' => 'required|integer',
            'persona_razonable' => 'required|integer',

            'instrumentos_areas_trabajos' => 'required|integer',
            'proyecto_laboral_personal' => 'required|integer',

            'redes_wan_lan' => 'required|integer',
            'seguridad_lan_wan' => 'required|integer',
            'competencia_analizar_disenar_programar' => 'required|integer',
            'desarrollar_sistemas_web' => 'required|integer',
            'programar_documentar_estandares' => 'required|integer',
            'programar_dispositivos_moviles' => 'required|integer',
            'disenar_administrar_bases_datos' => 'required|integer',
            'gestionar_servicios_ti' => 'required|integer',
            'competencia_pruebas_software' => 'required|integer',
            'tecnicas_herramientas_software' => 'required|integer',

            'seguridad_informacion_hacking' => 'required|integer',
            'conocimientos_legales' => 'required|integer',
            'asesoria_sistemas_operativos' => 'required|integer',

            'asesoria_arquitectura_computadoras' => 'required|integer',
            'conocimientos_analisis_diseno_pruebas' => 'required|integer',
            'capacidad_detectar_necesidades' => 'required|integer',
            'planear_administrar_ejecutar' => 'required|integer',
            'habilidades_liderazgo_ti' => 'required|integer',
        ]);

        Form::create($validatedData);

        return redirect()->route('tanks')->with('success', 'Formulario guardado correctamente.');
    }

    public function thanks()  {

        return view('tanks');

    }
}




