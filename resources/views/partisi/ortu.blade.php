<!DOCTYPE html>
<html lang="en">

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SELAMAT DATANG DI SMKN 3 SURABAYA</title>
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet" />
    <style>
        /* Style the Image Used to Trigger the Modal */
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content,
        #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>

</head>

<body class="bg-theme bg-theme4">

    <!-- start loader -->
    {{-- <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div> --}}
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col-lg-4">
                        @foreach ($yauda as $a)
                            <div class="card profile-card-2">
                                <div class="card-img-block">
                                    <img class="img-fluid" src="{{ asset('assets/images/download.png') }}"
                                        alt="Card image cap" style="height:150px;">
                                </div>
                                <div class="card-body pt-5">
                                    <img id="myImg"
                                        src="@if ($a->avatar == null) {{ asset('assets/images/yoda.png') }}
                            @else
                            {{ asset('avatar/' . $a->avatar) }} @endif"
                                        alt="{{ $a->name }}" class="profile">
                                    <div id="myModal" class="modal">

                                        <!-- The Close Button -->
                                        <span class="close" style="float: left;">&times;</span>

                                        <!-- Modal Content (The Image) -->
                                        <img class="modal-content" id="img01">

                                        <!-- Modal Caption (Image Text) -->
                                        <div id="caption"></div>
                                    </div>
                                    <h5 class="card-title">NISN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                        &nbsp;{{ $a->nisn }}</h5>
                                    <h5 class="card-title">NAMA &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;{{ $a->name }}
                                    </h5>
                                    <h5 class="card-title">TTL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                        &nbsp;{{ $a->tempat }},{{ $a->ttl }}</h5>
                                    <h5 class="card-title">ALAMAT : &nbsp;{{ $a->alamat }}</h5>
                                    <h5 class="card-title">KELAS &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;{{ $a->kelas }}
                                    </h5>
                                    <h5 style="text-align: center;"> PELANGGARAN </h5>
                                    @foreach ($pelsis as $p)
                                        @if ($p->nama == '-')
                                            TIDAK ADA
                                            PELANGGARAN
                                        @else
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th width="20%"> Nama Pelanggaran</th>
                                                        <th width="20%"> Point</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $p->nama }}</td>
                                                        <td>{{ $p->point }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        @endif

                                        {{-- @if ($babi->point != null)
                                            <h5 class="card-title">
                                                TOTAL POINT = {{ $babi->point }}
                                            </h5>
                                        @endif --}}
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg");
                        var modalImg = document.getElementById("img01");
                        var captionText = document.getElementById("caption");
                        img.onclick = function() {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }
                    </script>

                    <!--start overlay-->
                    <div class="overlay toggle-menu"></div>
                    <!--end overlay-->

                </div>
                <!-- End container-fluid-->
            </div>
            <!--End content-wrapper-->
            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->

            <!--Start footer-->
            <footer class="footer">
                <div class="container">
                    <div class="text-center">
                        Copyright © 2022 <a href="https://indoswakaryasolusi.com/" target="_blank"> IndoSwakarya
                            Solusi</a>
                    </div>
                </div>
            </footer>
            <!--End footer-->

            <!--start color switcher-->
            {{-- <div class="right-sidebar">
                <div class="switcher-icon">
                    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                </div>
                <div class="right-sidebar-content">

                    <p class="mb-0">Gaussion Texture</p>
                    <hr>

                    <ul class="switcher">
                        <li id="theme1"></li>
                        <li id="theme2"></li>
                        <li id="theme3"></li>
                        <li id="theme4"></li>
                        <li id="theme5"></li>
                        <li id="theme6"></li>
                    </ul>

                    <p class="mb-0">Gradient Background</p>
                    <hr>

                    <ul class="switcher">
                        <li id="theme7"></li>
                        <li id="theme8"></li>
                        <li id="theme9"></li>
                        <li id="theme10"></li>
                        <li id="theme11"></li>
                        <li id="theme12"></li>
                        <li id="theme13"></li>
                        <li id="theme14"></li>
                        <li id="theme15"></li>
                    </ul>

                </div>
            </div> --}}
            <!--end color switcher-->

        </div>
        <!--End wrapper-->


        <!-- Bootstrap core JavaScript-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <!-- simplebar js -->
        <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
        <!-- sidebar-menu js -->
        <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
        <!-- loader scripts -->
        <script src="{{ asset('assets/js/jquery.loading-indicator.js') }}"></script>
        <!-- Custom scripts -->
        <script src="{{ asset('assets/js/app-script.js') }}"></script>
        <!-- Chart js -->

        <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>

        <!-- Index js -->
        <script src="{{ asset('assets/js/index.js') }}"></script>

</body>

</html>
