@extends('layouts.app')
@section('content')

<div class="container">
					<div class="container-inner">
						
	
<div class="row">
	
<main id="sp-component" class="col-lg-12 ">
	<div class="sp-column ">
		<div id="system-message-container" aria-live="polite">
	</div>


		
		<script type="text/javascript">
<!--
jQuery(document).ready(function($){
	$("#signup").click(function(){
		$("html, body").animate({
			scrollTop: $("#ugselect").offset().top
		}, 500);
	});
});

function selectRole(ugId){
	jQuery("button.active").removeClass("active btn-success");
	jQuery('#btn_ug_id'+ugId).addClass("active btn-success");
}
//-->
</script>
<div class="row mb-4">
	<div class="col-md-8">
		<div class="card shadow h-100">
			<div class="card-header">
				<h4>Welcome to DigiInc</h4>
			</div>
			<div class="card-body">
    			<ul id="featurelist">
    				<li>Hire online for a fraction of the cost!</li>
    				<li>Outsource anything you can think of!</li>
    	            <li>Programmers, designers, content writers are ready now!</li>
    	            <li>Only pay freelancers once you are happy with their work</li>
    			</ul>
    			    			<a href="#ugselect" id="signup" class="btn btn-outline-primary btn-lg">Sign Up now!</a>
    						</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card shadow h-100">
			<div class="card-header">
				<h4>Members Login</h4>
			</div>
			<div class="card-body">
        	   <!-- if user is guest -->
                        	    <div class="p-3">
        	    	<form action="/digiinc/index.php/cowork" method="post" name="login" id="form-login" class="m-0">
        	        	<div class="form-group mb-3">
        					<label for="username" class="sr-only">Username</label>
                            <div class="input-group">
								<span class="input-group-text"><i class="icon-user"></i></span>
                              	<input class="form-control" type="text" name="username" id="username">
                              	<span class="input-group-text">
									<a href="/digiinc/index.php/component/users/remind?Itemid=101" class="text-muted" title="Forgot your Username?" tabindex="-1"><i class="icon-question-sign"></i></a>
								</span>
                            </div>
        	        	</div>
        	        	<div class="form-group mb-3">
        					<label for="password" class="sr-only">Password</label>
        					<div class="input-group">
								<span class="input-group-text"><i class="icon-lock"></i></span>
                            	<input type="password" class="form-control" name="password" id="password">
								<span class="input-group-text">
									<a href="/digiinc/index.php/component/users/reset?Itemid=101" class="text-muted" title="Forgot your Password?" tabindex="-1">
										<i class="icon-question-sign"></i>
									</a>
								</span>
        					</div>
        				</div>
        				<div class="form-group form-check mb-3">
        					<input type="checkbox" class="form-check-input" id="remember" name="remember">
        					<label class="form-check-label" for="remember">Remember me</label>
        				</div>
        				<button type="submit" name="submit" id="submit" class="btn btn-outline-success">Log in</button>
        				        				<input type="hidden" name="option" value="com_users">
        				<input type="hidden" name="task" value="user.login">
        				<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21famJsYW5jZSZ2aWV3PXVzZXImbGF5b3V0PWRhc2hib2FyZA==">
        				<input type="hidden" name="6c6aad5711d33bd665f62ce13235a62b" value="1">        	        </form>
        		</div>
        				</div>
		</div>
	</div>
</div>

<a id="ugselect"></a>

<div class="row mt-3">
		<div class="col-md-6">
		<div class="card shadow h-100">
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
				<input type="hidden" name="6c6aad5711d33bd665f62ce13235a62b" value="1">			</form>
			</div>
		</div>

	</div>
		<div class="col-md-6">
		<div class="card shadow h-100">
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
				<input type="hidden" name="6c6aad5711d33bd665f62ce13235a62b" value="1">			</form>
			</div>
		</div>

	</div>
	</div>
	
<p class="alert alert-info mt-3">
Note: If the profile type chosen requires approval from site administrators, your account will automatically be disabled until an administrator approves your account.</p>
<div class="text-center p-2">
		<div class="border-top pt-3 mt-3" id="showcredit" style="display:none">
		<img src="/digiinc/media/com_jblance/images/joombri16.png" width="16"> 
		Powered By JoomBri Freelance - <a href="http://www.joombri.in" target="_blank">Freelance Directory Component</a>
	</div>	
		<div id="jbversioninfo" style="display:none;">4.9.0</div>
</div>


			</div>
</main>
</div>
											</div>
				</div>
@endsection
