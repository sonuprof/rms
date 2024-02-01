@include('component.sidebar')

@include('component.header')
<!-- / Navbar -->

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <!-- #lcard{
                height: 215.5px !important;
              } -->
            <style>
              @media only screen and (min-width: 1030px){
                #lcard{
                  height: 178px !important;
                } 
              #mcard1{
                height: 178px !important;

              }
            }
            
            

            @media (max-width: 1215px){
              #mesapn{
                font-size: 0.75rem !important;
              }
              #ladyPic{
                margin-bottom:25px;
              }
            }

            @media (max-width: 400px){
              #mespan0{
                font-size: 0.9rem !important;
              }
            }

            @media (min-width: 1672px){
              #mcard1{
                height: 178px !important;
              }
              #mcard2{
                margin-top: 0rem;

              }
            }
            </style>


            <div class="container-xxl flex-grow-1 container-p-y" >
              <div class="row">
              <div class="col-12 col-lg-7 mb-4 order-0">
        <div class="card">
          <div class="d-flex  row" id="lcard">

            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary" id="largeGapHead">Congratulations</h5>
                <p class="mb-4" id="largeGap">Mrs. <span class="fw-bold">{{$topbc->name}}</span>, Block : {{$topbc->block}}, District :
                  {{$topbc->district}}, have earned highest Commission of <span class="fw-bold">₹ {{$topbc->total_earnings}}</span> during the month June
                  2023.</p>

                <!-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> -->
              </div>
            </div>
            <div class="col-sm-5 " id="ladyPic">
              <div class="card-body">
                <img class="img-responsive" src="../assets/img/illustrations/Work_from_home.jpg"
                  style="width: 100% !important" alt="View Badge User" />
              </div>
            </div>


          </div>
        </div>
      </div>
                  <div class="col-12 col-md-12 col-lg-5 order-md-2">
                    <div class="row flex flex-row">
                      <div class="col-6 mb-4">
                      <div class="card" id="mcard1" style="background-color: #003366;">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0 rounded" style="background-color: #eefbe7;">
                              <!-- <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded mt-1" /> -->
                              <i class='bx bx-transfer text-primary mt-1 rounded' style="font-size: 25px;padding-left:5px;"></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded text-white"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-3 text-white" style="font-size:0.8rem;" id="mespan0">Cumulative Transactions Number for
                  the state</span>
                <?php  $total_transaction_cnt =  number_format($total_txn_count / 100000,2);  ?>
                <?php  $main_total_transaction_cnt =  number_format($main_total_txn_cnt / 100000,2);  ?>
                <h4 class="card-title mb-0 text-white">{{$main_total_transaction_cnt}} Lakh</h4>
                        </div>
                      </div>
                      </div>
                      <div class="col-6 mb-4">
                      <div class="card" id="mcard1" style="background-color:  #008080;">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0 rounded" style="background-color: #eefbe7;">
                              <!-- <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded mt-1" /> -->
                              <i class='bx bx-rupee text-success mt-1 rounded' style="font-size: 25px;padding-left:5px;"></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded  text-white"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-3 text-white" style="font-size:0.8rem;" id="mespan0">Cumulative Transactions Amount
                  for the state</span>
                <?php  $total_transaction_amt =  number_format($total_txn_amt / 10000000,2);  ?>
                   <?php  $main_total_transaction_amt =  number_format($main_total_txn_amt / 10000000,2);  ?>
                <h4 class="card-title mb-0 text-white">₹ {{$main_total_transaction_amt }} Cr</h4>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ChecKBowx -->
                       <form action="{{route('dashboard')}}" method="post">
                <div class="row gap-4 my-3 mx-1">
                        
                    @csrf
                  <div class="col-sm-6 col-md d-flex flex-row justify-content-around rounded" style="background-color: #581845 !important;">

                    <div class="d-flex flex-row ">
                      <input {{$filterblock == "ALL" ? 'checked' : '' }}  type="radio" name="block_type" value="ALL" class=" mt-1 " style="width: 15px;">
                      <h6 class="ms-2 mt-2 pt-1 mt-sm-2 pt-sm-3 text-white"><b>ALL</b></h6>
                    </div>
                    {{$filterblock}}
                    <div class="d-flex flex-row ">
                      <input {{$filterblock == "NRETP" ? 'checked' : '' }}  type="radio" name="block_type" value="NRETP" class=" mt-1  " style="width: 15px;">
                      <h6 class="ms-2 mt-2 pt-2 mt-sm-2 pt-sm-3 text-white"><b>NRETP</b></h6>
                    </div>

                    <div class="d-flex flex-row ">
                      <input {{$filterblock == "NRLM" ? 'checked' : ''}}  type="radio" name="block_type" value="NRLM" class=" mt-1  " style="width: 15px;">
                      <h6 class="ms-2 mt-2 pt-2 mt-sm-2 pt-sm-3 text-white"><b>NRLM</b></h6>
                    </div>
                  </div>

                  <div class="col-sm-5  col-8  d-flex flex-row rounded justify-content-center" style="background-color: #045d5d !important;">
                    <h6 class="ms-4 mt-3 pt-1 text-white"><b>Month:</b> </h6>
                    <input type="month" name="month" class="form-control w-50 h-75 mt-2 ms-4 mb-1 pb-1 pb-sm-0 mb-sm-0" >
                  </div>
                  <style>
                    .bi-funnel:hover{
                      fill: #003366;
                    }
                  </style>
                  <div class="col-sm-1 col  d-flex flex-row rounded justify-content-center" style="background-color: #b5b5b7 !important;">
                    <button type="submit" class="w-100" style="background-color: rgba(245, 40, 145, 0); border:none;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-funnel mt-2" viewBox="0 0 16 16">
                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                      </svg>
                    </button>
                  </div>
                  
                </div>
                </form>
                <!-- End CheckBowx -->

                <!-- Multiple Cards -->
                   <!-- Multiple Cards -->
   
             <div class="col-12 mb-4 pb-3 rounded">
                <div class="row pt-4">

                  <div class="col-sm-12 col-md-4">

                    <table class="w-100">
                      <tbody style="background-color: #36454F;">
                        <tr >
                          <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #36454F;"> <!-- style="background-color: #69696914;" -->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-map text-primary mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">District</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$district_cnt}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                          <td style="border: 1px solid white; border-right:none;">
                            <div class="card flex flex-row " style="background-color: #36454F;"> <!-- style="background-color: blanchedalmond;" -->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-bank text-success mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Bank</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$bank_cnt}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>

                          <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #36454F;"> <!-- style="background-color: #69696914;" -->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-map-pin text-primary mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Block</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$block_cnt}}</h6>
                                </div>
                              </div>
                            </div>
                            
                          </td>

                          <td style="border: 1px solid white; border-right:none;">
                            
                            <div class="card flex flex-row " style="background-color: #36454F;"> <!-- style="background-color: blanchedalmond;" -->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-female text-success mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Corporate BC</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$corporate_bcsakhi_cnt}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>

                          <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #36454F;"> <!-- style="background-color: #69696914;" -->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-sitemap text-primary mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Gram Panchayat</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$bcsakhi_cnt}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>
                          
                          <td style="border: 1px solid white; border-right:none;">
                            <div class="card flex flex-row " style="background-color: #36454F;"> <!-- style="background-color: blanchedalmond;" -->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-badge-check text-success mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">IIBF Certified</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$iibf_certified}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>
                          <td colspan="2" style="border-bottom: 1px solid white;">
                            <div class="card flex flex-row justify-content-center" style="background-color: #36454F;"> <!-- style="background-color: #69696914;"-->
                            <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-rupee text-primary mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                            <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Model CLF</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">97</h6>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <!-- Row 2 -->

                  <div class="col-sm-12 col-md-4 mt-5 mt-lg-0">

                    <table class="w-100">
                      <tbody style="background-color: #013220;">
                        <tr>
                     
                          
                             <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #62214a30;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-star text-info mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Full Fledge BC</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$full_fledged}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                          <td style="border: 1px solid white; border-right:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #73351538;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-transfer text-dark mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">No. of Trans</span>
                                </div>
                                <div class="below">
                                <?php  $total_transaction_cnt2 =  number_format($total_txn_count / 100000,2);  ?>
                                <h6 class="card-title mb-0 text-white">{{$total_transaction_cnt2}} Lakh</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>

                       
                          
                             <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #62214a30;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-badge-dollar text-info mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Digipay BS</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$digipay}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                          <td style="border: 1px solid white; border-right:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #73351538;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-rupee text-dark mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Trans Amount</span>
                                </div>
                                <div class="below">
                                <?php  $total_transaction_amt2 =  number_format($total_txn_amt/ 10000000,2);  ?>
                                  <h6 class="card-title mb-2 text-white">₹ {{ $total_transaction_amt2 }} Cr</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>

                            <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #62214a30;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-user-check text-info mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Pay Points</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$pay_point}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>
                          
                          <td style="border: 1px solid white; border-right:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #73351538;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-money text-dark mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Comm Earn</span>
                                </div>
                                <div class="below">
                                 <?php  $comm_amt =  number_format($total_comm / 100000,2);  ?>
                                 <h6 class="card-title mb-2 text-white">₹ {{$comm_amt }} Lakh</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>
                        
                                   <tr>

                            <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #62214a30;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-user mt-1 rounded' style="font-size: 25px;color:#bf3875;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Transacting BC</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$transacting_bc}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>
                          
                          <td style="border: 1px solid white; border-right:none;">
                            <div class="card flex flex-row" style="background-color: #013220;"> <!-- style="background-color: #73351538;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                   <i class='bx bx-user-plus mt-1 rounded' style="font-size: 25px;color:#bf3875;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">BC Sakhi</span>
                                </div>
                                <div class="below">
                                 <?php  $comm_amt =  number_format($total_comm / 100000,2);  ?>
                                 <h6 class="card-title mb-2 text-white">₹ {{$bcsakhi_cnt }}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <!-- Row 3 -->
                  
                  
                  <div class="col-sm-12 col-md-4 mt-5 mt-lg-0">

                    <table class="w-100">
                      <tbody style="background-color: #003366;">
                        <tr>
                          <td style="border: 1px solid white; border-left:none;">
                            
                            <div class="card flex flex-row" style="background-color: #003366;"> <!-- style="background-color: #c3f47e38;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-user-pin text-warning mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">PMJJBY Enroll</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$pmjjy_sum}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                          <td style="border: 1px solid white; border-right:none;">
                            
                            <div class="card flex flex-row" style="background-color: #003366;"> <!-- style="background-color: #69696914;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-group text-secondary mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Dual Auth</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">10,726</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>

                          <td style="border: 1px solid white; border-left:none;">
                            
                            <div class="card flex flex-row" style="background-color: #003366;"> <!-- style="background-color: #c3f47e38;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-user-pin text-warning mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">PMSBY Enroll</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$pmsby_sum}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                          <td style="border: 1px solid white; border-right:none;">
                            
                            <div class="card flex flex-row" style="background-color: #003366;"> <!-- style="background-color: #69696914;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-rupee text-secondary mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">SHG Txn Amt</span>
                                </div>
                                <div class="below">
                                   <?php  $shg_trans_amt =  number_format($shg_amt / 10000000,2);  ?>
                                <h6 class="card-title mb-2 text-white">₹ {{$shg_trans_amt }} Cr.</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>

                          <td style="border: 1px solid white; border-left:none;">
                            <div class="card flex flex-row" style="background-color: #003366;"> <!-- style="background-color: #c3f47e38;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bxs-user-account text-warning mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">APY Enroll</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$apy_sum}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>
                          
                          <td style="border: 1px solid white; border-right:none;">
                            <div class="card flex flex-row" style="background-color: #003366;"> <!-- style="background-color: #69696914;"-->
                              <div class="card-left pt-2">
                                <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                  <i class='bx bx-transfer-alt text-secondary mt-1 rounded' style="font-size: 25px;"></i>
                                </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">SHG Txn No.</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$shg_trans}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>

                        </tr>

                        <tr>
                          <td colspan="2" style="border-bottom: 1px solid white;">
                            <div class="card flex flex-row justify-content-center" style="background-color: #003366;"> <!-- style="background-color: #69696914;"-->
                              <div class="card-left pt-2">
                                  <div class="rounded mt-1 ms-2 pb-1" style="background-color: #eefbe7;">
                                    <i class='bx bx-transfer-alt mt-1 rounded' style="font-size: 25px;color:#4c7625;"></i>
                                  </div>
                              </div>
                              <div class="card-right flex flex-columns ms-3">
                                <div class="up">
                                  <span class="fw-semibold d-block mb-1 pt-2 text-white" style="font-size: 0.8rem;">Account Opened</span>
                                </div>
                                <div class="below">
                                  <h6 class="card-title mb-2 text-white">{{$account_open}}</h6>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>

                  </div>

                </div>
              </div>
              
                <!-- Total Revenue -->
              
                <!-- Total Revenue -->

                <div class="row">
      <!-- Total Revenue -->
      <div class="col-12 col-md-7 order-1  order-lg-2 mb-4">
        <div class="card">
          <div class="row row-bordered g-0">
            <div class="col-md-6">
                 <h5 class="card-header m-0 me-2 pb-3"><strong>Monthly Bucket Wise Transaction</strong></h5>
              <div id="chart" class="py-5"></div>
                             <script>
      
                          var options = {
                            series: [<?php echo $pie->total_trans2 ; ?>, <?php echo $pie->total_trans3; ?>, <?php echo $pie->total_trans4 ; ?>, <?php echo $pie->total_trans5 ; ?>, <?php echo $pie->total_trans6 ; ?>],
                            chart: {
                            width: '100%',
                            type: 'pie',
                          },
                          legend: {
                            show : true,
                            position: 'bottom'
                          },
                          labels: ['1-99', '100-199', '200-249', '250-399', '>=400'],
                          responsive: [{
                            breakpoint: 480,
                            options: {
                              chart: {
                                width: 320
                              },
                              legend: {
                                show: true,
                                position: 'bottom'
                              }
                            }
                          }]
                          };
                  
                          var chart = new ApexCharts(document.querySelector("#chart"), options);
                          chart.render();
                        
                      </script>
            </div>
            <div class="col-md-6">
              <h5 class="card-header m-0 me-2 pb-3"><strong>Month wise No. of Transactions (In Lakh)</strong></h5>
             
                <div id="spark2" style="width: 100%;"></div>
                  <script>

                    var options45 = {
                      series: [{
                        name: "Transaction Count",
                        data: [0,<?php foreach($total_txn as $total_txns){
                           echo number_format($total_txns->total_txn_count/100000, 2) . ','; 
                      } ;?>]
                      }],
                      chart: {
                        height: 290,
                        type: 'line',
                        zoom: {
                          enabled: false
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'straight'
                      },
                      title: {
                        // text: 'Transactions',
                        align: 'left'
                      },
                      grid: {
                        row: {
                          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                          opacity: 0.5
                        },
                      },
                      xaxis: {
                        categories: ['0',<?php foreach($total_txn as $total_txns){
                             $dateStr = $total_txns->month;
                  $date = DateTime::createFromFormat('Y-m', $dateStr);
                  $monthName = $date->format('F');
                   echo "'" . $monthName . "',";
                      } ;?>],
                      }
                    };

                    var chart = new ApexCharts(document.querySelector("#spark2"), options45);
                    chart.render();


                  </script>

            </div>


          </div>
        </div>
      </div>
      <!--/ Total Revenue -->
      <div class="col-12 col-md-5  order-3 order-md-2">
        <div class="row  me-0 ms-0">
          <div class="card">
            <div class="card-body"
              style="padding-top:0.6rem !important;padding-left:0.6rem !important; padding-right:0.6rem !important;">
              <div>
                <div class=" align-items-start flex-wrap justify-content-between">
                  <div class="card-title" style="margin:0 !important; ">
                    <h5 class="text-wrap mb-1 mt-3 "><strong>Month wise Amount of Transactions (In Cr.)</strong></h5>
                    <!--<span class="badge bg-label-warning rounded-pill mb-4 mt-2 mb-3">Year 2023</span>-->
                  </div>
                  
                   <div id="chartcol" class="px-2"></div>

<script>
  var options = {
    series: [
      {
        data: [
          <?php foreach ($total_amt as $total_amts) { ?>
            {
              x: '<?php 
                  $dateStr = $total_amts->month;
                  $date = DateTime::createFromFormat('Y-m', $dateStr);
                  $monthName = $date->format('F');
                  echo  $monthName;
              ?>',
              y: [0, <?php echo number_format($total_amts->total_txn_amt/10000000, 2); ?>]
            },
          <?php } ?>
        ]
      }
    ],
    chart: {
      height: 295,
      type: 'rangeBar',
      zoom: {
        enabled: true
      }
    },
    plotOptions: {
      bar: {
        isDumbbell: false,
        columnWidth: 3,
        dumbbellColors: [['#008FFB']]
      }
    },
    legend: {
      show: false,
      showForSingleSeries: true,
      position: 'top',
      horizontalAlign: 'left',
      customLegendItems: ['Transactions']
    },
    fill: {
      type: 'gradient',
      gradient: {
        type: 'vertical',
        gradientToColors: ['#00E396'],
        inverseColors: true,
        stops: [0, 100]
      }
    },
    grid: {
      xaxis: {
        lines: {
          show: true
        }
      },
      yaxis: {
        lines: {
          show: false
        }
      }
    },
    xaxis: {
      tickPlacement: 'on'
    }
  };

  var chart = new ApexCharts(document.querySelector("#chartcol"), options);
  chart.render();
</script>


             

                  <div class=" mt-sm-auto gap-3">
                    <div>
                      <!-- <h5 class="mb-0 mt-4">₹ 84,686k</h5> -->
                      <small class="text-success text-nowrap fw-semibol d"></small>
                        <!-- <i class="bx bx-chevron-up "></i> 68.2%</small> -->
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
              </div>
          </div>

          <div class="container-xxl flex-grow-1" >
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100" style="background-color: #4b0082;">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-2">
                        <h5 class="m-0 me-2 text-white"><b>Top 10 Performing Districts</b></h5>
                      </div>
                          <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="orederstatistics"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded text-white"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" id="selectDB" on karia-labelledby="orederstatistics">
                            <a class="dropdown-item" onclick="solected()" href="javascript:void(0);"><b>Amount</b></a>
                            <a class="dropdown-item" onclick="eolected()" href="javascript:void(0);"><b>Number</b></a>
                          </div>
                        </div>
                    </div>
                    <div class="px-5">
                      <div class="d-flex justify-content-between align-items-center mb-0">
                        <div class="d-flex flex-row align-items-center justify-content-evenly gap-1 mb-0">
                          <h5 class="mt-3 text-white" id="lhead1" style="display:block;"><b>District</b></h5>
                          <h5 class="mt-3 text-white" id="lhead2" style="display:none;"><b>District</b></h5>
                        </div>
                        <div id="orderstatisticsChart">
                          <span id="rhead1" style="display:block;" class=" text-white"><b>Total Amnt</b></span>
                          <span id="rhead2" style="display:none;" class=" text-white"><b>Total Txn No.</b></span>
                        </div>
                      </div>
                    </div>

                    <script>
                      function solected(){
                        var amount1 = document.querySelector('#amount1');
                        var lhead1 = document.querySelector('#lhead1');
                        var lhead2 = document.querySelector('#lhead2');
                        var number1 = document.querySelector('#number1');
                        var rhead1= document.querySelector('#rhead1');
                        var rhead2 = document.querySelector('#rhead2');
                        amount1.style.display = 'block';
                        lhead1.style.display = 'block';
                        rhead1.style.display = 'block';
                        number1.style.display = 'none';
                        lhead2.style.display = 'none';
                        rhead2.style.display = 'none';
                      }
                      function eolected(){
                        var amount1 = document.querySelector('#amount1');
                        var lhead1 = document.querySelector('#lhead1');
                        var lhead2 = document.querySelector('#lhead2');
                        var number1 = document.querySelector('#number1');
                        var rhead1 = document.querySelector('#rhead1');
                        var rhead2 = document.querySelector('#rhead2');
                        amount1.style.display = 'none';
                        lhead1.style.display = 'none';
                        lhead2.style.display = 'block';
                        number1.style.display = 'block';
                        rhead1.style.display = 'none';
                        rhead2.style.display = 'block';
                      }

                      function salected(){
                        var amount2 = document.querySelector('#amount2');
                        var lhead3 = document.querySelector('#lhead3');
                        var lhead4 = document.querySelector('#lhead4');
                        var number2 = document.querySelector('#number2');
                        var rhead3 = document.querySelector('#rhead3');
                        var rhead4 = document.querySelector('#rhead4');
                        amount2.style.display = 'block';
                        lhead3.style.display = 'block';
                        lhead4.style.display = 'none';
                        number2.style.display = 'none';
                        rhead3.style.display = 'block';
                        rhead4.style.display = 'none';
                      }
                      function ealected(){
                        var amount2 = document.querySelector('#amount2');
                        var lhead3 = document.querySelector('#lhead3');
                        var lhead4 = document.querySelector('#lhead4');
                        var number2 = document.querySelector('#number2');
                        var rhead3 = document.querySelector('#rhead3');
                        var rhead4 = document.querySelector('#rhead4');
                        amount2.style.display = 'none';
                        lhead3.style.display = 'none';
                        lhead4.style.display = 'block';
                        number2.style.display = 'block';
                        rhead3.style.display = 'none';
                        rhead4.style.display = 'block';
                      }

                      function selected(){
                        var amount3 = document.querySelector('#amount3');
                        var lhead5 = document.querySelector('#lhead5');
                        var lhead6 = document.querySelector('#lhead6');
                        var number3 = document.querySelector('#number3');
                        var rhead5 = document.querySelector('#rhead5');
                        var rhead6 = document.querySelector('#rhead6');
                        amount3.style.display = 'block';
                        lhead5.style.display = 'block';
                        lhead6.style.display = 'none';
                        number3.style.display = 'none';
                        rhead5.style.display = 'block';
                        rhead6.style.display = 'none';
                      }
                      function eelected(){
                        var amount3 = document.querySelector('#amount3');
                        var lhead5 = document.querySelector('#lhead5');
                        var lhead6 = document.querySelector('#lhead6');
                        var number3 = document.querySelector('#number3');
                        var rhead5 = document.querySelector('#rhead5');
                        var rhead6 = document.querySelector('#rhead6');
                        amount3.style.display = 'none';
                        lhead5.style.display = 'none';
                        lhead6.style.display = 'block';
                        number3.style.display = 'block';
                        rhead5.style.display = 'none';
                        rhead6.style.display = 'block';
                      }
                    </script>
                    <style>
                        .scrolls::-webkit-scrollbar {
                          width: 5px;
                        }

                        .scrolls::-webkit-scrollbar-track {
                          box-shadow: inset 0 0 5px #f5f5f9; 
                          border-radius: 10px;
                          background-clip: content-box;
                        } 
                        
                        
                        .scrolls::-webkit-scrollbar-thumb {
                          background: #696cff; 
                          border-radius: 10px;
                        }
                            
                    </style>

                    <div class="card-body scrolls pt-0" id="amount1" style="display: block;  max-height: 270px;  overflow-y: scroll !important;">
                      
                      <table class="table" style="width: 100%;">
                        <tbody>
              
              @foreach($district as $districts)
                          <tr>
                            <td><h6 class="mb-0 text-white"><b>{{$districts->district}}</b></h6></td>
                            <td class="text-center"><small class="fw-semibold text-white"><b>{{number_format(($districts->total_amount/10000000),2)}} Cr.</b></small></td>
                          </tr>
              @endforeach
                        </tbody>
                      </table>
                      
                    </div>

                    <div class="card-body scrolls pt-0" id="number1" style="display: none;  max-height: 270px; overflow-y: scroll !important;">
                      
                      <table class="table" style="width: 100%;">
                        <tbody>
                          @foreach($district_txn as $district_txns)
                          <tr>
                            <td><h6 class="mb-0 text-white"><b>{{$district_txns->district}}</b></h6></td>
                            <td class="text-center"><small class="fw-semibold text-white"><b>{{number_format(($district_txns->total_txn_count/100000),2)}} Lakh</b></small></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100" style="background-color: #008000;">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="mb-1">
                      <h5 class="card-title m-0 me-2 text-white"><b>Top 10 Performing  BC Sakhis</b></h5>
                      <!-- <small class="text-muted">with >250 Transactions during the month</small> -->
                    </div>
                      <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="orederstatistics"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded text-white"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" id="selectDB" on karia-labelledby="orederstatistics">
                            <a class="dropdown-item" onclick="salected()" href="javascript:void(0);"><b>Amounts</b></a>
                            <a class="dropdown-item" onclick="ealected()" href="javascript:void(0);"><b>Number</b></a>
                          </div>
                        </div>
                    </div>
                    <div class="px-5">
                      <div class="d-flex justify-content-between align-items-center mb-0">
                        <div class="d-flex flex-row align-items-center justify-content-evenly gap-1 mb-0">
                          <h5 class="mt-3 text-white" id="lhead3" style="display:block;"><b>Name</b></h5>
                          <h5 class="mt-3 text-white" id="lhead4" style="display:none;"><b>Name</b></h5>
                        </div>
                        <div id="orderstatisticsChart">
                          <span id="rhead3" style="display:block;" class=" text-white"><b>Total Amnt</b></span>
                          <span id="rhead4" style="display:none;" class=" text-white"><b>Total Txn No.</b></span>
                        </div>
                      </div>
                    </div>
                    <style>
                        .hoide{
                          display:none;
                        }
                        .overME:hover + .hoide{
                          display:block;
                        }
                    </style>
                    <div class="card-body scrolls pt-0 mb-4" id="amount2" style=" max-height: 270px; overflow-y: scroll !important;" >
                      
                      <table class="table" style="width: 100%;">
                        <tbody>
                        @foreach($bcamount as $bcamounts)
                          <tr>
                            <td><h6 class="mb-0 overME text-white"><b>{{$bcamounts->name}}</b></h6><p class="hoide pt-2 text-white"><b> District: {{$bcamounts->district}} <br>Block: {{$bcamounts->block}} </b></p></td>
                            
                            <td class="text-center" ><div class="d-flex align-items-center gap-1"><h6 class="mb-0 text-white"><b>{{number_format(($bcamounts->total_txn_amt/10000000),2)}} Cr </b></h6></div></td>
                          </tr>
                            @endforeach
                        </tbody>
                      </table>
                     </div>
                     
                     <div class="card-body scrolls pt-0" id="number2" style="display: none;  max-height: 270px; overflow-y: scroll !important;">
                      
                      <table class="table" style="width: 100%;">
                        <tbody>
                            @foreach($bcamount_txn as $bcamount_txns)
                            <tr>
                            <td><h6 class="mb-0 overME text-white"><b>{{$bcamount_txns->name}}</b></h6><p class="hoide pt-2 text-white"><b>District: {{$bcamount_txns->district}} <br>Block: {{$bcamount_txns->block}} </b></p></td>
                            
                            <td class="text-center" ><div class="d-flex align-items-center gap-1"><h6 class="mb-0 text-white"><b>{{number_format(($bcamount_txns->total_txn_count/100000),2)}} Lakh </b></h6></div></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                     
                  </div>
                </div>
                <!--/ Transactions -->
                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100" style="background-color: #71211a;">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="mb-1">
                      <h5 class="card-title m-0 me-2 text-white"><b>Top-10 BC Sakhi-SHG transactions</b></h5>
                      <!-- <small class="text-muted">with >250 Transactions during the month</small> -->
                    </div>
                      <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="orederstatistics"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded text-white"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" id="selectDB" on karia-labelledby="orederstatistics">
                            <a class="dropdown-item" onclick="selected()" href="javascript:void(0);"><b>Amounts</b></a>
                            <a class="dropdown-item" onclick="eelected()" href="javascript:void(0);"><b>Number</b></a>
                          </div>
                        </div>
                    </div>
                    <div class="px-5">
                      <div class="d-flex justify-content-between align-items-center mb-0">
                        <div class="d-flex flex-row align-items-center justify-content-evenly gap-1 mb-0">
                          <h5 class="mt-3 text-white" id="lhead5" style="display:block;"><b>Name</b></h5>
                          <h5 class="mt-3 text-white" id="lhead6" style="display:none;"><b>Name</b></h5>
                        </div>
                        <div id="orderstatisticsChart">
                          <span id="rhead5" style="display:block;" class=" text-white">Total Amnt</span>
                          <span id="rhead6" style="display:none;" class=" text-white">Total Txn No.</span>
                        </div>
                      </div>
                    </div>
                    <div class="card-body scrolls pt-0" id="amount3" style="overflow-y: scroll !important; max-height: 270px !important;">
                      <table class="table">
                        <tbody>
                        @foreach($bc_shg as $bc_shgs)
                               <tr>
                            <td><h6 class="mb-0 overME text-white"><b>{{$bc_shgs->name}}</b></h6><p class="hoide pt-2 text-white"><b>District: {{$bc_shgs->district}} <br>Block: {{$bc_shgs->block}} </b></p></td>
                            
                            <td class="text-center" ><div class="d-flex align-items-center gap-1"><h6 class="mb-0 text-white">{{number_format(($bc_shgs->total_shg_amt/10000000),2)}} Cr</h6></div></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                      
                    </div>
                    
                    <div class="card-body scrolls pt-0" id="number3" style="display: none;  max-height: 270px; overflow-y: scroll !important;">
                      
                      <table class="table" style="width: 100%;">
                        <tbody>
                 @foreach($bc_shg_txn as $bc_shg_txns)
                               <tr>
                            <td><h6 class="mb-0 overME text-white"><b>{{$bc_shg_txns->name}}</b></h6><p class="hoide pt-2 text-white"><b>District: {{$bc_shg_txns->district}} <br>Block: {{$bc_shg_txns->block}} </b></p></td>
                            
                            <td class="text-center" ><div class="d-flex align-items-center gap-1"><h6 class="mb-0 text-white"><b>{{number_format(($bc_shg_txns->total_shg_trans/1000),2)}} K</b></h6></div></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
@include('component.footer')
