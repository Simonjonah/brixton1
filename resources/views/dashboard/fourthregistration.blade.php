
   @include('dashboard.student.header')

   @include('dashboard.student.sidebar')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="m-0 text-dark">Dashboard</h1>
           </div><!-- /.col -->
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Dashboard </li>
             </ol>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
    <section class="content">
      <h2>Dear {{ Auth::guard('student')->user()->fname }} continue your registration</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Bio Data</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                
                    </div>
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal" action="{{ url('student/updatestudentstudent4threg/'.Auth::guard('student')->user()->ref_no) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @method('PUT')
                        
                        <table>
                                            
                            <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject11" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject11 }}">{{ Auth::guard('student')->user()->subject11 }}</option>
                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade11" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade11 }}">{{ Auth::guard('student')->user()->grade11 }}</option>
                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>
                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject12" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject12 }}">{{ Auth::guard('student')->user()->subject12 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade12" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade12 }}">{{ Auth::guard('student')->user()->grade12 }}</option>
                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>

                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject13" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject13 }}">{{ Auth::guard('student')->user()->subject13 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade13" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade13 }}">{{ Auth::guard('student')->user()->grade13 }}</option>
                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>
                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject14" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject14 }}">{{ Auth::guard('student')->user()->subject14 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade14" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade14 }}">{{ Auth::guard('student')->user()->grade14 }}</option>
                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>

                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject15" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject15 }}">{{ Auth::guard('student')->user()->subject15 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade15" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade15 }}">{{ Auth::guard('student')->user()->grade15 }}</option>
                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>
                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject16" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject16 }}">{{ Auth::guard('student')->user()->subject16 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade16" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade16 }}">{{ Auth::guard('student')->user()->grade16 }}</option>

                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>

                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject17" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject17 }}">{{ Auth::guard('student')->user()->subject17 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade17" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade17 }}">{{ Auth::guard('student')->user()->grade17 }}</option>

                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>

                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject18" id="">

                                        <option value="{{ Auth::guard('student')->user()->subject18 }}">{{ Auth::guard('student')->user()->subject18 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade18" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade18 }}">{{ Auth::guard('student')->user()->grade18 }}</option>
                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>

                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject19" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject19 }}">{{ Auth::guard('student')->user()->subject19 }}</option>

                                        <option value="null">Select Subject</option>
                                        <option value="Mathematic">Mathematics</option>
                                        <option value="English Language">English Language</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Computer Studies">Computer Studies</option>
                                        <option value="Library Studies">Library Studies</option>
                                        <option value="Physics">Physics</option>
                                        <option value=" Chemistry">Chemistry</option>
                                        <option value="Technical Drawing">Technical Drawin</option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                        <option value="French">French</option>
                                        <option value="Food and Nutrition">Food and Nutrition</option>
                                        <option value="C. R. Studies">C. R. Studies</option>
                                        <option value="Government">Government</option>
                                        <option value="History">History</option>
                                        <option value="Geography  Music">Geography</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Music">Music</option>
                                        <option value="Agricultural Science">Commerce</option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Commerce ">Commerce </option>
                                        <option value="Agricultural Science">Agricultural Science</option>
                                   </select>
                                </div></th>
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="grade19" id="">
                                        
                                        <option value="{{ Auth::guard('student')->user()->grade19 }}">{{ Auth::guard('student')->user()->grade19 }}</option>
                                        <option value="null">Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="F9">F9</option>
                                   </select>
                                </div></th>
                            </tr>
                        </table>
                        
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Bio Data</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                  
                      </div>
                      <div class="tab-pane" id="settings">
    
                          <img class="image rounded-circle" src="{{ asset('/public/../'.Auth::guard('student')->user()->olevel2)}}" alt="o_level2" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
    
                          <div class="form-group row">
                            <label for="inputName2">Upload O'Level 2nd sitting if any</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" name="olevel2" id="inputName2" placeholder="profileimage">
                            </div>
                          </div>
                          <div class="form-group col-12">
                              <label for="">Exam Centre</label>
                                                      
                            <select class="form-control" name="qualiobtain2" id="">
                               <option value="{{ Auth::guard('student')->user()->qualiobtain2 }}">{{ Auth::guard('student')->user()->qualiobtain2 }}</option>
                                 <option value="WAEC">WAEC</option>
                                 <option value="NECO">NECO</option>
                                 <option value="GCE">GCE</option>
                                 <option value="EQUIVALENT">EQUIVALENT</option>
                            </select>
                         </div>
                         <div class="form-group col-12">
                          <label for="">Exam Number</label>
                          <input class="form-control" type="text" value="{{ Auth::guard('student')->user()->examnumber2 }}" name="examnumber2" id="contact-phone" placeholder="Examination Number">
                        </div>
                        <div class="form-group col-12">
                          <label for="">Centre Name</label>
                          <input class="form-control" type="text" value="{{  Auth::guard('student')->user()->centre_name2 }}" name="centre_name2" id="contact-phone" placeholder="Centre Name">
                      </div>
                      <div class="form-group col-12">
                        <label for="">Year Obtain</label>

                        <input class="form-control" type="text" value="{{ Auth::guard('student')->user()->yearobtain2 }}" name="yearobtain2" id="contact-phone" placeholder="Month/Year Obtain">
                      </div>
                      
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <a href="{{ route('student.home') }}" class="btn btn-success" >Skip</a>
                            </div>
                        </div>
                          
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          
          <!-- /.row -->
        </div><!-- /.container-fluid -->
        
      </section>
 

    
    <!-- /.content -->
  </div>
  @include('dashboard.student.footer')