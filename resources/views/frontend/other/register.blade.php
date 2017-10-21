 @extends('layouts.user')

@section('title')
	PropTR | Register
@endsection

@section('styles')
  <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
@endsection

@section('content')
		  <div class="container-fluid">
    <div class="row">
     	<div class="col-md-6 left-side">

      <h4 style="padding: 8px 6px; background:#0E93CC; width:100%; border-radius: 8px;" align="center"><font color="#FFFFFF"><span id="heading">Select an Option and Register</span></font></h4>
		<form action="" method="post" id="registration">
			<div class="row">
				<div class="col-md-12"><input class="rdo" type="radio" name="prop_user" value="1" required="" autocomplete="off">&nbsp;<b style="color: #9A9A9A">I am a Property Owner/Manager/Agent or Service Provider<font color="#FF0000">*</font></b></div><br><br>
			</div> 
            <div class="row">
                <div class="col-md-12"><input class="rdo" type="radio" name="prop_user" value="2" required="" autocomplete="off">&nbsp;<b style="color: #9A9A9A">I need to track property or service provider or seek for employment<font color="#FF0000">*</font></b>
                </div>		
            </div>
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" id="name">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Legal First Name</span>
          </label>
        </span>
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" id="name">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">Legal Last Name</span>
          </label>
        </span><span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" id="email">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">E-mail</span>
          </label>
          
        </span>
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="password" id="password">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
            <span class="input__label-content input__label-content--hoshi">Password</span>
          </label>
        </span>
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="password" id="password1">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password1">
            <span class="input__label-content input__label-content--hoshi">Repeat Password</span>
          </label>
        </span>
        <span class="input input--hoshi">
        <div class="col-md-6">
        <b style="color: #9A9A9A">How did you hear about us?<font color="#FF0000">*</font></b>
        </div>
        <div class="col-md-6">
            <select class="select" style="height: 25px;border-color: #0E93CC;font-size: 14px;padding: 0px -5px" title="Select Here About Us" required="" width="1px">
            <option value="">--Select--</option>
            <option value="1">Newspaper</option>
            <option value="2">Radio</option>
            <option value="3">Internet</option>
            <option value="4">Facebook</option>
            <option value="5">Google</option>
            <option value="6"></option>
            <option value="7">Business Networking Event</option>
            <option value="8">LinkedIn</option>
            <option value="9">Twitter</option>
            <option value="10">Google +</option>
            <option value="11">Google Advert</option>
            <option value="12">YouTube Channel</option>
            <option value="13">Facebook Sponsored Advert</option>
            <option value="14">Other</option></select>
        </div>
        </span>
        <div class="col-md-12">
            <p font color="#999999">By clicking below, you agree to proptr's T &amp; C</p>

        </div> 
        <div class="cta">
        <button class="btn btn-primary pull-left">
            Sign-Up Now
        </button>
          <span><a href="#">I am already a member</a></span>
        </div>
        
      </form></div>


     <div class="col-md-6 right-side">
    	<h4 style="padding: 8px 6px; background:#0E93CC; width:100%; border-radius: 8px;" align="center"><font color="#FFFFFF"><span id="heading">Sponsored</span></font></h4>
            <div class="divsponimg" style="margin-top: 5%;"> 
                <div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div>

                 <div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div>
                 <div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div>
                 <div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div>
                 <div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div>
                 <div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div><div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div><div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div><div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <img class="sponimg" src="images/advert_wireframe.jpg" alt="">
                </div>
    
            </div>
     </div>


      
    </div>
  </div>

 <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{ asset('/src/js/scripts.js') }}"></script>
<script src="{{ asset('/src/js/classie.js') }}"></script>
<script>
  (function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
      (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
          return this.replace(rtrim, '');
        };
      })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
      // in case the input is already filled..
      if( inputEl.value.trim() !== '' ) {
        classie.add( inputEl.parentNode, 'input--filled' );
      }

      // events:
      inputEl.addEventListener( 'focus', onInputFocus );
      inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
      classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
      if( ev.target.value.trim() === '' ) {
        classie.remove( ev.target.parentNode, 'input--filled' );
      }
    }
  })();
</script>


@endsection