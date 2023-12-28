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
                <form action="{{ url('user/confirmation-payment') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" id="invoice_number" name="invoice_number" required value="{{$confirmation->invoice_number}}">
                    @if ($confirmation->payment_method == "Transfer Bank")
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="product" class="form-label">Upload Bukti Transfer - BCA: 49191591</label>
                                <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar" required>
                            </div>
                        </div>
                    @elseif ($confirmation->payment_method == "Paypal")
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="product" class="form-label">Upload Bukti Transfer - Paypal: travelmax@gmail.com</label>
                                <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar" required>
                            </div>
                        </div>
                    @elseif ($confirmation->payment_method == "Credit Card")
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="product" class="form-label">Upload Bukti Transfer - Credit Card by Akulaku</label>
                                <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar" required>
                            </div>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </form>
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
