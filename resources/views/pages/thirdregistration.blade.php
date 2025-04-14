@include('pages.common.header')


    <!--End Main Header -->
	<style type="text/css">
		.brixton{
			display: inline-block;
    		max-width: 100%;
   		 	height: auto;
    		margin-left: 161px;
		}
	</style>
	
    
	<!-- Contact Page Section -->
	<section class="contact-page-section" style="margin-bottom: 30px;">
		<div class="auto-container">
		
					
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
                        {{-- <h3>Details of Child's Parent (Father)</h3> --}}
						<div class="contactform">
							<form method="post" action="{{ url('updateaddthirdondadmmin/'.$addthird_registration->ref_no1) }}" enctype="multipart/form-data">
							@csrf
							@method('PUT')
								<div class="form-group">
									<h5>Last School Attended</h5>
									<input class="form-control" type="text" name="lastschool" value="{{ $addthird_registration->lastschool }}" placeholder="Last School Attended" required="">
								</div>
								
								<div class="form-group">
									<h5>One Close contact near the School</h5>
									<input class="form-control" type="text" name="landmark" value="{{ $addthird_registration->landmark }}" placeholder="One Close contact near the School" required="">
								</div>
                                <div class="form-group">
                                    <h5>Relationship to Child</h5>
                                    <input class="form-control" type="text" name="relationship" value="{{ $addthird_registration->relationship }}" placeholder="Relationship to Child" required="">
                                </div>
                                <div class="form-group">
                                    <h5>Do You have (a) Sibling(s) in Brixtonn Schools? if Yes, State Names & Class of Sibling(s) Below</h5>
        
                                    <input class="form-control" type="text" name="brixtonsiblings" value="{{ $addthird_registration->brixtonsiblings }}" placeholder="State Names & Class of Sibling(s)">
                                </div>
                               
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
                       
                        <div class="form-group">
                            <h5>School Address</h5>
                            <input class="form-control" type="text" name="schooladdress" value="{{ $addthird_registration->schooladdress }}" placeholder="School Address" required="">
                        </div>
                        <div class="form-group">
                            <h5>How did you hear About Us</h5>
                            <input class="form-control" type="text" name="aboutus" value="{{ $addthird_registration->aboutus }}" placeholder="How did you hear About Us" required>
                        </div>
                        <div class="form-group">
                            <h5>Upload Birth Certificate</h5>
							<img style="width: 50px; height: 50px;" src="{{ URL::asset("/public/../$addthird_registration->birthcert")}}" alt="">
                            <input class="form-control" type="file" name="birthcert" value="{{ $addthird_registration->birthcert }}"  required="">
                        </div>

                        
							<div class="form-group">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>                                        
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- End Team Page Section -->
	
	
	
	<!--Main Footer-->
	@include('pages.common.footer')
