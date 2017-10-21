@extends('layouts.user')

@section('title')
	PropTR | Dashboard
@endsection

@section('content')
	<!--main-->
	<div class="container" id="main">
	   <div class="row">
	   <div class="col-sm-6 col-md-3">
	      

	        <div class="panel panel-default" >
	        <div class="panel-heading" id="contain-box" style="padding-bottom:30px; display: inline-block;">
	           <img src="{{ asset('/src/images/testimonial_profilepic1.png') }}" alt="Proptr real Estate Networking" width="115" height="60" />
	           <!-- <img src="images/testimonial_profilepic1.png" class="img-circle" id="profile-image"> -->
	        </div>
	        <div class="panel-body">
	        	
	          
	              
	              <div class="clearfix"></div>
	              You are welcome to the 1st. Global Real Estate Management & Service Providers' Networking Platform.
	              <hr>
	              <h5 href="#" title="Pick places of interest"  data-trigger="hover">Improve your feed</h5>
	              <h5>Add a Property</h5>
	              <h5>Invite friends and Associates</h5>
	              <h5>Cities to watch</h5>
	            </div>
	         </div> 

	  </div>
	    <div class="col-sm-6 col-md-6">
	         
	          <div class="well"> 
	             <form class="form-horizontal" role="form" method="POST" action="">
							 	
	              <div class="form-group" style="padding:6px;">
	               <a href="#userprofile" style="color: black;"> <h5>Ola Bolu</h5></a>
	               <h5>Manager at Ernest Inc.</h5>
	                <input type="text" name="" class="form-control" data-emojiable="true" name="post_content" placeholder="Share your thoughts..."></input>
									<p class="help-text text-danger" style="padding-top:10px">

									</p>
									<p class="help-text text-success">

									</p>
	              </div>
	               <button class="btn btn-primary pull-right" type="submit">Share</button>
	               <ul class="list-inline">

					<div class="fileUpload btn btn-primary btn-round-sm btn-sm">
					    <span style="color: white">Image</span>
					    <input type="file" class="upload" name="post_image" />
					</div>
				    
	               <li><a href="#"><button type="button" class="btn btn-info btn-round-sm btn-sm" data-toggle="tooltip" data-placement="bottom" title="Add a Video" style="color: white">Video</button></a></li>
	               <li><button type="button" class="btn btn-danger btn-round-sm btn-sm fileUpload" data-toggle="tooltip" data-placement="bottom" title="Add a document" ><span style="color: white">Document</span>
					    <input type="file" class="upload" name ='post_doc' /></button></li>
	               </ul>
	            </form>
	          </div>

	         <div class="panel panel-default" >
	        <div class="panel-body"><a href="#" class="pull-right"><b class="caret"></b></a><img src="{{ asset('/src/images/testimonial_profilepic1.png') }}" class="img-circle pull-left"> <p><h4 >&nbsp;&nbsp;&nbsp;Jide Taiwo added a Luxury,three bedroom in Lekki,<br>&nbsp;&nbsp; Lagos, Nigeria for Sale</h4></p>
	              <div class="clearfix"></div>
	                <span>
          
	                </span>
	            </div>
	            <input type="hidden" name="post_id" value=" />
	             <p class="pull-right">
	              <form>
	              <div class="input-group">
	                <div class="input-group-btn">
	                <button class="btn btn-default"><i class="fa fa-thumbs-up" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Like"></i></button><button class="btn btn-default"><i class="fa fa-heart" data-toggle="tooltip" data-placement="bottom" title="Add to favorites"></i></button>
	                </div>
	                <input class="form-control" placeholder="Your thoughts on this post.." type="text">
	              </div>
	              </form>
	             </p>
	         </div> <!-- post item -->
					
	    </div>
	    <div class="col-sm-6 col-md-3">
	         <div class="panel panel-default">
	           <div class="panel-heading"><h4>Filter Search</h4></div>
	          <div class="panel-body">
	          

	                <form class="form-horizontal" role="form">
	                <div class="form-group">
	                  <label class="control-label col-sm-4" for="name">Country:</label>
	                  <div class="col-sm-8">
	                    <p><select name="Country" class="form-control" id="Country" placeholder="select">
	                      <option value="">Select</option>
	                    </select>
	                    </p>
	                  </div>
	                </div>            
	                
	                <div class="form-group">
	                  <label class="control-label col-sm-4" for="name">Province:</label>
	                  <div class="col-sm-8">
	                    <p><select name="Province" class="form-control" id="Province" placeholder="select">
	                      <option value="">Select</option>
	                    </select>
	                    </p>
	                  </div>
	                </div> 

	                <div class="form-group">
	                  <label class="control-label col-sm-4" for="name">Municipal:</label>
	                  <div class="col-sm-8">
	                    <p><select name="municipal" class="form-control" id="municipal" placeholder="select">
	                        <option value="">Select</option>
	                    </select>
	                    </p>
	                  </div>
	                </div>  
	                <div class="form-group">
	                  <label class="control-label col-sm-4" for="name">Property Type:</label>
	                  <div class="col-sm-8">
	                    <p><select name="propertyType" class="form-control" id="propertyType" placeholder="select">
	                      <option value="">Select</option>
	                    </select>
	                    </p>
	                  </div>
	                </div>             

	                <div class="form-group">        
	                  <div class="col-sm-offset-8">
	                    <button type="submit" class="btn btn-primary">Search</button>
	                  </div>
	                </div>
	              </form> 
	         
	        
	      </div>
	      
	    </div>
	  </div><!--/row-->
	  
	  <hr>
	  

	        <script type="text/javascript" src="{{ asset('/src/js/bootstrap.js') }}"></script>
	    
	        <script type="text/javascript">
	        
	        $(document).ready(function() {
	        
	      $('#btnToggle').click(function(){
	        if ($(this).hasClass('on')) {
	          $('#main .col-md-6').addClass('col-md-4').removeClass('col-md-6');
	          $(this).removeClass('on');
	        }
	        else {
	          $('#main .col-md-4').addClass('col-md-6').removeClass('col-md-4');
	          $(this).addClass('on');
	        }
	      });
	        });
	        
	        </script>
	        <script>
	        $(document).ready(function(){
	            $('[data-toggle="tooltip"]').tooltip(); 
	        });
	        </script>
	        <script>
	          $(document).ready(function(){
	              $('[data-toggle="popover"]').popover();   
	          });
	        </script>
    <div id="main" class="row">
	</div>
</body>
</html>
@endsection