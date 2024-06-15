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
                    <p class="text-bold text-4xl">11</p>
                </div>
            </div>
        
            <div class="w-1/2" style="width: 300px; height:200px; margin-left:30px;">
                <div class="bg-white p-4 rounded shadow" >
                    <h2 class="text-xl font-bold mb-2">Total Usuarios: </h2>
                    <p class="text-bold text-4xl">a</p>
                </div>
            </div>
        
            <div class="w-1/2">
                
            </div>
        
            <div class="w-1/2">
                
            </div>
</div>


<div class="row mx-10">
        
<div class="col-sm-4 col-md-4">
        <div class="d-flex flex-column">
                <h4>Estadísticas de bajas</h4>
                <div id="bajas">
                    <h6>Bajas por departamento</h6>
                    <canvas id="circle_chart" width="300" height="300"></canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-8 col-md-8">
            <h4>Motivo de bajas</h4>
            <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                <div class="col">
                    <h6>Crecimiento laboral</h6>
                    <canvas id="laboral_grown" height="300"></canvas>
                </div>

                <div class="col">
                    <h6>Clima laboral</h6>
                    <canvas id="laboral_climate" width="300" height="300"></canvas>
                </div>

              
            </div>
        </div>
    </div>

    <br>

        
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
        // Datos ficticios para departamentos
        var department_chart = [
            {
                department: 'Tecnología e Innovación',
                total: 100,
                growth_salary: 30,
                growth_promotion: 20,
                growth_activity: 50,
                climate_partnet: 10,
                climate_manager: 40,
                climate_boss: 25,
                psicosocial_workloads: 15,
                psicosocial_appreciation: 35,
                psicosocial_violence: 5,
                psicosocial_workday: 10,
                demographics_distance: 20,
                demographics_physical: 15,
                demographics_personal: 25,
                demographics_school: 10,
                health_personal: 30,
                health_familiar: 20,
                other_motive: 10,
            },
            {
                department: 'Ventas',
                total: 80,
                growth_salary: 25,
                growth_promotion: 15,
                growth_activity: 40,
                climate_partnet: 8,
                climate_manager: 30,
                climate_boss: 20,
                psicosocial_workloads: 12,
                psicosocial_appreciation: 30,
                psicosocial_violence: 4,
                psicosocial_workday: 8,
                demographics_distance: 18,
                demographics_physical: 12,
                demographics_personal: 20,
                demographics_school: 8,
                health_personal: 25,
                health_familiar: 18,
                other_motive: 8,
            },
            // Agregar más departamentos según sea necesario
        ];

        // Colores para los gráficos
        var chartColors = ['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8', '#FFADAD'];

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

        // Generación de gráficos con Chart.js
        // Gráfico de dona para total por departamento
        new Chart(document.getElementById("circle_chart"), {
            type: 'doughnut',
            data: {
                labels: department_chart.map(item => item.department),
                datasets: [{
                    label: 'Total',
                    data: department_chart.map(item => item.total),
                    backgroundColor: chartColors,
                    borderColor: chartColors,
                    borderWidth: 1
                }]
            },
            options: chartOptions
        });

        // Gráfico de barras para crecimiento laboral
        new Chart(document.getElementById("laboral_grown"), {
            type: 'bar',
            data: {
                labels: ['Sueldo', 'Ascensos', 'Actividades desempeñadas'],
                datasets: department_chart.map(item => ({
                    label: item.department,
                    data: [item.growth_salary, item.growth_promotion, item.growth_activity],
                    backgroundColor: chartColors,
                    borderColor: chartColors,
                    borderWidth: 1
                }))
            },
            options: chartOptions
        });

        // Gráfico de barras para clima laboral
        new Chart(document.getElementById("laboral_climate"), {
            type: 'bar',
            data: {
                labels: ['Compañeros', 'Jefe directo', 'Directivos'],
                datasets: department_chart.map(item => ({
                    label: item.department,
                    data: [item.climate_partnet, item.climate_manager, item.climate_boss],
                    backgroundColor: chartColors,
                    borderColor: chartColors,
                    borderWidth: 1
                }))
            },
            options: chartOptions
        });

        

    </script>
@endsection