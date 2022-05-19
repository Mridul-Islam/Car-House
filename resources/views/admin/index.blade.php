@extends('layouts.admin')

@section('content')

    <!-- WELCOME-->
    <section class="welcome p-t-10" style="padding-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4 text-center">Welcome
                        <span>{{ Auth::user()->name }}!</span>
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

    <?php

    $count_users  = count($users);
    $count_brands = count($brands);
    $count_cars   = count($cars);
    $count_sales  = count($orders);

    ?>


    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">{{ $count_users }}</h2>
                        <span class="desc">number of users are registered</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">{{ $count_brands }}</h2>
                        <span class="desc">number of brands added</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">{{ $count_cars }}</h2>
                        <span class="desc">number of product added</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">{{ $count_sales }}</h2>
                        <span class="desc">number of sales</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->

    <!-- STATISTIC CHART-->
    <section class="statistic-chart">
        <div class="container">
            <div class="row">

                <!-- Pie chart -->
                <div class="col-md-12 col-lg-4">
                    <h3 class="title-5 m-b-35 text-center"><u>Pie Chart</u></h3>
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>


                <!-- Sales table -->
                <div class="col-md-12 col-lg-8">
                    <div class="container">
                        <h3 class="title-5 m-b-35 text-center"><u>sales table</u></h3>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Buyer Name</th>
                                    <th>Product Name</th>
                                    <th>Order Date</th>
                                    <th>price(BDT)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                <tr class="tr-shadow">
                                    <td><img src="{{ $order->product_image ? asset('images/' . $order->product_image) : '' }}" alt="No-Image" width="100px;"></td>
                                    <td>{{ $order->buyer_name }}</td>
                                    <td>{{ $order->product_name }}</td>
                                    <td>{{ $order->created_at->diffForHumans() }}</td>
                                    <td>{{ $order->product_price }}</td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@stop


@section('footer')
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Users', 'Brands', 'Cars', 'Sales'],
                datasets: [{
                    label: 'Total Counts',
                    data: [{{ $count_users }}, {{$count_brands}}, {{ $count_cars }}, {{ $count_sales }}],
                    backgroundColor: [
                        '#27ae60',
                        '#e67e22',
                        '#3498db',
                        '#e74c3c'
                    ],
                    borderColor: [
                        '#27ae60',
                        '#d35400',
                        '#2980b9',
                        '#c0392b'
                    ],
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
    </script>
@stop

