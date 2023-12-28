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
                <h1>Registration</h1>
            </div>
            <div class="card">
                <div class="card-header">
                  <h4>Form Registration</h4>
                </div>
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-12">
                        <a href="/user/{{$registrations->id}}/pdf" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
                <form action="{{ url('registration') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="email" class="form-label">*Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ex: travelmax@gmail.com" required value="{{Auth::user()->email}}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama" class="form-label">*Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required value="{{$registrations->nama}}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="no_bpjs" class="form-label">No BPJS (Optional)</label>
                            <input type="number" class="form-control" id="no_bpjs" name="no_bpjs" placeholder="Masukkan No BPJS (Optional)" value="{{$registrations->no_bpjs}}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nik" class="form-label">*NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required value="{{$registrations->nik}}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="no_telepon" class="form-label">*No Telepon (ex: 6285177586844)</label>
                            <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="ex: 6285177586844" required value="{{$registrations->no_telepon}}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tanggal_lahir" class="form-label">*Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required value="{{$registrations->tanggal_lahir}}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="tempat_lahir" class="form-label">*Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="ex: Jakarta" required value="{{$registrations->tempat_lahir}}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Jalan Raya Kebon Jeruk" required readonly>{{$registrations->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
                            <select class="form-control" id="status_pernikahan" name="status_pernikahan" required readonly>
                                <option value="{{$registrations->status_pernikahan}}" selected>{{$registrations->status_pernikahan}}</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="foto_ktp" class="form-label">Kartu Tanda Penduduk</label>
                            <a href="/foto_ktp/{{$registrations->foto_ktp}}" target="_blank" class="form-control">Lihat KTP</a>
                            {{-- <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" accept="image/*" required readonly> --}}
                        </div>
                        <div class="col-md-4">
                            <label for="foto_kk" class="form-label">Kartu Keluarga</label>
                            <a href="/foto_kk/{{$registrations->foto_kk}}" class="form-control" target="_blank">Lihat Kartu Keluarga</a>
                            {{-- <input type="file" class="form-control" id="foto_kk" name="foto_kk" accept="image/*" required readonly> --}}
                        </div>
                        <div class="col-md-4">
                            <label for="foto_dokumen_lainnya" class="form-label">Akta/Buku Nikah/Ijazah</label>
                            <a href="/foto_dokumen_lainnya/{{$registrations->foto_dokumen_lainnya}}" class="form-control" target="_blank">Lihat Dokumen</a>
                            {{-- <input type="file" class="form-control" id="foto_dokumen_lainnya" name="foto_dokumen_lainnya" accept="image/*" required readonly> --}}
                        </div>
                    </div>
                    @if ($registrations->no_paspor != null)
                    <div id="passportFields">
                        <!-- Form fields untuk paspor -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="no_paspor" class="form-label">No Paspor</label>
                                <input type="number" class="form-control" id="no_paspor" placeholder="Masukkan No Paspor" name="no_paspor" value="{{$registrations->no_paspor}}" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="tanggal_paspor_dikeluarkan" class="form-label">Tanggal Paspor Dikeluarkan</label>
                                <input type="date" class="form-control" id="tanggal_paspor_dikeluarkan" name="tanggal_paspor_dikeluarkan" value="{{$registrations->tanggal_paspor_dikeluarkan}}" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="asal_migrasi_paspor" class="form-label">Asal Migrasi Paspor</label>
                                {{-- <input type="text" class="form-control" id="asal_migrasi_paspor" name="asal_migrasi_paspor"> --}}
                                <select id="asal_migrasi_paspor" name="asal_migrasi_paspor" class="form-control" value="{{$registrations->asal_migrasi_paspor}}" readonly>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia" selected>Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    @endif
                </form>
                {{-- <script>
                    // Mendengarkan perubahan pada dropdown "has_passport"
                    document.getElementById('has_passport').addEventListener('change', function () {
                        // Menentukan apakah form fields untuk paspor harus ditampilkan atau disembunyikan
                        var passportFields = document.getElementById('passportFields');
                        passportFields.style.display = (this.value === '1') ? 'block' : 'none';

                        // Menentukan apakah form harus dianggap valid atau tidak berdasarkan nilai dropdown
                        this.setCustomValidity((this.value === '0') ? 'Pilih opsi lain' : '');
                    });
                </script>
                <script>
                    // Mendengarkan peristiwa saat dokumen (halaman) dimuat
                    document.addEventListener('DOMContentLoaded', function () {
                        // Menentukan elemen-elemen input file yang ingin diatur
                        var fileInputs = document.querySelectorAll('input[type="file"]');

                        // Iterasi melalui setiap elemen input file
                        fileInputs.forEach(function (fileInput) {
                            // Mengatur nilai elemen input file menjadi kosong
                            fileInput.value = '';

                            // Mendengarkan perubahan pada elemen input file (opsional)
                            fileInput.addEventListener('change', function () {
                                // Jika pengguna memilih file, Anda dapat melakukan sesuatu di sini
                                // Misalnya, menampilkan nama file atau melakukan validasi
                            });
                        });
                    });
                </script> --}}
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
