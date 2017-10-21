 @extends('layouts.user')

@section('title')
	PropTR | Properties
@endsection


@section('content')


<div class="property-detailss step1">
	<div class="property-inner">
    	<div class="container">
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
        <h2 class="property-heading">Add property Images Page</h2></div>
        </div>
        	<div class="row">
            
            <div class="col-md-3 side-3 ">
                <!--<div class="left-sidebar">
                     <h3 class="top-hed proper-head">properties 5 kilometers away</h3>
                    <div class="inner-white">
                    </div>
                </div>-->
                <div class="left-sidebar">
                     <h3 class="top-hed proper-head">properties 5 kilometers away</h3>
                    <div class="inner-white">
                    <div class="proper-found sider-found">
                    <div class="abs">
                        <img src="images/feature-2.jpg">
                        <ul>
                        <li><strong class="left-type">Type of Property:</strong> <span class="right-type">Terrace(s)</span></li>
                        <li><strong class="left-type">Property Status:</strong> <span class="right-type">Vacant</span></li>
                        <li><strong class="left-type">Contract Type:</strong> <span class="right-type">For Foreclosure</span></li>
                        <li><strong class="left-type">Country:</strong> <span class="right-type">Egypt</span></li>
                        <li><strong class="left-type">Province/ States:</strong> <span class="right-type">Cairo</span></li>
                        <li><strong class="left-type">Amount:</strong> <span class="right-type">12,000.00</span></li>
                        <li><strong class="left-type">Type of Property:</strong> <span class="right-type">Terrace(s)</span></li>
                        </ul>
                        
                        <div class="add-to-share sider-share">
                        <a href="#" class="add-favo view-icon"><i aria-hidden="true" class="fa fa-eye"></i> View Details</a>
                        <a class="add-favo" href="#"><i class="fa fa-heart" aria-hidden="true"></i> Add To Favourite</a> 
                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a></div>
                    </div>
                    
                    <div class="abs">
                        <img src="images/feature-2.jpg">
                        <ul>
                        <li><strong class="left-type">Type of Property:</strong> <span class="right-type">Terrace(s)</span></li>
                        <li><strong class="left-type">Property Status:</strong> <span class="right-type">Vacant</span></li>
                        <li><strong class="left-type">Contract Type:</strong> <span class="right-type">For Foreclosure</span></li>
                        <li><strong class="left-type">Country:</strong> <span class="right-type">Egypt</span></li>
                        <li><strong class="left-type">Province/ States:</strong> <span class="right-type">Cairo</span></li>
                        <li><strong class="left-type">Amount:</strong> <span class="right-type">12,000.00</span></li>
                        <li><strong class="left-type">Type of Property:</strong> <span class="right-type">Terrace(s)</span></li>
                        </ul>
                        <div class="add-to-share sider-share">
                        <a href="#" class="add-favo view-icon"><i aria-hidden="true" class="fa fa-eye"></i> View Details</a>
                        <a class="add-favo" href="#"><i class="fa fa-heart" aria-hidden="true"></i> Add To Favourite</a> 
                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a></div>
                        
                    </div>
                    
                    </div>
                    
                   
                    </div>
                    <a href="#" class="more">more</a>
                     
                </div>
                </div>
                
                <div class="col-md-9">
                  <div class="steps">
<form id="msform" action="" method="post">
                        <!-- progressbar -->
                        <ul id="progressbar">
                        <li class="active">add property details</li>
                        <li>add property images</li>
                        <li>post on timeline / adverties</li>
                        </ul>
