@extends('layout.app') {{-- ใช้ layout หลักของคุณที่รวม Bootstrap และ sidebar ไว้ --}}

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Header -->
        <div class="col-12 d-flex justify-content-between align-items-center mb-4">
            <h4>Dashboard</h4>
            <button class="btn btn-primary">Add Customer</button>
        </div>

        <!-- Stats Cards -->
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card info-card">
                    <div class="card-body text-center">
                        <div class="icon bg-primary text-white rounded-circle mb-2"><i class="bi bi-person"></i></div>
                        <h6>Visitors</h6>
                        <h4>1,294</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card info-card">
                    <div class="card-body text-center">
                        <div class="icon bg-info text-white rounded-circle mb-2"><i class="bi bi-person-plus"></i></div>
                        <h6>Subscribers</h6>
                        <h4>1,303</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card info-card">
                    <div class="card-body text-center">
                        <div class="icon bg-success text-white rounded-circle mb-2"><i class="bi bi-cart"></i></div>
                        <h6>Sales</h6>
                        <h4>$1,345</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card info-card">
                    <div class="card-body text-center">
                        <div class="icon bg-purple text-white rounded-circle mb-2"><i class="bi bi-bag-check"></i></div>
                        <h6>Order</h6>
                        <h4>576</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Statistics -->
        {{-- <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>User Statistics</span>
                    <div>
                        <button class="btn btn-outline-success btn-sm">Export</button>
                        <button class="btn btn-outline-secondary btn-sm">Print</button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="userChart" height="200"></canvas>
                </div>
            </div>
        </div> --}}

        <!-- Daily Sales -->
        <div class="col-md-4 mt-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Daily Sales</h6>
                            <p>March 25 - April 02</p>
                            <h3>$4,578.58</h3>
                        </div>
                        <div>
                            <button class="btn btn-light btn-sm">Export</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h6>Users online</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>17</h4>
                        <span class="text-success">+5%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('userChart');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Subscribers',
            data: [200, 210, 230, 260, 280, 250, 240, 300, 330, 360, 390, 420],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            fill: true
        },
        {
            label: 'New Visitors',
            data: [100, 110, 130, 140, 160, 180, 170, 190, 210, 230, 250, 270],
            backgroundColor: 'rgba(255, 206, 86, 0.5)',
            fill: true
        },
        {
            label: 'Active Users',
            data: [300, 290, 310, 350, 360, 340, 330, 400, 420, 450, 470, 500],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection
