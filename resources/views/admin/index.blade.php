<!DOCTYPE html>
<html lang="en">
<link href="{{ asset('/assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"
    type="text/css" />

<link href="{{ asset('/assets/vendor/pickadate/themes/default.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('/assets/vendor/pickadate/themes/default.date.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{asset('/assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" type="text/css"/>	

@extends('users.master')
@section('content')
    <div class="event-sidebar dz-scroll active" id="eventSidebar">
        <div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
            <div class="card-body text-center event-calender pb-2">
                <input type='text' class="form-control d-none" id='datetimepicker1' />
            </div>

            {{-- <div class="card-body text-center event-calender pb-2">
                <p class="mb-1">Date Range Pick</p>
                <input class="form-control input-daterange-datepicker" type="text" name="daterange"
                    value="01/01/2015 - 01/31/2015">
            </div> --}}
        </div>

        <div class="card shadow-none rounded-0 bg-transparent h-auto">
            <div class="card-header border-0 pb-0">
                <h4 class="text-black">Tamu Terkini</h4>
            </div>
            @foreach ($data as $g)
                <div class="card-body">
                    <div class="media mb-5 align-items-center event-list">
                        <div class="p-3 text-center rounded me-3 date-bx bgl-primary">
                            <h2 class="flaticon-381-user-7"></h2>
                        </div>
                        <div class="media-body px-0">
                            <h6 class="mt-0 mb-3 fs-14"><a class="text-black">{{ $g->nama }}</a></h6>
                            <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                                <li>{{ $g->created_at }}</li>
                                {{-- <li>561/650</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <!--**********************************  EventList END ***********************************-->
    <!--**********************************  Content body start ***********************************-->
    <div class="content-body rightside-event">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <!--Total Visitor-->
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Tamu Hari Ini</p>
                                        <h3 class="mb-0 text-black font-w600">{{ $guests->count() }} </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Tamu Minggu Ini</p>
                                        <h3 class="mb-0 text-black font-w600">{{ $guests->count() }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Total Visitor-->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Tamu</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">

                                    </div>
                                    {{--  <div class="col-4">
                                        <p class="mb-1">Pilih Tanggal</p>

                                    </div>  --}}
                                </div>
                                <div class="row">
                                    {{--  <div class="col-6">
                                        <a href="{{ route('admin.daftar') }}" class="btn btn-primary"><span><i
                                                    class="fa fa-print"></i>
                                            </span> Cetak </button></a>
                                    </div>  --}}
                                    <div class="col-span-2 flex-justify-end" style="text-align: right">

                                        {{--  <div class="example">                                           
                                            <input class="form-control input-daterange-datepicker" type="date"
                                                name="start_date" value="01/01/2022 - 01/31/2022">    
                                            <input class="form-control input-daterange-datepicker" type="date"
                                                name="end_date">

                                        </div>  --}}
                                    </div>
                                    <form method="POST" action="/cetak"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-xl-2 col-xxl-6 col-md-6 mb-3">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" class="form-control"  name="start_date" id="start_date">
                                    </div>
                                    <div class="col-xl-2 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">End Date</label>
                                        <input type="date" class="form-control"  name="end_date" id="end_date">
                                    </div>
                                    <div class="col-10">
                                        <input type="submit" value="print" class="btn btn-primary" >
                                        <span><i
                                            class="fa fa-print"></i>
                                    </span> 
                                        {{--  <a href="{{ route('admin.') }}" class="btn btn-primary"><span><i
                                                    class="fa fa-print"></i>
                                            </span> Cetak </button></a>  --}}
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>No.Telepon</th>
                                                <th>Tujuan</th>
                                                <th>Kategori</th>
                                                <th>Nama Instansi</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($guests as $u)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $u->nama }}</td>
                                                    <td>{{ $u->telp }}</td>
                                                    <td>{{ $u->tujuan }}</td>
                                                    @foreach ($category as $cat)
                                                        @if ($cat->id == $u->kategori_id)
                                                            <td>{{ $cat->nama_kategori }}</td>
                                                        @endif
                                                    @endforeach
                                                    <td>{{ $u->instansi }}</td>
                                                    <td>{{ $u->keterangan }}</td>
                                                    <td>
                                                        {{-- <a href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="icon icon-sm">
                                                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                                                </span>
                                                                <span class="visually-hidden">Toggle Dropdown</span>
                                                            </button> --}}
                                                        {{-- <div class="dropdown-menu py-0"> --}}
                                                        <button type="button" class="btn btn-primary mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#bd-example-modal-lg{{ $u->id }}">Details</button>

                                                        {{-- <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>

                                                                <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a> --}}
                                                        {{-- </div> --}}
                                                    </td>
                                                </tr>

                                                <div class="modal fade bd-example-modal-lg"
                                                    id="bd-example-modal-lg{{ $u->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail Tamu</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="disabledTextInput">Nama</label>
                                                                    <input type="text" id="disabledTextInput"
                                                                        class="form-control"
                                                                        placeholder="{{ $u->nama }}" disabled>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="disabledTextInput">No Telp.</label>
                                                                    <input type="text" id="disabledTextInput"
                                                                        class="form-control"
                                                                        placeholder="{{ $u->telp }}" disabled>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="disabledTextInput">Tujuan</label>
                                                                    <input type="text" id="disabledTextInput"
                                                                        class="form-control"
                                                                        placeholder="{{ $u->tujuan }}" disabled>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="disabledTextInput">Kategori</label>
                                                                    <input type="text" id="disabledTextInput"
                                                                        class="form-control"
                                                                        @foreach ($category as $cat) @if ($cat->id == $u->kategori_id)
                                                                        placeholder="{{ $cat->nama_kategori }}" disabled>
                                                                        @endif @endforeach
                                                                        </div>
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput">Nama
                                                                            Instansi</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="{{ $u->instansi }}" disabled>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput">Keterangan</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="{{ $u->keterangan }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/vendor/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/clock-picker-init.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/material-date-picker-init.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/pickadate-init.js') }}"></script>


    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>

    </html>
@endsection