<!-- fieldsets -->
<fieldset>
<div class="inner-form">
		 <div class="row">
                    <div class="col-sm-6 left-form">
                        <p class="half"><input type="radio" name="Publish" value="publish"  checked><label>Publish</label></p>
                        <p class="half"><input type="radio" name="Publish" value="unpublish"><label>Unpublish</label></p>
                        <input type="text" placeholder="Property title">
                        <p class="desc"><textarea placeholder="proderty description"></textarea></p>
                     </div>
                    
                    <div class="col-sm-6 right-form">
                        <p class="first-2"><label>Country*</label> <select><option>-select-</option><option>-select-</option></select></p>
                        <p class="first-2"><label>Provinces/States*</label> <select><option>-select-</option><option>-select-</option></select></p>
                        <p><label>County/Municipal/LGA*</label> <select><option>-select-</option><option>-select-</option></select></p>
                        <p><label>Address</label><textarea placeholder="Property Address"></textarea></p>
                    </div>
                  </div>
                    
         <div class="row">
                    <div class="col-sm-4">
                        <p><label>Property Status</label> <select><option>-select-</option><option>-select-</option></select></p>
                        <p><label>Type of Property</label> <select><option>-select-</option><option>-select-</option></select></p>
                        <p><label>year of construction (Optional)</label> <select><option>-select-</option><option>-select-</option></select></p>
                    </div>
                    
                    <div class="col-sm-4">
                        <p><label>Contract Type</label> <select><option>-select-</option><option>-select-</option></select></p>
                        <p><label>Amount (country currency)</label> <input type="number" placeholder="Amount"></p>
                        <p><label>Cost/Unit of Measurement</label> <input type="number" placeholder="Cost per Measurement"></p>
                    </div>
                    
                     <div class="col-sm-4">
                        <p><label>Behaviour</label> <input type="text"></p>
                        <p><label>Behaviour</label> <input type="text"></p>
                        <p><label>Behaviour</label> <input type="text"></p>
                    </div>
                      </div>
                 
         
         <div class="property-featu">
                  <h2>Property Features</h2>
                    <div class="featyr">
                      <h3>Basic Features </h3>
                        <span><input type="checkbox">Bathroom</span>
                        <span><input type="checkbox">Bathroom</span>
                        <div class="mor"><a href="#">more...</a>
                   </div>
                    </div>
                   
                   
                    <div class="featyr">
                      <h3>Internal Features </h3>
                        <span><input type="checkbox">Bathroom</span>
                        <span><input type="checkbox">Bathroom</span>
                         <div class="mor"><a href="#">more...</a>
                   </div>
                    </div>
                   
                    <div class="featyr">
                      <h3>External Features </h3>
                        <span><input type="checkbox">Bathroom</span>
                        <span><input type="checkbox">Bathroom</span>
                        <span><input type="checkbox">Bathroom</span>
                         <div class="mor"><a href="#">more...</a>
                   </div>
                    </div>
                   
                    <div class="featyr">
                      <h3>Environmental Features </h3>
                        <span><input type="checkbox">Bathroom</span>
                        <span><input type="checkbox">Bathroom</span>
                        <div class="mor"><a href="#">more...</a>
                   </div>
                    </div>
                 </div>
                 
</div>

<input type="button" name="next" class="next action-button first-st" value="Next" />
</fieldset>
<fieldset class="ad">

<div class="inner-form specle">
<div class="scrollbar-inner">
	   <div class="row">
          <div class="col-sm-12 left-form left-form-bg">
               <span class="drag-drop">
                  <h3>Drag & Drop Picture Here</h3>
                     <div class="drop-drag">
                        <span>Drag & Drop Picture Here<br> or</span>
                        <input type="file" name="file">
                     </div>
               </span>
               
               <div class="describ-main">
                   <div class="describ-img">
                       <div class="dis-left"><img src="images/feature-2.jpg"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                       <div class="des-right"><input type="text" name="desciption" placeholder="Property Description"></div>
                   </div>
                   <div class="describ-img">
                       <div class="dis-left"><img src="images/feature-2.jpg"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                       <div class="des-right"><input type="text" name="desciption" placeholder="Property Description"></div>
                   </div>
                   <div class="describ-img">
                       <div class="dis-left"><img src="images/feature-2.jpg"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                       <div class="des-right"><input type="text" name="desciption" placeholder="Property Description"></div>
                   </div>
                   <div class="describ-img">
                       <div class="dis-left"><img src="images/feature-2.jpg"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                       <div class="des-right"><input type="text" name="desciption" placeholder="Property Description"></div>
                   </div>
                   <div class="describ-img">
                       <div class="dis-left"><img src="images/feature-2.jpg"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                       <div class="des-right"><input type="text" name="desciption" placeholder="Property Description"></div>
                   </div>
                   <div class="describ-img">
                       <div class="dis-left"><img src="images/feature-2.jpg"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                       <div class="des-right"><input type="text" name="desciption" placeholder="Property Description"></div>
                   </div>
              </div>
        </div>
   </div>
   </div>
  </div>
             
               
                
            
