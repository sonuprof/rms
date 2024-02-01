@include('component.sidebar')
@include('component.header')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> -->

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h4 class="card-header" style="color:#8a8a91;">Add User</h4>
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
          <form  action="{{route('save-user')}}" method="post">
              @csrf
              <div class="row my-3">
              <div class="form-group col-md-6 my-2 col-sm-12">
								<label>Name Of User</label>
								<input class="form-control" name="name" type="text" placeholder="">
							</div>
							<div class="form-group col-md-6 my-2 col-sm-12">
								<label>Email</label>
								<input class="form-control" name="email" type="email" placeholder="">
							</div>
							<div class="form-group col-md-6 my-2 col-sm-12">
								<label>Contact/Mobile No.</label>
								<input class="form-control" name="mobile"  type="number" placeholder="">
							</div>
							<div class="form-group col-md-6 my-2 col-sm-12">
								<label>Password</label>
								<input class="form-control" name="password"  type="password" placeholder="">
							</div>
							<div class="form-group col-md-6 my-2 col-sm-12">
								<label>Confirm Password</label>
								<input class="form-control" name="password_confirmation"  type="password" placeholder="">
							</div>
							<div class="form-group col-md-6 my-2 col-sm-12">
								<label>Role of User</label>
								<select class="form-control" name="role"  >
									<option selected disabled>Select...</option>
									<option value="Admin" >Admin</option>
									<option value="User" >User</option>
								</select>
							</div>
							
							

              </div>
              <center><button type="submit" class="btn btn-primary my-3" style="width: 25% !important">Submit</button>
              </center>
            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- / Content -->

  <!-- Footer -->
  @include("component.footer");