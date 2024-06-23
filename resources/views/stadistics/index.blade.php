@extends('layouts.app')

@section('content')

<div class="flex justify-between px-10 shadow-lg w-full py-4">
    <img src="{{ asset('/img/educacion.png')}}" alt="logo" class="object-contain " style="width: 200px; margin-left:40px;">
    <div class="text-center text-2xl font-bold pr-20 mt-4"> 
        <p>TECNOLÓGICO NACIONAL DE MÉXICO</p>  
        <p>INSTITUTO TECNOLÓGICO DE TLALNEPANTLA</p>
    </div>
    <img src="{{ asset('/img/ittla.png')}}" alt="otra imagen" class="object-contain" style="width: 100px;margin-right:40px">
</div>
<div class="flex justify-between mt-10 mx-10">
    <p class="font-bold text-2xl">Estadísticas generales de encuesta de egresados</p>
    <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-red-600 font-semibold hover:underline underline">
            Cerrar sesión
        </button>
    </form>
</div>

<div class="flex w-full mx-10 mt-10">
            <div class="w-1/2" style="width: 300px; height:200px;">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-bold mb-2">Total Registros:</h2>
                    <p class="text-bold text-4xl">{{ count($formularios)}}</p>
                </div>
            </div>
        
            <div class="w-1/2" style="width: 300px; height:200px; margin-left:30px;">
                <div class="bg-white p-4 rounded shadow" >
                    <h2 class="text-xl font-bold mb-2">Total Usuarios: </h2>
                    <p class="text-bold text-4xl">{{ count($usuarios)}}</p>
                </div>
            </div>
        
            <div class="w-1/2">
                
            </div>
        
            <div class="w-1/2">
                
            </div>
</div>

<section class="w-full px-10">

    <h1 class="text-2xl font-bold">Ultimos registros</h1>

    <table class="table-auto w-full divide-y divide-gray-200">
        <thead>
            <tr class="bg-green-600 text-white">
                <th class="px-6 py-3 text-xs font-medium uppercase tracking-wider">Nombre</th>
                <th class="px-6 py-3 text-xs font-medium uppercase tracking-wider">Correo</th>
                <th class="px-6 py-3 text-xs font-medium uppercase tracking-wider">Teléfono</th>
                <th class="px-6 py-3 text-xs font-medium uppercase tracking-wider">Fecha de Egreso</th>
                <th class="px-6 py-3 text-xs font-medium uppercase tracking-wider">Opciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($ultimos_registros as $registros)
                <tr class="text-center">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $registros->nombres }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $registros->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $registros->telefono }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $registros->fecha_egreso }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">Ver detalles</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>

<section>
    <h1 class="text-2xl font-bold  px-10">Estadísticas generales</h1>
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
        <div class="col-span-1 bg-white shadow-md rounded-lg p-4">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div style="width: 100%; height: 400px;">
                    <h6 class="font-semibold mb-10 text-sm text-center">Pertenencia, disponibilidad, medios y recursos para el aprendizaje</h6>
                    <canvas id="pertinencia"  width="300" height="300"></canvas>
                </div>
                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Aspectos que valora la empresa u organismo para la contratación de los egresados</h6>
                        <canvas id="aspectos_contratacion"  width="300" height="300"></canvas>
                    </div>
                </div>
                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Compromiso</h6>
                        <canvas id="compromiso"  width="300" height="300"></canvas>
                    </div>
                </div>
                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Responsabilidad</h6>
                        <canvas id="responsabilidad"  width="300" height="300"></canvas>
                    </div>
                </div>







                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Honestidad</h6>
                        <canvas id="honestidad"  width="300" height="300"></canvas>
                    </div>
                </div>


                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Respeto</h6>
                        <canvas id="respeto"  width="300" height="300"></canvas>
                    </div>
                </div>


                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Disciplina</h6>
                        <canvas id="disciplina"  width="300" height="300"></canvas>
                    </div>
                </div>


                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Redes</h6>
                        <canvas id="redes"  width="300" height="300"></canvas>
                    </div>
                </div>


                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Desarrollo de software</h6>
                        <canvas id="desarrollo_software"  width="300" height="300"></canvas>
                    </div>
                </div>


                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Seguridad</h6>
                        <canvas id="seguridad"  width="300" height="300"></canvas>
                    </div>
                </div>

                <div style="width: 100%; height: 400px;">
                    <div style="width: 100%; height: 400px;">
                        <h6 class="font-semibold mb-10 text-sm text-center">Administracion de proyectos</h6>
                        <canvas id="admin_proyectos"  width="300" height="300"></canvas>
                    </div>
                </div>

                
            </div>
        </div>
        <div class="col-span-1 bg-white shadow-md rounded-lg p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pb-20">
                <div style="width: 100%; max-height: 400px;">
                    <h6 class="font-semibold mb-10 text-sm text-center">Actividad a la que se dedica actualmente</h6>
                    <canvas id="actividad_actual" width="300" height="300"></canvas>
                </div>
                <div style="width: 100%; max-height: 400px;">
                    <h6 class="font-semibold mb-10 text-sm text-center">Si está trabajando, su trabajo está relacionado con el área de Tics:</h6>
                    <canvas id="trabajo_tics"  width="300" height="300"></canvas>
                </div>

                <div style="width: 100%; max-height: 400px; margin-top:80px;">
                    <h6 class="font-semibold mb-10 text-sm text-center">Eficiencia para realizar las actividades laborales, en relación a su formación académica:</h6>
                    <canvas id="eficiencia_laboral"  width="300" height="300"></canvas>
                </div>

                <div style="width: 100%; max-height: 400px; margin-top:80px;">
                    <h6 class="font-semibold mb-10 text-sm text-center">Cómo califica su formación académica con respecto a su desempeño laboral:</h6>
                    <canvas id="calificacion_formacion_laboral"  width="300" height="300"></canvas>
                </div>
                

                <div style="width: 100%; max-height: 400px; margin-top:80px;">
                    <h6 class="font-semibold mb-10 text-sm text-center">Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional:</h6>
                    <canvas id="utilidad_residencias_practicas"  width="300" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>


        
