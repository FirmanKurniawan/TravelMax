@extends('user.layout')
@section('css')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/weather-icon/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/summernote/summernote-bs4.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/css/components.css')}}">
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Order</h1>
            </div>
            <div class="card">
                <div class="card-header">
                  <h4>Paket Umroh</h4>
                </div>
            <div class="card-body">
                <form action="{{ url('user/order') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="product" class="form-label">Produk</label>
                            <select id="product" name="product" class="form-control" required onchange="updateTotal()">
                                <option selected>Pilih Paket Umroh</option>
                                <option value="Umroh Basic" data-price="15000000">Umroh Basic</option>
                                <option value="Umroh Plus" data-price="30000000">Umroh Plus</option>
                                <option value="Umroh Wisata" data-price="50000000">Umroh Wisata</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="payment_method" class="form-label">Payment Method</label>
                            <select id="payment_method" name="payment_method" class="form-control" required>
                                <option selected>Pilih Pembayaran</option>
                                <option value="Transfer Bank">Transfer Bank</option>
                                <option value="Paypal">Paypal</option>
                                <option value="Credit Card">Credit Card</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="total" class="form-label">Total</label>
                            <input type="number" class="form-control" id="total" name="total" required readonly>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </form>
                <script>
                    function updateTotal() {
                        var productDropdown = document.getElementById('product');
                        var totalInput = document.getElementById('total');

                        // Mendapatkan harga dari atribut data-price
                        var selectedPrice = parseInt(productDropdown.options[productDropdown.selectedIndex].getAttribute('data-price')) || 0;

                        // Menetapkan nilai total
                        totalInput.value = selectedPrice;
                    }
                </script>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <!-- General JS Scripts -->
    <script src="{{asset('stisla/dist/assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/popper.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('stisla/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/chart.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('stisla/dist/assets/js/page/index-0.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('stisla/dist/assets/js/scripts.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/js/custom.js')}}"></script>
@endsection
