@extends('layout.master')
@section('title')
    MG Insights
@endsection
@section('content')
    @include('partials.nav')

    <div class="container-fluid">
      <div class="row">

        @include('partials.sidebar')

        <main role="main" class="col-md-10 ml-sm-auto px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
        </div>

            <div class="row">
                <div class="col-md-6">
                    @include('charts.line')
                </div>
                <div class="col-md-6">
                    @include('charts.bar')
                </div>
            </div>
            <hr>



          <h2>Tables</h2>
          <div class="table-responsive col-md-10">
            <table class="table table-striped table-sm">
                <div class="badge badge-danger float-right" id="divide">Sum: {{ $sum }}</div>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Day</th>
                  <th>Price</th>
                  <th>Created at</th>
                </tr>
              </thead>
              <tbody>

                      @foreach ($data as $item)
                          <tr>
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->day }}</td>
                              <td>{{ $item->price}}</td>
                              <td>{{ $item->created_at}}</td>
                          </tr>
                      @endforeach

              </tbody>
            </table>

          </div>



        </main>
      </div>
    </div>

    @endsection

    @section('scripts')
        <script>

          var ctx = $("#daily");
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
              datasets: [{
                data: [1500, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: false
                  }
                }]
              },
              legend: {
                display: false,
              }
            }
          });

          var img = new Image();
          img.src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiXu4LJw4AFRNProcprYt-CqiYWTLd8Fm-YJN7GCfM86h1uNIF9Q';
          img.onload = function(){
              var init = document.getElementById('monthly').getContext('2d');
              var fillPattern = init.createPattern(img,'repeat');
              var data = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
                datasets: [{
                  data: [15050, 21345, 18483, 24003, 23489, 24092, 12034, 20000, 23000, 44000, 12000, 34000],
                  lineTension: 0,
                  backgroundColor: fillPattern,
                  borderWidth: 4,
                  pointBackgroundColor: ''
                    }]
                };
              var monthly = new Chart(init, {
                type: 'bar',
                data: data,
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: false
                      }
                    }]
                  },
                  legend: {
                    display: false,
                  }
                }
              });
          }








        </script>


@endsection
