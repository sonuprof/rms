@include('component.table-sidebar')
@include('component.header')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home /</span> Manage Users </h4>

    <!-- Static Table Start -->
    <style>
      @media (max-width: 992px) {
        #topl2 {
          margin-top: 15px !important;
        }
      }

      .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-right: 1px solid #dadada;
      }

      :not(.btn-group):not(.input-group)>.btn-group>.btn:not([class*=btn-outline-]):first-child {
        border-left: 1px solid #dadada;
      }
    </style>
    <div class="data-table-area mg-b-15 card">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
            <h4 style="color: #8a8a91; font-weight: 400; margin-left: 20px;"> Manage Users</h4>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
              <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">
                  <div id="toolbar">
                    <select class="form-control dt-tb">
                      <option value="">Export Basic</option>
                      <option value="all">Export All</option>
                      <option value="selected">Export Selected</option>
                    </select>
                  </div>
                  <table id="table" class="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="overflow-x: scroll !important;">
                    <thead>
                      <tr>
                        <th data-field="S.NO">Sr. no.</th>
                        <th data-field="name" data-editable="true"> Name </th>
                        <th data-field="State" data-editable="true">Email</th>
                        <th data-field="Contact" data-editable="true">Contact/Mobile No.</th>
                        <th data-field="Designation" data-editable="true">Role</th>
                        <th data-field="total-bc" data-editable="true">UserType </th>
                        <th data-field="total-bc" data-editable="true">Maker </th>
                        <th data-field="total-bc" data-editable="true">Checker</th>
                        <th data-field="total-bc" data-editable="true">Approver</th>
                        <th data-field="total-bc" data-editable="true">Created By</th>

                        <th data-field="total-bc-comission" data-editable="true">Action </th>




                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($user as $users)
                        <td>{{ $user->firstItem()+$loop->index}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->mobile}}</td>
                        <td>{{$users->role}}</td>
                        <td>{{$users->type}}</td>
                        <td>{{$users->maker}}</td>
                        <td>{{$users->checker}}</td>
                        <td>{{$users->approver}}</td>
                        <td>{{$users->created_by}}</td>
                        <!-- <td>
                          <a href="{{ route('update-user', ['id' => $users->id]) }}">
                            <i class="fa fa-pencil-square-o"></i>
                          </a>
                          <a href="{{ route('delete-user', ['id' => $users->id]) }}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                        </td> -->
                        <td>
                          <a href="{{ route('update-user', ['id' => $users->id]) }}">
                            <i class="fa fa-pencil-square-o pencil-icon"></i>
                          </a>
                          &nbsp
                          <a href="{{ route('delete-user', ['id' => $users->id]) }}"
   onclick="return confirm('Are you sure you want to delete this user?');">
                            <i class="fa fa-trash trash-icon"></i>
                          </a>
                        </td>


                        <!-- <td><button><i class="fa fa-pencil-square-o" aria-hidden="true"></button></i>
                                                </td> -->

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="pagination d-flex flex-row-reverse">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Static Table End -->
  </div>
  <!-- / Content -->

  <!-- Footer -->
  @include('component.table-footer')