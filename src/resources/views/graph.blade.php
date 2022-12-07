@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/graph.css') }}">
@endsection

@section('content')


    <div style="width: 800px;">
        <canvas id="studentPractices"></canvas>
    </div>
    
    <script>

        $.getJSON('http://localhost:8080/charts/data/assignedpractices', function(data) {
            
            var labels = data.academicYears.map(function(e) {
                return e;
            });
            var data = data.assignedStudents.map(function(e) {
                return e;
            });

            const ctx = document.getElementById('studentPractices');
        
            new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of students',
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
