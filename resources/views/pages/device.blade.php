@include('component.header')
@include('component.sidebar')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Content goes here -->
        <div class="card card-default" style="margin-top: 85px !important; min-height: calc(100vh - 120px) !important;">
          <div class="card-header" style="height: 40px; margin-top: 10px;">
            <ul class="deviceUl">
              <li class="tab bordBottom">Inverter</li>
              <li class="tab">Logger</li>
            </ul>
          </div>
          <hr style="margin-top: -2px;">

          <div id="inverter" class="card-body card-no-border cardy p-0 overflow-auto">
            <!-- Inverter table -->
            <table class="table" style="overflow-x: auto;">
              <!-- Table header -->
              <thead style="background-color: #FAFAFA;">
                <tr>
                  <th>Device Name</th>
                  <th class="border-0 fontColo">Device Status</th>
                  <th class="border-0 fontColo">Production Power</th>
                  <th class="border-0 fontColo">Production-Today</th>
                  <th class="border-0 fontColo">Update time</th>
                  <th class="border-0 fontColo">Operation</th>
                </tr>
              </thead>
              <!-- Table body -->
              <tbody>
                <tr id="inverterRow" class="backgroundHover" style="height: 30px !important;">
                  <td>Inverter<br>{{ $data->first()->inverter_device_name }}</td>
                  <td class="fontColo">{{ $data->first()->inverter_device_status }}</td>
                  <td class="fontColo">{{ $data->first()->inverter_production_power }}</td>
                  <td class="fontColo">{{ $data->first()->inverter_production_today }}</td>
                  <td class="fontColo">{{ $data->first()->update_time }}</td>
                  <td>
                    <ul class="editDeviceTable">
                      <li>Check</li>
                      <li id="moye" class="dropdown">
                        More
                        <span data-toggle="dropdown"><i class="fa fa-angle-down ml-2" aria-hidden="true"></i></span>
                        <ul class="dropdown-menu moreItmes text-center">
                          <li class="clicking"><a class="dropdown-item" href="#">Edit</a></li>
                          <li class="clicking"><a class="dropdown-item" href="#">Unbind</a></li>
                          <li class="clicking"><a class="dropdown-item" href="#">Remote Control</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
              </tbody>
              <!-- Table footer -->
              <tfoot class="border-0 boxShad">
                <tr class="table-footer">
                  <td class="border-0" colspan="5"></td>
                  <td class="text-right border-0">1 record(s)</td>
                </tr>
              </tfoot>
            </table>
          </div>

          <div id="logger" class="card-body cardy p-0 overflow-auto">
            <!-- Logger table -->
            <table class="table" style="overflow-x: auto;">
              <!-- Table header -->
              <thead style="background-color: #FAFAFA;">
                <tr>
                  <th class="">Device Name</th>
                  <th class="border-0 fontColo">Device Status</th>
                  <th class="border-0 fontColo updateCol">Update time</th>
                  <th class="border-0">Operation</th>
                </tr>
              </thead>
              <!-- Table body -->
              <tbody>
                <tr class="backgroundHover " >
                  <td>Logger <br>{{ $data->first()->logger_device_name }}</td>
                  <td class="fontColo">{{ $data->first()->logger_device_status }}</td>
                  <td class="fontColo">{{ $data->first()->update_time }}</td>
                  <td>
                    <ul class="editDeviceTable">
                      <li>Check</li>
                      <li id="moye" class="dropdown">
                        More
                        <span data-toggle="dropdown"><i class="fa fa-angle-down ml-2" aria-hidden="true"></i></span>
                        <ul class="dropdown-menu moreItmes text-center">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Unbind</a></li>
                          <li><a class="dropdown-item" href="#">Sub-device Adding</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                
              </tbody>
              <!-- Table footer -->
              <tfoot class="border-0 boxShad">
                <tr class="table-footer">
                  <td colspan="9" class="border-0"></td>
                  <td class="text-right border-0">1 record(s)</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Sidebar content goes here -->
  </aside>

</div>

@include('component.footer')