<!doctype html>
<html lang="en">
  <head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>SAC Healthcare Projects</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="healthcare/css/healthcareproject_css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="healthcare/css/healthcareproject_css/healthcareprojectsstyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

	  <style>


    .edit-button{
		display: inline-block;
        padding: 5px 10px; /* Adjust the padding to set the button size */
        font-size: 15px;
		width: 65px;
        text-decoration: none;
        margin-right: 5px;
	}
    .delete-button {
        display: inline-block;
        padding: 5px 10px; /* Adjust the padding to set the button size */
        font-size: 15px;
        text-decoration: none;
        margin-right: 5px;
    }

    .edit-button:hover,
    .delete-button:hover {
        background-color: #0056b3;
        border: 1px solid #0056b3;
        box-shadow: 0 0 10px #0056b3; /* Adjust the shadow size and color as needed */
        transform: scale(1.1);
    }
</style>




  </head>
  <body>
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
			<span class="icon">
				<i class="fa-solid fa-certificate"></i>
			</span><span>SOCIAL ACTION CENTER</span>
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		  <a href="#" class="dashboard">
			<span class="icon"><i class="fa-solid fa-house"></i></span>Dashboard</a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <span class="icon">
			<i class="fa-solid fa-hand-holding-hand"></i></span>Project Management</a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li><a href="#">Projects</a></li>
			 <li><a href="#">Registration</a></li>
			 <li><a href="#">Documentations and Reports</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <span class="icon">
		  	<i class="fa-solid fa-folder-open"></i></span>File Management</a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="#">Announcements</a></li>
			 <li><a href="#">Events</a></li>
			 <li><a href="#">Inquiries</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <span class="icon">
		 	 <i class="fa-solid fa-gear"></i></span>System Settings</a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="#">Settings</a></li>
			 <li><a href="#">Help</a></li>
		  </ul>
		  </li>
		  
		  
		  <ul class="list-unstyled component m-0">
			<li class="active">
				<a href="#" class="dashboard">
					<span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>Logout</a>
				  </li>
			</li>
		
		</ul>
	 </div>
	 
   <!-------sidebar--design- close----------->
   
   
   
      <!-------page-content start----------->
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					 
					 <div class="col-md-5 col-lg-3 order-3 order-md-2">
					     <div class="xp-searchbar">
						     <form>
							    <div class="input-group">
								  <input type="search" class="form-control"
								  placeholder="Search">
								  <div class="input-group-append">
								     <button class="btn" type="submit" id="button-addon2">Go
									 </button>
								  </div>
								</div>
							 </form>
						 </div>
					 </div>
					 
					 
					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							   <li class="dropdown nav-item active">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <span class="material-icons">notifications</span>
								  <span class="notification">4</span>
								 </a>
								  <ul class="dropdown-menu">
								     <li><a href="#">4  New Inquiries</a></li>
									 <li><a href="#">1  Registration Update</a></li>
								  </ul>
							   </li>
							   
							   <li class="nav-item">
							     <a class="nav-link" href="#">
								   <span class="material-icons">question_answer</span>
								 </a>
							   </li>
							   
							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <img src="images/members/kevs.jpg" style="width:40px; border-radius:50%;"/>
								  <span class="xp-user-live"></span>
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li><a href="#">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li><a href="#">
									 <span class="material-icons">settings</span>
									 Settings
									 </a></li>
									 <li><a href="#">
									 <span class="material-icons">logout</span>
									 Logout
									 </a></li>
									 
								  </ul>
							   </li>
							   
							   
							   </ul>
							</nav>
						 </div>
					 </div>
					 
				 </div>
				 
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">SAC Healthcare Program</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Projects</a></li>
					</ol>
				 </div>
				 
				 
			 </div>
		  </div>
		  <!------top-navbar-end-----------> 
		  
		  
		   <!------main-content-start-----------> 
		     
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">SAC Healthcare Projects</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
								<i class="fa-solid fa-circle-plus"></i>
							   <span>Add New Project</span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
								<i class="fa-solid fa-circle-minus"></i>
							   <span>Delete</span>
							   </a>
							 </div>
					     </div>
					   </div>
					   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "m&e";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$sql = "SELECT * FROM proj_tb";
$result = $conn->query($sql);
?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>All <input type="checkbox" id="select-all"></th>
            <th>Project ID</th>
            <th>Project Title</th>
            <th>Project Location</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Funding Partner/Donor</th>
            <th>Project Budget</th>
            <th>Project Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><input type='checkbox' class='select-checkbox'></td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['project_title'] . "</td>";
                echo "<td>" . $row['proj_loc'] . "</td>";
                echo "<td>" . $row['start_date'] . "</td>";
                echo "<td>" . $row['end_date'] . "</td>";
                echo "<td>" . $row['funding_partner'] . "</td>";
                echo "<td>" . $row['proj_budget'] . "</td>";
                echo "<td>" . $row['proj_status'] . "</td>";
                echo '<td>
                    <a href="#" class="edit-button" data-toggle="modal" data-target="#editModal" data-project-id="' . $row['id'] . '" data-project-title="' . $row['project_title'] . '" data-project-location="' . $row['proj_loc'] . '" data-start-date="' . $row['start_date'] . '" data-end-date="' . $row['end_date'] . '" data-funding-partner="' . $row['funding_partner'] . '" data-project-budget="' . $row['proj_budget'] . '" data-project-status="' . $row['proj_status'] . '">
                        Edit
                    </a>
                    <a href="#" class="archive-button" data-project-id="' . $row['id'] . '">Archive</a>
                    <form style="display: none;" class="archive-form" method="post" action="archive.php">
                        <input type="hidden" name="project_id" value="' . $row['id'] . '">
                    </form>
                </td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No projects found</td></tr>";
        }
        ?>
    </tbody>
