<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Page Modal</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/model.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.45.1/apexcharts.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


  <style>
    .content-wrapper {
      margin-bottom: 5px;
      overflow-x: hidden !important;
    }

    #popup-overlay {


      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-1000px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div style="background-color: #eee6e6; overflow: hidden;" id="popup-overlay">
    <div class="card flex flex-row justify-between items-center p-3"
      style="height: 80px; width: 100%; border: none; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); display: flex; align-items: center;">
      <h5 style="flex: 1; color: rgb(124, 124, 124); font: 100;">Inverter2304198435 <span
          style="font-size: 16px; color: black; margin-left: 10px;"><img src="./images/online.png"
            style="height: 20px;"> Online 2024-01-29
          17:28:01</span></h5>
      <button type="button" class="close text-center">&times;</button>
    </div>

    <div class="content-wrapper">
      <section class=" content pb-3">
        <div class="container-fluid">
          <div class="card card-default" style="margin-top: 20px !important; padding: 15px;">
            <div class="card-head" style="height: 47px; margin-top: 18px; ">
              <ul class="deviceUl" style="gap: 65px; width: 30%;">
                <li class="bordBottom " style="color: blueviolet; padding-bottom: 15px;">Device Data
                </li>
                <li style="padding-bottom: 15px;">Architecture
                </li>
              </ul>
            </div>

            <hr style="margin-top: -2px;">
            <div class="card-body" style="overflow-y: auto; overflow-x: hidden;  min-height: calc(100vh - 100px);">
              <div class="ml-3 row" style="margin-top: -2px;">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">Basic Information</label>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">SN :</span>2304198435</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Inverter Type :</span>String Single Inverter
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Product Type :</span>2</p>
                </div>
              </div>
              <hr>
              <div class="ml-3 row" style="margin-top: -2px;">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">Version Information</label>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Protocol Version :</span>V0.2.0.5</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Control Software Version 1 :</span>S0000-6154
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Control Software Version 2 :</span>V6.1.5.4</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Communication CPU Software Version
                      :</span>V0.2.4.5
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Production Compliance Country :</span>2</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Rated Power :</span>3KW</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">MPPT No :</span>1</p>
                </div>
              </div>
              <hr>
              <div class="row m-3 ">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">Electricity Generation</label>
                <div class="col-4 ">

                  <table class="table w-100 mt-2">
                    <thead style="border-radius: 10px;">
                      <tr style="background-color: rgb(239, 244, 255);">

                        <th style="color: #696767;">DC</th>
                        <th style="color: #696767;">Voltage</th>
                        <th style="color: #696767;">Current</th>
                        <th style="color: #696767;">Power</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>PV1</th>
                        <th>314.50V</th>
                        <th>3.80A</th>
                        <th>1.1951kW</th>
                      </tr>
                      <tr>
                        <th>PV2</th>
                        <th>0.00V</th>
                        <th>0.00A</th>
                        <th>0W</th>
                      </tr>
                  
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-4"
                  style="display: flex; flex-direction: row; justify-content: center; align-items: center; position: relative;">
                  <input id="myRange" type="range" style="width: 100%; " min="0" max="100" step="1">
                  <img src="./images/ac.png"
                    style="position: absolute; top: 38%; left: 45%; transform: (-50% ,-50%); height: 80px ; width: 80px;">

                </div>

                <div class="col-4">

                  <table class="table w-100 mt-2">
                    <thead style="border-radius: 10px;">
                      <tr style="background-color: rgb(239, 244, 255);">

                        <th style="color: #696767;">AC</th>
                        <th style="color: #696767;">Voltage</th>
                        <th style="color: #696767;">Current</th>
                        <th style="color: #696767;">Frequency</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>R</th>
                        <th>243.40V</th>
                        <th>4.80A</th>
                        <th>49.88Hz</th>
                      </tr>
                      <tr>
                        <th>S</th>
                        <th>0.00V</th>
                        <th>0.00A</th>
                        <th>--</th>
                      </tr>
                      <tr>
                        <th>T</th>
                        <th>0.00V</th>
                        <th>0.00A</th>
                        <th>0W</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
              <hr>
              <div class="row m-3 ">
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Total AC Output Power (Active):</span>0.00W</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Cumulative Production (Active):</span>371.30kWh
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Daily Production (Active):</span>1.40kWh
                  </p>
                </div>
              </div>
              <hr>
              <div class="row m-3 ">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">Power Grid</label>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Electricity Meter Communication
                      Attributes:</span>Offline</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Grid Status :</span>Static
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Total Grid Power:</span>0W
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Cumulative Grid Feed-in:</span>0 KWh
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Daily Grid Feed-in:</span>0 KWh
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Daily Energy Purchased:</span>0 KWh
                  </p>
                </div>
              </div>
              <hr>
              <div class="row m-3 ">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">Electricity Consumption</label>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Total Consumption Power:</span>0W</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Cumulative Consumption :</span>371.3kWh
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Daily Consumption：</span>1.4 kWh
                  </p>
                </div>
              </div>
              <hr>
              <div class="row m-3 ">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">Temperature</label>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Environment Temperature:</span>-100℃</p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Heat-sink Temperature :</span>-100℃
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">DC-DC Temperature ：</span>31.2℃
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Inductor Temperature 1 ：</span>-100℃
                  </p>
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Inductor Temperature 2 ：</span>0℃
                  </p>
                </div>
              </div>

              <hr>
              <div class="row m-3 ">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">Other</label>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Total Grid-tied Time:</span>0h</p>
                </div>
              </div>
              <hr>
              <div class="row m-3 ">
                <label class="col-12 " style="font-weight: bold ; font-size: 18px;">State</label>
                <div class="col-md-4 col-12 mt-2">
                  <p style="font-weight: 500;"><span class="pColor mr-2">Inverter status:</span>4</p>
                </div>
              </div>
              <hr>
              <div class="row m-3">
                <div class="" style=" width: 100%; display: flex;flex-direction: row;justify-content: space-between;">
                  <div style="margin-left: 16px;">
                    <h5 style="font-weight: bold; font-size: 18px;">Historical data</h5>
                    <button type="button" class="btnNonActive px-3"
                      style="height: 35px; border-radius: 5px;">Export</button>
                  </div>
                  <div style="display: flex; flex-direction: row; justify-content: space-evenly; gap:10px ;">
                    <button type="button" class="btnNonActive px-3 btn"
                      style="color:#434343 !important;height: 40px;">Parameter</button>
                    <span style="font-size: 25px; color: #969595;">
                      < </span>
                        <input type="month" value='2024-01' class="btnActive px-3 btn"
                          style="border: 1px solid #b0b0b0 !important; background-color: white !important;height: 40px;">
                        <div style="display: flex; flex-direction: row; gap: -8px; ">
                          <button type="button" class="btnActive px-3"
                            style="border-radius:5px 0 0 5px;height: 40px;">Day</button>
                          <button type="button" class="btnNonActive px-3" style="height: 40px;">Week</button>
                          <button type="button" class="btnNonActive px-3" style="height: 40px;">Month</button>
                          <button type="button" class="btnNonActive px-3" style="height: 40px;">Year</button>
                          <button type="button" class="btnNonActive px-3"
                            style="border-radius:0 5px 5px 0;height: 40px;">Total</button>
                        </div>
                  </div>
                </div>
                <div class="col-12"
                  style="display:flex ; flex-direction: row; justify-content: center; align-items: center; width: 100%;">
                  <img src="./images/graph.png" style="height: 20px; ">
                </div>
                <div id="charts" class="mx-auto" style="height: 100px; width: 85%; ">


                </div>


              </div>

            </div>
          </div>
      </section>
    </div>
  </div>


  <script>


    const myRange = document.getElementById('myRange')
    const close = document.querySelector('.close').addEventListener('click', () => {
      let nextPageUrl = 'device';
      window.location.href = nextPageUrl;
    })


    let count = 0;
    setInterval(() => {


      if (count > 100) {
        count = 0;
      }

      myRange.value = count;
      count++;

    }, 25);
  </script>
  <script src="{{asset('dist/js/chart3.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.45.1/apexcharts.min.js"
    integrity="sha512-mDe5mwqn4f61Fafj3rll7+89g6qu7/1fURxsWbbEkTmOuMebO9jf1C3Esw95oDfBLUycDza2uxAiPa4gdw/hfg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>