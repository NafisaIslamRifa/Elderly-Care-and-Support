


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
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="main.css">

	<title>AdminHub</title>
</head>
<body>

	<header id="header" class="header sticky-top">

		

		
		    <div class="d-flex justify-content-center">

			
			
	
			<nav id="navmenu" class="navmenu">
			  <ul>
				<li><a href="{{ route('admin.dashboard') }}" class="active">Dashboard<br></a></li>
				<li><a href="{{ route('admin.members') }}">Members</a></li>
				
				<li><a href="{{ route('admin.Staff') }}">Staffs</a></li>
				
				
				<li><a href="{{ route('admin.event') }}">Events</a></li>
				<li><a href="{{ route('admin.message') }}">Messages</a></li>
				<li><a href="{{ route('admin.budget') }}">Budget</a></li>

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
	


	


	
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	
		
		<main id="content">
		<section >
			<div class="head-title">
				<div class="center">
					<h1>Dashboard</h1>
					
				</div>
				
			</div>
			</section>

			<ul class="box-info">
				<li>
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"fill="#1977cc" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
					  </svg>
					<span class="text">
						<!-- <h3>1020</h3> -->
						<h3>{{ $membersCount }}</h3>
						<p>Total Members</p>
					</span>
				</li>
				<li>
					<!-- <i class='bx bxs-calendar-check' ></i> -->
				

					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#1977cc" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
					  </svg>
					<span class="text">
						<!-- <h3>1020</h3> -->
						<h3>{{ $staffsCount }}</h3>
						<p>Total Staffs</p>
					</span>
				</li>
				<li>
					<!-- <i class='bx bxs-calendar-check' ></i> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#1977cc" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8 3.293l-6 6V15a1 1 0 0 0 1 1h4v-4h2v4h4a1 1 0 0 0 1-1V9.293l-6-6z"/>
  <path d="M1 7.5L8 1l7 6.5V14a2 2 0 0 1-2 2h-3v-5H5v5H2a2 2 0 0 1-2-2V7.5z"/>
</svg>


					<span class="text">
						<h3>50</h3>
						<p>Total Rooms</p>
					</span>
				</li>
				<li>
					<!-- <i class='bx bxs-calendar-check' ></i> -->
					<i class='bx bxs-dollar-circle'style='color: #ff0000;' ></i>
					


					<span class="text">
						<h3>1020</h3>
						<p>Donation</p>
					</span>
				</li>
				<li>
					
					<!-- <i class='bx bxs-group' ></i> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path d="M8 1v14M1 8h14" stroke="#007bff" stroke-width="2" stroke-linecap="round"/>
</svg>







					<span class="text">
						<h3>28</h3>
						<p>Doctors</p>
					</span>
				</li>
				<li>
					<!-- <i class='bx bxs-dollar-circle' ></i> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#1977cc" class="bi bi-calendar-check" viewBox="0 0 16 16">
  <path d="M12 0a.5.5 0 0 1 .5.5V1h2V.5A.5.5 0 0 1 15 0h1a.5.5 0 0 1 .5.5V1h.5a.5.5 0 0 1 .5.5V15a.5.5 0 0 1-.5.5H1a.5.5 0 0 1-.5-.5V2a.5.5 0 0 1 .5-.5H1V.5A.5.5 0 0 1 1.5 0h1a.5.5 0 0 1 .5.5V1h2V.5A.5.5 0 0 1 5 0h2a.5.5 0 0 1 .5.5V1h4V.5A.5.5 0 0 1 12 0zM2 2v13h12V2H2zm6.854 8.646a.5.5 0 0 1-.708-.708L10 8.793l1.146-1.146a.5.5 0 0 1 .708.708L10 9.707l-2.146 2.146z"/>
</svg>



					<span class="text">
						<!-- <h3>2543</h3> -->
						<h3>{{ $eventsCount }}</h3>
						<p>Events</p>
					</span>
				</li>
				<li>
					<!-- <i class='bx bxs-dollar-circle' ></i> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill=" #ff0000" class="bi bi-chat-dots" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4l-3 3a1 1 0 0 1-1.5-1V2a1 1 0 0 1 1-1zm1 1v11.586L3.414 13H12V2H3z"/>
</svg>

					<span class="text">
						<!-- <h3>2543</h3> -->
						<h3>{{ $messagesCount }}</h3>
						<p>Messages</p>
					</span>
				</li>
				
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Top Donors</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Donate Date</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				
				
		</main>
		<!-- MAIN -->
	
	<!-- CONTENT -->


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	

	<script src="script.js"></script>
</body>
</html>