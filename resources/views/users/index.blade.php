@extends('users.master')
@section('content')
    <div class="event-sidebar dz-scroll active" id="eventSidebar">
        <div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
            <div class="card-body text-center event-calender pb-2">
                <input type='text' class="form-control d-none" id='datetimepicker1' />
            </div>
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
                    <div class="col-xl-4 col-sm-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Tamu Hari Ini</p>
                                        <h3 class="mb-0 text-black font-w600">{{ $current_date->count() }} </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Tamu Minggu Ini</p>
                                        <h3 class="mb-0 text-black font-w600">{{ $current_week->count() }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="me-4">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body ms-1">
                                        <p class="mb-2">Tamu Bulan Ini</p>
                                        <h3 class="mb-0 text-black font-w600">{{ $current_month->count() }} </h3>
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
                                <a href="{{ route('users.create') }}" class="btn btn-primary"><span><i
                                            class="fa fa-plus"></i>
                                    </span> Tambah Tamu</button></a>
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
                                                        <button type="button" class="btn btn-primary mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#bd-example-modal-lg{{ $u->id }}">Details</button>
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
                                                                        @foreach ($category as $cat)
                                                                        @if ($cat->id == $u->kategori_id)
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
@endsection
