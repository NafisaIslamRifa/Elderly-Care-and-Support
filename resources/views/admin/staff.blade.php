


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">




	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="admin_style.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="main.css">
    

	<title>AdminHub</title>
</head>
<body>

	<header id="header" class="header sticky-top">

		

		
        <div class="d-flex justify-content-center">

        
        

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('admin.dashboard') }}" >Dashboard<br></a></li>
            <li><a href="{{ route('admin.members') }}">Members</a></li>
            
            <li><a href="{{ route('admin.Staff') }}"class="active">Staffs</a></li>
            
            
            <li><a href="{{ route('admin.event') }}">Events</a></li>
            <li><a href="{{ route('admin.message') }}">Messages</a></li>
            <li><a href="{{ route('admin.budget') }}">Budget</a></li>

            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, nasif </a>
                       
                        <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">                          
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
          
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
        


  </header>


	


	
	
      <main id="content">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

	<!-- CONTENT -->
	<section >
		

		<!-- MAIN -->
		
			<div class="head-title">
				<div class="center">
					<h1>Add New Staff</h1>
					
				</div>
				
			</div>

</section >

            <section class="add-products">
                <form action="{{ route('admin.AddStaff') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="box" placeholder="Enter Name" required>
                    
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" min="0" class="box" placeholder="Enter Age" required>
                    
                    <div class="radio-group">
                        <label>Gender: </label>
                        <label for="male"><input type="radio" id="male" name="gender" class="box" value="male"> Male</label>
                        <label for="female"><input type="radio" id="female" name="gender" class="box" value="female"> Female</label>
                    </div>
                    
                    <label for="contact_number">Contact Number</label>
                    <input type="tel" id="contact_number" name="contact_number" class="box" placeholder="Contact Number" required>
                    
                    <label for="salary">Salary</label>
                    <input type="number" id="salary" name="salary" min="0" class="box" placeholder="Enter Salary" required>
                    
                    <input type="submit" value="Add Staff" name="add_staff" class="btn">
                </form>
                
</section>



<section class="users">

   <h1 style="margin:0 0 4rem 35rem; ">Staff Section</h1>

   <div class="box-container">
    @foreach ($staffs as $staff)
   
      <div class="box">
         <p> Staff id : <span>{{ $staff->id}}</span> </p>
         <p>Username: <span>{{ $staff->name}}</span></p>
         <p> Salary : <span>{{ $staff->salary}}</span> </p>
        
         <a href="{{ route('admin.editStaff',$staff->id) }}"  class="option-btn">Update</a>

        
         <form action="{{ route('admin.deleteStaff',$staff->id) }}" method="POST" onsubmit="return confirm('Delete this user?');" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Delete</button>
        </form>
      </div>
      @endforeach
      </div>
     
</section>


 
   
   


		
	
				
		</main>
		<!-- MAIN -->
	
	<!-- CONTENT -->


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	

	<script src="script.js"></script>
</body>
</html>

