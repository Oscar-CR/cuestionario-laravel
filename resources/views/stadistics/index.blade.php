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

<section class="w-full px-10 pb-10">

    <h1 class="text-2xl font-bold mb-10">Ultimos registros</h1>

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

<section class="px-10 py-6">

    <h1 class="text-2xl font-bold mb-10">Estadísticas generales</h1>

    <div class="max-w-full mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Pertenencia, disponibilidad, medios y recursos para el aprendizaje</h6>
                        <canvas id="pertinencia" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Aspectos que valora la empresa u organismo para la contratación de los egresados</h6>
                        <canvas id="aspectos_contratacion" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Compromiso</h6>
                        <canvas id="compromiso" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Responsabilidad</h6>
                        <canvas id="responsabilidad" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Honestidad</h6>
                        <canvas id="honestidad" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Respeto</h6>
                        <canvas id="respeto" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Disciplina</h6>
                        <canvas id="disciplina" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Redes</h6>
                        <canvas id="redes" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Desarrollo de software</h6>
                        <canvas id="desarrollo_software" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Seguridad</h6>
                        <canvas id="seguridad" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Administración de proyectos</h6>
                        <canvas id="admin_proyectos" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Actividad a la que se dedica actualmente</h6>
                        <canvas id="actividad_actual" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Si está trabajando, su trabajo está relacionado con el área de Tics:</h6>
                        <canvas id="trabajo_tics" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Eficiencia para realizar las actividades laborales, en relación a su formación académica:</h6>
                        <canvas id="eficiencia_laboral" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Cómo califica su formación académica con respecto a su desempeño laboral:</h6>
                        <canvas id="calificacion_formacion_laboral" width="300" height="300"></canvas>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h6 class="font-semibold mb-4 text-sm text-center">Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional:</h6>
                        <canvas id="utilidad_residencias_practicas" width="300" height="300"></canvas>
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
        var chartColors = ['#1B396A', '#26914F', '#37AF74', '#ECD90F', '#A12040', '#D6BC97'];

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

        // Datos de los gráficos
        var chartsData = {
            pertinencia: {!! json_encode($pertinencia) !!},
            actividad_actual: {!! json_encode($actividad_actual) !!},
            trabajo_tics: {!! json_encode($trabajo_tics) !!},
            eficiencia_laboral: {!! json_encode($eficiencia_laboral) !!},
            calificacion_formacion_laboral: {!! json_encode($calificacion_formacion_laboral) !!},
            utilidad_residencias_practicas: {!! json_encode($utilidad_residencias_practicas) !!},
            aspectos_contratacion: {!! json_encode($aspectos_contratacion) !!},
            compromiso: {!! json_encode($compromiso) !!},
            responsabilidad: {!! json_encode($responsabilidad) !!},
            honestidad: {!! json_encode($honestidad) !!},
            respeto: {!! json_encode($respeto) !!},
            disciplina: {!! json_encode($disciplina) !!},
            redes: {!! json_encode($redes) !!},
            desarrollo_software: {!! json_encode($desarrollo_software) !!},
            seguridad: {!! json_encode($seguridad) !!},
            admin_proyectos: {!! json_encode($admin_proyectos) !!}
        };

        // Labels comunes para los gráficos
        var labels_ranking = ['Muy malo', 'Malo', 'Regular', 'Bueno', 'Excelente'];

        // Función para generar gráfico de barras
        function generarGraficoBarra(ctx, data) {
            var datasets = [];
            var index = 0;
            for (var key in data) {
                datasets.push({
                    label: key.replace('_', ' '),
                    data: Object.values(data[key]),
                    backgroundColor: chartColors[index],
                    borderColor: chartColors[index],
                    borderWidth: 1
                });
                index++;
            }

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels_ranking,
                    datasets: datasets
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
        }

        // Función para generar gráfico de dona
        function generarGraficoDona(ctx, data, labels) {
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total',
                        data: Object.values(data),
                        backgroundColor: chartColors,
                        borderColor: chartColors,
                        borderWidth: 1
                    }]
                },
                options: chartOptions
            });
        }

        // Generar gráficos
        generarGraficoBarra(document.getElementById('pertinencia').getContext('2d'), chartsData.pertinencia);
        generarGraficoDona(document.getElementById('actividad_actual').getContext('2d'), chartsData.actividad_actual, ['Trabaja', 'Estudia', 'Estudia y trabaja', 'Estudia y trabaja']);
        generarGraficoDona(document.getElementById('trabajo_tics').getContext('2d'), chartsData.trabajo_tics, ['Si', 'No']);
        generarGraficoDona(document.getElementById('eficiencia_laboral').getContext('2d'), chartsData.eficiencia_laboral, ['Deficiente', 'Poco eficiente', 'Eficiente', 'Muy eficiente']);
        generarGraficoDona(document.getElementById('calificacion_formacion_laboral').getContext('2d'), chartsData.calificacion_formacion_laboral, ['Pésimo', 'Malo', 'Regular', 'Bueno', 'Excelente']);
        generarGraficoDona(document.getElementById('utilidad_residencias_practicas').getContext('2d'), chartsData.utilidad_residencias_practicas, ['Pésimo', 'Malo', 'Regular', 'Bueno', 'Excelente']);
        generarGraficoBarra(document.getElementById('aspectos_contratacion').getContext('2d'), chartsData.aspectos_contratacion);
        generarGraficoBarra(document.getElementById('compromiso').getContext('2d'), chartsData.compromiso);
        generarGraficoBarra(document.getElementById('responsabilidad').getContext('2d'), chartsData.responsabilidad);
        generarGraficoBarra(document.getElementById('honestidad').getContext('2d'), chartsData.honestidad);
        generarGraficoBarra(document.getElementById('respeto').getContext('2d'), chartsData.respeto);
        generarGraficoBarra(document.getElementById('disciplina').getContext('2d'), chartsData.disciplina);
        generarGraficoBarra(document.getElementById('redes').getContext('2d'), chartsData.redes);
        generarGraficoBarra(document.getElementById('desarrollo_software').getContext('2d'), chartsData.desarrollo_software);
        generarGraficoBarra(document.getElementById('seguridad').getContext('2d'), chartsData.seguridad);
        generarGraficoBarra(document.getElementById('admin_proyectos').getContext('2d'), chartsData.admin_proyectos);

    </script>
@endsection