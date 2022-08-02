@extends('layout.master')
@section('content')
    <div class="event-sidebar dz-scroll active" id="eventSidebar">
        <div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
            <div class="card-body text-center event-calender pb-2">
                <input type='text' class="form-control d-none" id='datetimepicker1' />
            </div>
        </div>
        <div class="card shadow-none rounded-0 bg-transparent h-auto">
            <div class="card-header border-0 pb-0">
                <h4 class="text-black">Upcoming Events</h4>
            </div>
            <div class="card-body">
                <div class="media mb-5 align-items-center event-list">
                    <div class="p-3 text-center rounded me-3 date-bx bgl-primary">
                        <h2 class="mb-0 text-black">3</h2>
                        <h5 class="mb-1 text-black">Wed</h5>
                    </div>
                    <div class="media-body px-0">
                        <h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">Live Concert Choir Charity
                                Event 2020</a></h6>
                        <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                            <li>Ticket Sold</li>
                            <li>561/650</li>
                        </ul>
                        <div class="progress mb-0" style="height:4px; width:100%;">
                            <div class="progress-bar bg-warning progress-animated" style="width:85%; height:8px;"
                                role="progressbar">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media mb-5 align-items-center event-list">
                    <div class="p-3 text-center rounded me-3 date-bx bgl-primary">
                        <h2 class="mb-0 text-black">16</h2>
                        <h5 class="mb-1 text-black">Tue</h5>
                    </div>
                    <div class="media-body px-0">
                        <h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">Beautiful Fireworks Show In The
                                New Year Night</a></h6>
                        <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                            <li>Ticket Sold</li>
                            <li>431/650</li>
                        </ul>
                        <div class="progress mb-0" style="height:4px; width:100%;">
                            <div class="progress-bar bg-warning progress-animated" style="width:50%; height:8px;"
                                role="progressbar">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media mb-0 align-items-center event-list">
                    <div class="p-3 text-center rounded me-3 date-bx bgl-success">
                        <h2 class="mb-0 text-black">28</h2>
                        <h5 class="mb-1 text-black">Fri</h5>
                    </div>
                    <div class="media-body px-0">
                        <h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">The Story Of Danau
                                Toba (Musical Drama)</a></h6>
                        <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                            <li>Ticket Sold</li>
                            <li>650/650</li>
                        </ul>
                        <div class="progress mb-0" style="height:4px; width:100%;">
                            <div class="progress-bar bg-success progress-animated" style="width:100%; height:8px;"
                                role="progressbar">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer justify-content-between border-0 d-flex fs-14">
                <span>5 events more</span>
                <a href="javascript:void(0);" class="text-primary"> View more <i
                        class="las la-long-arrow-alt-right scale5 ms-2"></i></a>
            </div>
        </div>
        <div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
            <div class="card-body text-center event-calender">
                <a href="javascript:void(0);" class="btn btn-primary btn-rounded btn shadow">
                    + New Event
                </a>
            </div>
        </div>
    </div>

    <!--**********************************  EventList END ***********************************-->
    <!--**********************************  Content body start ***********************************-->
    <div class="content-body rightside-event">
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Tamu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>No.Telepon</th>
                                            <th>Alamat</th>
                                            <th>Asal/Instansi</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($guests as $g)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $g->nama }}</td>
                                                <td>{{ $g->telp }}</td>
                                                <td>{{ $g->alamat }}</td>
                                                <td>{{ $g->instansi }}</td>
                                                <td>{{ $g->keterangan }}</td>
                                                <td>
                                                    {{-- <a href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="icon icon-sm">
                                                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                                                </span>
                                                                <span class="visually-hidden">Toggle Dropdown</span>
                                                            </button> --}}
                                                    {{-- <div class="dropdown-menu py-0"> --}}
                                                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                                        data-bs-target=".bd-example-modal-lg">Details</button>

                                                    {{-- <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    
                                                                <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a> --}}
                                                    {{-- </div> --}}
                                                </td>
                                            </tr>
                                        @endforeach                                        
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Modal body text goes here.</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gavin Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>
                                                        <td>$92,575</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jennifer Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>
                                                        <td>$357,650</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fiona Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>
                                                        <td>$850,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shou Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>
                                                        <td>$163,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michelle House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>
                                                        <td>$95,400</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suki Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>
                                                        <td>$114,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gavin Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>
                                                        <td>$235,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Martena Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>
                                                        <td>$324,050</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Unity Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>
                                                        <td>$85,675</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Howard Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>
                                                        <td>$164,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hope Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>
                                                        <td>$109,850</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vivian Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>
                                                        <td>$452,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Timothy Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>
                                                        <td>$136,200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jackson Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>
                                                        <td>$645,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Olivia Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>
                                                        <td>$234,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sakura Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>
                                                        <td>$139,575</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thor Walton</td>
                                                        <td>Developer</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>
                                                        <td>$98,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Finn Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>
                                                        <td>$87,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Serge Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>
                                                        <td>$138,575</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Zenaida Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>
                                                        <td>$125,250</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Zorita Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>
                                                        <td>$115,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jennifer Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>
                                                        <td>$75,650</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr> --}}
                                    </tbody>

                                </table>
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
            {{-- <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mx-0">
                                    <div class="col-sm-12 col-lg-4 px-0">
                                        <h2 class="fs-40 text-black font-w600">862,441 <small class="fs-18 ms-2 font-w600 mb-1">pcs</small></h2>
                                        <p class="font-w100 fs-20 text-black">Ticket Sold Today</p>
                                        <div class="justify-content-between border-0 d-flex fs-14 align-items-end">
                                            <a href="javascript:void(0);" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ms-2"></i></a>
                                            <div class="text-end">
                                                <span class="peity-primary" data-style="width:100%;">0,2,1,4</span>
                                                <h3 class="mt-2 mb-1">+4%</h3>
                                                <span>than last day</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-8 px-0">
                                        <canvas id="ticketSold" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
        </div>
    </div>
    </div>
@endsection
