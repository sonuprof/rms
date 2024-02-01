@include('component.sidebar')

@include('component.header')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">RMS</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h4 class="card-header" style="font-weight: 500; color:#8a8a91;">Upload Data Here </h4>
                    @if(session()->has('status'))
                    <div class="alert my-3 p-3 alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="post" action="{{route('import')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row my-3">
                                <div class="form-group col-sm-10 col-xs-12">
                                    <label>Select file</label>
                                    <input type="file" name="upload" class="form-control-file form-control height-auto">
                                </div>
                                <div class="form-group col-sm-2 mt-4">
                                    <center><button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button></center>
                                </div>
                                <div class="form-group col-sm-9 mt-5">
                                    <a href="#">
                                        <p>Download Sample File</p>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    @include('component.footer')