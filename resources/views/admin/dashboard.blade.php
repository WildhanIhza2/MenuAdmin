@extends('layouts.app')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Kode Lama -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <ul class="navbar-nav d-flex align-items-center justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                            <i class="material-symbols-rounded">account_circle</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Baru -->
    <div class="grid grid-cols-2 gap-4 p-4 text-sm">
        <!-- Sales Report -->
        <div class="bg-white rounded-lg shadow p-3 col-span-2">
            <h2 class="font-semibold">Sales from 1-12 Dec, 2025</h2>
            <canvas id="salesChart" class="mt-2"></canvas>
        </div>

        <!-- Order Time -->
        <div class="bg-white rounded-lg shadow p-3">
            <h2 class="font-semibold">Order Time</h2>
            <canvas id="orderTimeChart" class="mt-2"></canvas>
        </div>

        <!-- Rating Produk -->
        <div class="bg-white rounded-lg shadow p-3">
            <h2 class="font-semibold">Rating Produk</h2>
            <canvas id="ratingProdukChart" class="mt-2"></canvas>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById('salesChart'), {
        type: 'bar',
        data: {
            labels: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
            datasets: [
                { label: 'Last 6 days', data: [4, 5, 7, 3, 6, 8, 3, 6, 5, 3, 7, 8], backgroundColor: '#6366F1' },
                { label: 'Last Week', data: [2, 4, 5, 3, 6, 7, 5, 6, 4, 2, 6, 4], backgroundColor: '#E5E7EB' }
            ]
        }
    });

    new Chart(document.getElementById('orderTimeChart'), {
        type: 'doughnut',
        data: {
            labels: ['Afternoon', 'Evening', 'Morning'],
            datasets: [{ data: [40, 35, 25], backgroundColor: ['#6366F1', '#A5B4FC', '#C7D2FE'] }]
        }
    });

    new Chart(document.getElementById('ratingProdukChart'), {
        type: 'doughnut',
        data: {
            labels: ['Produk A', 'Produk B', 'Produk C'],
            datasets: [{
                data: [20, 40, 40],
                backgroundColor: ['#FBBF24', '#8B5CF6', '#22D3EE']
            }]
        }
    });
</script>

<style>
  canvas {
      max-width: 100% !important;
      max-height: 250px !important;
      height: auto !important;
  }
</style>
@endsection
