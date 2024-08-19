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
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="admin_style.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="main.css">
	<title>AdminHub - Food Management</title>
</head>
<body>

<header id="header" class="header sticky-top">

		

		
<div class="d-flex justify-content-center">




<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="{{ route('admin.dashboard') }}" >Dashboard<br></a></li>
    <li><a href="{{ route('admin.members') }}">Members</a></li>
    
    <li><a href="{{ route('admin.Staff') }}">Staffs</a></li>
    
    
    <li><a href="{{ route('admin.event') }}">Events</a></li>
    <li><a href="{{ route('admin.message') }}">Messages</a></li>
    <li><a href="{{ route('admin.budget') }}">Budget</a></li>
    <li><a href="{{ route('admin.food') }}"class="active">Food</a></li>


    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{ Auth::user()->name }}</a>
               
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
			<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		</div>
		@endif

		<section>
			<div class="head-title">
				<div class="center">
					<h1>Add New Food Item</h1>
				</div>
			</div>
		</section>

		<section class="add-products">
			<form action="{{ route('admin.food') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<label for="day">Day</label>
				<select name="day" id="day" class="box" required>
					<option value="Monday">Monday</option>
					<option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
					<option value="Thursday">Thursday</option>
					<option value="Friday">Friday</option>
					<option value="Saturday">Saturday</option>
					<option value="Sunday">Sunday</option>
				</select>

				<label for="breakfast">Breakfast</label>
				<input type="text" name="breakfast" id="breakfast" class="box" placeholder="Breakfast" required>

				<label for="lunch">Lunch</label>
				<input type="text" name="lunch" id="lunch" class="box" placeholder="Lunch" required>

				<label for="dinner">Dinner</label>
				<input type="text" name="dinner" id="dinner" class="box" placeholder="Dinner" required>

				<label for="cost">Cost</label>
				<input type="number" name="cost" id="cost" class="box" placeholder="Cost" step="0.01" min="0" required>

				<label for="image">Image</label>
				<input type="file" name="image" id="image" accept="image/*" class="box">

				<input type="submit" value="Add Food" class="btn">
			</form>
		</section>



        <section class="users">
			<div class="container mt-4">
				<div class="row">
					@foreach($foods as $food)
					<div class="col-md-4 mb-4">
						<div class="card">
							<img src="{{ asset('images/' . $food->image) }}" class="card-img-top" alt="{{ $food->day }}" width="100%" height="225">
							<div class="card-body">
								<h5 class="card-title">{{ $food->day }}</h5>
								<p class="card-text">Breakfast: {{ $food->breakfast }}</p>
								<p class="card-text">Lunch: {{ $food->lunch }}</p>
								<p class="card-text">Dinner: {{ $food->dinner }}</p>
								<p class="card-text">Cost: ${{ $food->cost }}</p>
								<div class="d-flex">
                                <a href="{{ route('admin.editFood', $food->id) }}" class="option-btn me-2">Update</a>
									<form action="{{ route('admin.deleteFood', $food->id) }}" method="POST" onsubmit="return confirm('Delete this food item?');">
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

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>
