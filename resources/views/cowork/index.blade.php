@extends('layouts.app')
@section('content')
<div class="page-content">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="marketing-section gig-post">
<div class="marketing-content">

</div>
<!-- <div class="card shadow h-100"> -->
			<!-- <div class="card-header"> -->
				
			<!-- </div> -->
			<div class="card-body">
                
    			<ul id="featurelist">
                <li>Welcome to DigiInc</li>
    				<li>Hire online for a fraction of the cost!</li>
    				<li>Outsource anything you can think of!</li>
    	            <li>Programmers, designers, content writers are ready now!</li>
    	            <li>Only pay freelancers once you are happy with their work</li>
    			</ul>
    			    			<a href="#ugselect" id="signup" class="btn btn-outline-primary btn-lg">Sign Up now!</a>
    						</div>
		</div>

<div class="marketing-bg">

<!-- </div> -->
</div>
</div>

<div class="col-lg-4">
<div class="property-info">
<h4>Members Login</h4>
<p>Add the Details of your Gig to know the user to receive orders</p>
</div>
</div>
<div class="col-lg-8">
  <div class="add-property-wrap">
    <div class="row">
      <div class="col-md-12">
        <div class="form-wrap">
          <div class="team-form w-100">
            <div class="team-form-heading">
              <h3>Login</h3>
              <p>Please enter your credentials</p>
            </div>
            <form action="#">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="col-lg-4">
<div class="property-info">
<h4>Freelancer</h4>
<p>Add the Details of your Gig to know the user to receive orders</p>
</div>
</div>

<div class="col-lg-8">
  <div class="add-property-wrap">
    <div class="row">
      <div class="col-md-12">
        <div class="form-wrap">
          <div class="team-form w-100">
            <div class="team-form-heading">
              <h3>Freelancer</h3>
              <p>How can I help you? Please write down your query</p>
            </div>
            <!-- <div class="col-md-6"> -->
		<!-- <div class="card shadow h-100"> -->
			<div class="card-header text-center jbf-bg-primary">
				<h2 class="d-inline text-white">Freelancer</h2>
							</div>
			<div class="card-body">
				<p></p><p>Freelancers enjoy the following features:</p>
<h3><strong>Features:</strong></h3>
<ul>
<li>Simple registration.</li>
<li>Search and apply for Projects in just a few clicks.</li>
<li>Get notified when a new project is posted.</li>
</ul><p></p>
			</div>
			<div class="card-footer bg-white">
			<form action="/digiinc/index.php/cowork" method="post" name="userGroup" id="userGroup" class="m-0">
				<div class="text-center">
					<button class="btn btn-outline-primary btn-lg" type="submit" id="btn_ug_id1" onclick="javascript:selectRole('1');">Choose &amp; Continue</button>
				</div>
				<input type="hidden" name="check" value="post">
				<input type="hidden" name="ugid" value="1">
				<input type="hidden" name="option" value="com_jblance">
				<input type="hidden" name="task" value="guest.grabusergroupinfo">
				<input type="hidden" name="d3b51feb1f3222eb9a784df2c3b7d6e2" value="1">			</form>
			</div>
		</div>

	</div>
          <!-- </div>
        </div> -->
      </div>
    </div>
  </div>
</div>


<div class="col-lg-10">
  <div class="add-property-wrap">
    <div class="row">
      <div class="col-md-12">
        <div class="form-wrap">
          <div class="team-form w-100">
            <div class="team-form-heading">
              <!-- <h3>Login</h3>
              <p>Please enter your credentials</p> -->
            </div>
            <p>Note: If the profile type chosen requires approval from site administrators, your account will automatically be disabled until an administrator approves your account.</p>
            <!-- <form action="#">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                </div>
              </div>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="col-lg-4">
<div class="property-info">
<h4>Buyer</h4>
<p>Add the Details of your Gig to know the user to receive orders</p>
</div>
</div>
<div class="col-lg-8">
  <div class="add-property-wrap">
    <div class="row">
      <div class="col-md-12">
        <div class="form-wrap">
          <div class="team-form w-100">
            <div class="team-form-heading">
              <h3>Buyer</h3>
              <p>How can I help you? Please write down your query</p>
            </div>
            <!-- <div class="col-md-6">
		<div class="card shadow h-100"> -->
			<div class="card-header text-center jbf-bg-primary">
				<h2 class="d-inline text-white">Buyer</h2>
							</div>
			<div class="card-body">
				<p></p><p>Try Freelance Solutions from our site. We enable you to,</p>
<h3><strong>Features:</strong></h3>
<ul>
<li>Post projects for free in easy steps and start receiving bids.</li>
<li>Pay Freelancers when satisfied.</li>
<li>Get notified immediately when there is a new bid.</li>
</ul><p></p>
			</div>
			<div class="card-footer bg-white">
			<form action="/digiinc/index.php/cowork" method="post" name="userGroup" id="userGroup" class="m-0">
				<div class="text-center">
					<button class="btn btn-outline-primary btn-lg" type="submit" id="btn_ug_id2" onclick="javascript:selectRole('2');">Choose &amp; Continue</button>
				</div>
				<input type="hidden" name="check" value="post">
				<input type="hidden" name="ugid" value="2">
				<input type="hidden" name="option" value="com_jblance">
				<input type="hidden" name="task" value="guest.grabusergroupinfo">
				<input type="hidden" name="d3b51feb1f3222eb9a784df2c3b7d6e2" value="1">			</form>
			</div>
		</div>

	</div>
          <!-- </div>
        </div> -->
      </div>
    </div>
  </div>
</div>



@include('components.footer')
@endsection