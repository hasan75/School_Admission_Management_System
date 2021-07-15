<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Main css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    
</head>

<body>

    <div class="main">

        <section>
             <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">

                    <div class="card-header d-flex align-items-center">
                      <div class="w3-panel w3-green">
                      <h2 class="w3-animate-fading w3-text-white">K.B. Kindergarten Admission Form</h2>
                      </div>
                    </div>
                    <div class="card-body">
                      <form action="admissionformprocs.php" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-lg-6 w3-panl w3-leftbar w3-border-blue">
                              <div class="form-group has-success">
                                  <label for="fname" class="w3-text-orange w3-large">First Name<span class="w3-badge w3-blue">*</span></label>
                                  <input type="text" name="fname" id="fname" class="form-control is-valid" placeholder="First Name" required="">
                              </div>
                            </div>

                            <div class="col-lg-6 w3-leftbar w3-border-blue">
                              <div class="form-group has-success">       
                                <label class="w3-text-orange w3-large" for="lname">Last Name<span class="w3-badge w3-blue">*</span></label>
                                <input type="text" name="lname" id="lname" class="form-control is-valid" placeholder="Last Name" required="">
                              </div>
                            </div>
                      </div>


                      <div class="row">
                            <div class="col-lg-6 w3-panl w3-leftbar w3-border-blue">
                              <div class="form-group has-success">
                                  <label for="father_name" class="w3-text-orange w3-large">Father Name<span class="w3-badge w3-blue">*</span></label>
                                  <input type="text" name="father_name" id="father_name" class="form-control is-valid" placeholder="Father Name" required="">
                              </div>
                            </div>

                            <div class="col-lg-6 w3-leftbar w3-border-blue">
                              <div class="form-group has-success">       
                                <label class="w3-text-orange w3-large" for="mather_name">Mother Name<span class="w3-badge w3-blue">*</span></label>
                                <input type="text" name="mather_name" id="mather_name" class="form-control is-valid" placeholder="Mother Name" required="">
                              </div>
                            </div>
                      </div>


                      <div class="row">
                          <div class="col-lg-6 w3-leftbar w3-border-green">
                              <div class="form-group has-success">
                                <label class="w3-text-orange w3-large" for="email">Email<span class="w3-badge w3-blue">*</span></label>
                                <input type="email" name="email" id="email" class="form-control is-valid" placeholder="Email" required="">
                              </div>
                          </div>

                          <div class="col-lg-6 w3-leftbar w3-border-green">
                              <div class="form-group has-success">       
                                <label class="w3-text-orange w3-large" for="phone">Phone<span class="w3-badge w3-blue">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control is-valid" placeholder="Phone" required="">
                              </div>
                          </div>
                      </div>


                       <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group has-success">
                              <label class="w3-text-orange w3-large" for="gender">Gender<span class="w3-badge w3-blue">*</span></label>
                              <select name="gender" id="gender" class="form-control mb-6 is-valid" required="">
                                          <option value="">Select</option>
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                              </select>
                            </div>
                          </div>

                        <div class="col-lg-6">
                        <div class="form-group has-success">       
                          <label class="w3-text-orange w3-large" for="dob">Date of Birth<span class="w3-badge w3-blue">*</span></label>
                          <input type="date" name="dob" id="dob" class="form-control is-valid" required="">
                        </div>
                      </div>
                      </div>


                       <div class="row">
                          <div class="col-lg-6 w3-leftbar w3-border-blue">
                        <div class="form-group has-success">
                          <label class="w3-text-orange w3-large" for="blood_group">Blood Group<span class="w3-badge w3-blue">*</span></label>
                          <select name="blood_group" id="blood_group" class="form-control mb-6 is-valid" required="">
                                          <option value="">Select</option>
                                          <option value="A+">A+</option>
                                          <option value="A-">A-</option>
                                          <option value="B+">B+</option>
                                          <option value="B-">B-</option>
                                          <option value="O+">O+</option>
                                          <option value="O-">O-</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB-</option>
                                          <option value="AB+">N/A</option>
                            </select>
                         </div>
                        </div>

                        <div class="col-lg-6 w3-leftbar w3-border-blue">
                        <div class="form-group has-success">       
                          <label class="w3-text-orange w3-large" for="religion">Religion<span class="w3-badge w3-blue">*</span></label>
                          <select name="religion" id="religion" class="form-control mb-6 is-valid" required="">
                              <option value="">Select</option>
                              <option value="Islam">Islam</option>
                              <option value="Hinduis">Hinduis</option>
                              <option value="Christianity">Christianity</option>
                              <option value="Buddhism">Buddhism</option>
                              <option value="Other's">Other's</option>
                            </select>
                        </div>
                      </div>
                      </div>


                      <div class="row">
                          <div class="col-lg-6">
                        <div class="form-group has-success">
                          <label class="w3-text-orange w3-large" for="class">Class<span class="w3-badge w3-blue">*</span></label>
                            <select name="class" id="class" class="form-control mb-6 is-valid" required="">
                              <option value="">Select</option>
                              <option value="Play">Play</option>
                              <option value="Nursery">Nursery</option>
                              <option value="One">One</option>
                              <option value="Two">Two</option>
                              <option value="Three">Three</option>
                              <option value="Four">Four</option>
                              <option value="Five">Five</option>
                            </select>
                         </div>
                        </div>

                        <div class="col-lg-6">
                        <div class="form-group has-success">       
                          <label class="w3-text-orange w3-large" for="shift">Shift<span class="w3-badge w3-blue">*</span></label>
                          <select name="shift" id="shift" class="form-control mb-6 is-valid" required="">
                              <option value="">Select</option>
                              <option value="Morning">Morning</option>
                              <option value="Day">Day</option>
                            </select>
                        </div>
                      </div>

                      </div>



                      <div class="row">
                      <div class="col-lg-6 w3-leftbar w3-border-green">
                              <div class="form-group has-success">
                                <label class="w3-text-orange w3-large" for="username">Create Username<span class="w3-badge w3-blue">*</span></label>
                                <input type="text" name="username" id="username" class="form-control is-valid" placeholder="Create Username" required="">
                              </div>
                          </div>

                        
                          <div class="col-lg-6 w3-leftbar w3-border-green">
                              <div class="form-group has-success">       
                                <label class="w3-text-orange w3-large" for="password">Create Password<span class="w3-badge w3-blue">*</span></label>
                                <input type="text" name="password" id="password" class="form-control is-valid" placeholder="Create Password" required="">
                              </div>
                          </div>
                      </div>


                      <div class="row">
                      <div class="col-lg-6 w3-leftbar w3-border-green">
                              <div class="form-group has-success">
                                <label class="w3-text-orange w3-large" for="paymentnumber">Payment Number<span class="w3-badge w3-blue">*</span></label>
                                <input type="text" name="paymentnumber" id="paymentnumber" class="form-control is-valid" placeholder="Payment Number" required="">
                              </div>
                          </div>

                        <div class="col-lg-6 w3-leftbar w3-border-green">
                        <div class="form-group has-success">       
                          <label class="w3-text-orange w3-large" for="photo">Upload Student Photo (150px X 150px)*</label>
                            <input type="file" name="photo" id="photo" class="form-control is-valid" required="">
                        </div>
                      </div>
                      </div>




                        <div class="form-group">       
                          <button class="btn btn-primary" type="submit" name="submit" id="submit" value="submit">Submit</button>  
                  <button class="btn btn-primary" type="reset" value="reset">Reset</button>          
                        </div>
                      
                      </form>
                    </div>
                  </div>
                </div>
             </div>
           </section>




        </div>

</body>

</html>