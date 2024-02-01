@include('component.header')
@include('component.sidebar')
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid ">
      <div class="row"></div>
      <div class="card card-default scrollWeb"
        style="margin-top: 90px !important; height:calc(100vh - 120px) !important; overflow-y: auto;">
        <div class="card-body">
          <div class="row" style="position: relative;">
            <button class="btnEditPlant clicking">Edit</button>
            <div class="col-12">
              <label class="col-12 titleExpo">Plant Cover</label>
              <div class="mt-2 d-flex flex-row flex-wrap dir align-items-end">
                <img src="./images/solar.avif" style="height: 150px; max-width: 250px;">
                <li class="clicking"
                  style="color: #25C5DD; margin-bottom: -5px;margin-top: 10px; font-size: 1.2rem; list-style: none;"
                  id="listClick">
                  <i class="fa fa-upload mr-1 ml-sm-3  " aria-hidden="true"></i>Change
                </li>
              </div>
            </div>

            <!-- Basic Info  -->
            <div class="col-12 hrAdd mt-5">
           
            </div>
            <label class="col-12 titleExpo  mt-3" style="padding-left: 10px;">Basic Info</label>

            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-2">Plant Name :</span>{{ $data->first()->plant_name }}</h5>
            </div>

            <div class="col-md-6 col-12 mt-3">
              <h5><span class="pColor mr-3">Create Date:</span>{{ $data->first()->created_date }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Create User:</span>{{ $data->first()->user_name }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Time Zone :</span>{{ $data->first()->time_zone }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Administrative Area:</span>{{ $data->first()->admin_area }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Address:</span>{{ $data->first()->address }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Coordinate:</span>Longitude {{ $data->first()->longitude }}″ Latitude {{ $data->first()->latitude }}″</h5>
            </div>
            <!-- System Info  -->
            <div class="col-12 hrAdd mt-5">
            </div>
            <label class="col-12 titleExpo  mt-3" style="padding-left: 10px;">System Info</label>

            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-2">Plant Type :</span> Residential Rooftop</h5>
            </div>
            <div class="col-md-6 col-12 mt-3">
              <h5><span class="pColor mr-3">System Type:</span>{{ $data->first()->system_type }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Operating Date:</span>{{ $data->first()->operating_date }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Azimuth :</span>{{ $data->first()->azimuth }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Installed Capacity:</span>{{ $data->first()->installed_capacity }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Angle of tilt:</span>{{ $data->first()->angle_of_tilt }}</h5>
            </div>
            <!-- Yield Info  -->

            <div class="col-12 hrAdd mt-5">
            </div>
            <label class="col-12 titleExpo  mt-3" style="padding-left: 10px;">Yield Info</label>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-2">Currency :</span>{{ $data->first()->currency }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3">
              <h5><span class="pColor mr-3">Unit Price:</span>{{ $data->first()->unit_price }}</h5>
            </div>
            <div class="col-md-6 col-12 mt-3 ">
              <h5><span class="pColor mr-3">Total Cost:</span>{{ $data->first()->total_cost }}</h5>
            </div>
            <div class="col-12 hrAdd mt-4 mb-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
    <aside class="control-sidebar control-sidebar-dark">

    </aside>

  </div>
  @include('component.footer')


  