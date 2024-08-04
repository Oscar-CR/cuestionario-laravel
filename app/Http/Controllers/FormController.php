<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view('form.index');
    }

    public function all() {
        $registros = Form::all();
        return view('form.index', compact('registros'));
    }
    public function store(Request $request)  {

      
        $create_form = new Form();

        $create_form->apellido_paterno = $request->apellido_paterno;
        $create_form->apellido_materno = $request->apellido_materno;
        $create_form->nombres = $request->nombres;
        $create_form->fecha_nacimiento = $request->fecha_nacimiento;
        $create_form->email = $request->email;
        $create_form->telefono = $request->telefono;
        $create_form->fecha_egreso = $request->fecha_egreso;
        
        $create_form->calidad_docentes = $request->calidad_docentes;
        $create_form->plan_estudios = $request->plan_estudios;
        $create_form->oportunidad_investigacion = $request->oportunidad_investigacion;
        $create_form->satisfaccion_condiciones_estudio = $request->satisfaccion_condiciones_estudio;
        
        $create_form->actividad_actual = $request->actividad_actual;
        $create_form->trabajo_tics = $request->trabajo_tics;
        
        $create_form->razon_social = $request->razon_social;
        $create_form->domicilio = $request->domicilio;
        $create_form->calle_numero = $request->calle_numero;
        $create_form->colonia_cp_ciudad = $request->colonia_cp_ciudad;
        $create_form->municipio = $request->municipio;
        $create_form->estado = $request->estado;
        $create_form->telefonos = $request->telefonos;
        $create_form->jefe_inmediato = $request->jefe_inmediato;
        
        $create_form->eficiencia_laboral = $request->eficiencia_laboral;
        $create_form->calificacion_formacion_laboral = $request->calificacion_formacion_laboral;
        $create_form->utilidad_residencias_practicas = $request->utilidad_residencias_practicas;
        
        $create_form->area_estudio = $request->area_estudio;
        $create_form->titulacion = $request->titulacion;
        $create_form->experiencia_laboral_egresar = $request->experiencia_laboral_egresar;
        $create_form->competencia_laboral = $request->competencia_laboral;
        $create_form->posicionamiento_institucion = $request->posicionamiento_institucion;
        $create_form->conocimiento_idiomas = $request->conocimiento_idiomas;
        $create_form->recomendaciones_referencias = $request->recomendaciones_referencias;
        $create_form->personalidad_actitudes = $request->personalidad_actitudes;
        $create_form->capacidad_liderazgo = $request->capacidad_liderazgo;
        $create_form->otros = $request->otros;
        
        $create_form->nivel_compromiso_trabajo = $request->nivel_compromiso_trabajo;
        $create_form->afinidad_fidelidad = $request->afinidad_fidelidad;
        $create_form->desarrollo_capacidades = $request->desarrollo_capacidades;
        $create_form->aporte_profesional = $request->aporte_profesional;
        $create_form->iniciativa_resolucion_problemas = $request->iniciativa_resolucion_problemas;
        $create_form->concordancia_ideas_acciones = $request->concordancia_ideas_acciones;
        $create_form->expresion_ideas_opiniones = $request->expresion_ideas_opiniones;
        
        $create_form->responsabilidad_trabajo = $request->responsabilidad_trabajo;
        $create_form->compromiso_obligaciones = $request->compromiso_obligaciones;
        $create_form->apego_normatividad = $request->apego_normatividad;
        
        $create_form->emociones_interlocutor = $request->emociones_interlocutor;
        $create_form->carta_referencia = $request->carta_referencia;
        $create_form->informacion_procedimientos = $request->informacion_procedimientos;
        $create_form->planes_toma_decisiones = $request->planes_toma_decisiones;
        $create_form->persona_razonable = $request->persona_razonable;
        
        $create_form->instrumentos_areas_trabajos = $request->instrumentos_areas_trabajos;
        $create_form->proyecto_laboral_personal = $request->proyecto_laboral_personal;
        
        $create_form->redes_wan_lan = $request->redes_wan_lan;
        $create_form->seguridad_lan_wan = $request->seguridad_lan_wan;
        $create_form->competencia_analizar_disenar_programar = $request->competencia_analizar_disenar_programar;
        $create_form->desarrollar_sistemas_web = $request->desarrollar_sistemas_web;
        $create_form->programar_documentar_estandares = $request->programar_documentar_estandares;
        $create_form->programar_dispositivos_moviles = $request->programar_dispositivos_moviles;
        $create_form->disenar_administrar_bases_datos = $request->disenar_administrar_bases_datos;
        $create_form->gestionar_servicios_ti = $request->gestionar_servicios_ti;
        $create_form->competencia_pruebas_software = $request->competencia_pruebas_software;
        $create_form->tecnicas_herramientas_software = $request->tecnicas_herramientas_software;
        
        $create_form->seguridad_informacion_hacking = $request->seguridad_informacion_hacking;
        $create_form->conocimientos_legales = $request->conocimientos_legales;
        $create_form->asesoria_sistemas_operativos = $request->asesoria_sistemas_operativos;
        
        $create_form->asesoria_arquitectura_computadoras = $request->asesoria_arquitectura_computadoras;
        $create_form->conocimientos_analisis_diseno_pruebas = $request->conocimientos_analisis_diseno_pruebas;
        $create_form->capacidad_detectar_necesidades = $request->capacidad_detectar_necesidades;
        $create_form->planear_administrar_ejecutar = $request->planear_administrar_ejecutar;
        $create_form->habilidades_liderazgo_ti = $request->habilidades_liderazgo_ti;
        
        $create_form->save();

        return redirect()->route('thanks.show')->with('success', 'Formulario guardado correctamente.');
    }

    public function thanks()  {

        return view('tanks');

    }
}




