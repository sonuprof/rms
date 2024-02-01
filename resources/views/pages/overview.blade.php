@include('component.header')
@include('component.sidebar')
    <div class="content-wrapper">
      <section class="content ">
        <div class="container-fluid ">
          <div class="row"></div>
          <div class="card card-default" style="margin-top: 80px !important;">
            <div class="card-body   p-3 overviewBodyOne" style="box-shadow: none !important;">
              <div class="bodyOneDiv">
                <p>Total Production</p>
                <h5>{{ $data->first()->total_production }}</h5>
              </div>
              <div class="bodyOneDiv">
                <p>Anticipated Yield</p>
                <h5>{{ $data->first()->anticipated_yield }}</h5>
              </div>
              <div class="bodyOneDiv">
                <p>Running Days</p>
                <h5>{{ $data->first()->running_days }}</h5>
              </div>
              <div class="bodyOneDiv">
                <p>CO₂ Prevention</p>
                <h5>{{ $data->first()->co2_prevention }}</h5>
              </div>

            </div>


          </div>

          <div class="card card-default " style="margin-top: -5px;">
          <div class="card-body ">
              <div class="detailgraph mt-2 mb-5" style="display: flex;
               flex-direction: row;
               justify-content: space-between;">
                <h5>24th Curve</h5>
                <div style="display: flex; flex-direction: row; justify-content: space-evenly; gap:10px ;">
                  <button type="button" class="btnNonActive px-3 btn" style="color:#434343 !important">Diurnal
                    pattern:Close</button>
                  <button type="button" class="btnNonActive px-3 btn"
                    style="color:#434343 !important">Parameter</button>

                  <span style="font-size: 25px; color: #969595;">
                    < </span>
                      <input type="month" value='2024-01' class="btnActive px-3 btn"
                        style="border: 1px solid #b0b0b0 !important; background-color: white !important; ">
                </div>
              </div>
              <div id="chart-timeline"></div>
            </div>
          </div>
          <div class="card card-default " style="margin-top: -5px;">
          <div class="card-body ">
              <div class="detailgraph mt-2 mb-5" style="display: flex;
               flex-direction: row;
               justify-content: space-between;">
                <h5>Historical data</h5>
                <div style="display: flex; flex-direction: row; justify-content: space-evenly; gap:10px ;">
                  <button type="button" class="btnNonActive px-3 btn"
                    style="color:#434343 !important">Parameter</button>

                  <span style="font-size: 25px; color: #969595;">
                    < </span>
                      <input type="month" value='2024-01' class="btnActive px-3 btn"
                        style="border: 1px solid #b0b0b0 !important; background-color: white !important; ">
                      <div style="display: flex;
                  flex-direction: row;
                  gap: -8px; ">
                        <button type="button" class="btnActive px-3" style="border-radius:5px 0 0 5px;">Month</button>
                        <button type="button" class="btnNonActive px-3">Year</button>
                        <button type="button" class="btnNonActive px-3"
                          style="border-radius:0 5px 5px 0;">Total</button>
                      </div>



                </div>
              </div>
              <div id="chart"></div>
            </div>
          </div>

        </div>


      </section>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  @include('component.footer')


  