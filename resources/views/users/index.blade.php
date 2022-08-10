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
                                                                        @foreach ($category as $cat)
                                                                        @if ($cat->id == $u->kategori_id)
                                                                        placeholder="{{ $cat->nama_kategori }}" disabled>
                                                                        @endif
                                                                        @endforeach

                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="disabledTextInput">Nama Instansi</label>
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
    {{-- <div class="welcome-card rounded ps-5 pt-5 pb-4 mt-3 position-relative mb-5">
                            <h4 class="text-warning">Welcome to Tixia!</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumhas been the industry's standard dumm.</p>
                            <a class="btn btn-warning btn-rounded" href="javascript:void(0);">Learn More <i class="las la-long-arrow-alt-right ms-sm-4 ms-2"></i></a>
                            <a class="btn-link text-dark ms-3" href="javascript:void(0);">Remind Me Later</a>
                            <img src="{{ asset('assets/images/svg/welcom-card.svg') }}" alt="" class="position-absolute">
                        </div> --}}
    </div>
    {{-- <div class="col-xl-12">
                        <div id="user-activity" class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                <div>
                                    <h4 class="card-title mb-1">Sales Revenue</h4>
                                </div>
                                <div class="card-action card-tabs mt-3 mt-sm-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#user" role="tab" aria-selected="true">
                                                Monthly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bounce" role="tab" aria-selected="false">
                                                Weekly
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#session-duration" role="tab" aria-selected="false">
                                                Today
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="user" role="tabpanel">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="activityLine" class="chartjs chartjs-render-monitor" height="350" style="display: block; width: 1041px; height: 350px;" width="1041"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
    {{-- <div class="col-xl-6 col-xxxl-12 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-3 d-sm-flex d-block ">
                                <h4 class="card-title">Latest Sales</h4>
                                <div class="d-flex mt-3 mt-sm-0">
                                    <select class="default-select me-3 style-1" aria-label="Default select example">
                                        <option selected>Weekly</option>
                                        <option value="1">Daily</option>
                                        <option value="2">Monthly</option>
                                    </select>
                                    <select class="default-select style-1" aria-label="Default select example">
                                        <option selected>2022</option>
                                        <option value="1">2023</option>
                                        <option value="2">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mx-0 align-items-center">
                                    <div class="col-sm-8 col-md-7 col-xxl-7 px-0 text-center mb-3 mb-sm-0">
                                        <div id="chart" class="d-inline-block"></div>
                                    </div>
                                    <div class="col-sm-4 col-md-5 col-xxl-5 px-0">
                                        <div class="chart-deta">
                                            <div class="col px-0">
                                                <span class="bg-warning"></span>
                                                <div class="mx-3">
                                                    <p class="fs-14">Ticket Left</p>
                                                    <h3>21,512</h3>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <span class="bg-primary"></span>
                                                <div class="mx-3">
                                                    <p class="fs-14">Ticket Sold</p>
                                                    <h3>456,72</h3>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <span class="bg-success"></span>
                                                <div class="mx-3">
                                                    <p class="fs-14">Event Held</p>
                                                    <h3>235</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
    {{-- <div class="col-xl-6 col-xxxl-12 col-lg-6">
                        <div class="card widget-media">
                            <div class="card-header border-0 pb-0 ">
                                <h4 class="text-black">Latest Sales</h4>
                                <div class="dropdown ms-auto text-end">
                                    <div class="btn-link" data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">View Detail</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body timeline pb-2">
                                <div class="timeline-panel align-items-end">
                                    <div class="media me-3">
                                        <img class="rounded-circle" alt="image" width="50" src="{{asset('assets/images/avatar/1.jpg')}}">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1"><a class="text-black" href="javascript:void(0);">Olivia Johnson</a></h5>
                                        <p class="d-block mb-0 text-primary"><i class="las la-ticket-alt me-2 scale5 ms-1"></i>Height Performance conert 2020</p>
                                    </div>
                                    <p class="mb-0 fs-14">2m ago</p>
                                </div>
                                <div class="timeline-panel align-items-end">
                                    <div class="media me-3">
                                        <img class="rounded-circle" alt="image" width="50" src="{{asset('assets/images/avatar/2.jpg')}}">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1"><a class="text-black" href="javascript:void(0);">Griezerman</a></h5>
                                        <p class="d-block mb-0 text-primary"><i class="las la-ticket-alt me-2 scale5 ms-1"></i>Fireworks Show New Year 2020</p>
                                    </div>
                                    <p class="mb-0 fs-14">5m ago</p>
                                </div>
                                <div class="timeline-panel align-items-end">
                                    <div class="media me-3">
                                        <img class="rounded-circle" alt="image" width="50" src="{{asset('assets/images/avatar/3.jpg')}}">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1"><a class="text-black" href="javascript:void(0);">Uli Trumb</a></h5>
                                        <p class="d-block mb-0 text-primary"><i class="las la-ticket-alt me-2 scale5 ms-1"></i>Height Performance conert 2020</p>
                                    </div>
                                    <p class="mb-0  fs-14">8m ago</p>
                                </div>
                                <div class="timeline-panel align-items-end">
                                    <div class="media me-3">
                                        <img class="rounded-circle" alt="image" width="50" src="{{asset('assets/images/avatar/4.jpg')}}">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1"><a class="text-black"
                                                href="javascript:void(0);">Oconner</a></h5>
                                        <p class="d-block mb-0 text-primary"><i class="las la-ticket-alt me-2 scale5 ms-1"></i>Fireworks Show New Year
                                            2020</p>
                                    </div>
                                    <p class="mb-0 fs-14">12m ago</p>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0 text-center">
                                <a href="javascript:void(0);" class="btn-link">View more <i class="fa fa-angle-down ms-2 scale-2"></i></a>
                            </div>
                        </div>
                    </div> --}}
    </div>
    </div>
    </div>
@endsection
