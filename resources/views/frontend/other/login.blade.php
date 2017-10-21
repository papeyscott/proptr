 @extends('layouts.user')

@section('title')
	PropTR | Login
@endsection

@section('styles')
		<link href="{{ asset('/src/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
		<link href="{{ asset('/src/css/style.css') }}" type="text/css" rel="stylesheet" media="all">  
		<link rel="stylesheet" href="{{ asset('/src/css/swipebox.css') }}">    
		<link rel="stylesheet" href="{{ asset('/src/css/flexslider.css') }}" type="text/css" media="screen" />
		<link rel="stylesheet" href="{{ asset('/src/css.css" type="text/css') }}" media="screen" />
		<link rel="stylesheet" href="{{ asset('/src/css/registercss.css') }}">
		<link rel="stylesheet" href="{{ asset('/src/css/set1.css') }}">
		<!-- //Custom Theme files -->
		<!-- font-awesome icons -->
		<link href="{{ asset('/src/css/font-awesome.css') }}" rel="stylesheet"> 
		<!-- //font-awesome icons -->
		<!-- js -->
		<script src="{{ asset('/src/js/jquery-2.2.3.min.js') }}"></script>  
		<script src="{{ asset('/src/js/bootstrap.js') }}"></script>  
@append


@section('content')
	
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
 <div class="modal-content" style="background-image: url(&quot;images/form-background-top.png&quot;); background-repeat: repeat-x; background-position: center top; background-color: rgb(255, 255, 255);"> 
      	<div class="modal-header" align="center">
        	<button type="button" style="padding: 0px 8px 0px 8px; border: 1px solid; margin-right: -6px;background-image: url(&quot;images/form-title-background-right.png&quot;);background-position: right center;background-repeat: no-repeat;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        	<h4 class="modal-title1" id="myModalLabel" ><font color="#9A9A9A">Login</font></h4>
      	</div>
	  	<center>
      	<div class="modal-body">
        		<div class="col-md-6" style="background: #fff;">
				<form id="login-form" method="post" class="signin" action="">
					<div class="login_container">	
            			<div class="login_container_box1">
            	    		<div class="login_field1">
								<div class="col-md-12">
                        			<div class="login-msg"></div>
                        		</div>
                        		<div class="col-md-12">
                                	<span class="input input--hoshi">
							          <input class="input__field input__field--hoshi" type="text" id="name">
							          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
							            <span class="input__label-content input__label-content--hoshi">Email</span>
							          </label>
							        </span>
                       			</div>
                         		<div class="col-md-12">
                                	<span class="input input--hoshi">
							          <input class="input__field input__field--hoshi" type="password" id="password_login">
							          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
							            <span class="input__label-content input__label-content--hoshi">Password</span>
							          </label>
							        </span>
                        		</div>
								 <div class="">
							        <button class="btn btn-primary pull-right">
							            Login
							        </button>		
                    	 		</div>	
                    	 	</div>
                		</div>
					</div>
				</form>
				</div>
				<div class="col-md-6" style="display:inline-block;">
					<h4 style="padding: 8px 8px; background:#0E93CC; width:80%; border-radius: 8px; display: inline-block;" align="center"><font color="#FFFFFF">Sponsored</font></h4>
			   		<div class="divsponimg" style="margin-top: 10%;">			   
			   			<div class="col-md-12" style="margin-bottom: 11px;">                
							<img class="sponimg" src="images/advert_wireframe.jpg" alt="">                
						</div>
					</div>
				</div>
       		<div class="clearfix"></div>      
      		<div class="modal-footer" style="background-repeat: repeat-x;margin-top: 4px;">       
         		<span class="col-md-6" style="text-align: left">
            		<a href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#forgot-password" title="Forgot your password">Forgot your password?</a>
          		</span>
         		<span class="col-md-6" style="text-align: right">
          			<a href="register.html" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bs-example-modal-lg" title="Create Account">Create Account</a>
          		</span>       
      		</div>
 		</div>
 	</center></div>

@endsection