</table>
<script>
$(document).ready(function () {
    $(".archive-button").on("click", function (e) {
        e.preventDefault();
        $(this).closest("td").find(".archive-form").submit();
    });
});
</script>

<script>
    // JavaScript to handle the "Select All" checkbox
    document.getElementById("select-all").addEventListener("change", function () {
        const checkboxes = document.querySelectorAll(".select-checkbox");
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = event.target.checked;
        });
    });
</script>

<div class="modal" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title">Update Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
	  <form method="POST" action="update_project.php">
	  <input type="hidden" name="projectIdToUpdate" id="projectIdToUpdate">
      <div class="form-group">
        <label>Project Title</label>
        <input type="text" class="form-control" name="projectTitle" required>
      </div>
      <div class="form-group">
        <label>Project Location</label>
        <input type="text" class="form-control" name="projectLocation" required>
      </div>
      <div class="form-group">
        <label>Start Date</label>
        <input type="date" class="form-control" name="startDate" required>
      </div>
      <div class="form-group">
        <label>End Date</label>
        <input type="date" class="form-control" name="endDate" required>
      </div>
      <div class="form-group">
        <label>Funding Partner/Donor</label>
        <input type="text" class="form-control" name="fundingPartner" required>
      </div>
      <div class="form-group">
        <label>Project Budget</label>
        <input type="number" class="form-control" name="projectBudget" required>
      </div>
      <div class="form-group">
        <label>Project Status</label>
        <select class="form-control" name="projectStatus" required>
          <option value="notstarted">Not started</option>
		  <option value="pending">Pending</option>
          <option value="ongoing">Ongoing</option>
          <option value="finished">Finished</option>
        </select>
</br>
<div class="container">
  <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
</div>
</form>
      </div>
        </div>
    </div>
</div>
					   
					   <div class="clearfix">
					 
					   


					   
					   </div>
					</div>
					
					<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
					<script>
$(document).ready(function() {
    $('.edit-button').click(function() {
        // Get data from the clicked button
		var projectIdToUpdate = $(this).data('project-id');
        var projectTitle = $(this).data('project-title');
        var projectLocation = $(this).data('project-location');
        var startDate = $(this).data('start-date');
        var endDate = $(this).data('end-date');
        var fundingPartner = $(this).data('funding-partner');
        var projectBudget = $(this).data('project-budget');
        var projectStatus = $(this).data('project-status');

        // Populate the modal form fields
		$('#editModal input[name="projectIdToUpdate"]').val(projectIdToUpdate);
        $('#editModal input[name="projectTitle"]').val(projectTitle);
        $('#editModal input[name="projectLocation"]').val(projectLocation);
        $('#editModal input[name="startDate"]').val(startDate);
        $('#editModal input[name="endDate"]').val(endDate);
        $('#editModal input[name="fundingPartner"]').val(fundingPartner);
        $('#editModal input[name="projectBudget"]').val(projectBudget);
        $('#editModal select[name="projectStatus"]').val(projectStatus);

        // Show the modal
        $('#editModal').modal('show');
    });
});
</script>


					
									   <!----add-modal start--------->
		<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
			
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ADD PROJECT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
    <form method="POST" action="insert_project.php">
      <div class="form-group">
        <label>Project Title</label>
        <input type="text" class="form-control" name="projectTitle" required>
      </div>
      <div class="form-group">
        <label>Project Location</label>
        <input type="text" class="form-control" name="projectLocation" required>
      </div>
      <div class="form-group">
        <label>Start Date</label>
        <input type="date" class="form-control" name="startDate" required>
      </div>
      <div class="form-group">
        <label>End Date</label>
        <input type="date" class="form-control" name="endDate" required>
      </div>
      <div class="form-group">
        <label>Funding Partner/Donor</label>
        <input type="text" class="form-control" name="fundingPartner" required>
      </div>
      <div class="form-group">
        <label>Project Budget</label>
        <input type="number" class="form-control" name="projectBudget" required>
      </div>
      <div class="form-group">
        <label>Project Status</label>
        <select class="form-control" name="projectStatus" required>
          <option value="notstarted">Not started</option>
		  <option value="pending">Pending</option>
          <option value="ongoing">Ongoing</option>
          <option value="finished">Finished</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Add Project</button>
      </div>
    </form>
  </div>
</div>
					   <!----edit-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start--------->
		<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">EDIT PROJECT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Project Title*</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Project Location*</label>
			<input type="emil" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Start Date*</label>
			<textarea class="form-control" required></textarea>
		</div>
		<div class="form-group">
		    <label>End Date</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Funding Partner/Donor</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Project Budget</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Project Status</label>
			<input type="text" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save Changes</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->	   
					   
					   
					 <!----delete-modal start--------->
		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">DELETE PROJECT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this record?</p>
		<p class="text-warning"><small>This action cannot be undone.</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->   
					   
					
					
				 
			     </div>
			  </div>
		  
		    <!------main-content-end-----------> 
		  
		 
		 
		 <!----footer-design------------->
		
		 
		 
		 
		 
	  </div>
   
</div>



<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="healthcare/js/jquery-3.3.1.slim.min.js"></script>
   <script src="healthcare/js/popper.min.js"></script>
   <script src="healthcare/js/bootstrap.min.js"></script>
   <script src="healthcare/js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  
  <footer class="footer">
        <div class="container-fluid">
            <div class="footer-in">
                <p class="mb-0">&copy 2024 Social Action Center Caritas - Diocese of Legazpi. All Rights Reserved.</p>
            </div>
        </div>
    </footer>



  </body>
   
 
  </html>


