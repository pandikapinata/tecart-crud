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
    <!-- sweetalert css-->
	<link href="{{asset('/vendor/admin/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
@endsection

@section('js')
    <!-- Data tables -->
	<script src="{{asset('/vendor/admin/plugins/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('/vendor/admin/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('/vendor/admin/plugins/datatable/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('/vendor/admin/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

	<!-- Fullside-menu Js-->
	<script src="{{asset('/vendor/admin/plugins/toggle-sidebar/js/sidemenu.js')}}"></script>

	<!-- Custom scroll bar Js-->
	<script src="{{asset('/vendor/admin/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- Sweet alert Plugin -->
	<script src="{{asset('/vendor/admin/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('/vendor/admin/js/sweet-alert.js')}}"></script>
    
	<!-- Adon JS -->
	<script src="{{asset('/vendor/admin/js/custom.js')}}"></script>
	<script src="{{asset('/vendor/admin/js/datatable.js')}}"></script>
@endsection

@section('body_class', 'app sidebar-mini rtl')
@section('content')
<div id="global-loader" ></div>
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
                                        <h2 class="mb-0 table-name">Data Mahasiswa</h2>
                                        <a href="" class="btn btn-icon btn-primary mt-1 mb-1 float-right">
                                            <span class="btn-inner--icon"><i class="fe fe-plus"></i></span>
                                            <span class="btn-inner--text">Tambah</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered w-100 text-nowrap align-items-center">
                                                <thead>
                                                    <tr>
                                                        <th class="w-1">No</th>
                                                        <th>NIM</th>
                                                        <th>Nama Mahasiswa</th>
                                                        <th class="w-20">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1605551015</td>
                                                        <td>Aditya</td>
                                                        <td>
                                                            <a class="btn btn-icon btn-sm btn-primary mt-1 mb-1" href="">
                                                                <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                                                <span class="btn-inner--text">Edit</span>
                                                            </a>
                                                            
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button class="btn btn-icon btn-sm btn-danger mt-1 mb-1" type="button">
                                                                    <span class="btn-inner--icon"><i class="fe fe-x-square"></i></span>
                                                                    <span class="btn-inner--text">Hapus</span>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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