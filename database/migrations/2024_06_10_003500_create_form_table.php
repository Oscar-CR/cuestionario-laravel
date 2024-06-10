<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('apellido_paterno',50);
            $table->string('apellido_materno',50);
            $table->string('nombres',50);
            $table->date('fecha_nacimiento');
            $table->string('email',100);
            $table->string('telefono',20);
            $table->string('fecha_egreso', 7);

            $table->tinyInteger('calidad_docentes');
            $table->tinyInteger('plan_estudios');
            $table->tinyInteger('oportunidad_investigacion');
            $table->tinyInteger('satisfaccion_condiciones_estudio');

            $table->tinyInteger('actividad_actual');
            $table->tinyInteger('trabajo_tics');

            $table->string('razon_social');
            $table->string('domicilio');
            $table->string('calle_numero');
            $table->string('colonia_cp_ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefonos');
            $table->string('jefe_inmediato');

            $table->string('eficiencia_laboral');
            $table->string('calificacion_formacion_laboral');
            $table->string('utilidad_residencias_practicas');

            $table->tinyInteger('area_estudio');
            $table->tinyInteger('titulacion');
            $table->tinyInteger('experiencia_laboral_egresar');
            $table->tinyInteger('competencia_laboral');
            $table->tinyInteger('posicionamiento_institucion');
            $table->tinyInteger('conocimiento_idiomas');
            $table->tinyInteger('recomendaciones_referencias');
            $table->tinyInteger('personalidad_actitudes');
            $table->tinyInteger('capacidad_liderazgo');
            $table->tinyInteger('otros');

            $table->tinyInteger('nivel_compromiso_trabajo');
            $table->tinyInteger('afinidad_fidelidad');
            $table->tinyInteger('desarrollo_capacidades');
            $table->tinyInteger('aporte_profesional');
            $table->tinyInteger('iniciativa_resolucion_problemas');
            $table->tinyInteger('concordancia_ideas_acciones');
            $table->tinyInteger('expresion_ideas_opiniones');

            $table->tinyInteger('responsabilidad_trabajo');
            $table->tinyInteger('compromiso_obligaciones');
            $table->tinyInteger('apego_normatividad');

            $table->tinyInteger('emociones_interlocutor');
            $table->tinyInteger('carta_referencia');
            $table->tinyInteger('informacion_procedimientos');
            $table->tinyInteger('planes_toma_decisiones');
            $table->tinyInteger('persona_razonable');

            $table->tinyInteger('instrumentos_areas_trabajos');
            $table->tinyInteger('proyecto_laboral_personal');

            $table->tinyInteger('redes_wan_lan');
            $table->tinyInteger('seguridad_lan_wan');
            $table->tinyInteger('competencia_analizar_disenar_programar');
            $table->tinyInteger('desarrollar_sistemas_web');
            $table->tinyInteger('programar_documentar_estandares');
            $table->tinyInteger('programar_dispositivos_moviles');
            $table->tinyInteger('disenar_administrar_bases_datos');
            $table->tinyInteger('gestionar_servicios_ti');
            $table->tinyInteger('competencia_pruebas_software');
            $table->tinyInteger('tecnicas_herramientas_software');

            $table->tinyInteger('seguridad_informacion_hacking');
            $table->tinyInteger('conocimientos_legales');
            $table->tinyInteger('asesoria_sistemas_operativos');

            $table->tinyInteger('asesoria_arquitectura_computadoras');
            $table->tinyInteger('conocimientos_analisis_diseno_pruebas');
            $table->tinyInteger('capacidad_detectar_necesidades');
            $table->tinyInteger('planear_administrar_ejecutar');
            $table->tinyInteger('habilidades_liderazgo_ti');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form');
    }
};
