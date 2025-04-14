
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
                      <form class="form-horizontal" action="{{ url('student/updatestudentstudent2ndreg/'.Auth::guard('student')->user()->ref_no) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @method('PUT')
                        
                        <table>
                                            
                            <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                            <tr>
                               
                                <th><div class="form-group col-12">
                                    <select class="form-control" name="subject1" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject1 }}">{{ Auth::guard('student')->user()->subject1 }}</option>
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
                                    <select class="form-control" name="grade1" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade1 }}">{{ Auth::guard('student')->user()->grade1 }}</option>
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
                                    <select class="form-control" name="subject2" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject2 }}">{{ Auth::guard('student')->user()->subject2 }}</option>

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
                                    <select class="form-control" name="grade2" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade2 }}">{{ Auth::guard('student')->user()->grade2 }}</option>
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
                                    <select class="form-control" name="subject3" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject3 }}">{{ Auth::guard('student')->user()->subject3 }}</option>

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
                                    <select class="form-control" name="grade3" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade3 }}">{{ Auth::guard('student')->user()->grade3 }}</option>
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
                                    <select class="form-control" name="subject4" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject4 }}">{{ Auth::guard('student')->user()->subject4 }}</option>

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
                                    <select class="form-control" name="grade4" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade4 }}">{{ Auth::guard('student')->user()->grade4 }}</option>
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
                                    <select class="form-control" name="subject5" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject5 }}">{{ Auth::guard('student')->user()->subject5 }}</option>

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
                                    <select class="form-control" name="grade5" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade5 }}">{{ Auth::guard('student')->user()->grade5 }}</option>
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
                                    <select class="form-control" name="subject6" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject6 }}">{{ Auth::guard('student')->user()->subject6 }}</option>

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
                                    <select class="form-control" name="grade6" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade6 }}">{{ Auth::guard('student')->user()->grade6 }}</option>

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
                                    <select class="form-control" name="subject7" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject7 }}">{{ Auth::guard('student')->user()->subject7 }}</option>

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
                                    <select class="form-control" name="grade7" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade7 }}">{{ Auth::guard('student')->user()->grade7 }}</option>

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
                                    <select class="form-control" name="subject8" id="">

                                        <option value="{{ Auth::guard('student')->user()->subject8 }}">{{ Auth::guard('student')->user()->subject8 }}</option>

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
                                    <select class="form-control" name="grade8" id="">
                                        <option value="{{ Auth::guard('student')->user()->grade8 }}">{{ Auth::guard('student')->user()->grade8 }}</option>
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
                                    <select class="form-control" name="subject9" id="">
                                        <option value="{{ Auth::guard('student')->user()->subject9 }}">{{ Auth::guard('student')->user()->subject9 }}</option>

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
                                    <select class="form-control" name="grade9" id="">
                                        
                                        <option value="{{ Auth::guard('student')->user()->grade9 }}">{{ Auth::guard('student')->user()->grade9 }}</option>
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
    
                          <img class="image rounded-circle" src="{{ asset('/public/../'.Auth::guard('student')->user()->olevel)}}" alt="o_level" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
    
                          <div class="form-group row">
                            <label for="inputName2" value="{{ Auth::guard('student')->user()->olevel }}" class="col-sm-2 col-form-label">Olevel</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" name="olevel" id="inputName2" placeholder="profileimage">
                            </div>
                          </div>
                          <div class="form-group col-12">
                              <label for="">Exam Centre</label>
                                                      
                            <select class="form-control" name="quali_obtain" id="">
                               <option value="{{ Auth::guard('student')->user()->quali_obtain }}">{{ Auth::guard('student')->user()->quali_obtain }}</option>
                                 <option value="WAEC">WAEC</option>
                                 <option value="NECO">NECO</option>
                                 <option value="GCE">GCE</option>
                                 <option value="EQUIVALENT">EQUIVALENT</option>
                            </select>
                         </div>
                         <div class="form-group col-12">
                          <label for="">Exam Number</label>
                          <input class="form-control" type="text" value="{{ Auth::guard('student')->user()->examnumber }}" name="examnumber" id="contact-phone" placeholder="Examination Number">
                        </div>
                        <div class="form-group col-12">
                          <label for="">Centre Name</label>
                          <input class="form-control" type="text" value="{{  Auth::guard('student')->user()->centre_name }}" name="centre_name" id="contact-phone" placeholder="Centre Name">
                      </div>
                      <div class="form-group col-12">
                        <label for="">Year Obtain</label>

                        <input class="form-control" type="text" value="{{ Auth::guard('student')->user()->yearobtain }}" name="yearobtain" id="contact-phone" placeholder="Month/Year Obtain">
                      </div>
                      <div class="form-group col-12">
                        <select class="form-control" name="sessionapplied"  id="">
                          <option value="{{ Auth::guard('student')->user()->sessionapplied }}">{{ Auth::guard('student')->user()->sessionapplied }}</option>
                            <option value="null">Select Session</option>
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                            <option value="Evening">Evening</option>
                        </select>
                    </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
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