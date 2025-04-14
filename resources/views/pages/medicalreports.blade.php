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
	<!--Page Title-->
    {{-- <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Nursery <span>Form</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section> --}}
    
	<!-- Contact Page Section -->
	<section class="contact-page-section" style="margin-bottom: 30px;">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title centered">
				<h2>BRIXTOON SCHOOLS </h2>
				<h5 style="color: #000">Medical Information</h5>
			</div>
					
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="{{ url('addmedicalsdadmmin/'.$addthid_admission->ref_no1) }}" enctype="multipart/form-data">
							@csrf
                            @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
          
                            @if (Session::get('fail'))
                            <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                            @endif
                            @method('PUT')
								<div class="form-group">
									<h5>Does your child/word have the SS genotype?</h5>
									<input type="checkbox" id="vehicle1" name="genotype1" value="Yes">
                                    <label for="vehicle1"> Yes</label><br>
                                    <input type="checkbox" id="vehicle2" name="genotype2" value="No">
                                    <label for="vehicle2"> No</label><br>
								</div>
								
								<div class="form-group">
									<h5>Is your child/word Asthmatic?</h5>
									<input type="checkbox" id="vehicle1" name="asthmatic1" value="Yes">
                                    <label for="vehicle1"> Yes</label><br>
                                    <input type="checkbox" id="vehicle2" name="asthmatic2" value="No">
                                    <label for="vehicle2"> No</label><br>
								</div>
						

                                <div class="form-group">
									<h5>Has your your child/word any of the following conditions?</h5>
									<input type="checkbox"  name="symtoms1" value="Nose bleeding">
                                    <label for="vehicle1"> Nose bleeding</label><br>
                                    <input type="checkbox"  name="symtoms2" value="Hear">
                                    <label for="vehicle2"> Hear</label><br>
                                    <input type="checkbox"  name="symtoms3" value="Eye">
                                    <label for="vehicle2"> Eye</label><br>
                                    <input type="checkbox"  name="symtoms4" value="None">
                                    <label for="vehicle2"> None</label><br>
								</div>
                                <div class="form-group">
									<h5>Has your your child/word any medical condition or form of allergy that the school should know about? If yes please state</h5>
									<input type="text" class="form-control" name="medicalcondition1" placeholder="If yes please state">
                                    <label for="vehicle1"> No </label><br>
                                    <input type="checkbox" id="symtoms2" name="medicalcondition2" value="No">
                                   
								</div>

                                <div class="form-group">
									<h5>Has your your child/word been diagnose as having Specific learning difficulty such as Dyslexia, ADHD, or any other?</h5>
									<input type="checkbox" id="symtoms1" name="diagnose1" value="Yes">
                                    <label for="vehicle1"> Yes</label><br>
                                    <input type="checkbox" id="symtoms2" name="diagnose2" value="No">
                                    <label for="vehicle2"> No</label><br>
                                    <input type="checkbox" id="symtoms2" name="diagnose3" value="Other">
                                    <label for="vehicle2">Other</label><br>
                               
								</div>
                                <div class="form-group">
                                    <h5>In an emergency, Do you permit us to take your child to the School Clinic?</h5>
                                    <input type="checkbox" id="symtoms1" name="schoolclinic1" value="Yes">
                                    <label for="vehicle1"> Yes</label><br>
                                    <input type="checkbox" id="symtoms2" name="schoolclinic2" value="No">
                                    <label for="vehicle1"> No</label><br>
                                </div>
                                      
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <h5>Has your Child/Ward been Immunised against the following?</h5>
						<div class="table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Particulars</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Small Pox</td>
                                        <td><input type="checkbox" name="smallpox1" value="Yes"></td>
                                        <td><input type="checkbox" name="smallpox2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Chicken Pox</td>
                                        <td><input type="checkbox" name="chickenpox1" value="Yes"></td>
                                        <td><input type="checkbox" name="chickenpox2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Polio </td>
                                        <td><input type="checkbox" name="polio1" value="Yes"></td>
                                        <td><input type="checkbox" name="polio2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Tetanus </td>
                                        <td><input type="checkbox" name="tetanus1" value="Yes"></td>
                                        <td><input type="checkbox" name="tetanus2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Tuberculosis </td>
                                        <td><input type="checkbox" name="tuber1" value="Yes"></td>
                                        <td><input type="checkbox" name="tuber2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Mumps </td>
                                        <td><input type="checkbox" name="mumps1" value="Yes"></td>
                                        <td><input type="checkbox" name="mumps2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Rebelia </td>
                                        <td><input type="checkbox" name="rebelia1" value="Yes"></td>
                                        <td><input type="checkbox" name="rebelia2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Hepatitis </td>
                                        <td><input type="checkbox" name="hepatitis1" value="Yes"></td>
                                        <td><input type="checkbox" name="hepatitis2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Meningitis </td>
                                        <td><input type="checkbox" name="meningitis1" value="Yes"></td>
                                        <td><input type="checkbox" name="meningitis2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Whoopingcough </td>
                                        <td><input type="checkbox" name="whoopingcough1" value="Yes"></td>
                                        <td><input type="checkbox" name="whoopingcough2" value="No"></td>
                                    </tr>

                                    <tr>
                                        <td>Diphtheria </td>
                                        <td><input type="checkbox" name="diphtheria1" value="Yes"></td>
                                        <td><input type="checkbox" name="diphtheria2" value="No"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
						<div class="form-group">
							<h5>In an Emergency Doctor's Name</h5>
							<input class="form-control" type="text" name="doctorname" value="{{ $addthid_admission->doctorname }}" placeholder="In an Emergency Doctor's Name">
						</div>
						<div class="form-group">
							<h5> Doctor's Address</h5>
							<input class="form-control" type="text" name="doctoraddress" value="{{ $addthid_admission->doctoraddress }}" placeholder=" Doctor's Address">
						</div>

                        <div class="form-group">
							<h5> Doctor's Phone Number</h5>
							<input class="form-control" type="text" name="doctorphone" value="{{ $addthid_admission->doctorphone }}" placeholder=" Doctor's Phone Number">
						</div>
          
							<div class="form-group">
								<h4>Attach Immunization Evidence .jpg, png</h4>
                                <td><img style="width: 50px; height: 50px;" class="profile-user-img img-fluid"
                                    src="{{ URL::asset("/public/../$addthid_admission->immune")}}"
                                    alt="User profile picture"></td>
                    			<input class="form-control" type="file" name="immune">
							</div>

                            <p><b>Note</b> that we have a sick Bay and Nurse on duty but no Drugs will be administered to your child except paiin relievers</p>
							<p>If Your Child Have Fever, diarrhoea or any form of infections, kindly keep him/her at home for speedy recovery and the safety of other students</p>
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
