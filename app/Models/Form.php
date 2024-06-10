<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public $table = "form";

    protected $fillable = [
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'fecha_nacimiento',
        'email',
        'telefono',
        'fecha_egreso',
        'calidad_docentes',
        'plan_estudios',
        'oportunidad_investigacion',
        'satisfaccion_condiciones_estudio',
        'actividad_actual',
        'trabajo_tics',
        'razon_social',
        'domicilio',
        'calle_numero',
        'colonia_cp_ciudad',
        'municipio',
        'estado',
        'telefonos',
        'jefe_inmediato',
        'eficiencia_laboral',
        'calificacion_formacion_laboral',
        'utilidad_residencias_practicas',
        'area_estudio',
        'titulacion',
        'experiencia_laboral_egresar',
        'competencia_laboral',
        'posicionamiento_institucion',
        'conocimiento_idiomas',
        'recomendaciones_referencias',
        'personalidad_actitudes',
        'capacidad_liderazgo',
        'otros',
        'nivel_compromiso_trabajo',
        'afinidad_fidelidad',
        'desarrollo_capacidades',
        'aporte_profesional',
        'iniciativa_resolucion_problemas',
        'concordancia_ideas_acciones',
        'expresion_ideas_opiniones',
        'responsabilidad_trabajo',
        'compromiso_obligaciones',
        'apego_normatividad',
        'emociones_interlocutor',
        'carta_referencia',
        'informacion_procedimientos',
        'planes_toma_decisiones',
        'persona_razonable',
        'instrumentos_areas_trabajos',
        'proyecto_laboral_personal',
        'redes_wan_lan',
        'seguridad_lan_wan',
        'competencia_analizar_disenar_programar',
        'desarrollar_sistemas_web',
        'programar_documentar_estandares',
        'programar_dispositivos_moviles',
        'disenar_administrar_bases_datos',
        'gestionar_servicios_ti',
        'competencia_pruebas_software',
        'tecnicas_herramientas_software',
        'seguridad_informacion_hacking',
        'conocimientos_legales',
        'asesoria_sistemas_operativos',
        'asesoria_arquitectura_computadoras',
        'conocimientos_analisis_diseno_pruebas',
        'capacidad_detectar_necesidades',
        'planear_administrar_ejecutar',
        'habilidades_liderazgo_ti',
    ];
    
}
