<?php
  include 'security.php';
  include("includes/header.php");
  include("includes/navber.php");
?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
            include("includes/topber.php");
        ?>
        <!-- End of Topbar -->



<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Student List</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Approved Student list</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
 
                  if($con === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                  }
                  else{
                    $sql = "SELECT * FROM student_info";
                  }
                ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name           </th>
                      <th>Mobile</th>
                      <th>Gender</th>
                      <th>Payment Number</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $result = $con->query($sql);

                        if (mysqli_num_rows($result) > 0) {
                        
                            while($row = mysqli_fetch_assoc($result)) {
                              ?>
                            <tr>
                                <td><?php echo $row["fname"]," ",$row["lname"];  ?></td>
                                <td><?php echo $row["phone"];  ?></td>
                                <td><?php echo $row["gender"];  ?></td>
                                <td><?php echo $row["paymentnumber"];  ?></td>
                                <td><?php echo $row["email"];  ?></td>
                                
                                <td class="text-center">
                                    <input type="image" src="https://i.ibb.co/GTDGd2G/view.png" alt="view" border="0" width="30" height="30"   id="<?php echo $row["student_id"]; ?>" class=" view_data" /><br> 
                                    <input type="image" src="https://i.ibb.co/4pQmLfz/edit.png" alt="edit" border="0" width="30" height="30"  id="<?php echo $row["student_id"]; ?>" class=" edit_data" /><br>
                                    <input type="image" src="https://i.ibb.co/s5MCkyz/delete.png" alt="delete" border="0" width="30" height="30"  name="delete"  value="delete" id="<?php echo $row["student_id"]; ?>" class="delete" />
                                </td> 
                            </tr>
                    <?php
                          }
                        }
                        else{
                          echo "No Application Today";
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



 
        </div>
        <!-- /.container-fluid -->
        


 
 
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  
  

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../login">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>





 
       <!-- Applicants Details -->
<div id="dataModal" class="modal fade" >  
      <div class="modal-dialog modal-lg">  
           <div class="modal-content">  
                <div class="modal-header">  
                <h4 class="modal-title">Applicant's Details</h4>  
              <button type="button" class="close" data-dismiss="modal">&times;</button>  
                 </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="admission_req.php">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!-- /Applicants Details -->
 

 
 
 
 
 <!-- PHP Ajax Update MySQL Data Through Bootstrap Modal -->
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                       <h4 class="modal-title">Edit Applicants data</h4>  
                       <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>First Name</label>  
                          <input type="text" name="fname" id="fname" class="form-control" />  

                          <label>Last Name</label>  
                          <input type="text" name="lname" id="lname" class="form-control" />  
                          
                          <label>Father Name</label>  
                          <input name="father_name" id="father_name" class="form-control"></textarea>  
                          
                          <label>Mother Name</label>  
                          <input name="mather_name" id="mather_name" class="form-control"></textarea>  

                          <label>Date of Birth</label>  
                          <input type="Date" name="dob" id="dob" class="form-control" />  

                          <label>Phone Number</label>  
                          <input type="text" name="phone" id="phone" class="form-control" />  
                          
                          <label>Email</label>  
                          <input type="text" name="email" id="email" class="form-control" />  

                          <input type="hidden" name="student_id" id="student_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
  <!-- / PHP Ajax Update MySQL Data Through Bootstrap Modal -->

<script>  
 $(document).ready(function() {
    $('#add').click(function() {
        $('#insert').val("Insert");
        $('#insert_form')[0].reset();
    });
    $(document).on('click', '.edit_data', function() {
        var id = $(this).attr("id");
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
                id: id
            },
            dataType: "json",
            success: function(data) {
                $('#fname').val(data.fname);
                $('#lname').val(data.lname);
                $('#father_name').val(data.father_name);
                $('#mather_name').val(data.mather_name);
                $('#dob').val(data.dob);
                $('#gender').val(data.gender);
                $('#religion').val(data.religion);
                $('#blood_group').val(data.blood_group);
                $('#student_id').val(data.student_id);
                $('#phone').val(data.phone);
                $('#email').val(data.email);
                $('#insert').val("Update");
                $('#add_data_Modal').modal('show');
            }
        });
    });
    $('#insert_form').on("submit", function(event) {
        event.preventDefault();
        if ($('#fname').val() == "") {
            alert("First Name Required");
        } else if ($('#lname').val() == '') {
            alert("Last Name Required");
        }
        else if ($('#father_name').val() == '') {
            alert("Father Name Required");
        }
        else if ($('#mather_name').val() == '') {
            alert("Mather Name Required");
        }
        else if ($('#dob').val() == '') {
            alert("Date of Birth Required");
        }
        else if ($('#phone').val() == '') {
            alert("Phone Number Required");
        }
         else if ($('#email').val() == '') {
            alert("Email Required");
        }  else {
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: $('#insert_form').serialize(),
                beforeSend: function() {
                    $('#insert').val("Inserting");
                },
                success: function(data) {
                    $('#insert_form')[0].reset();
                    $('#add_data_Modal').modal('hide');
                    $('#employee_table').html(data);
                }
            });
        }
    });

    $(document).on('click', '.view_data', function() {
        var id = $(this).attr("id");
        if (id != '') {
            $.ajax({
                url: "show_student_list.php",
                method: "POST",
                data: {
                    id: id
                },
                
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal('show');
                    $(this).remove();
                }
            });
        }
    });
    
    $(document).on('click', '.approve', function() {
        var id = $(this).attr("id");
        if (id != '') {
            $(this).closest('tr').remove();
            $.ajax({
                url: "approve.php",
                method: "POST",
                data: {
                    id: id
                },
                
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal('show');
                }
            });
        }
    });
    
     // Delete 
 $('.delete').click(function(){
   var el = this;
  
   // Delete id
   var deleteid = $(this).attr("id");
 
   var confirmalert = confirm("Are you sure?");
   if (confirmalert == true) {
      // AJAX Request
      $.ajax({
        url: 'delete_form_student_list.php',
        type: 'POST',
        data: { id:deleteid },
        success: function(response){

          if(response == 1){
	    // Remove row from HTML Table
	    $(el).closest('tr').css('background','tomato');
	    $(el).closest('tr').fadeOut(800,function(){
	       $(this).remove();
	    });
          }else{
	    alert('Invalid ID.');
          }

        }
      });
   }

 });
    

});
 </script> 
 
 
 
</body>

</html>
