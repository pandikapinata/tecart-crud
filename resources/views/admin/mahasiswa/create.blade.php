@extends('layouts.admin.app') 

@section('title') 
Admin Dashboard
@endsection

@section('css')
    <!-- Data table css -->
	<link href="{{asset('/vendor/admin/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('/vendor/admin/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('/vendor/admin/plugins/customscroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
	<!-- Sidemenu Css -->
    <link href="{{asset('/vendor/admin/plugins/toggle-sidebar/css/sidemenu.css')}}" rel="stylesheet">
@endsection

@section('js')
	<!-- Fullside-menu Js-->
	<script src="{{asset('/vendor/admin/plugins/toggle-sidebar/js/sidemenu.js')}}"></script>
	<!-- Custom scroll bar Js-->
	<script src="{{asset('/vendor/admin/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<!-- Adon JS -->
    <script src="{{asset('/vendor/admin/js/custom.js')}}"></script>
@endsection

@section('body_class', 'app sidebar-mini rtl')
@section('content')
{{-- <div id="global-loader" ></div> --}}
<div class="page">
    <div class="page-main">
        <!-- Sidebar menu-->
        @include('layouts.admin.sidebar')
        <!-- Sidebar menu-->

        <!-- app-content-->
        <div class="app-content ">
            <div class="side-app">
                <div class="main-content">
                    <!-- Top navbar -->
                    @include('layouts.admin.header')
                    <!-- Top navbar-->

                    <!-- Page content -->
                    <div class="container-fluid container-pandu">
                        <form action="" method="post">
                            @csrf
                            <div class="page-header mt-0 pandu">
                                <h3 class="mb-sm-0">Mahasiswa</h3>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                                </ol>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <h2 class="mb-0">Form Tambah Mahasiswa</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">                                                    
                                                    <div class="form-group">
                                                        <label class="form-label">NIM</label>
                                                        <input name="description" type="text" class="form-control" placeholder="Sunset at Crystal Bay Beach">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">                                                    
                                                    <div class="form-group">
                                                        <label class="form-label">Nama Mahasiswa</label>
                                                        <input name="description" type="text" class="form-control" placeholder="Sunset at Crystal Bay Beach">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-icon btn-secondary">
                                                <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
												<span class="btn-inner--text">Submit</span>
                                            </button>
                                            <a href="{{ url()->previous()}}" class="btn btn-icon btn-danger">
                                                <span class="btn-inner--icon"><i class="fe fe-x-square"></i></span>
												<span class="btn-inner--text">Cancel</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
 
                        <!-- Footer -->
                        @include('layouts.admin.footer')
                        <!-- Footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection