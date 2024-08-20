


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
    
    <li><a href="{{ route('admin.Staff') }}">Staffs</a></li>
    
    
    <li><a href="{{ route('admin.event') }}" class="active">Events</a></li>
    <li><a href="{{ route('admin.message') }}">Messages</a></li>
    
    <li><a href="{{ route('admin.food') }}">Food</a></li>
    <li><a href="{{ route('admin.maintenance') }}">Maintenance</a></li>
    <li><a href="{{ route('admin.budget') }}">Budget</a></li>
    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{ Auth::user()->name }} </a>
                       
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
					<h1>Add New Event</h1>
					
				</div>
				
			</div>

</section >

<section class="add-products">

<form action="{{ route('admin.events') }}" method="POST" enctype="multipart/form-data">
   @csrf
   
       <label for="name">Event Name</label>
       <input type="text" name="name" id="name" class="box" placeholder="Event Name" required>
  

   
       <label for="date">Date</label>
       <input type="date" name="date" id="date" class="box" required>
   

   
       <label for="location">Location</label>
       <input type="text" name="location" id="location" class="box" placeholder="Location" required>
   

  
       <label for="description">Event Description</label>
       <textarea name="description" id="description" class="box" placeholder="Event Description"></textarea>
   

  
       <label for="image">Event Image</label>
       <input type="file" name="image" id="image"accept="image/*" class="box">
   

   
       <label for="cost">Cost</label>
       <input type="number" name="cost" id="cost" class="box" placeholder="Cost" step="0.01" min="0" required>
  

   <input type="submit" value="Add Event" class="btn">
</form>

</section>

<section class="users">
   <div class="container mt-4">
       <div class="row">
           @foreach($events as $event)
           <div class="col-md-4 mb-4">
               <div class="card">
                   <img src="{{ asset('images/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}"width="100%" height="225">
                   <div class="card-body">
                       <h5 class="card-title">{{ $event->name }}</h5>
                       <p class="card-text">Date: {{ $event->date }}</p>
                       <p class="card-text">Location: {{ $event->location }}</p>
                       <p class="card-text">Cost: {{ $event->cost }}Tk.</p>
                       <p class="card-text">Description: {{ $event->description }}</p>
                       <!-- <a href="#" class="option-btn">Update</a> -->
                       
                           <!-- <button type="submit" class="delete-btn" onclick="return confirm('Delete this event?');">Delete</button> -->
                           <div class="d-flex ">
                                    <a href="{{ route('admin.editEvent', $event->event_id) }}" class="option-btn me-2">Update</a>
                                    <form action="{{ route('admin.deleteEvent', $event->event_id) }}" method="POST" onsubmit="return confirm('Delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">Delete</button>
                                    </form>
                                </div>
                   </div>
               </div>
           </div>
           @endforeach
       </div>
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

