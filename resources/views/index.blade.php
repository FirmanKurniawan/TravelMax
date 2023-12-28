<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>TravelMax</title>
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Google Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&family=Palanquin+Dark:wght@400;500;600;700&display=swap" rel="stylesheet">
		<!-- Icon CSS -->
		<link rel="stylesheet" href="themify-icons/themify-icons.css">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/Pe-icon-7-stroke.css">
		<link rel="stylesheet" href="css/line-awesome.css">
		<script src="https://kit.fontawesome.com/ef9844cf9a.js" crossorigin="anonymous"></script>
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!--jquery-simple-mobilemenu Css-->
        <link rel="stylesheet" href="css/jquery-simple-mobilemenu.css">
		<!--magnific-popup Css-->
        <link rel="stylesheet" href="css/magnific-popup.css">
		<!--YouTubePopUp Css-->
        <link rel="stylesheet" href="css/YouTubePopUp.css">
		 <!--Slick Css-->
        <link rel="stylesheet" href="css/slick.css">
		<!--slick theme Css-->
		<link rel="stylesheet" href="css/slick-theme.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="css/style.css">

	</head>

    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER  -->
		<div class="preloader">
			<div class="animation-container">
				<div class="lightning-container">
					<div class="lightning white"></div>
					<div class="lightning red"></div>
				</div>
				<div class="boom-container">
					<div class="shape circle big white"></div>
					<div class="shape circle white"></div>
					<div class="shape triangle big yellow"></div>
					<div class="shape disc white"></div>
					<div class="shape triangle blue"></div>
				</div>
				<div class="boom-container second">
					<div class="shape circle big white"></div>
					<div class="shape circle white"></div>
					<div class="shape disc white"></div>
					<div class="shape triangle blue"></div>
				</div>
			</div>
		</div>
		<!--  END PRELOADER -->

		<!-- START NAVBAR -->
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container">
				<div class="row">
					<div class="col-xl-2 col-md-3 col-sm-4 align-self-center">
						<div class="site-logo">
							<a href="index"><img src="{{asset('logo.png')}}" alt=""></a>
						</div>
					</div><!--- END Col -->

					<div class="col-xl-8 col-md-9 col-sm-8 d-flex justify-content-center">
						<nav id="main-menu">
							<ul>
								<li><a href="{{url('/')}}">Beranda</a></li>
								<li><a href="tour.html">Umroh</a></li>
								<li><a href="{{url('about')}}">Tentang</a></li>
								<li><a href="service.html">Layanan</a></li>
								<li class="menu-item-has-children"><a href="#">Halaman</a>
									<ul>
										<li><a href="tour-details.html">Package Details</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="{{url('contact')}}">Kontak</a></li>
							</ul>

						</nav>
						<div id="mobile_menu"></div>

					</div><!--- END Col -->

					<div class="col-xl-2 d-none d-xl-block text-end align-self-center">
						<a href="#" class="btn_green" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar!</a>
					</div><!--- END Col -->

					<ul class="mobile_menu">
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="tour.html">Tour</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						<li><a href="service.html">Service</a></li>
						<li><a href="#">Pages</a>
							<ul class="submenu">
								<li><a href="tour-details.html">Package Details</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="{{url('contact')}}">Contact</a></li>
					</ul>
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div>
		<!-- END NAVBAR -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pendaftaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk pendaftaran -->
                        <form action="{{ url('registration') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">*Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="ex: travelmax@gmail.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">*Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="ex: TravelM4x@" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">*Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_bpjs" class="form-label">No BPJS (Optional)</label>
                                    <input type="number" class="form-control" id="no_bpjs" name="no_bpjs" placeholder="Masukkan No BPJS (Optional)">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nik" class="form-label">*NIK</label>
                                    <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_telepon" class="form-label">*No Telepon (ex: 6285177586844)</label>
                                    <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="ex: 6285177586844" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">*Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tempat_lahir" class="form-label">*Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="ex: Jakarta" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Jalan Raya Kebon Jeruk" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
                                    <select class="form-select" id="status_pernikahan" name="status_pernikahan" required>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Cerai">Cerai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="foto_ktp" class="form-label">Kartu Tanda Penduduk</label>
                                    <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" accept="image/*" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="foto_kk" class="form-label">Kartu Keluarga</label>
                                    <input type="file" class="form-control" id="foto_kk" name="foto_kk" accept="image/*" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="foto_dokumen_lainnya" class="form-label">Akta/Buku Nikah/Ijazah</label>
                                    <input type="file" class="form-control" id="foto_dokumen_lainnya" name="foto_dokumen_lainnya" accept="image/*" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="has_passport" class="form-label">Apakah Anda sudah memiliki paspor?</label>
                                    <select class="form-select" id="has_passport" name="has_passport" required>
                                        <option value="0">Belum</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                            </div>
                            <div id="passportFields" style="display: none;">
                                <!-- Form fields untuk paspor -->
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="no_paspor" class="form-label">No Paspor</label>
                                        <input type="number" class="form-control" id="no_paspor" placeholder="Masukkan No Paspor" name="no_paspor">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tanggal_paspor_dikeluarkan" class="form-label">Tanggal Paspor Dikeluarkan</label>
                                        <input type="date" class="form-control" id="tanggal_paspor_dikeluarkan" name="tanggal_paspor_dikeluarkan">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="asal_migrasi_paspor" class="form-label">Asal Migrasi Paspor</label>
                                        {{-- <input type="text" class="form-control" id="asal_migrasi_paspor" name="asal_migrasi_paspor"> --}}
                                        <select id="asal_migrasi_paspor" name="asal_migrasi_paspor" class="form-control">
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        <script>
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
                        </script>
                    </div>
                </div>
            </div>
        </div>

		<!-- START HOME -->
		<section id="home" class="home-slider">
			<div class="single_home_slide" style="background-image: url(assets/slide1.jpg);  background-size:cover;">
				<div class="slide_overlay">
					<div class="container">
						<div class="row">
						  <div class="col-md-12 text-center">
							<div class="hero-text">
								<p>Jadikan Akhir Tahun.</p>
								<h1>
									Lebih Bermakna Dengan Ibadah Umroh <br> Bersama TravelMax
								</h1>
								<div class="sl_btn_group">
									<a href="#special_package" class="btn_yellow">Umroh Guide</a>
									<a href="{{url('login')}}" class="btn_white">Login</a>
								</div>
							</div>
						  </div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</div><!--- END slide -->
			</div><!--- END slide -->

			<div class="single_home_slide" style="background-image: url(assets/slide2.jpg);  background-size:cover;">
				<div class="slide_overlay">
					<div class="container">
						<div class="row">
						  <div class="col-md-12 text-center">
							<div class="hero-text">
								<p>Satu Perjalanan Berjuta Pahala.</p>
								<h1>
									Wujudkan Ibadah Umroh <br> Bersama TravelMax
								</h1>

								<div class="sl_btn_group">
									<a href="#special_package" class="btn_yellow">Tour Guide</a>
									<a href="contact.html" class="btn_white">About Us</a>
								</div>
							</div>
						  </div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</div><!--- END slide -->
			</div><!--- END slide -->

			{{-- <div class="single_home_slide" style="background-image: url(https://getmasum.com/html-preview/tripx/assets/img/slider/3.jpg);  background-size:cover;">
				<div class="slide_overlay">
					<div class="container">
						<div class="row">
						  <div class="col-md-12 text-center">
							<div class="hero-text">
								<p>Save 15% of in Worldwide .</p>
								<h1>
									Travel Most Beautiful Place <br> With Us
								</h1>
								<div class="sl_btn_group">
									<a href="#special_package" class="btn_yellow">Tour Guide</a>
									<a href="contact.html" class="btn_white">About Us</a>
								</div>
							</div>
						  </div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</div><!--- END slide -->
			</div><!--- END slide --> --}}

		</section>
		<!-- END  HOME DESIGN -->

		<!-- START Tour Category -->
		<section class="tour-category pt130">
			<div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-up">
						<div class="section-title text-center">
							<span>Cari Berdasarkan Kategori</span>
							<h2>Umroh Plus Wisata</h2>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->

				<div class="row text-center">
					<div class="col-xl-3 col-lg-2 col-md-3 col-sm-6 col-12">
						<div class="single-tcategory">
							<a href="#">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/category/1.jpg" alt="">
								<h4>Makkah</h4>
								<p>5 <i class="fa fa-star"></i></p>
							</a>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-lg-2 col-md-3 col-sm-6 col-12">
						<div class="single-tcategory">
							<a href="#">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/category/2.jpg" alt="">
								<h4>Madinah</h4>
								<p>5 <i class="fa fa-star"></i></p>
							</a>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-lg-2 col-md-3 col-sm-6 col-12">
						<div class="single-tcategory">
							<a href="#">
								<img src="{{asset('assets/malaysia.png')}}" alt="">
								<h4>Malaysia</h4>
								<p>4 <i class="fa fa-star"></i></p>
							</a>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-lg-2 col-md-3 col-sm-6 col-12">
						<div class="single-tcategory">
							<a href="#">
								<img src="{{asset('assets/turkiye.png')}}" alt="">
								<h4>Turki</h4>
								<p>4 <i class="fa fa-star"></i></p>
							</a>
						</div>
					</div><!-- END COL -->
				</div>
		</section>
		<!-- END Tour Category -->

		<!-- START About US -->
		<section class="about section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-12 col-md-12 col-12 align-self-center">
						<div class="section-title text-left about_title">
							<span>Discount Umroh*</span>
							<h2>
                                Promo Umroh Bulan Rajab <br>
                                <p style="color: red">Free Kereta Cepat</p>
                            </h2>

						</div>
						<p>
                            Jadikan akhir tahun lebih bermakna dengan ibadah umroh bersama <br>
                            TravelMax
						</p>
						<div class="afeature pt15">
							<div class="row">
								<div class="col-md-6">
									<div class="single_afeature">
										<center><i class="fa-solid fa-train-subway"><h4>Kereta Cepat</h4></i></center>
									</div>
								</div>

								<div class="col-md-6">
									<div class="single_afeature">
                                        <center><i class="fa-solid fa-bowl-food"><h4>Nasi Mandhi</h4></i></center>
										{{-- <img src="https://getmasum.com/html-preview/tripx/assets/img/icons/biking.svg" alt="Mounting Biking" > <h4>Nasi Mandhi</h4> --}}
									</div>
								</div>

								<div class="col-md-6">
									<div class="single_afeature">
                                        <center><i class="fa-solid fa-city"><h4>City Tour</h4></i></center>
										{{-- <img src="https://getmasum.com/html-preview/tripx/assets/img/icons/elephant.svg" alt="Wild Campaign"> <h4>City Tour</h4> --}}
									</div>
								</div>

								<div class="col-md-6">
									<div class="single_afeature">
                                        <center><i class="fa-solid fa-hotel"><h4>Hotel Bintang 3</h4></i></center>
										{{-- <img src="https://getmasum.com/html-preview/tripx/assets/img/icons/couple.svg" alt="Couple Campaign" > <h4>Hotel Bintang 3</h4> --}}
									</div>
								</div>
							</div>
						</div>

						<a href="#" class="btn_yellow">Info lebih lanjut</a>
					</div><!-- END COL -->

					<div class="col-xl-6 col-lg-12 col-md-12 col-12">
						<div class="about_img">
							<img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/18AD/production/_103571360_mediaitem103571359.jpg" alt="Image" >
							<div class="skill-area">
								<div class="skill_content">
									<h3>10</h3>
									<p>Tahun <br> Pengalaman</p>
								</div>
							</div>
						</div>
					</div><!-- END COL -->

				</div><!-- END ROW -->

			</div><!-- END CONTAINER -->
		</section>
		<!-- END About US -->

		<!-- START TOP DEALS -->
		{{-- <section id="top_deals" class="top_deals">
			<div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-up">
						<div class="section-title text-center">
							<span>Paket Populer</span>
							<h2>Paket Haji Plus & Badal Haji</h2>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->

				<div id="top-package" class="owl-carousel" data-aos="fade-up">
					<div class="single-deal">
						<div class="deal-image">
							<img src="https://getmasum.com/html-preview/tripx/assets/img/tour/1.jpg" alt="">
							<span class="tr-price"><span>$</span>11.500</span>
						</div>
						<div class="deal-content">
							<span class="sdcat">Gold</span>
							<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Haji Khusus Kuota Pemerintah</a></h4>
							<div class="deal_meta">
								<div class="sdmeta">
									<i class="fa-regular fa-clock"></i>
									24 Hari
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-user"></i>
									Masa Tunggu 5-7 Tahun
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-star"></i>
									Hotel Bintang 5
								</div>
							</div>
						</div>

					</div><!--- END single-deal -->

					<div class="single-deal">
						<div class="deal-image">
							<img src="https://getmasum.com/html-preview/tripx/assets/img/tour/2.jpg" alt="">
							<span class="tr-price"><span>$</span>9.000</span>
						</div>
						<div class="deal-content">
							<span class="sdcat">Silver</span>
							<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Haji Khusus Kuota Pemerintah</a></h4>
							<div class="deal_meta">
								<div class="sdmeta">
									<i class="fa-regular fa-clock"></i>
									24 Hari
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-user"></i>
									Masa Tunggu 5-7 Tahun
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-star"></i>
									4
								</div>
							</div>
						</div>

					</div><!--- END single-deal -->

					<div class="single-deal">

						<div class="deal-image">
							<img src="https://getmasum.com/html-preview/tripx/assets/img/tour/3.jpg" alt="">
							<span class="tr-price"><span>$</span>1000</span>
						</div>
						<div class="deal-content">
							<span class="sdcat">Badal</span>
							<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Badal Haji 2024</a></h4>
							<div class="deal_meta">
								<div class="sdmeta">
									<i class="fa-regular fa-clock"></i>
									Air Zam-Zam 5 Liter
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-user"></i>
                                    Kurma dan Sajadah
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-star"></i>
									Sertifikat Asli
								</div>
							</div>
						</div>

					</div><!--- END single-deal -->

					<div class="single-deal">
						<div class="deal-image">
							<img src="https://getmasum.com/html-preview/tripx/assets/img/tour/1.jpg" alt="">
							<span class="tr-price"><span>$</span>11.500</span>
						</div>
						<div class="deal-content">
							<span class="sdcat">Gold</span>
							<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Haji Khusus Kuota Pemerintah</a></h4>
							<div class="deal_meta">
								<div class="sdmeta">
									<i class="fa-regular fa-clock"></i>
									24 Hari
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-user"></i>
									Masa Tunggu 5-7 Tahun
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-star"></i>
									Hotel Bintang 5
								</div>
							</div>
						</div>

					</div><!--- END single-deal -->

					<div class="single-deal">
						<div class="deal-image">
							<img src="https://getmasum.com/html-preview/tripx/assets/img/tour/2.jpg" alt="">
							<span class="tr-price"><span>$</span>9.000</span>
						</div>
						<div class="deal-content">
							<span class="sdcat">Silver</span>
							<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Haji Khusus Kuota Pemerintah</a></h4>
							<div class="deal_meta">
								<div class="sdmeta">
									<i class="fa-regular fa-clock"></i>
									24 Hari
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-user"></i>
									Masa Tunggu 5-7 Tahun
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-star"></i>
									4
								</div>
							</div>
						</div>

					</div><!--- END single-deal -->

					<div class="single-deal">

						<div class="deal-image">
							<img src="https://getmasum.com/html-preview/tripx/assets/img/tour/3.jpg" alt="">
							<span class="tr-price"><span>$</span>1000</span>
						</div>
						<div class="deal-content">
							<span class="sdcat">Badal</span>
							<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Badal Haji 2024</a></h4>
							<div class="deal_meta">
								<div class="sdmeta">
									<i class="fa-regular fa-clock"></i>
									Air Zam-Zam 5 Liter
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-user"></i>
                                    Kurma dan Sajadah
								</div>

								<div class="sdmeta">
									<i class="fa-regular fa-star"></i>
									Sertifikat Asli
								</div>
							</div>
						</div>

					</div><!--- END single-deal -->

				</div><!--- END ROW -->
			</div><!--- END CONTAINER-FLUID -->
		</section> --}}
		<!-- END TOP DEALS -->

		<!-- START SERVICES -->
		<section id="service" class="our_services">
		   <div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-up">
						<div class="section-title text-center">
							<span>Layanan Kami</span>
							<h2>Apa Saja Keunggulan Kami</h2>
						</div>

					</div><!-- END COL -->
				</div><!-- END ROW -->

				<div class="row text-left">
					<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M511.5 314.5v146c-9.387 26.032-27.72 35.866-55 29.5-20.88-10.248-29.88-27.082-27-50.5h-348c2.88 23.418-6.12 40.252-27 50.5-27.28 6.366-45.613-3.468-55-29.5v-146c3.611-23.33 13.445-43.663 29.5-61l1-171C35.842 45.99 57.01 24.824 93.5 19c107.333-.667 214.667-.667 322 0 36.497 5.83 57.663 26.997 63.5 63.5l1 169c17.439 17.545 27.939 38.545 31.5 63zm-416-275c106.001-.167 212.001 0 318 .5 16.822 2.49 29.655 10.99 38.5 25.5a63.183 63.183 0 016 19c.667 50 .667 100 0 150a86.845 86.845 0 00-17.5-9 926.125 926.125 0 01-1.5-43c-6.158-24.492-21.658-38.992-46.5-43.5a2549.226 2549.226 0 00-101 0c-14.573 2.449-26.573 9.283-36 20.5-8.113-9.93-18.446-16.43-31-19.5a809.416 809.416 0 00-55.5-1.5l-50.5.5c-23.225 3.892-38.392 17.059-45.5 39.5a1352.522 1352.522 0 00-2.5 47 107.614 107.614 0 00-19.5 10 3144.244 3144.244 0 011-157c6.869-21.71 21.369-34.71 43.5-39zm25 120c32.335-.167 64.668 0 97 .5 16.747 4.414 25.913 15.247 27.5 32.5.5 8.66.666 17.327.5 26a6100.493 6100.493 0 00-153 1c-.42-12.728.08-25.394 1.5-38 5.146-11.996 13.98-19.33 26.5-22zm173 0c32.335-.167 64.668 0 97 .5 14.275 2.94 23.442 11.44 27.5 25.5.5 11.328.667 22.662.5 34a6100.493 6100.493 0 00-153-1c-.166-8.673 0-17.34.5-26 1.779-17.27 10.946-28.27 27.5-33zm-193 80c103.334-.167 206.667 0 310 .5 41.279 6.61 67.446 30.11 78.5 70.5a313.622 313.622 0 012.5 48c-34.668-.167-69.335 0-104 .5-6.398 3.527-8.231 8.693-5.5 15.5 1.637 2.31 3.804 3.81 6.5 4.5 34.332.5 68.665.667 103 .5v39h-472v-39c91.667.167 183.334 0 275-.5 6.914-3.676 8.748-9.176 5.5-16.5a15.83 15.83 0 00-5.5-3.5c-91.666-.5-183.333-.667-275-.5a313.61 313.61 0 012.5-48c11.226-40.401 37.393-64.068 78.5-71zm-81 200h41c1.84 11.173-1.16 20.673-9 28.5-13.575 6.253-23.742 2.753-30.5-10.5a82.092 82.092 0 01-1.5-18zm431 0h41c.756 8.466-.744 16.466-4.5 24-12.427 11.32-23.761 10.32-34-3-2.155-6.826-2.988-13.826-2.5-21z" opacity=".955"/><path d="M337.5 358.5c13.176.018 17.01 6.018 11.5 18-9.415 5.309-15.581 2.809-18.5-7.5.574-4.729 2.907-8.229 7-10.5z" opacity=".888"/></svg>
							</div>
							<div class="ser_text">
								<h4>Harga Murah dan Dapat Dicicil</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique.
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M257.5-.5h14c16.299 7.716 21.132 20.049 14.5 37-2.946 4.945-7.112 8.445-12.5 10.5a4098.999 4098.999 0 01-61 16 524.036 524.036 0 00-1 45.5c46.393-.485 92.727.015 139 1.5 5.561 2.562 9.394 6.728 11.5 12.5.667 9.667.667 19.333 0 29-2.957 8.896-9.123 13.563-18.5 14a3803.354 3803.354 0 01-3.5 31c38.732-1.451 75.232 7.049 109.5 25.5 34.561 19.383 55.228 48.55 62 87.5v33c-4.451 9.732-12.118 14.066-23 13a31.309 31.309 0 01-3 12.5c22.495 11.829 27.328 28.662 14.5 50.5-4.201 4.683-9.368 7.683-15.5 9v20a83.516 83.516 0 0121 1.5 53.864 53.864 0 016 6.5v32c-3.658 12.325-11.658 20.325-24 24h-407c-9.884-4.062-16.05-11.396-18.5-22a214196.996 214196.996 0 01-44-323c-8.9-1.186-15.067-5.853-18.5-14v-30c2.814-6.313 7.481-10.813 14-13.5 49.332-.5 98.666-.667 148-.5-.167-22.67 0-45.336.5-68 1.951-10.619 8.118-17.452 18.5-20.5a6394.762 6394.762 0 0077-20.5zm2 16c7.608-1.877 12.275.956 14 8.5a18.32 18.32 0 01-4 7A3868.529 3868.529 0 00197 51.5a554.934 554.934 0 00-1.5 57h-18a818.621 818.621 0 011.5-69c1.952-2.394 4.452-3.894 7.5-4.5a1945.421 1945.421 0 0073-19.5zm-242 109c109.001-.167 218.001 0 327 .5l1.5 1.5c.667 7 .667 14 0 21a6.978 6.978 0 01-3.5 2.5l-141 1c-1.833.5-3 1.667-3.5 3.5-1.82 6.202.347 10.035 6.5 11.5 40.999.5 81.999.667 123 .5l-4 30c-37.258 2.807-71.258 14.64-102 35.5a204.855 204.855 0 00-33 35 4563.357 4563.357 0 01-135 44.5 37777.675 37777.675 0 00-19-145c45.335.167 90.668 0 136-.5 6.153-1.465 8.32-5.298 6.5-11.5-.833-1.5-2-2.667-3.5-3.5l-155-1c-2.223-.652-3.39-2.152-3.5-4.5a72.496 72.496 0 010-17 16.57 16.57 0 012.5-4zm320 87c36.004-.634 70.004 7.199 102 23.5 40.624 22.753 58.958 57.253 55 103.5a15238.175 15238.175 0 01-302 .5c-5.204-36.627 6.463-66.96 35-91 23.155-17.395 49.155-28.395 78-33a541.926 541.926 0 0132-3.5zm-160 76a4.934 4.934 0 013 .5c-5.524 17.061-7.358 34.561-5.5 52.5 3.637 10.583 11.137 15.916 22.5 16a182.922 182.922 0 013 13c-11.09 3.26-17.924 10.594-20.5 22-.799 4.587-.632 9.087.5 13.5a21125.18 21125.18 0 01-109 37.5c-5.166-37.995-10-75.995-14.5-114a25281.365 25281.365 0 00120.5-41zm37 68c86.003-.333 172.003 0 258 1-4.121 16.895-14.787 24.061-32 21.5a378.401 378.401 0 01-19-9.5c-4.764.255-8.43 2.422-11 6.5-13.348 8.464-25.348 6.797-36-5-3.667-2-7.333-2-11 0-12.743 13.578-25.743 13.912-39 1-4.139-2.856-8.472-3.19-13-1-13.667 14-27.333 14-41 0-3.636-1.899-7.303-1.899-11 0-12.458 10.677-25.291 11.177-38.5 1.5-3.83-4.657-5.997-9.991-6.5-16zm-8 28c4.652.828 8.652 2.995 12 6.5 12.055 5.178 24.388 5.845 37 2a44.742 44.742 0 009.5-5.5c11.99 10.229 25.49 12.729 40.5 7.5a64.515 64.515 0 0011.5-6.5c17.333 12 34.667 12 52 0 17.492 11.979 34.992 11.979 52.5 0 13.316 7.427 27.316 8.927 42 4.5a145.335 145.335 0 0014-8.5c13.684 4.423 16.85 12.757 9.5 25-2.956 2.727-6.456 4.227-10.5 4.5-89 .667-178 .667-267 0-12.791-3.415-16.624-11.248-11.5-23.5 2.671-2.402 5.505-4.402 8.5-6zm-20 36a60.364 60.364 0 018 5.5c2.15 1.411 4.484 2.245 7 2.5v20a162.597 162.597 0 00-18 .5c-4.167 1.5-7 4.333-8.5 8.5-.667 10-.667 20 0 30a49.18 49.18 0 003.5 9l-45.5 1a640.665 640.665 0 01-49.5-1.5c-2.606-1.938-4.44-4.438-5.5-7.5a344.054 344.054 0 01-3.5-29 2771.96 2771.96 0 00112-39zm31 9h251v19c-33.335-.167-66.668 0-100 .5-6.901 5.42-6.567 10.42 1 15 42.332.5 84.665.667 127 .5a73.27 73.27 0 01-2.5 24c-2.124 3.813-5.291 6.313-9.5 7.5a5064.653 5064.653 0 01-141 1.5c-47.364.152-94.698-.348-142-1.5-4.112-1.779-7.278-4.612-9.5-8.5a98.746 98.746 0 01-1.5-23 3832.39 3832.39 0 00151-1.5c4.426-5.441 3.759-10.108-2-14-40.665-.5-81.332-.667-122-.5v-19z" opacity=".945"/><path d="M316.5 230.5c8.156-.679 11.656 2.988 10.5 11-2.226 4.361-5.726 5.861-10.5 4.5-4.361-2.226-5.861-5.726-4.5-10.5 1.025-2.187 2.525-3.854 4.5-5z" opacity=".844"/><path d="M363.5 230.5c8.156-.679 11.656 2.988 10.5 11-3.892 5.759-8.559 6.426-14 2-2.365-5.39-1.199-9.724 3.5-13z" opacity=".852"/><path d="M244.5 266.5c3.757-.429 7.257.237 10.5 2 3.385 7.123 1.385 11.789-6 14-9.272-3.202-10.772-8.535-4.5-16z" opacity=".86"/><path d="M292.5 266.5c9.278-1.124 12.778 2.876 10.5 12-4.667 5.333-9.333 5.333-14 0-.667-3-.667-6 0-9a30.233 30.233 0 013.5-3z" opacity=".877"/><path d="M339.5 266.5c6.783-1.287 10.783 1.38 12 8-2.834 7.778-7.667 9.444-14.5 5-2.533-5.149-1.7-9.482 2.5-13z" opacity=".864"/><path d="M386.5 266.5c10.476-.698 13.809 3.802 10 13.5-9.956 4.571-14.456 1.405-13.5-9.5a19.552 19.552 0 003.5-4z" opacity=".858"/><path d="M433.5 266.5c8.658-1.173 12.492 2.494 11.5 11-3.873 5.629-8.539 6.296-14 2-2.394-4.973-1.56-9.306 2.5-13z" opacity=".852"/><path d="M221.5 302.5c8.114-1.379 11.947 1.954 11.5 10-3.598 6.203-8.265 7.203-14 3-2.533-5.149-1.7-9.482 2.5-13z" opacity=".864"/><path d="M268.5 302.5c6.99-1.662 10.99 1.005 12 8-2.005 7.003-6.338 9.003-13 6-4.192-4.991-3.858-9.658 1-14zm47 0c8.991-1.507 12.825 2.16 11.5 11-4.324 5.841-8.99 6.175-14 1-2.304-4.645-1.471-8.645 2.5-12z" opacity=".868"/><path d="M362.5 302.5c3.757-.429 7.257.237 10.5 2 3.448 7.432 1.282 12.099-6.5 14-8.869-3.475-10.202-8.809-4-16z" opacity=".864"/><path d="M409.5 302.5c9.83-1.671 13.663 2.329 11.5 12-4.667 5.333-9.333 5.333-14 0-1.727-4.438-.894-8.438 2.5-12zm48 0c6.742-1.743 10.742.757 12 7.5-2.562 8.185-7.396 10.018-14.5 5.5-2.533-5.149-1.7-9.482 2.5-13z" opacity=".868"/></svg>
							</div>
							<div class="ser_text">
								<h4>Pesawat Sudah di Booking</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique.
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M234.5-.5h42c55.043 6.44 102.21 29.106 141.5 68l6 8c.793 9.529-3.374 12.696-12.5 9.5-28.398-31.408-63.065-52.408-104-63 25.845 26.174 43.012 57.34 51.5 93.5a482.07 482.07 0 0113.5 93c30.537-15.987 61.037-15.987 91.5 0-2.693-37.079-14.36-71.079-35-102-.245-8.907 3.921-11.907 12.5-9 27.25 39.316 40.083 82.983 38.5 131L275.5 433c5.886-.04 11.553.96 17 3a9.454 9.454 0 011.5 2.5c.667 23 .667 46 0 69a20.673 20.673 0 01-3.5 4h-70a20.673 20.673 0 01-3.5-4c-.667-23-.667-46 0-69 1.339-2.594 3.506-4.094 6.5-4.5l12-1L31 228.5C30.685 147.289 63.519 83.456 129.5 37c32.027-20.952 67.027-33.452 105-37.5zm-32 23c-16.239 16.784-28.739 36.118-37.5 58-1.846 10.66 2.32 14.16 12.5 10.5 7.595-17.368 17.095-33.535 28.5-48.5 10.729-13.527 24.395-22.527 41-27 .667 64.333.667 128.667 0 193-20.423-11.653-42.257-15.153-65.5-10.5a99.794 99.794 0 00-25 9.5c-.201-31.093 4.132-61.593 13-91.5-2.385-8.446-7.218-10.279-14.5-5.5a289.986 289.986 0 00-12 53 1028.57 1028.57 0 00-4.5 45c-28.116-14.606-56.783-15.773-86-3.5a15.83 15.83 0 00-5.5 3.5C54.165 137.646 87.665 83.146 147.5 45c17.223-10.28 35.557-17.78 55-22.5zm61-7c16.815 4.33 30.649 13.33 41.5 27 20.759 28.532 34.759 60.199 42 95a313.345 313.345 0 018 71c-30.291-15.996-60.624-15.996-91 0-.5-64.332-.667-128.666-.5-193zm-69 196c19.305-.897 36.639 4.436 52 16a5340.567 5340.567 0 01.5 179l-90.5-179c11.333-8.671 24-14.004 38-16zm29 186A42233.556 42233.556 0 0150.5 225c30.002-17.499 59.335-16.499 88 3a40254.69 40254.69 0 0185 169.5zm64 0a2180.467 2180.467 0 0139.5-79c2.929-6.807.929-11.474-6-14a29.86 29.86 0 00-7 3 6870.852 6870.852 0 01-50 99 7917.292 7917.292 0 010-178c20.713-15.39 43.546-19.557 68.5-12.5 8.059 2.529 15.392 6.362 22 11.5a1902.133 1902.133 0 01-26.5 52c-.817 3.464-.483 6.798 1 10 4.591 2.867 8.924 2.534 13-1l30-60c20.271-15.254 42.771-19.754 67.5-13.5a101.151 101.151 0 0121 10 42233.556 42233.556 0 01-173 172.5zm-55 52h46v15h-46v-15zm0 31h46v16h-46v-16z" opacity=".935"/></svg>
							</div>
							<div class="ser_text">
								<h4>Hotel Sudah di Booking</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M216.5-.5h19c13.107 3.809 24.274 10.809 33.5 21 7.897 12.705 9.23 26.039 4 40-3.868 11.914-10.368 22.081-19.5 30.5-19.919 12.942-39.586 12.608-59-1-13.692-13.079-18.525-28.912-14.5-47.5a136.514 136.514 0 0116-31c6.058-5.441 12.891-9.441 20.5-12zm3 16c10.892-.539 20.892 2.295 30 8.5 10.537 9.024 13.037 19.857 7.5 32.5a206.057 206.057 0 01-9 17c-15.048 14.255-30.381 14.588-46 1-6.432-8.394-8.432-17.727-6-28l8-18c3.869-6.048 9.035-10.381 15.5-13z" opacity=".927"/><path d="M251.5 511.5h-8c-3.741-3.056-4.907-7.056-3.5-12a3702.887 3702.887 0 0151.5-51c-2.661-1.83-4.828-4.163-6.5-7a6573.198 6573.198 0 00-53-95c-3.297-3.067-7.131-5.233-11.5-6.5a813.852 813.852 0 00-39-8.5c1.651 10.525.817 20.858-2.5 31a3117.75 3117.75 0 01-52 92 2518.283 2518.283 0 01-3 42c-2.263 7.093-6.763 12.093-13.5 15h-13l-57-28.5c-10.945-8.945-13.445-19.779-7.5-32.5l57-95a23.813 23.813 0 001.5-8 112.56 112.56 0 00-4-18.5c2.487-8.161 7.32-9.995 14.5-5.5 8.477 15.649 8.143 30.982-1 46A3614.066 3614.066 0 0072.5 419a2584.015 2584.015 0 0142.5 22.5 4189.86 4189.86 0 0044-75c5.424-8.597 7.757-17.93 7-28a1827.974 1827.974 0 00-16.5-71 7328.663 7328.663 0 01-63.5-27c-1.978 5.865-2.645 11.865-2 18a977.606 977.606 0 009.5 36.5c-1.292 7.814-5.626 10.148-13 7a6.977 6.977 0 01-2.5-3.5 304.34 304.34 0 01-10-38c-1.172-12.466.994-24.3 6.5-35.5-17.329-.248-31.496-7.081-42.5-20.5-15.67-20.687-19.337-43.354-11-68A460.717 460.717 0 0141.5 96c8.475-2.526 12.642.64 12.5 9.5a845.7 845.7 0 01-17 35c-8.306 22.202-4.14 41.702 12.5 58.5a56.797 56.797 0 0015 9c8.705 1.897 15.872-.603 21.5-7.5a8522.989 8522.989 0 0054-111c2.421-8.816.254-16.316-6.5-22.5-24.296-11.921-45.963-8.254-65 11-9.135 2.537-12.968-.963-11.5-10.5 13.45-15.638 30.617-23.638 51.5-24 12.641.382 24.308 3.882 35 10.5 11.199 9.938 15.866 22.271 14 37a3122.945 3122.945 0 0167 33c10.43 8.695 15.597 19.862 15.5 33.5a342.515 342.515 0 0141.5-20.5c24.873-2.075 38.539 9.258 41 34-.107 10.21-3.774 18.877-11 26a7972.667 7972.667 0 0081 170.5 765.514 765.514 0 0121-6.5c4.894-1.686 8.394-4.853 10.5-9.5 1.546-10.529 6.712-18.695 15.5-24.5l43-23c10.504-1.163 13.838 3.17 10 13l-46 25c-2.117 1.731-3.617 3.898-4.5 6.5-2.017 10.209-7.183 18.375-15.5 24.5a1558.124 1558.124 0 00-42 15c-2.436 2.707-3.936 5.873-4.5 9.5 2.122 18.931-5.045 32.764-21.5 41.5a876.172 876.172 0 01-40 10 22.573 22.573 0 00-8 4 4864.028 4864.028 0 01-59 58.5zm-92-397c7.267-1.278 13.434.722 18.5 6a2250.391 2250.391 0 0121.5 39.5 1481.11 1481.11 0 01-31.5 18.5 293.649 293.649 0 01-22.5-46c.868-9.115 5.534-15.115 14-18zm43 18c12.655 2.004 19.655 9.671 21 23a28.844 28.844 0 01-2.5 11 821.67 821.67 0 00-18.5-34zm-72 13c.876-.131 1.543.202 2 1a1614.236 1614.236 0 0044.5 82 57.636 57.636 0 019.5 8.5 582.552 582.552 0 01-10 20.5 4630.98 4630.98 0 01-84-32.5 8676.23 8676.23 0 0038-79.5zm154 7c13.135-.613 20.468 5.553 22 18.5-.554 6.108-3.221 11.108-8 15l-74 39c-16.515 5.273-29.682.773-39.5-13.5a482.932 482.932 0 00-9.5-18.5l31-17.5c5.647 7.647 12.98 9.814 22 6.5a2264.795 2264.795 0 0156-29.5zm11 53c2.186 1.323 3.686 3.323 4.5 6a17919.307 17919.307 0 0076.5 162c-9.597 7.596-14.097 17.596-13.5 30a1427.586 1427.586 0 01-73-105c-7.647-11.582-18.147-19.415-31.5-23.5a3753.613 3753.613 0 01-65-14.5 431.108 431.108 0 019-17.5c10.63 1.443 20.963.11 31-4a2725.644 2725.644 0 0062-33.5zm-128 68c.417-.624 1.084-.957 2-1a16170.775 16170.775 0 0078 16.5c12.494 2.498 22.328 8.998 29.5 19.5a7072.312 7072.312 0 0044.5 66.5 384.645 384.645 0 01-46 11 3733.505 3733.505 0 00-30.5-49.5c-4.771-5.436-10.605-9.269-17.5-11.5a853.734 853.734 0 01-50.5-12.5 795.604 795.604 0 00-9.5-39zm160 117c2.544-.396 4.711.271 6.5 2l19 25c1.414 4.252-.086 6.752-4.5 7.5a338.741 338.741 0 01-47 10l-3.5-3.5a402.856 402.856 0 00-14.5-29.5c14.788-3.862 29.455-7.696 44-11.5zm-264 43c15.3 7.608 30.633 15.275 46 23l1 4.5a494.87 494.87 0 00-1.5 21.5c-.017 4.393-.85 8.56-2.5 12.5-1.667.667-3.333.667-5 0A844.172 844.172 0 0147 466.5c-1.187-1.544-1.52-3.211-1-5a722.21 722.21 0 0017.5-28z" opacity=".93"/></svg>
							</div>
							<div class="ser_text">
								<h4>Tour Leader Berpengalaman</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique.
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL -->

					{{-- <div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512"><path d="M253.5 15.5c56.373-3.733 99.206 18.267 128.5 66 23.205 47.802 20.205 93.802-9 138-33.907 42.309-77.741 58.809-131.5 49.5-49.374-12.374-81.54-42.874-96.5-91.5-1.074-10.553 3.426-14.053 13.5-10.5 5.396 17.292 13.562 33.125 24.5 47.5 35.443 38.486 77.943 49.319 127.5 32.5 51.234-24.287 74.067-64.787 68.5-121.5-9.637-45.304-36.47-75.137-80.5-89.5-54.138-11.348-96.305 6.152-126.5 52.5-9.712 18.85-15.046 38.85-16 60-3.257 2.928-7.091 3.762-11.5 2.5a11.532 11.532 0 01-3.5-4.5c.23-50.98 22.063-89.48 65.5-115.5 14.827-8.1 30.494-13.266 47-15.5z" opacity=".927"/><path d="M382.5 15.5c3.478-.316 6.812.184 10 1.5 47.25 49.489 62.75 107.655 46.5 174.5-6.514 23.199-17.348 44.032-32.5 62.5 4.953.995 9.953 1.662 15 2a11.532 11.532 0 014.5 3.5c.667 3 .667 6 0 9a11.532 11.532 0 01-4.5 3.5 352.886 352.886 0 01-36-2c-2.439-.774-4.273-2.274-5.5-4.5a344.1 344.1 0 012-37c3.838-6.634 8.838-7.634 15-3a34.78 34.78 0 012 10c31.305-46.4 37.638-96.067 19-149-8.438-21.891-21.104-40.891-38-57-2.575-5.466-1.742-10.133 2.5-14zM264.5 55.5a40.939 40.939 0 019 .5l2.5 2.5c1.388 4.872 1.888 9.872 1.5 15 19.172 4.671 29.506 16.838 31 36.5.31 8.35-3.69 11.683-12 10-1.5-.833-2.667-2-3.5-3.5-1.905-20.264-12.738-28.764-32.5-25.5-11.001 5.502-15.501 14.336-13.5 26.5 2.068 8.401 7.234 13.901 15.5 16.5 21.551-.658 36.385 8.842 44.5 28.5 4.875 18.719-.291 33.886-15.5 45.5-4.363 2.684-9.03 4.518-14 5.5a84.902 84.902 0 01-.5 13c-1.399 3.738-4.066 5.404-8 5-3.934.404-6.601-1.262-8-5a84.902 84.902 0 01-.5-13c-21.12-5.964-31.286-19.964-30.5-42 3.366-5.109 7.866-6.276 13.5-3.5a638.994 638.994 0 006.5 19.5c12.684 13.27 25.351 13.27 38 0 7.1-15.707 2.933-27.207-12.5-34.5-21.563.654-36.396-8.846-44.5-28.5-4.581-18.594.586-33.76 15.5-45.5a42.09 42.09 0 0114-5.5 84.9 84.9 0 01.5-13 27.248 27.248 0 013.5-5z" opacity=".93"/><path d="M22.5 297.5c28.002-.167 56.002 0 84 .5 2.994.406 5.161 1.906 6.5 4.5a133.243 133.243 0 012 21 5225.743 5225.743 0 0177-26 2236.39 2236.39 0 0194.5 29.5c15.149 9.308 25.149 22.475 30 39.5a8814.868 8814.868 0 01124-36.5c20.22-4.263 36.387 1.904 48.5 18.5 8.667 16.333 8.667 32.667 0 49a55.61 55.61 0 01-12.5 12.5A3442.805 3442.805 0 01372 456.5c-8.8-2.759-10.634-7.925-5.5-15.5l94-42c16.488-8.11 21.655-20.943 15.5-38.5-6.419-10.793-15.919-15.627-28.5-14.5a15355.64 15355.64 0 00-134 39c-21.182 18.469-45.849 25.803-74 22a52.46 52.46 0 01-14-3c-5.333-4.667-5.333-9.333 0-14a11.532 11.532 0 015.5-1.5c20.801 4.628 40.634 2.128 59.5-7.5l7.5-5.5c-.643-16.984-8.81-28.817-24.5-35.5L192 315.5a3434.92 3434.92 0 00-76.5 26 1035.884 1035.884 0 000 91 5096.022 5096.022 0 00166 46 1469.01 1469.01 0 0162.5-27c7.151.962 9.818 4.962 8 12a6.978 6.978 0 01-2.5 3.5l-60 27a22.106 22.106 0 01-7.5 1.5 3606.541 3606.541 0 01-166.5-45 74.086 74.086 0 00-1.5 12c-.406 2.994-1.906 5.161-4.5 6.5-30 .667-60 .667-90 0-1.833-.5-3-1.667-3.5-3.5a6642.168 6642.168 0 010-163c1.563-2.523 3.73-4.19 6.5-5zm9 17h66v139h-66v-139z" opacity=".944"/><path d="M54.5 329.5a94.81 94.81 0 0123 1.5c3.303 3.795 3.803 7.962 1.5 12.5a6.977 6.977 0 01-3.5 2.5c-8.105.934-16.105.601-24-1-2.765-2.995-3.598-6.495-2.5-10.5 1.106-2.613 2.94-4.28 5.5-5z" opacity=".9"/></svg>
							</div>
							<div class="ser_text">
								<h4>Legalitas Resmi dan Terjamin</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique.
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M208.5 17.5c33.426-3.007 57.592 10.327 72.5 40a83.756 83.756 0 014 14 588.96 588.96 0 011.5 56h26c-.167-16.337 0-32.67.5-49 5.947-38.051 28.114-58.385 66.5-61 38.982 2.582 61.149 23.249 66.5 62 .5 15.996.667 31.997.5 48 14.004-.167 28.004 0 42 .5 5.189 2.913 6.356 7.08 3.5 12.5a9.454 9.454 0 01-2.5 1.5c-43.665.5-87.332.667-131 .5-.333 34.34 0 68.673 1 103 7.242-3.68 14.575-3.847 22-.5 18.356 11.319 36.69 11.319 55 0 7.346-3.205 14.679-3.205 22 0 10.401 5.35 21.401 8.683 33 10 4.249 7.64 2.082 12.14-6.5 13.5-13.049-1.238-25.382-4.905-37-11a147.673 147.673 0 00-18.5 7.5c-13.342 3.305-26.675 3.305-40 0a445.455 445.455 0 01-18.5-7.5c-6.122 2.488-12.288 4.988-18.5 7.5-13.342 3.305-26.675 3.305-40 0a445.455 445.455 0 01-18.5-7.5c-25.667 13.333-51.333 13.333-77 0a156.988 156.988 0 01-26.5 9.5c-11.89 1.31-23.557.31-35-3a93.428 93.428 0 00-15.5-6.5 156.988 156.988 0 01-26.5 9.5c-11.89 1.31-23.557.31-35-3a91.889 91.889 0 00-15.5-6.5c-11.612 6.093-23.946 9.76-37 11-8.582-1.36-10.749-5.86-6.5-13.5 11.6-1.317 22.6-4.65 33-10 7.321-3.205 14.654-3.205 22 0 18.31 11.319 36.644 11.319 55 0 7.425-3.347 14.758-3.18 22 .5 1-34.327 1.333-68.66 1-103-43.668.167-87.335 0-131-.5-3.712-2.513-4.878-6.013-3.5-10.5a11.532 11.532 0 014.5-3.5c43.332-.5 86.665-.667 130-.5-.167-16.337 0-32.67.5-49 4.445-33.272 22.945-53.606 55.5-61zm2 15c30.962-2.17 50.796 11.497 59.5 41a550.774 550.774 0 011.5 54h-16c.167-17.003 0-34.003-.5-51-5.74-20.393-19.24-29.893-40.5-28.5-16.161 2.493-26.327 11.66-30.5 27.5-.5 58.999-.667 117.999-.5 177a61.234 61.234 0 01-15-1 4931.061 4931.061 0 01-.5-172c3.887-25.05 18.053-40.716 42.5-47zm160 0c30.962-2.17 50.796 11.497 59.5 41a550.774 550.774 0 011.5 54h-16c.167-17.003 0-34.003-.5-51-5.74-20.393-19.24-29.893-40.5-28.5-16.161 2.493-26.327 11.66-30.5 27.5-.167 58.67-.667 117.336-1.5 176a61.234 61.234 0 01-15 1 5465.324 5465.324 0 011.5-179c5.756-21.923 19.589-35.59 41.5-41zm-155 30c10.569-.468 18.402 3.865 23.5 13a470.387 470.387 0 011.5 52h-42c-.167-16.337 0-32.67.5-49 2.778-8.28 8.278-13.613 16.5-16zm160 0c10.569-.468 18.402 3.865 23.5 13a470.387 470.387 0 011.5 52h-42c-.167-16.337 0-32.67.5-49 2.778-8.28 8.278-13.613 16.5-16zm-177 80h114v33h-114v-33zm0 48h114v15h-114v-15zm0 30h114c.332 9.357-.002 18.69-1 28-8.042-5.285-16.709-6.785-26-4.5-13.714 8.546-28.38 10.88-44 7a85.819 85.819 0 01-16-7c-9.291-2.285-17.958-.785-26 4.5a196.869 196.869 0 01-1-28z" opacity=".933"/><path d="M55.5 318.5a112.97 112.97 0 0115 .5c9.838 5.391 20.338 8.557 31.5 9.5 10.83-.996 20.997-4.163 30.5-9.5 5-.667 10-.667 15 0 9.691 5.286 20.025 8.453 31 9.5 10.975-1.047 21.309-4.214 31-9.5 5-.667 10-.667 15 0 9.691 5.286 20.025 8.453 31 9.5 10.975-1.047 21.309-4.214 31-9.5 5-.667 10-.667 15 0 9.691 5.286 20.025 8.453 31 9.5 10.975-1.047 21.309-4.214 31-9.5 5-.667 10-.667 15 0l16 7c9.667 3.333 19.333 3.333 29 0a188.468 188.468 0 0017-7c5-.667 10-.667 15 0 10.505 6.127 21.839 9.46 34 10 3.712 2.513 4.878 6.013 3.5 10.5-2.265 2.966-5.265 4.299-9 4-11.293-.542-21.793-3.709-31.5-9.5-3-.667-6-.667-9 0-22.679 12.664-45.346 12.664-68 0-3-.667-6-.667-9 0-22.679 12.664-45.346 12.664-68 0-3-.667-6-.667-9 0-22.667 12.667-45.333 12.667-68 0-3-.667-6-.667-9 0-22.654 12.664-45.321 12.664-68 0-3-.667-6-.667-9 0-22.654 12.664-45.321 12.664-68 0-3-.667-6-.667-9 0-11.084 6.771-23.084 9.771-36 9-5.416-3.203-6.416-7.536-3-13 12.968-1.07 24.968-4.903 36-11.5z" opacity=".923"/><path d="M56.5 393.5a84.9 84.9 0 0113 .5 187.355 187.355 0 0117 7c8.911 2.826 17.911 3.159 27 1a181.343 181.343 0 0020-8 42.479 42.479 0 0113 0 188.468 188.468 0 0117 7c8.911 2.826 17.911 3.159 27 1l20-8a42.479 42.479 0 0113 0l20 8c8 2 16 2 24 0l20-8a42.479 42.479 0 0113 0l20 8c9.089 2.159 18.089 1.826 27-1a188.468 188.468 0 0117-7 42.479 42.479 0 0113 0 181.343 181.343 0 0020 8c9.089 2.159 18.089 1.826 27-1a188.468 188.468 0 0117-7c5.421-.839 10.754-.506 16 1 9.866 5.8 20.533 8.8 32 9 5.312 4.761 5.312 9.428 0 14a46.335 46.335 0 01-17-1 220.476 220.476 0 01-25-8.5 247.101 247.101 0 00-20 7.5c-12.004 3.333-24.004 3.333-36 0-6.899-2.52-13.733-5.02-20.5-7.5a174.588 174.588 0 00-20.5 7.5c-12 3.333-24 3.333-36 0-6.899-2.52-13.733-5.02-20.5-7.5-6.767 2.48-13.601 4.98-20.5 7.5-12 3.333-24 3.333-36 0a174.588 174.588 0 00-20.5-7.5c-6.767 2.48-13.601 4.98-20.5 7.5-12 3.333-24 3.333-36 0a174.588 174.588 0 00-20.5-7.5c-6.767 2.48-13.601 4.98-20.5 7.5-11.996 3.333-23.996 3.333-36 0a247.2 247.2 0 00-20-7.5 91.26 91.26 0 00-17 6.5c-8.131 2.828-16.465 3.828-25 3-5.312-4.572-5.312-9.239 0-14 12.749-.266 24.415-3.766 35-10.5z" opacity=".921"/><path d="M57.5 468.5a60.93 60.93 0 0111 .5 187.355 187.355 0 0117 7c15.9 4.74 30.9 2.74 45-6 6.333-2 12.667-2 19 0 19.339 11.333 38.672 11.333 58 0 6.333-2 12.667-2 19 0 19.333 11.333 38.667 11.333 58 0 6.333-2 12.667-2 19 0 19.328 11.333 38.661 11.333 58 0 6.333-2 12.667-2 19 0 19.318 11.291 38.652 11.291 58 0 6.015-1.942 12.015-1.942 18 0 9.93 5.644 20.597 8.644 32 9 5.189 2.913 6.356 7.08 3.5 12.5a9.454 9.454 0 01-2.5 1.5 50.834 50.834 0 01-18-1 235.086 235.086 0 01-23.5-8.5 561.76 561.76 0 01-20.5 7.5c-12.327 3.297-24.661 3.297-37 0a466.795 466.795 0 00-19.5-7.5 115.554 115.554 0 00-16.5 6.5c-13.575 4.217-27.241 4.551-41 1a466.795 466.795 0 00-19.5-7.5 115.554 115.554 0 00-16.5 6.5c-12.167 3.731-24.5 4.398-37 2a245.783 245.783 0 01-23.5-8.5 466.795 466.795 0 00-19.5 7.5c-13.759 3.551-27.425 3.217-41-1a115.554 115.554 0 00-16.5-6.5 466.795 466.795 0 00-19.5 7.5c-12.339 3.297-24.673 3.297-37 0a561.964 561.964 0 01-20.5-7.5 466.58 466.58 0 00-19.5 7.5 63.013 63.013 0 01-15.5 2.5c-8.587 1.081-11.92-2.586-10-11l2.5-2.5a393.952 393.952 0 0117-3 276.467 276.467 0 0020-8.5z" opacity=".924"/></svg>
							</div>
							<div class="ser_text">
								<h4>Jadwal Sudah Tersedia</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique.
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL --> --}}

					{{-- <div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M159.5-.5h38c24.037 2.931 47.037 9.764 69 20.5 3.479 4.145 3.812 8.479 1 13 29.587 8.19 52.753 25.024 69.5 50.5 2.635 3.85 2.969 7.85 1 12-9.383 9.433-15.05 20.767-17 34l-1 67c-2.354 5.595-6.521 7.428-12.5 5.5-2.226-1.227-3.726-3.061-4.5-5.5-.667-23-.667-46 0-69 1.586-14.166 6.753-26.833 15.5-38-13.965-19.497-32.632-32.33-56-38.5a593.2 593.2 0 01-34-6c-4-4.667-4-9.333 0-14a36.17 36.17 0 007-4c-38.652-13.325-76.985-12.659-115 2C85.686 47.072 64.853 75.572 58 114.5a471.532 471.532 0 00-3 79c.296 6.259 2.963 11.259 8 15a650.901 650.901 0 012-50c3.316-2.779 7.149-4.613 11.5-5.5 17.04-8.04 28.874-20.874 35.5-38.5 3.338-2.818 7.171-3.651 11.5-2.5 49.163 36.043 104.163 50.709 165 44l3.5 3.5c.667 26 .667 52 0 78-6.079 40.2-26.913 69.867-62.5 89 1.572 18.443 10.906 31.61 28 39.5a2309.811 2309.811 0 0151 18c4.171 3.854 5.004 8.354 2.5 13.5-4.427 3.487-9.26 3.987-14.5 1.5l-46-16a44.742 44.742 0 01-9.5-5.5c-29.139 27.36-62.306 33.527-99.5 18.5-2.818-3.338-3.651-7.171-2.5-11.5 2.474-3.819 5.974-5.319 10.5-4.5 28.667 11.384 54.334 6.717 77-14-7.759-9.685-13.259-20.519-16.5-32.5-21.331 6.666-42.664 6.666-64 0-4.104 19.058-14.271 33.892-30.5 44.5l53 77a90.455 90.455 0 0019 0 713.912 713.912 0 0026-37c11.069-3.891 15.902-.058 14.5 11.5l-17.5 25c15.779-.55 26.279 6.45 31.5 21a240.38 240.38 0 010 31c-1.025 2.187-2.525 3.854-4.5 5h-8c-2.196-1.354-3.696-3.354-4.5-6l-1-27c-1.227-2.226-3.061-3.726-5.5-4.5l-40.5-.5a461.274 461.274 0 00-42.5 1.5c-1.987 1.319-3.154 3.152-3.5 5.5l-1 26a27.241 27.241 0 01-3.5 5h-9c-2.196-1.354-3.696-3.354-4.5-6a196.152 196.152 0 010-28c4.415-16.477 15.248-23.977 32.5-22.5A2643.036 2643.036 0 0198 385.5 1156.375 1156.375 0 0045.5 405c-11.109 7.781-18.276 18.281-21.5 31.5a1508.417 1508.417 0 00-2 71 19.555 19.555 0 00-3.5 4h-9c-2.55-2.056-4.05-4.722-4.5-8a650.935 650.935 0 011-69c4.79-22.74 17.623-39.24 38.5-49.5l52-18c21.157-9.171 31.99-25.338 32.5-48.5 2.402-5.592 6.569-7.425 12.5-5.5 49.751 16.194 89.585 3.027 119.5-39.5 6.927-11.78 11.26-24.447 13-38a641.383 641.383 0 00-.5-62c-54.626 4.511-104.626-8.489-150-39-9.987 16.49-23.82 28.49-41.5 36a637.598 637.598 0 001 69c3.986 20.306 12.986 37.973 27 53 1.597 11.072-2.903 14.905-13.5 11.5-20.245-21.001-31.411-46.168-33.5-75.5-15.763-5.427-24.43-16.427-26-33a565.724 565.724 0 012-77C50.32 49.346 90.486 9.68 159.5-.5z" opacity=".938"/><path d="M150.5 187.5c4.882-.325 8.382 1.675 10.5 6a121.19 121.19 0 010 22c-1.664 3.584-4.497 5.251-8.5 5-4.505.333-7.339-1.667-8.5-6-.667-7-.667-14 0-21 1.436-2.942 3.603-4.942 6.5-6z" opacity=".906"/><path d="M204.5 187.5c9.454 1.708 12.788 7.375 10 17 2.895 11.589-1.438 16.756-13 15.5-4.394-4.183-6.06-9.35-5-15.5-.451-5.184.549-10.018 3-14.5a38.715 38.715 0 005-2.5z" opacity=".916"/><path d="M344.5 511.5h-9a27.241 27.241 0 01-3.5-5 14999 14999 0 010-245c.833-2.167 2.333-3.667 4.5-4.5 5.979-1.928 10.146-.095 12.5 5.5.498 2.982.665 5.982.5 9 18.731-.221 36.398 3.945 53 12.5a1351.098 1351.098 0 0150 37 252.223 252.223 0 0043 20c11.632 11.088 13.465 23.588 5.5 37.5-4.892 5.2-10.725 9.034-17.5 11.5a124.896 124.896 0 01-26 7 363.423 363.423 0 00-69 13c-9.848.482-13.348-4.018-10.5-13.5a11.532 11.532 0 014.5-3.5 164.046 164.046 0 0121-6 1198.072 1198.072 0 0068-12 59.83 59.83 0 0014.5-7.5c2.856-5.42 1.689-9.587-3.5-12.5-27.989-9.68-52.656-24.68-74-45-17.261-13.477-36.928-20.31-59-20.5.167 72.001 0 144.001-.5 216-.804 2.646-2.304 4.646-4.5 6z" opacity=".939"/></svg>
							</div>
							<div class="ser_text">
								<h4>Friendly Guide</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique.
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL -->

					<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up">
						<div class="service">
							<div class="icon">
								<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M363.5-.5h130c9.167 3.833 15.167 10.5 18 20v76c-2.828 10.327-9.494 16.827-20 19.5l-28 1-79 49.5-1-2a899.963 899.963 0 008-48c-10.08.423-20.08-.077-30-1.5-8.02-3.351-13.187-9.184-15.5-17.5a1559.72 1559.72 0 010-79c2.683-9.182 8.517-15.182 17.5-18zm5 17c40.001-.167 80.001 0 120 .5a6.977 6.977 0 013.5 2.5 369.879 369.879 0 011.5 38l-.5 36c-1.339 2.594-3.506 4.094-6.5 4.5l-29 1-49 30.5-1-1.5a544.744 544.744 0 005-29.5c-14.337.167-28.671 0-43-.5-2.348-.346-4.181-1.513-5.5-3.5a663.066 663.066 0 01-1-72c1.36-2.523 3.193-4.523 5.5-6z" opacity=".948"/><path d="M-.5 186.5v-2a175.674 175.674 0 0014.5-8c5.405 7.8 10.572 15.8 15.5 24 25.948-90.782 84.615-147.949 176-171.5 39.699-8.14 79.032-6.64 118 4.5a120.398 120.398 0 01-4 17c-79.152-21.125-149.485-4.958-211 48.5-29.075 27.966-49.075 61.466-60 100.5l1 2a267.454 267.454 0 0119-11c4.418 4.215 7.25 9.215 8.5 15a3428.341 3428.341 0 01-47.5 29 95339.571 95339.571 0 00-30-48z" opacity=".93"/><path d="M378.5 32.5h100v17h-100v-17z" opacity=".963"/><path d="M378.5 65.5h67v17h-67v-17z" opacity=".958"/><path d="M460.5 65.5h18v17h-18v-17z" opacity=".892"/><path d="M180.5 511.5h-22c-8.996-2.175-17.329-6.009-25-11.5L12 378.5c-6.635-9.098-10.802-19.098-12.5-30v-13c1.703-10.922 5.87-20.922 12.5-30l42-42a5386.59 5386.59 0 0161.5 62 1610.247 1610.247 0 01-33.5 34c-2 3-2 6 0 9l28 28c5.953-23.616 20.453-39.116 43.5-46.5a1349.132 1349.132 0 0160-10.5 8.43 8.43 0 00-.5-4c-21.276-12.864-34.442-31.531-39.5-56-13.457-2.62-21.957-10.62-25.5-24a1599.45 1599.45 0 010-80c9.154-50.82 38.987-81.654 89.5-92.5 53.682-5.584 92.515 15.583 116.5 63.5a99.968 99.968 0 018 30 3479.51 3479.51 0 010 118c-2.248 7.92-7.081 13.753-14.5 17.5a207.57 207.57 0 01-26 2 105.263 105.263 0 01-24.5 21.5 8.43 8.43 0 00-.5 4 1349.132 1349.132 0 0160 10.5c18.119 5.12 30.952 16.287 38.5 33.5a6563.755 6563.755 0 0020.5 61c-58.664.833-117.33 1.333-176 1.5l10.5 10.5c.667 1 .667 2 0 3L205.5 500c-7.666 5.503-15.999 9.336-25 11.5zm62-412c41.804-2.853 72.97 13.814 93.5 50 9.074 21.824 11.907 44.49 8.5 68a83.63 83.63 0 00-6.5-3 40.914 40.914 0 01-.5-9c-22.732 1.318-43.398-4.515-62-17.5-6.845-6.18-13.678-12.346-20.5-18.5a342.813 342.813 0 01-23.5 20.5c-18.267 11.734-38.267 16.9-60 15.5v10c-2.177.086-4.177.753-6 2-6.458-36.435 2.875-67.935 28-94.5 14.324-12.163 30.658-19.997 49-23.5zm12 94c18.544 17.266 40.544 26.933 66 29 .167 16.337 0 32.67-.5 49a63.888 63.888 0 01-8 24 834.486 834.486 0 01-57.5 1v17c14.004-.167 28.004 0 42 .5-25.922 19.454-52.589 20.454-80 3-14.598-11.356-23.431-26.19-26.5-44.5-.5-16.663-.667-33.33-.5-50 25.328-1.838 46.995-11.504 65-29zm-84 41c1.157 8.156 1.323 16.49.5 25-8.417-8.165-8.584-16.498-.5-25zm167 0c1.871.359 3.371 1.359 4.5 3 5.219 8.793 3.886 16.46-4 23-.5-8.66-.666-17.327-.5-26zm7 42c1.414 5.266 1.248 10.599-.5 16-3.439 3.871-7.606 4.871-12.5 3a85.798 85.798 0 005-15c3.002-.834 5.668-2.167 8-4zm-291 12a1853.296 1853.296 0 0136.5 36c-1.407 3.445-3.74 6.445-7 9l-36-36c-.667-.667-.667-1.333 0-2a63.697 63.697 0 006.5-7zm-21 21a1853.296 1853.296 0 0136.5 36 213.017 213.017 0 01-5 11c-1.613 8.27-.28 15.937 4 23l64.5 64.5c11.464 6.602 22.298 5.769 32.5-2.5l36 36c-1.237 3.276-3.403 6.109-6.5 8.5-16.672 11.332-33.339 11.332-50 0L26 367.5c-13.124-21.074-10.957-40.407 6.5-58zm201 35c14.333 2.667 28.667 2.667 43 0a666.266 666.266 0 01-21.5 22 666.266 666.266 0 01-21.5-22zm-16 11a587935.45 587935.45 0 0137 36 1856.563 1856.563 0 0036.5-36 1958.503 1958.503 0 0166.5 13.5c7.931 3.545 14.098 9.045 18.5 16.5a810.047 810.047 0 0115.5 42.5 7221.64 7221.64 0 01-170 0 721.654 721.654 0 00-32.5-31.5c-12.155 10.82-24.322 21.654-36.5 32.5-2.53 1.422-5.197 1.755-8 1a141.757 141.757 0 01-20-20c2.582-11.102 7.082-21.269 13.5-30.5 5.815-5.825 12.648-9.991 20.5-12.5 19.84-3.636 39.507-7.47 59-11.5zm-30 65a650.19 650.19 0 0138 36.5l-9.5 9.5-36-36c-.667-.667-.667-1.333 0-2a84.01 84.01 0 007.5-8z" opacity=".941"/><path d="M457.5 152.5a955.747 955.747 0 0150 30c-2.456 5.277-5.623 9.944-9.5 14a224.909 224.909 0 01-22-13c20.047 68.955 11.714 134.288-25 196a137.436 137.436 0 01-16.5 22 103.042 103.042 0 01-13-11c46.57-61.36 58.737-129.027 36.5-203a202.106 202.106 0 01-14.5 23c-5.277-2.456-9.944-5.623-14-9.5a2017.903 2017.903 0 0028-48.5z" opacity=".929"/></svg>
							</div>
							<div class="ser_text">
								<h4>24/7 Support</h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique.
								</p>
								<a href="#" class="s_btn">Explore More <i class="fa-solid fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div><!-- END COL --> --}}

				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END SERVICES -->

		<!-- START GALLERY -->
		<section id="gallery" class="our_gallery section-padding">
			<div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-up">
						<div class="section-title text-center">
							<span>Galeri</span>
							<h2>Dokumentasi Keberangkatan Umroh</h2>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->

				<div class="portfolio-grid">
					<div class="row">
						<div class="col-xl-4 col-lg-6 col-12 portfolio-item">
							<div class="single-gallery">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/gallery/1.jpg" alt="gallery Image">
								<div class="gallery_content">
									<div class="float-start">
										<span>Maldives</span>
										<h4>Green Palm Trees </h4>
									</div>
									<div class="float-end">
										<a href="https://getmasum.com/html-preview/tripx/assets/img/gallery/1.jpg" class="gallery_enlarge_icon"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-xl-4 col-lg-6 col-12 portfolio-item">
							<div class="single-gallery">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/gallery/2.jpg" alt="gallery Image">
								<div class="gallery_content">
									<div class="float-start">
										<span>UAE</span>
										<h4>United Arab Emirates</h4>
									</div>
									<div class="float-end">
										<a href="https://getmasum.com/html-preview/tripx/assets/img/gallery/2.jpg" class="gallery_enlarge_icon"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-xl-4 col-lg-6 col-12 portfolio-item">
							<div class="single-gallery">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/gallery/3.jpg" alt="gallery Image">
								<div class="gallery_content">
									<div class="float-start">
										<span>Canada</span>
										<h4>Moraine Lake, Canada</h4>
									</div>
									<div class="float-end">
										<a href="https://getmasum.com/html-preview/tripx/assets/img/gallery/3.jpg" class="gallery_enlarge_icon"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-xl-4 col-lg-6 col-12 portfolio-item">
							<div class="single-gallery">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/gallery/4.jpg" alt="gallery Image">
								<div class="gallery_content">
									<div class="float-start">
										<span>Thailand</span>
										<h4>Tourists Riding a Boat</h4>
									</div>
									<div class="float-end">
										<a href="https://getmasum.com/html-preview/tripx/assets/img/gallery/4.jpg" class="gallery_enlarge_icon"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-xl-4 col-lg-6 col-12 portfolio-item">
							<div class="single-gallery">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/gallery/5.jpg" alt="gallery Image">
								<div class="gallery_content">
									<div class="float-start">
										<span>UAE</span>
										<h4>Gray Pyramid, Egypt</h4>
									</div>
									<div class="float-end">
										<a href="https://getmasum.com/html-preview/tripx/assets/img/gallery/5.jpg" class="gallery_enlarge_icon"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div><!-- End Col -->
					</div>

				</div><!-- END portfolio-grid -->
			</div>
		</section>
		<!-- END GALLERY -->

		<!-- START WHY CHOOSE US -->
		<section class="why_choose pb_130">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-12 align-self-center">
						<div class="section-title text-left about_title">
							<span>Berkenalan Dengan Kami</span>
							<h2>Kenapa Harus Memilih Kami?</h2>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas, neque ut hendrerit egestas, lorem velit venenatis urna, vitae consequat enim purus tincidunt urna. Maecenas sollicitudin mi id odio lacinia feugiat
						</p>

						<div class="counter">
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-12 ">
									<div class="single_counter">
										<span class="scicon">
											<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M340.5 12.5c21.098-1.945 37.765 5.555 50 22.5a167.305 167.305 0 0132 1c3.712 2.513 4.878 6.013 3.5 10.5-.5 1.833-1.667 3-3.5 3.5a586.185 586.185 0 00-27 0c1.894 21.543-6.106 38.21-24 50-25.228 11.276-46.228 6.109-63-15.5-7.099-1.832-10.599-6.498-10.5-14-1.643-31.087 12.524-50.42 42.5-58zm1 15c11.768-1.311 22.101 1.856 31 9.5-21.462 4.817-41.295 13.317-59.5 25.5 1.61-18.108 11.11-29.775 28.5-35zm36 24c4.237 19.028-3.096 31.861-22 38.5-14.569 2.544-25.902-2.29-34-14.5 17.157-11.712 35.823-19.712 56-24z" opacity=".926"/><path d="M326.5 119.5c12.932-2.016 24.599.817 35 8.5l55 57a4997.744 4997.744 0 0167 19c15.582 7.665 21.749 20.165 18.5 37.5-4.928 14.145-14.928 21.812-30 23a1330.03 1330.03 0 01-88.5-23.5l-7.5-7.5a306.347 306.347 0 000 35l57 63a78.664 78.664 0 019 12 11129.908 11129.908 0 0142 111c3.674 20.154-3.826 34.321-22.5 42.5-20.336 4.415-34.836-2.752-43.5-21.5a8658.992 8658.992 0 00-37-98l-29-31a567.366 567.366 0 01-9 32 8735.13 8735.13 0 00-66 107c-10.385 11.807-23.218 15.64-38.5 11.5-19.718-9.274-26.551-24.441-20.5-45.5a8065.117 8065.117 0 0163-103 1882.936 1882.936 0 0116.5-65.5 1731.565 1731.565 0 01-3-74.5 5962.739 5962.739 0 01-90 51.5c-8.185 2.301-16.185 1.801-24-1.5A15342.58 15342.58 0 0080 469.5c-3.572 5.058-8.405 8.391-14.5 10 3.804 10.394.304 16.727-10.5 19-9.805-1.482-13.805-7.149-12-17a17.833 17.833 0 014.5-5.5 314.796 314.796 0 00-30-15c-8.406-6.55-11.24-15.05-8.5-25.5a13283.11 13283.11 0 0166-139c6.122-6.485 13.622-8.985 22.5-7.5a576.545 576.545 0 0141 19.5 1200.893 1200.893 0 0028.5-59c-2.063-6.065-3.229-12.399-3.5-19-.364-12.107 4.636-21.274 15-27.5l128-74a269.716 269.716 0 0120-9.5zm2 15c14.339-2.416 24.505 2.918 30.5 16a3973.378 3973.378 0 012 124l67 75a3400.044 3400.044 0 0142.5 115c-4.199 17.433-14.532 22.599-31 15.5l-4.5-4.5-42-108-80-86a40.23 40.23 0 01-2-11l-1-80c-3.719-3.402-7.886-3.902-12.5-1.5a7235.962 7235.962 0 01-99 57c-9.264 1.618-15.764-1.882-19.5-10.5-1.589-6.7-.089-12.534 4.5-17.5 48.396-27.86 96.729-55.694 145-83.5zm47 30a1556.246 1556.246 0 0033 33.5 4604.81 4604.81 0 0173 22c6.543 6.598 7.709 14.098 3.5 22.5-3.469 3.902-7.802 6.235-13 7a2862.28 2862.28 0 01-80.5-21.5L376 212.5c-.5-15.997-.667-31.997-.5-48zm-67 135a9452.18 9452.18 0 0131 34 1505.036 1505.036 0 01-9.5 37l-64 104c-7.576 9.658-16.742 11.492-27.5 5.5-7.243-6.059-9.41-13.559-6.5-22.5l63-103a3302.933 3302.933 0 0013.5-55zm-218 4a283.896 283.896 0 0136 15.5c3.625 2.206 4.792 5.373 3.5 9.5a12092.033 12092.033 0 00-63 133c-1.47 1.652-3.303 2.652-5.5 3a873.007 873.007 0 01-36-16.5c-1.847-2.579-2.347-5.412-1.5-8.5l62-132c1.397-1.57 2.897-2.904 4.5-4z" opacity=".922"/></svg>
										</span>
										<div class="sc_content">
											<h3><span class="counter_num">30.3</span> k</h3>
											<p>Happy Traveler</p>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-6 col-md-6 col-12">
									<div class="single_counter">
										<span class="scicon">
											<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M340.5 70.5c5.676-.166 11.343 0 17 .5 3.906 2.79 4.74 6.29 2.5 10.5-16.126 13.774-18.792 29.774-8 48 6.638 7.902 15.138 11.902 25.5 12a71.357 71.357 0 0116-.5c3.82 3.955 3.987 8.122.5 12.5-18.312 22.133-40.812 27.633-67.5 16.5-21.588-12.678-30.755-31.512-27.5-56.5 4.898-23.063 18.731-37.396 41.5-43zm-8 19a2.427 2.427 0 012 .5c-9.328 26.662-1.995 47.328 22 62l12 4c-19.012 8.264-35.179 4.43-48.5-11.5-11.404-22.04-7.238-40.373 12.5-55z" opacity=".926"/><path d="M197.5 78.5a32.438 32.438 0 018 .5c6.258 7.928 13.425 14.762 21.5 20.5 1.888 8.779-1.612 12.279-10.5 10.5a28.415 28.415 0 01-7.5-4.5 64.218 64.218 0 000 16c6.417 8.747 14.417 15.747 24 21 2.023 7.626-.81 11.459-8.5 11.5a44.271 44.271 0 01-15-9.5 33.225 33.225 0 00-.5 14c7.898 10.705 17.731 19.205 29.5 25.5 4.223 8.756 1.556 13.089-8 13a78.81 78.81 0 01-21.5-14.5c-.915 6.444-.581 12.777 1 19l1.5 1.5c45.059.015 90.059.682 135 2 32.577 71.201 75.41 135.367 128.5 192.5.412-4.852 2.246-9.019 5.5-12.5 8.833-1.833 12.333 1.667 10.5 10.5a2019.446 2019.446 0 01-8 39c-1.829 5.658-5.663 7.492-11.5 5.5-2.371-1.743-3.705-4.077-4-7a79.167 79.167 0 002.5-17.5 737.127 737.127 0 01-69-85 3124.4 3124.4 0 0040 100c1.892 5.542.059 9.042-5.5 10.5-120.333.667-240.667.667-361 0-3.795-.795-5.795-3.128-6-7a6567.057 6567.057 0 0134.5-84.5c.667-3 .667-6 0-9A1153.256 1153.256 0 0139.5 417c2.39 6.625 3.224 13.458 2.5 20.5-4.041 4.813-8.375 5.146-13 1a1179.026 1179.026 0 01-10.5-47c1.532-6.544 5.532-8.711 12-6.5 3.18 3.511 5.014 7.678 5.5 12.5a728.437 728.437 0 0068-85 702.15 702.15 0 000-53c-8.475 8.812-18.308 15.645-29.5 20.5-5.977 1.168-9.31-1.332-10-7.5.534-2.114 1.534-3.948 3-5.5 14.51-7.012 26.343-17.178 35.5-30.5a90.455 90.455 0 000-19A77.83 77.83 0 0182.5 232c-6.114 1.446-9.78-.887-11-7a14.757 14.757 0 013-5.5c12.16-5.992 21.994-14.659 29.5-26a49.226 49.226 0 000-14 66.691 66.691 0 01-14.5 9.5c-9.226.946-12.226-2.887-9-11.5 9.872-4.704 17.705-11.704 23.5-21a38.064 38.064 0 00-.5-15c-4.069 3.543-8.735 5.043-14 4.5-4.587-2.763-5.754-6.597-3.5-11.5 8.265-4.764 15.098-11.097 20.5-19 2.938-1.075 5.938-1.241 9-.5 5.919 7.921 13.086 14.421 21.5 19.5 1.511 9.492-2.323 12.992-11.5 10.5a69.2 69.2 0 01-6.5-4.5c-2.695 10.191-.195 18.691 7.5 25.5a149.01 149.01 0 0016.5 11.5c2.509 9.161-.991 12.995-10.5 11.5a47.911 47.911 0 01-13.5-9.5c-.667 5-.667 10 0 15 8.508 11.18 18.842 20.18 31 27 1.522 9.481-2.312 12.981-11.5 10.5a69.242 69.242 0 01-19.5-14.5c-.667 6-.667 12 0 18a142.322 142.322 0 0019 21 430.396 430.396 0 0024-50 6.978 6.978 0 013.5-2.5 314.44 314.44 0 0025-1.5 10.756 10.756 0 012.5-3c.667-6 .667-12 0-18a93.52 93.52 0 01-19.5 14.5c-10.668 1.979-14.001-2.021-10-12 11.925-5.587 21.759-13.754 29.5-24.5.667-5 .667-10 0-15a54.742 54.742 0 01-17 10c-7.451-1.703-9.451-6.036-6-13 9.247-4.917 16.913-11.584 23-20a64.218 64.218 0 000-16c-4.095 3.969-8.929 5.469-14.5 4.5-4.033-3.168-4.867-7.001-2.5-11.5 8.646-5.149 15.813-11.815 21.5-20zm-24 141c52.338-.333 104.671 0 157 1-31.34 65.06-71.34 124.06-120 177a60.391 60.391 0 00-4-11.5c-10.18-3.66-14.346-.16-12.5 10.5a912.651 912.651 0 006.5 29c-37.327 1-74.661 1.333-112 1a27815.546 27815.546 0 0185-207zm161 30a7835.35 7835.35 0 011 177h-73c23.997-58.988 47.997-117.988 72-177zm58 104a2655.807 2655.807 0 00-42.5-45 870.065 870.065 0 010-59 6954.164 6954.164 0 0142.5 104zm-274-93c3.969 3.325 7.969 6.659 12 10a136.77 136.77 0 01-11.5 19c-.5-9.661-.666-19.328-.5-29zm166 69a8605.227 8605.227 0 01-39 97h-30a141.42 141.42 0 00-1.5-11c25.632-27.112 49.132-55.778 70.5-86zm78 15a2969.577 2969.577 0 0045 47.5 346.478 346.478 0 00-18.5 25.5c-8.847-24.354-17.68-48.688-26.5-73zm-13 10a3457.865 3457.865 0 0126 71 169.926 169.926 0 01-26 1v-72zm65 53c3.431 5.943 6.097 12.276 8 19-7.008.166-14.008 0-21-.5a192.104 192.104 0 0013-18.5z" opacity=".933"/></svg>
										</span>
										<div class="sc_content">
											<h3><span class="counter_num">5</span> +</h3>
											<p>Packages </p>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-6 col-md-6 col-12">
									<div class="single_counter">
										<span class="scicon">
											<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M511.5 265.5v81a339.84 339.84 0 01-2.5 20c-4.667 5.333-9.333 5.333-14 0-.008-20.327.158-40.66.5-61a651.55 651.55 0 00-5.5-96c-4.009-10.262-11.509-16.095-22.5-17.5a1945.01 1945.01 0 00-141-4.5 327.774 327.774 0 01-4.5 44c-6.468 17.324-18.968 26.49-37.5 27.5a3696.398 3696.398 0 01-97.5 4.5 878.439 878.439 0 004 134c2.109 10.751 8.276 17.917 18.5 21.5a709.987 709.987 0 0042 3 8668.044 8668.044 0 01109 4 37.02 37.02 0 0110.5 7.5c16.549 23.055 36.716 42.055 60.5 57 3.074.05 5.241-1.283 6.5-4l1-43c1.336-10.339 6.836-17.506 16.5-21.5a90.871 90.871 0 0117-3c13.699-5.869 20.532-16.369 20.5-31.5 4.958-4.215 9.625-3.881 14 1-.044 30.209-15.211 46.375-45.5 48.5-3.665 1.668-5.832 4.501-6.5 8.5l-1 45c-5.078 13.043-14.578 18.209-28.5 15.5-26.258-15.918-48.424-36.418-66.5-61.5a11.532 11.532 0 00-4.5-3.5 3055.547 3055.547 0 01-137-5c-23.963-.882-38.13-13.049-42.5-36.5a1009.827 1009.827 0 01-4.5-136c-6.675-.166-13.342 0-20 .5-5.99 6.96-11.99 13.96-18 21-10.5 2.833-14.333-1-11.5-11.5a685.142 685.142 0 0015.5-19.5c3.218-2.777 6.885-4.777 11-6a2933.871 2933.871 0 00136-5c11.698-.603 19.532-6.436 23.5-17.5 7.322-61.004 7.322-122.004 0-183-4.537-12.846-13.703-19.013-27.5-18.5a1836.22 1836.22 0 00-241 1C24.957 29.564 18.457 39.064 19 53.5c-5.55 56.29-5.216 112.623 1 169 2.323 9.656 8.157 16.156 17.5 19.5 15.177-.786 25.677 5.714 31.5 19.5l1 43c2.038 6.443 5.871 7.943 11.5 4.5l21-17c9.001-1.329 12.501 2.504 10.5 11.5A257.719 257.719 0 0186.5 325c-13.06 4.647-23.226 1.147-30.5-10.5a43.08 43.08 0 01-2-9 463.4 463.4 0 00-2-42 11.532 11.532 0 00-4.5-3.5c-16.407-.45-29.24-7.283-38.5-20.5a49.735 49.735 0 01-5-15 2400.428 2400.428 0 01-4.5-50v-82a3864.625 3864.625 0 014.5-50C7.1 26.065 16.6 15.232 32.5 10a511.242 511.242 0 0152-4c69.059-2.7 138.059-1.7 207 3 16.757 3.758 27.257 13.924 31.5 30.5a789.5 789.5 0 014.5 132 2095.542 2095.542 0 01142 4.5c17.361 2.091 29.195 11.257 35.5 27.5a654.78 654.78 0 016.5 62z" opacity=".933"/><path d="M106.5 73.5c9.89-.802 16.39 3.531 19.5 13 3.965 12.424 2.965 24.424-3 36-7.281 8.951-14.948 9.285-23 1-8.263-14.808-8.263-29.475 0-44a53.848 53.848 0 016.5-6z" opacity=".946"/><path d="M211.5 73.5c8.698-1.236 14.865 2.097 18.5 10 5.166 13.33 4.5 26.33-2 39-8.417 9.531-16.417 9.198-24-1-6.251-14.156-5.917-28.156 1-42a53.848 53.848 0 016.5-6z" opacity=".945"/><path d="M105.5 148.5c3.149-.289 6.149.211 9 1.5 17.57 33.779 43.57 42.446 78 26 8.445-6.066 14.612-13.899 18.5-23.5 3.509-4.113 7.676-4.946 12.5-2.5 1.797 1.594 2.797 3.594 3 6-9.156 24.766-26.823 39.433-53 44-32.804 2.852-56.637-10.314-71.5-39.5-1.407-4.857-.24-8.857 3.5-12z" opacity=".918"/><path d="M360.5 206.5c22.775-1.39 33.942 9.276 33.5 32a277.646 277.646 0 01-12.5 29 581.022 581.022 0 0034 1.5c15.788 6.418 20.454 17.585 14 33.5 10.617 11.93 10.617 23.93 0 36 4.891 10.774 3.225 20.441-5 29 4.743 11.196 2.743 21.03-6 29.5a32.473 32.473 0 01-10 4 1979.51 1979.51 0 01-89 0 60.005 60.005 0 01-13-4.5 28.931 28.931 0 01-4 1.5 289.106 289.106 0 01-34 0c-8.277-2.941-12.777-8.775-13.5-17.5a1266.62 1266.62 0 011-99c2.369-7.036 7.202-11.203 14.5-12.5a952.725 952.725 0 0135-.5 64.256 64.256 0 018-10.5 137.243 137.243 0 0015.5-11.5 689.233 689.233 0 0017-31c4.376-3.928 9.21-6.928 14.5-9zm3 16c8.769-.96 13.769 2.873 15 11.5a595.668 595.668 0 01-16.5 36.5c-3.068 6.195-1.568 10.695 4.5 13.5l46 1c5.333 4 5.333 8 0 12-6.325-.513-9.992 2.32-11 8.5.333 2.51 1.333 4.677 3 6.5a46.225 46.225 0 0012 2c5.298 2.488 6.298 6.155 3 11a46.225 46.225 0 01-12 2c-7.038 4.186-7.705 9.186-2 15a43.385 43.385 0 018 2c4 3.667 4 7.333 0 11a61.981 61.981 0 01-13 2c-6.723 9.003-4.389 14.336 7 16 5.143 4.403 4.81 8.403-1 12-28.333.667-56.667.667-85 0a28.931 28.931 0 01-4-1.5 1700.562 1700.562 0 01-.5-101 35.145 35.145 0 015-10 354.469 354.469 0 0114.5-10.5c9.23-9.613 16.063-20.78 20.5-33.5 1.494-2.814 3.66-4.814 6.5-6zm-90 62c8.34-.166 16.673 0 25 .5l1.5 1.5c.667 31.333.667 62.667 0 94l-1.5 1.5c-8.667.667-17.333.667-26 0a9.454 9.454 0 01-1.5-2.5 2069.466 2069.466 0 010-91c.48-1.633 1.313-2.966 2.5-4z" opacity=".932"/></svg>
										</span>
										<div class="sc_content">
											<h3><span class="counter_num">95</span> %</h3>
											<p>Satisfaction Rate </p>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-6 col-md-6 col-12">
									<div class="single_counter">
										<span class="scicon">
											<svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M511.5 278.5v19c-8.039 24.378-25.039 36.545-51 36.5a49.519 49.519 0 01-11.5 9.5 18.453 18.453 0 00-.5 6 375.242 375.242 0 0132 12.5c22.853 16.105 30.186 37.438 22 64-5.749 2.641-9.916 1.141-12.5-4.5a207.57 207.57 0 00-2-26c-2.805-7.787-7.638-13.953-14.5-18.5a271.86 271.86 0 00-27-11.5c-8.714 13.233-20.381 16.733-35 10.5-4.19-2.69-7.524-6.19-10-10.5-8.224 3.24-16.39 6.573-24.5 10a572.094 572.094 0 011 64c-4.58 7.567-9.58 7.901-15 1l-1-53c-1.823-14.153-8.323-25.653-19.5-34.5a1728.666 1728.666 0 01-32.5-22.5l-13 18c-3.407 3.022-7.407 4.689-12 5a240.375 240.375 0 01-20.5-6 4517.653 4517.653 0 00-1.5 95c-2.584 5.641-6.751 7.141-12.5 4.5a6.978 6.978 0 01-2.5-3.5c-.5-31.998-.667-63.998-.5-96a1111.754 1111.754 0 01-22.5 6c-4.685-.676-8.685-2.676-12-6a110.318 110.318 0 00-13-16 648.462 648.462 0 00-34.5 23.5c-8.495 8.156-13.995 17.99-16.5 29.5l-1 55c-4.58 7.567-9.58 7.901-15 1-.667-19-.667-38 0-57a44.818 44.818 0 013.5-13.5l-1-1.5a987.545 987.545 0 01-23.5-9c-8.869 14.956-21.369 19.123-37.5 12.5-4.882-3.214-8.715-7.381-11.5-12.5a1484.586 1484.586 0 00-28.5 11c-6.782-1.218-9.282-5.218-7.5-12l3.5-3.5a379.878 379.878 0 0129-11c1.957-2.121 2.457-4.621 1.5-7.5-10.485-7.297-16.652-17.297-18.5-30-18.482-.314-27.648-9.648-27.5-28a42.499 42.499 0 015.5-14 418.44 418.44 0 01-4-28.5c.634-15.939 7.3-28.605 20-38 11.99-4.994 23.99-9.994 36-15 32.911-8.451 58.744 1.382 77.5 29.5 8.576 16.87 10.742 34.537 6.5 53 9.022 13.257 7.688 25.423-4 36.5a71.806 71.806 0 01-17.5 5.5c-3.023 13.023-10.023 23.357-21 31-.798 1.759-.631 3.426.5 5a536.97 536.97 0 0129 11 177.313 177.313 0 0111-11.5 1500.07 1500.07 0 0038-26.5 30.61 30.61 0 014-10l18-15a38.064 38.064 0 00.5-15c-14.126-10.568-22.959-24.568-26.5-42-21.413-4.229-29.579-16.896-24.5-38a28.224 28.224 0 014.5-7.5c-8.391-25.667-7.891-51.167 1.5-76.5a62.707 62.707 0 017.5-13c9.019-3.74 13.185-.74 12.5 9-12.367 23.265-14.867 47.599-7.5 73 1.644.214 3.144-.12 4.5-1 1.468-23.796 13.634-38.963 36.5-45.5l47-1c4.095-4.382 9.095-7.215 15-8.5 4.991.816 9.157 3.149 12.5 7-.853-28.193-15.019-45.694-42.5-52.5-11.179-2.32-22.179-1.654-33 2a286.235 286.235 0 00-18 8.5c-6.782-1.218-9.282-5.218-7.5-12 13.301-10.88 28.635-16.213 46-16 26.274.217 46.774 11.05 61.5 32.5 31.743 7.622 46.243 27.789 43.5 60.5a2234.593 2234.593 0 00-4.5 33c1.461 4.275 2.961 8.609 4.5 13 2.005 15.833-4.495 26.333-19.5 31.5-2.31.497-4.643.663-7 .5-2.852 17.706-11.352 32.04-25.5 43-.667 5-.667 10 0 15a216.061 216.061 0 0119 16 81.699 81.699 0 013.5 9.5 994.612 994.612 0 0135 24c6.599 5.761 12.266 12.261 17 19.5a1446.468 1446.468 0 0128-11.5c1.091-2.064 1.258-4.231.5-6.5-4.079-2.075-7.579-4.908-10.5-8.5-34.939-1.6-51.773-19.767-50.5-54.5a263.928 263.928 0 0114-35c7.779-45.459 34.612-67.959 80.5-67.5 36.978 6.98 58.478 29.146 64.5 66.5a795.719 795.719 0 0114.5 35zm-199-164c15.796 8.596 22.296 21.929 19.5 40a523.84 523.84 0 00-3.5 27 9.108 9.108 0 01-5-1c-.965-12.394-4.632-23.894-11-34.5 2.644-10.512 2.644-21.012 0-31.5zm-28 29c11.511 6.32 18.678 15.987 21.5 29a870.065 870.065 0 010 59c-5.167 22.5-19 36.333-41.5 41.5-28.318 2.595-47.818-9.239-58.5-35.5a79.066 79.066 0 01-2-10 675.912 675.912 0 010-52c2.554-12.22 9.721-20.387 21.5-24.5l49-1c4.028-1.212 7.362-3.379 10-6.5zm134 49c36.211.704 57.044 19.037 62.5 55a716.57 716.57 0 0114 33c2.576 18.085-4.757 30.085-22 36l-1.5-1c1.851-5.197 2.351-10.53 1.5-16-4.667-5.333-9.333-5.333-14 0-5.677 28.045-22.177 38.211-49.5 30.5-9.205-4.872-15.038-12.372-17.5-22.5-.667-17-.667-34 0-51 .675-5.012 2.675-9.345 6-13 8.676 5.671 18.176 9.171 28.5 10.5 10.661.5 21.328.667 32 .5-.166 7.008 0 14.008.5 21 2.513 3.712 6.013 4.878 10.5 3.5 1.833-.5 3-1.667 3.5-3.5.667-9.333.667-18.667 0-28-3.398-6.618-8.898-9.451-16.5-8.5a350.196 350.196 0 01-34-2c-7.567-2.115-14.234-5.782-20-11-8.348-2.993-14.515-.493-18.5 7.5a57.554 57.554 0 00-8 21c-.667 18-.667 36 0 54a168.167 168.167 0 011.5 8c-12.582-2.748-20.416-10.415-23.5-23-.667-4-.667-8 0-12a629.991 629.991 0 0113-31c1.83-17.529 8.996-32.362 21.5-44.5 8.985-6.997 18.985-11.497 30-13.5zm-329 3c38.001 3.336 55.334 24.003 52 62h-6c-.357-5.198-3.024-8.698-8-10.5a237.956 237.956 0 01-39-3c-9.057-3.028-17.39-7.361-25-13-3.795-.837-7.461-.504-11 1-6.086 7.415-9.753 15.915-11 25.5h-6a1916.288 1916.288 0 00-3-21.5c1.25-13.244 7.917-22.577 20-28a307.067 307.067 0 0026-10 306.011 306.011 0 0011-2.5zm97 1c1.319 6.844 1.319 13.844 0 21-7.948-3.192-10.114-8.526-6.5-16 1.805-2.326 3.972-3.992 6.5-5zm136 0c8.781 2.178 11.615 7.512 8.5 16-2.029 3.096-4.862 4.762-8.5 5v-21zm-262 52c18.287 11.395 38.287 16.062 60 14 .167 12.338 0 24.671-.5 37-4.393 22.446-17.893 31.946-40.5 28.5-11.333-4.001-18.5-11.834-21.5-23.5-.667-16-.667-32 0-48a40.007 40.007 0 012.5-8zm-24 25h5v17c-8.587-.534-11.754-4.868-9.5-13 1.397-1.57 2.897-2.904 4.5-4zm100 0c5.625.124 8.959 2.958 10 8.5-1.028 5.527-4.361 8.36-10 8.5v-17zm95 12c15.642 5.298 31.309 5.298 47 0 1.152 2.606 1.318 5.273.5 8a776.41 776.41 0 01-23.5 12 514.077 514.077 0 00-23-11 21.127 21.127 0 01-1-9zm-11 21l26 13c1.333 3.667 1.333 7.333 0 11-6.601 2.2-13.268 4.2-20 6a172.287 172.287 0 01-16-20c3.367-3.34 6.7-6.673 10-10zm67 1c1.808-.009 3.475.491 5 1.5a39.806 39.806 0 008 7 580.056 580.056 0 00-13.5 18.5c-.804 1.304-1.971 1.971-3.5 2l-19-6c-1.159-3.622-1.325-7.289-.5-11a786.861 786.861 0 0123.5-12zm-210 37a58.153 58.153 0 0020 0c1.405 8.197-1.929 13.197-10 15-8.05-1.783-11.384-6.783-10-15zm338 4c5.531 1.266 11.031 1.266 16.5 0 2.175 10.818-1.991 15.318-12.5 13.5-3.596-3.735-4.929-8.235-4-13.5z" opacity=".932"/><path d="M-.5 436.5v-39c1.391-6.659 4.058-12.825 8-18.5 7.055-3.139 11.388-.973 13 6.5a120.372 120.372 0 00-4.5 14 506.068 506.068 0 00-2 37c-4.83 5.268-9.663 5.268-14.5 0z" opacity=".942"/><path d="M178.5 385.5a32.462 32.462 0 018 .5c1.833.5 3 1.667 3.5 3.5a552.224 552.224 0 010 47c-5.862 5.694-10.862 5.027-15-2a462.27 462.27 0 010-43c.564-2.387 1.73-4.387 3.5-6z" opacity=".919"/><path d="M323.5 385.5a32.462 32.462 0 018 .5c1.833.5 3 1.667 3.5 3.5a552.224 552.224 0 010 47c-5.954 5.672-10.954 5.005-15-2a484.008 484.008 0 010-44 27.241 27.241 0 013.5-5z" opacity=".916"/></svg>
										</span>
										<div class="sc_content">
											<h3><span class="counter_num">25</span> +</h3>
											<p>Team Members </p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div><!-- END COL -->

					<div class="col-xl-6 col-lg-6 col-12 align-self-center">
						<div class="why_img">
							<img src="https://getmasum.com/html-preview/tripx/assets/img/why.jpg" alt="Image" >
						</div>
					</div><!-- END COL -->

				</div><!-- END ROW -->

			</div><!-- END CONTAINER -->
		</section>
		<!-- END WHY CHOOSE US -->

		<!-- START SPECIAL PACKAGE -->
		<section id="special_package" class="special_package section-padding">
			<div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-up">
						<div class="section-title text-center">
							<span>Umroh Plus</span>
							<h2>City Tour</h2>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->

				<div class="row text-left">
					<div class="col-xl-6 col-lg-6 col-md-6 col-12">
							<div class="single_package">
								<div class="pack_image">
									<img class="img-fluid" src="{{asset('assets/malaysia-foto-city-tour.jpeg')}}" alt="French Polynesia Beach">
									<div class="tour_price"><span>$</span>250</div>
								</div>
								<div class="tour_text">
									<span class="sdcat">Malaysia</span>
									<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Umroh Plus City Tour Malaysia</a></h4>
									<div class="deal_meta">
										<div class="sdmeta">
											<i class="fa-regular fa-clock"></i>
											10 Hari
										</div>

										<div class="sdmeta">
											<i class="fa-regular fa-user"></i>
											Seat Terbatas
										</div>

										<div class="sdmeta">
											<i class="fa-regular fa-star"></i>
											4
										</div>
									</div>
								</div>
							</div><!-- END SINGLE PACKAGE -->
						</div><!-- END COL -->

						<div class="col-xl-6 col-lg-6 col-md-6 col-12">
							<div class="single_package">
								<div class="pack_image">
									<img class="img-fluid" src="{{asset('assets/sultan-sbdul-samad-city-tour.jpg')}}" alt="French Polynesia Beach">
									<div class="tour_price"><span>$</span>160</div>
								</div>
								<div class="tour_text">
									<span class="sdcat">Malaysia</span>
									<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Umroh Plus Tour Sultan Abdul Samad</a></h4>
									<div class="deal_meta">
										<div class="sdmeta">
											<i class="fa-regular fa-clock"></i>
											12 Hari
										</div>

										<div class="sdmeta">
											<i class="fa-regular fa-user"></i>
											Seat Terbatas
										</div>

										<div class="sdmeta">
											<i class="fa-regular fa-star"></i>
											4
										</div>
									</div>
								</div>
							</div><!-- END SINGLE PACKAGE -->
						</div><!-- END COL -->

						{{-- <div class="col-xl-4 col-lg-6 col-md-6 col-12">
							<div class="single_package">
								<div class="pack_image">
									<img class="img-fluid" src="https://getmasum.com/html-preview/tripx/assets/img/special-package/3.jpg" alt="French Polynesia Beach">
									<div class="tour_price"><span>$</span>280</div>
								</div>
								<div class="tour_text">
									<span class="sdcat">Turky</span>
									<h4><a href="https://getmasum.com/html-preview/tripx/tour-details.html">Canal Beside Houses</a></h4>
									<div class="deal_meta">
										<div class="sdmeta">
											<i class="fa-regular fa-clock"></i>
											3 Days 4 Night
										</div>

										<div class="sdmeta">
											<i class="fa-regular fa-user"></i>
											26
										</div>

										<div class="sdmeta">
											<i class="fa-regular fa-star"></i>
											4.8
										</div>
									</div>
								</div>
							</div><!-- END SINGLE PACKAGE -->
						</div><!-- END COL --> --}}
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END SPECIAL PACKAGE -->


		<!-- END video_area -->
		<section class="video_area text-center" style="background-image:url(https://getmasum.com/html-preview/tripx/assets/img/bg/vid_bg.jpg);">
			<a href="https://www.youtube.com/watch?v=cu5BZNymMzs" class="video_btn"><svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M93.5-.5h23c10.954 2.804 21.288 7.304 31 13.5a69220.59 69220.59 0 00301 186c23.702 19.434 32.536 44.268 26.5 74.5-4.487 16.158-13.321 29.325-26.5 39.5a24946.163 24946.163 0 01-228 139c-15.826 2.767-24.826-3.733-27-19.5.283-6.694 2.949-12.194 8-16.5l222-136c17.344-16.657 17.011-32.99-1-49a43442.958 43442.958 0 01-300-185c-17.073-9.638-31.573-6.804-43.5 8.5a31.94 31.94 0 00-4 12 35342.483 35342.483 0 000 376c2.218 17.139 11.885 26.472 29 28l6.5-.5 14-6c15.417-2.409 24.084 4.091 26 19.5-.082 7.27-3.082 13.104-9 17.5-8.429 4.413-17.096 7.913-26 10.5h-22c-31.504-7.003-51.004-26.336-58.5-58a10066.674 10066.674 0 01-1.5-198l.5-188c3.728-36.888 23.561-59.554 59.5-68z" opacity=".971"/></svg></a>
			<h3>Tonton Video</h3>
		</section>
		<!-- END video_area -->

		<!-- START TESTIMONIAL -->
		<section class="testimonial">
			<div class="container">
				<div class="col-xl-8 d-block mx-auto main_testi">
					<div class="section-title text-center">
						<span>Testimoni</span>
						<h2>Apa Kata Pelanggan Kita</h2>
					</div>

					<div id="testimonial-slider" class="owl-carousel text-center">
						<div class="single-testimonial">
							<div class="test-img">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/review/1.png" width="80" alt="review image">
								<div class="test_rev">
									<i class="fa-solid fa-star"></i>
									4.8
								</div>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Vestibulum egestas, neque ut hendrerit egestas, lorem velit venenatis urna,
								vitae consequat enim purus.</p>
							</div>

							<div class="testimonial-bottom">
								<h3 class="title">Evan Setiawan</h3>
								<span class="designation">Network Engineer</span>
							</div>

						</div><!-- END single Testimonials -->

						<div class="single-testimonial">
							<div class="test-img">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/review/2.png" width="80" alt="review image">
								<div class="test_rev">
									<i class="fa-solid fa-star"></i>
									5.0
								</div>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Vestibulum egestas, neque ut hendrerit egestas, lorem velit venenatis urna,
								vitae consequat enim purus.</p>
							</div>

							<div class="testimonial-bottom">
								<h3 class="title">Frans Davidson</h3>
								<span class="designation">Web Developer</span>
							</div>
						</div><!-- END single Testimonials -->

						<div class="single-testimonial">
							<div class="test-img">
								<img src="https://getmasum.com/html-preview/tripx/assets/img/review/3.png" width="80" alt="review image">
								<div class="test_rev">
									<i class="fa-solid fa-star"></i>
									4.6
								</div>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Vestibulum egestas, neque ut hendrerit egestas, lorem velit venenatis urna,
								vitae consequat enim purus.</p>
							</div>


							<div class="testimonial-bottom">
								<h3 class="title">Christiano Ronaldo</h3>
								<span class="designation">Football Player</span>
							</div>
						</div><!-- END single Testimonials -->

					</div>
				</div>
			</div>
		</section>
		<!-- END TESTIMONIAL -->

		<!-- START COMPANY PARTNER LOGO  -->
		<div class="partner-logo">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="part_title">
							<span>Telah diliput Oleh</span>
						</div>
						<div class="partner owl-carousel">
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/1.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/2.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/3.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/4.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/5.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/1.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/2.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/3.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/4.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/5.png" alt="image"></a>
							<a href="#"><img src="https://getmasum.com/html-preview/tripx/assets/img/partner/1.png" alt="image"></a>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</div>
		<!-- END COMPANY PARTNER LOGO -->

		<!-- START BLOG -->
		{{-- <section id="blog" class="blog_section">
			<div class="container">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="section-title text-center">
							<span>Latest News</span>
							<h2>Updated News and Blog <br> From Travelers</h2>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->

				<div class="row" data-aos="fade-up">
					<div class="col-xl-4 col-lg-6 col-md-6 col-12">
						<div class="single_blog">
							<div class="blog_image">
								<img class="blog-photo" alt="Blog Photo" src="https://getmasum.com/html-preview/tripx/assets/img/blog/1.jpg">
								<div class="sb_cat">
									<a href="#">Travel</a>
								</div>
							</div>

							<div class="post-meta">
								<div class="sp_meta"><i class="fa-regular fa-user"></i> Masum Billah</div>
								<div class="sp_meta"><i class="fa-regular fa-clock"></i> 19 Nov, 2023</div>
								<div class="sp_meta"><i class="fa-regular fa-eye"></i> 5 Mins</div>
							</div>

							<div class="blog-text">
								<h4><a href="https://getmasum.com/html-preview/tripx/blog-details.html">Man Sitting the Grass Covered Mountains</a></h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam deserunt.
								</p>
							</div>
						</div>
					</div><!--- END Col -->

					<div class="col-xl-4 col-lg-6 col-md-6 col-12">
						<div class="single_blog">
							<div class="blog_image">
								<img class="blog-photo" alt="Blog Photo" src="https://getmasum.com/html-preview/tripx/assets/img/blog/2.jpg">
								<div class="sb_cat">
									<a href="#">Travel</a>
								</div>
							</div>

							<div class="post-meta">
								<div class="sp_meta"><i class="fa-regular fa-user"></i> Masum Billah</div>
								<div class="sp_meta"><i class="fa-regular fa-clock"></i> 19 Nov, 2023</div>
								<div class="sp_meta"><i class="fa-regular fa-eye"></i> 5 Mins</div>
							</div>

							<div class="blog-text">
								<h4><a href="https://getmasum.com/html-preview/tripx/blog-details.html">Man and Woman Beside Gray 5-door Hatchback</a></h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam deserunt.
								</p>
							</div>
						</div>
					</div><!--- END Col -->

					<div class="col-xl-4 col-lg-6 col-md-6 col-12">
						<div class="single_blog">
							<div class="blog_image">
								<img class="blog-photo" alt="Blog Photo" src="https://getmasum.com/html-preview/tripx/assets/img/blog/3.jpg">
								<div class="sb_cat">
									<a href="#">Travel</a>
								</div>
							</div>

							<div class="post-meta">
								<div class="sp_meta"><i class="fa-regular fa-user"></i> Masum Billah</div>
								<div class="sp_meta"><i class="fa-regular fa-clock"></i> 19 Nov, 2023</div>
								<div class="sp_meta"><i class="fa-regular fa-eye"></i> 5 Mins</div>
							</div>

							<div class="blog-text">
								<h4><a href="https://getmasum.com/html-preview/tripx/blog-details.html">Brown Wooden House Near Tree on Blue Sky</a></h4>
								<p>
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam deserunt.
								</p>
							</div>
						</div>
					</div><!--- END Col -->

				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section> --}}
		<!-- END BLOG -->


		<!-- START CALL TO ACTION -->
		<section class="call-to-action">
			<div class="container">
				<div class="col-md-10 mx-auto">
					<div class="cta_content">
						<div class="row">
							<div class="col-xl-6">
								<span>Penawaran Spesial Untuk Anda</span>
								<h3>Mulailah Perjalanan Anda Dengan Satu Klik</h3>
							</div>
							<div class="col-xl-6 text-end">
								<a href="#" class="btn_yellow" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar! <i class=" ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END CALL TO ACTION -->


		<!-- START FOOTER -->
		<div class="footer pt135">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-6 col-12">
							<div class="footer-widget">
								<div class="foot_about_us">
									<img src="{{asset('logo.png')}}" class="fot-logo" alt="">
									<p class="mt-3">
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam similique deserunt
									</p>

									<ul class="cont_info">
										<li><i class="fa-regular fa-envelope"></i> example@example.com</li>
										<li><i class="fa-solid fa-phone"></i> +956 542 6584</li>
										<li><i class="fa-regular fa-map"></i> 203 Fake St ,California, USA</li>
									</ul>
								</div>
							</div>
						</div><!--- END COL -->

						<div class="col-xl-8 col-lg-8 col-md-12 col-12">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-6 col-12">
									<div class="footer-widget">
										<h3 class="fot-title">Menu</h3>
										<ul>
											<li><a href="#">Paket Haji</a></li>
											<li><a href="#">Paket Umroh</a></li>
											<li><a href="#">Tentang Kami</a></li>
											<li><a href="#">Wisata Umroh</a></li>
										</ul>
									</div>
								</div><!--- END COL -->

								<div class="col-xl-4 col-lg-4 col-md-6 col-12">
									<div class="footer-widget">
										<h3 class="fot-title">Dukungan</h3>
										<ul>
											<li><a href="#">Customer Support</a></li>
											<li><a href="#">Privacy & Policy</a></li>
											<li><a href="#">Terms & Condition</a></li>
											<li><a href="#">Forum</a></li>
										</ul>
									</div>
								</div><!--- END COL -->

								<div class="col-xl-4 col-lg-4 col-md-6 col-12">
									<div class="footer-widget">
										<h3 class="fot-title">Newsletter</h3>
										<form class="subscribe-form ">
											<div class="form-group">
												<input type="text" class="form-control form--control" name="email" placeholder="Enter Your Email">
											</div>
											<button type="submit"><i class="fa-regular fa-paper-plane"></i></button>
										</form>
										<p class="mt-3">
											By subscribing to our mailing list you will always be updated
										</p>
									</div>
								</div><!--- END COL -->
							</div>
						</div>
					</div>
				</div>

				<div class="footer-bottom ">
					<div class="row">
						<div class="col-xl-6 col-md-6 col-12 align-self-center text-start">
							<p class="copyright_text">
								Copyright @ 2023 <a href="#">TravelMax</a> All Right reserved.
							</p>
						</div><!--- END COL -->

						<div class="col-xl-6 col-md-6 col-12 text-end">
							<ul class="foot_social_link">
								<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
							</ul>
						</div><!--- END COL -->
					</div>
				</div>
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->


		<!-- Latest jQuery -->
		<script src="js/jquery.min.js" ></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jquery-simple-mobilemenu.min -->
		<script src="js/jquery-simple-mobilemenu.js"></script>
		<!-- imagesloaded.pkgd -->
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- masonry -->
		<script src="js/masonry.pkgd.min.js" ></script>
		<!-- modernizer JS -->
		<script src="js/modernizr-2.8.3.min.js"></script>
		<!-- owl-carousel min js  -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- waypoints -->
		<script src="js/waypoints.min.js"></script>
		<!-- counterup -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- magnific-popup js -->
		<script src="js/jquery.magnific-popup.js"></script>
		<!-- YouTubePopUp js -->
		<script src="js/YouTubePopUp.jquery.js"></script>
		<!-- yvpopup-active js -->
		<script src="js/yvpopup-active.js"></script>
		<!-- scrolltopcontrol js -->
		<script src="js/scrolltopcontrol.js"></script>
		<!-- slick js -->
		<script src="js/slick.js"></script>
		<!-- scripts js -->
		<script src="js/scripts.js"></script>

    </body>
</html>