<input type="button" name="previous" class="previous action-button" value="Previous Page" />
<input type="button" name="next" class="next action-button" value="Next Page" />    
</fieldset>
<fieldset>
<div class="inner-form">

                    
                    
                    <div class="row">
                       <div class="col-sm-12 right-form right-form-bg">
                    <h3 class="for-revv">Add Property details & images review</h3>
                    <div class="inner-rev">
                        <p><span class="left-f">Property Title:</span> <span class="right-f">A twin Duplex situated in Berkshire for Sale</span></p>
                        <p><span class="left-f">Property Description:</span> <span class="right-f">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the<!--<textarea placeholder="Property Description"></textarea>--></span></p>
                        <p><span class="left-f">Property Status:</span> <span class="right-f">Vacant</span></p>
                        <p><span class="left-f">Contact Type:</span> <span class="right-f">For Foreclosure</span></p>
                        <p><span class="left-f">Type of Property:</span> <span class="right-f">Mansion</span></p>
                        <p><span class="left-f">Amount (USD):</span> <span class="right-f">175000.00</span></p>
                      </div>
                      
                        
                        <div class="advance-tracking">
							<h3 class="for-revv">Property Features</h3>
                             <div class="inner-rev chang-des">
                            <div class="feat">
                                <span class="as">Basic Features</span>
                                 <span class="dd"><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p></span>
                            </div>
                            <div class="feat">
                                <span class="as">Enternal Features</span>
                                 <span class="dd"><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p></span>
                            </div>
                            <div class="feat">
                                <span class="as">External Features</span>
                                <span class="dd"><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p></span>


                            </div>
                            <div class="feat">
                                <span class="as">Environmental Features </span>
                                <span class="dd"><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p><p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet Bathroom</p> <p>Toilet</p> <p>Bathroom</p> <p>Toilet</p></span>
                            </div>
                            </div>
                          </div>  
                          
                          <div class="prope-img">
                          <h3 class="for-revv">Property images </h3>
                          
                          <div class="describ-main">
                          <div class="doble-img">
                          <h5>Property Images 1 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                           <div class="doble-img">
                          <h5>Property Images 2 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                           <div class="doble-img">
                          <h5>Property Images 3 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                           <div class="doble-img">
                          <h5>Property Images 4 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                          <div class="doble-img">
                          <h5>Property Images 5 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                           <div class="doble-img">
                          <h5>Property Images 6 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                            <div class="doble-img">
                          <h5>Property Images 7 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                            <div class="doble-img">
                          <h5>Property Images 8 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                            <div class="doble-img">
                          <h5>Property Images 9 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                            <div class="doble-img">
                          <h5>Property Images 10 :</h5>
                           <div class="describ-img">
                               <div class="dis-left"><img src="images/feature-2.jpg"></div>
                               <div class="des-right"><h4>This is the back yard of the Property where we have the store for keeping item</h4></div>
                           </div>
                           </div>
                           
                       </div>
                          </div>

                    </div>
                    </div>
                       
 </div>
<!--<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
-->
<input type="button" name="previous" class="previous action-button" value="edit details" />
<input type="button" name="previous" class="previous action-button" value="edit images" />
<input type="submit" name="" class="submit action-button" value="post to timeline" />
<input type="submit" name="" class="submit action-button" value="Advertise" />
<input type="hidden" value="{{ Session::token() }}" name="_token">








</fieldset>
</form>
               </div>                
            </div>   
    	</div>
    </div>

</div>
</div>
	@include('includes.footer')

@endsection