<script>
document.getElementById('logout-form').addEventListener('submit', function(event) {
    event.preventDefault(); 
    if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
        this.submit(); 
    }
});
</script>


@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script>
       
        // Colores para los gráficos
        var chartColors = ['#1B396A', '#26914F', '#37AF74', '#ECD90F','#A12040', '#D6BC97'];

        // Configuración de opciones comunes para los gráficos
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    ticks: {
                        fontSize: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

     
        var pertinencia = {!! json_encode($pertinencia) !!};
        var actividad_actual = {!! json_encode($actividad_actual) !!};
        var trabajo_tics = {!! json_encode($trabajo_tics) !!};
        var eficiencia_laboral = {!! json_encode($eficiencia_laboral) !!};
        var calificacion_formacion_laboral = {!! json_encode($calificacion_formacion_laboral) !!};
        var utilidad_residencias_practicas = {!! json_encode($utilidad_residencias_practicas) !!};
        var aspectos_contratacion = {!! json_encode($aspectos_contratacion) !!};
        var compromiso = {!! json_encode($compromiso) !!};
        var responsabilidad = {!! json_encode($responsabilidad) !!};


        var honestidad = {!! json_encode($honestidad) !!};
        var respeto = {!! json_encode($respeto) !!};
        var disciplina = {!! json_encode($disciplina) !!};
        var redes = {!! json_encode($redes) !!};
        var desarrollo_software = {!! json_encode($desarrollo_software) !!};
        var seguridad = {!! json_encode($seguridad) !!};
        var admin_proyectos = {!! json_encode($admin_proyectos) !!};

        console.log(honestidad);
        console.log(respeto);
        console.log(disciplina);
        console.log(redes);
        console.log(desarrollo_software);
        console.log(seguridad);
        console.log(admin_proyectos);

        var data_actividad_actual = Object.values(actividad_actual);
        var data_trabajo_tics = Object.values(trabajo_tics);
        var data_eficiencia_laboral = Object.values(eficiencia_laboral);
        var data_calificacion_formacion_laboral = Object.values(calificacion_formacion_laboral);
        var data_utilidad_residencias_practicas = Object.values(utilidad_residencias_practicas);

        // Labels
        var labels_ranking = ['Muy malo', 'Malo', 'Regular', 'Bueno', 'Excelente'];


        var datasets_pertinencia = [];

        var index = 0;

        for (var key in pertinencia) {
            datasets_pertinencia.push({
                label: key.replace('_', ' '),
                data: Object.values(pertinencia[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var datasets_pertinencia_ctx = document.getElementById('pertinencia').getContext('2d');
        var pertinenciaChart = new Chart(datasets_pertinencia_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_pertinencia
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(document.getElementById("actividad_actual"), {
            type: 'doughnut',
            data: {
                labels: ['Trabaja','Estudia','Estudia y trabaja',' Estudia y trabaja'],
                datasets: [{
                    label: 'Total',
                    data: data_actividad_actual,
                    backgroundColor: chartColors, 
                    borderColor: chartColors,
                    borderWidth: 1
                }]
            },
            options: chartOptions
        });


        new Chart(document.getElementById("trabajo_tics"), {
            type: 'doughnut',
            data: {
                labels: ['Si','No'],
                datasets: [{
                    label: 'Total',
                    data: data_trabajo_tics,
                    backgroundColor: chartColors, 
                    borderColor: chartColors,
                    borderWidth: 1
                }]
            },
            options: chartOptions
        });


        new Chart(document.getElementById("eficiencia_laboral"), {
            type: 'doughnut',
            data: {
                labels: ['Deficiente',' Poco eficiente','Eficiente','Muy eficiente'],
                datasets: [{
                    label:  'Total',
                    data: data_eficiencia_laboral,
                    backgroundColor: chartColors, 
                    borderColor: chartColors,
                    borderWidth: 1
                }]
            },
            options: chartOptions
        });


        new Chart(document.getElementById("calificacion_formacion_laboral"), {
            type: 'doughnut',
            data: {
                labels: ['Pésimo',' Malo','Regular','Bueno', 'Excelente'],
                datasets: [{
                    label:  'Total',
                    data: data_calificacion_formacion_laboral,
                    backgroundColor: chartColors, 
                    borderColor: chartColors,
                    borderWidth: 1
                }]
            },
            options: chartOptions
        });


        new Chart(document.getElementById("utilidad_residencias_practicas"), {
            type: 'doughnut',
            data: {
                labels: ['Pésimo',' Malo','Regular','Bueno', 'Excelente'],
                datasets: [{
                    label:  'Total',
                    data: data_utilidad_residencias_practicas,
                    backgroundColor: chartColors, 
                    borderColor: chartColors,
                    borderWidth: 1
                }]
            },
            options: chartOptions
        });




        
        var datasets_aspectos_contratacion = [];
        var index = 0;
        for (var key in aspectos_contratacion) {
            datasets_aspectos_contratacion.push({
                label: key.replace('_', ' '),
                data: Object.values(aspectos_contratacion[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_contratacion_ctx = document.getElementById('aspectos_contratacion').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_contratacion_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_aspectos_contratacion
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });


        var datasets_compromiso = [];
        var index = 0;
        for (var key in compromiso) {
            datasets_compromiso.push({
                label: key.replace('_', ' '),
                data: Object.values(compromiso[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_compromiso_ctx = document.getElementById('compromiso').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_compromiso_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_compromiso
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });


        var datasets_responsabilidad = [];
        var index = 0;
        for (var key in responsabilidad) {
            datasets_responsabilidad.push({
                label: key.replace('_', ' '),
                data: Object.values(responsabilidad[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_responsabilidad_ctx = document.getElementById('responsabilidad').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_responsabilidad_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_responsabilidad
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });





        var datasets_responsabilidad = [];
        var index = 0;
        for (var key in responsabilidad) {
            datasets_responsabilidad.push({
                label: key.replace('_', ' '),
                data: Object.values(responsabilidad[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_responsabilidad_ctx = document.getElementById('responsabilidad').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_responsabilidad_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_responsabilidad
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });




        var datasets_honestidad = [];
        var index = 0;
        for (var key in honestidad) {
            datasets_honestidad.push({
                label: key.replace('_', ' '),
                data: Object.values(honestidad[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_honestidad_ctx = document.getElementById('honestidad').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_honestidad_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_honestidad
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });




        
        var datasets_respeto = [];
        var index = 0;
        for (var key in respeto) {
            datasets_respeto.push({
                label: key.replace('_', ' '),
                data: Object.values(respeto[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_respeto_ctx = document.getElementById('respeto').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_respeto_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_respeto
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });





        var datasets_disciplina = [];
        var index = 0;
        for (var key in disciplina) {
            datasets_disciplina.push({
                label: key.replace('_', ' '),
                data: Object.values(disciplina[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_disciplina_ctx = document.getElementById('disciplina').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_disciplina_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_disciplina
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });




        var datasets_redes = [];
        var index = 0;
        for (var key in redes) {
            datasets_disciplina.push({
                label: key.replace('_', ' '),
                data: Object.values(redes[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_redes_ctx = document.getElementById('redes').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_redes_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_redes
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });





        var datasets_desarrollo_software = [];
        var index = 0;
        for (var key in desarrollo_software) {
            datasets_desarrollo_software.push({
                label: key.replace('_', ' '),
                data: Object.values(desarrollo_software[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_desarrollo_software_ctx = document.getElementById('desarrollo_software').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_desarrollo_software_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_desarrollo_software
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });


        
        
        var datasets_seguridad = [];
        var index = 0;
        for (var key in seguridad) {
            datasets_seguridad.push({
                label: key.replace('_', ' '),
                data: Object.values(seguridad[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_seguridad_ctx = document.getElementById('seguridad').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_seguridad_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_seguridad
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });



        var datasets_admin_proyectos = [];
        var index = 0;
        for (var key in admin_proyectos) {
            datasets_admin_proyectos.push({
                label: key.replace('_', ' '),
                data: Object.values(admin_proyectos[key]),
                backgroundColor: chartColors[index],
                borderColor: chartColors[index],
                borderWidth: 1
            });
            index++;
        }

        var aspectos_admin_proyectos_ctx = document.getElementById('admin_proyectos').getContext('2d');
        var pertinenciaChart = new Chart(aspectos_admin_proyectos_ctx, {
            type: 'bar',
            data: {
                labels: labels_ranking,
                datasets: datasets_admin_proyectos
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: { 
                        beginAtZero: true
                    }
                }
            }
        });



    </script>
@endsection