@include('component.header')
@include('component.sidebar')

<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Update data</h5>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session()->has('status'))
                    <div class="alert my-3 p-3 alert-success">
                        {{session('status')}}
                    </div>
                    @endif

                    <div class="card-body">
                        <form action="{{route('update')}}" method="post">
                            @csrf
                            <div class="row my-3">



                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>District</label>
                                    <input type="hidden" name="id" value="{{$data->first()->id}}">

                                    <input class="form-control" name="district" id="district" type="text" value="{{ $data->first()->district }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Site Name</label>

                                    <input class="form-control" name="site_name" id="site_name" type="text" value="{{ $data->first()->site_name }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>User Name</label>

                                    <input class="form-control" name="user_name" id="user_name" type="text" value="{{ $data->first()->user_name }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Created Date</label>

                                    <input class="form-control" name="created_date" id="created_date" type="text" value="{{ $data->first()->created_date }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Time Zone</label>

                                    <input class="form-control" name="time_zone" id="time_zone" type="text" value="{{ $data->first()->time_zone }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Administrative Area</label>

                                    <input class="form-control" name="admin_area" id="admin_area" type="text" value="{{ $data->first()->admin_area }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Address</label>

                                    <input class="form-control" name="address" id="address" type="text" value="{{ $data->first()->address }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Longitude</label>

                                    <input class="form-control" name="longitude" id="longitude" type="text" value="{{ $data->first()->longitude }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Latitude</label>
                                    <input class="form-control" name="latitude" id="latitude" type="text" value="{{ $data->first()->latitude }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Plant Name</label>

                                    <input class="form-control" name="plant_name" id="plant_name" type="text" value="{{ $data->first()->plant_name }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Plant Type</label>

                                    <input class="form-control" name="plant_type" id="plant_type" type="text" value="{{ $data->first()->plant_type }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>System Type</label>

                                    <input class="form-control" name="system_type" id="system_type" type="text" value="{{ $data->first()->system_type }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Operating Date</label>

                                    <input class="form-control" name="operating_date" id="operating_date" type="text" value="{{ $data->first()->operating_date }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Installed Capacity</label>

                                    <input class="form-control" name="installed_capacity" id="installed_capacity" type="text" value="{{ $data->first()->installed_capacity }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Azimuth</label>

                                    <input class="form-control" name="azimuth" id="azimuth" type="text" value="{{ $data->first()->azimuth }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Angle of Tilt</label>

                                    <input class="form-control" name="angle_of_tilt" id="angle_of_tilt" type="text" value="{{ $data->first()->angle_of_tilt }}">
                                </div>
                               
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Currency</label>

                                    <input class="form-control" name="currency" id="currency" type="text" value="{{ $data->first()->currency }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Unit Price</label>

                                    <input class="form-control" name="unit_price" id="unit_price" type="text" value="{{ $data->first()->unit_price }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Total Cost</label>

                                    <input class="form-control" name="total_cost" id="total_cost" type="text" value="{{ $data->first()->total_cost }}">
                                </div>
                                   
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Inverter Device Name</label>

                                    <input class="form-control" name="inverter_device_name" id="inverter_device_name" type="text" value="{{ $data->first()->inverter_device_name }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Logger Device Name</label>
                                    <input class="form-control" name="logger_device_name" id="logger_device_name" type="text" value="{{ $data->first()->logger_device_name }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">

                                    <label>Inverter Device Status</label>
                                    <input class="form-control" name="inverter_device_status" id="inverter_device_status" type="text" value="{{ $data->first()->plant_name }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Inverter Production Power</label>

                                    <input class="form-control" name="inverter_production_power" id="inverter_production_power" type="text" value="{{ $data->first()->inverter_production_power }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Inverter Production Today</label>

                                    <input class="form-control" name="inverter_production_today" id="inverter_production_today" type="text" value="{{ $data->first()->inverter_production_today }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Update Time</label>

                                    <input class="form-control" name="update_time" id="update_time" type="text" value="{{ $data->first()->update_time }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Logger Device Status</label>

                                    <input class="form-control" name="logger_device_status" id="logger_device_status" type="text" value="{{ $data->first()->logger_device_status }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Total Production</label>

                                    <input class="form-control" name="total_production" id="total_production" type="text" value="{{ $data->first()->total_production }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>CO2 Prevention</label>

                                    <input class="form-control" name="co2_prevention" id="co2_prevention" type="text" value="{{ $data->first()->co2_prevention }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Running Days</label>

                                    <input class="form-control" name="running_days" id="running_days" type="text" value="{{ $data->first()->running_days }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Anticipated Yield</label>

                                    <input class="form-control" name="anticipated_yield" id="anticipated_yield" type="text" value="{{ $data->first()->anticipated_yield }}">
                                </div>
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Phase</label>

                                    <input class="form-control" name="phase" id="phase" type="text" value="{{ $data->first()->phase }}">
                                </div>
                                </div>
                                <center><button tbrype="submit" class="btn btn-primary my-3" >Submit</button>
                                </center>
                        </form>
                   
                </div>
            </div>


        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    @include("component.footer");