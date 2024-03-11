<?php require_once 'common/header.php'; ?>

    <!--End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo HOME; ?>images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Print Your <span> Reslts</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="<?php echo HOME; ?>home">Home</a></li>
					<li>Results</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	<?php if ($printresultprimaryones != false): ?>
    <?php 
      $id = $printresultprimaryone['id']; 
      $date = date('d-m-Y');  ?>
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="inner-container">
        <span><img style="width: 200px; height: 50px; float: left; " src="images/sch14.jpg"></a></span>

        
        <h2 style="text-align: center; ;">BRIXTONN SCHOOLS</h2>
        <h5 style="text-align: center; ; color: red;">Unit 13, F Line Ewet Housing, Uyo, Nigeria</h5>
      <li class="breadcrumb-item active"><h2 style="color: red;">YOUR O'LEVEL EXAM NUMBER(S) <?php echo $_SESSION['exam_number']; ?></h2></li>
				<div class="row clearfix">
					
				<div class="services-block-fifteen col-lg-12 col-md-12 col-sm-12">
		
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>Name: <?php echo $printresultprimaryone['name'];  ?></td>
                    <td>Class: Primary <?php echo $printresultprimaryone['primary_1'];  ?></td>
                    <td>Term: <?php echo $printresultprimaryone['first_term'];  ?></td>
                    <td>No. In Class: <?php echo $printresultprimaryone['numberinclass'];  ?></td>
                    <td>Position: <?php echo $printresultprimaryone['position'];  ?></td>
                    <td>Next Term Begins: <?php echo $printresultprimaryone['nextterm'];  ?></td>
                  </tr>
                  <tr>
                    <td><b>Subject</b></td>
                    <td><b>Test Score(30%)</b></td>
                    <td><b>Exam Score(70%)</b></td>
                    <td><b>Subject Total Score(100%)</b></td>
                    <td><b>Average</b></td>
                    <td><b>Total Scores</b></td>
                    <td><b>Grade</b></td>
                    <td><b>Remark</b></td>
                  </tr>
                  <tr>
                    <td>English Language</td>
                    <td><?php echo $printresultprimaryone['eng_test'];  ?></td>
                    <td><?php echo $printresultprimaryone['eng_exam'];  ?></td>
                    <td><?php echo $printresultprimaryone['eng_total'];  ?></td>
                    <td>4.6</td>
                    <td><?php echo $printresultprimaryone['totalsore'];  ?></td>
                    <td><?php echo $printresultprimaryone['eng_grade'];  ?></td>
                    <td><?php echo $printresultprimaryone['remark'];  ?></td>
                  </tr>
                  <tr>
                    <td>English Language</td>
                    <td>24</td>
                    <td>67</td>
                    <td>89</td>
                    <td>4.6</td>
                    <td>none</td>
                    <td>A</td>
                    <td>Pass</td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="services-block-fifteen col-lg-4 col-md-12 col-sm-12">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
             <thead>
              <tr>
                <td><b>Grade</b></td>
                <td><b>Remark</b></td>
              </tr>
             </thead>
             <tbody>
               <tr>
                  <td>ghgh</td>
                  <td>ghgh</td>
               </tr>
               <tr>
                  <td>ghgh</td>
                  <td>ghgh</td>
               </tr>
             </tbody>
           </table>
          </div>
          </div>
           <div class="services-block-fifteen col-lg-4 col-md-12 col-sm-12">
              <div class="table-hover">
                <table class="table table-bordered table-hover">
             <thead>
              <tr>
                <td><b>Grade</b></td>
                <td><b>Remark</b></td>
              </tr>
             </thead>
             <tbody>
               <tr>
                  <td>ghgh</td>
                  <td>ghgh</td>
               </tr>
               <tr>
                  <td>ghgh</td>
                  <td>ghgh</td>
               </tr>
             </tbody>
           </table>
              </div>
          </div>
          <div class="services-block-fifteen col-lg-4 col-md-12 col-sm-12">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
             <thead>
              <tr>
                <td><b>Grade</b></td>
                <td><b>Remark</b></td>
              </tr>
             </thead>
             <tbody>
               <tr>
                  <td>ghgh</td>
                  <td>ghgh</td>
               </tr>
               <tr>
                  <td>ghgh</td>
                  <td>√</td>
               </tr>
             </tbody>
           </table>
            </div>
          </div>
      </div>

				</div>
			</div>
		</div>
	</div>
</section>
	<?php endif; ?>
  <!-- End Team Page Section -->
	
	
	
	<!--Main Footer-->
<?php require_once 'common/footer.php'; ?>