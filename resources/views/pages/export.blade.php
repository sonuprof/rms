@include('component.header')
@include('component.sidebar')
<div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row"></div>
          <div class="card card-default"
            style="margin-top: 100px !important; min-height:calc(100vh - 120px) !important;">
            <div class="card-body overFlowing">
              <div class="row">

                <div class="col-12">
                  <label class="col-12 titleExpo">Data
                    Source</label>
                  <button class="btnExport1 btnActive mt-2" id="plantData">Plant Data</button>
                  <button class="btnExport1 btnNonActive mt-2">Device Data</button>
                </div>


                <div class="row pl-2" id="plantHide">
                  <div class="col-12 mt-5">
                    <label class="col-12 titleExpo">Data
                      Type</label>
                    <button class="btnExport btnActive mt-2 " id="detaled">Detailed Data</button>
                    <button class="btnExport btnNonActive mt-2" id="daily">Daily Statistics</button>
                    <button class="btnExport btnNonActive mt-2" id="monthly">Monthly Statistics</button>
                    <button class="btnExport btnNonActive mt-2" id="yearly">Yearly Statistics</button>
                  </div>

                  <div class="col-12 mt-5">
                    <label class="col-12 titleExpo">Please Select Time Period</label>
                    <input type="date" value="dateRangePicker" id="dateRangePicker" class="btnNonActive"
                      style="font-size: 1.2rem; padding: 10px !important; border-radius: 2px !important;">
                  </div>


                  <div class="col-12 mt-5">
                    <p class="col-12" style="color: black !important; font-size: 1.2rem !important;" id="timerange">
                      System is going to export the data.(Max.time span: 30 Days)
                    </p>


                    <button class="p-2"
                      style="min-width: 120px; border-radius: 5px; background-color: #75a8ff; color: white; border: none;font-size: 1.1rem;">Export
                      Now</button>
                  </div>

                </div>

                <div class="row pl-2" id="DeviceHide">
                  <div class="col-12 mt-5">
                    <label class="col-12 titleExpo">Please Select a Device</label>
                    <button class="btnExport2 btnActive" id="plantData">2304198348 <br> <span></span>Inverter</button>
                  </div>
                  <div class="col-12 mt-4">
                    <label class="col-12 titleExpo">Data
                      Type</label>
                    <button class="btnExport btnActive mt-2" id="detaled">Detailed Data</button>
                    <button class="btnExport btnNonActive mt-2" id="daily">Daily Statistics</button>
                    <button class="btnExport btnNonActive mt-2" id="monthly">Monthly Statistics</button>
                    <button class="btnExport btnNonActive mt-2" id="yearly">Yearly Statistics</button>
                  </div>

                  <div class="col-12 mt-5">
                    <label class="col-12 titleExpo">Please Select Time Period</label>
                    <input type="date" value="dateRangePicker" id="dateRangePicker" class="btnNonActive"
                      style="font-size: 1.2rem; padding: 10px !important; border-radius: 2px !important;">
                  </div>


                  <div class="col-12 mt-5">
                    <p class="col-12" style="color: black !important; font-size: 1.2rem !important;" id="timerange1">
                      System is going to
                      export the
                      data.
                      (Max.
                      time span: 30 Days)
                    </p>


                    <button class="p-2"
                      style="min-width: 120px; border-radius: 5px; background-color: #75a8ff; color: white; border: none;font-size: 1.1rem;">Export
                      Now</button>
                  </div>

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


  