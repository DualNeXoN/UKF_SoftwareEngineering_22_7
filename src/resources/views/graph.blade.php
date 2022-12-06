@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/graph.css') }}">
@endsection

@section('content')


    <div>
        <canvas id="myChart"></canvas>
    </div>
    
    <script>

        $.getJSON('http://localhost:8080/graph/data', function(data) {
            
            var labels = data.academic_year.map(function(e) {
                return e;
            });
            var data = data.number_of_students.map(function(e) {
                return e;
            });

            const ctx = document.getElementById('myChart');
        
            new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of Votes',
                    data: data,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
            });
        });

    </script>
   

@endsection
