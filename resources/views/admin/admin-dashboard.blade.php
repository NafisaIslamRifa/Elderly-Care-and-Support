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
	<style>
		.table-data {
			padding: 20px;
			background-color: #f9f9f9;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.order {
			border-collapse: collapse;
			width: 100%;
		}

		.head {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 15px;
		}

		.head h3 {
			font-size: 24px;
			color: #333;
			font-weight: bold;
		}

		.head i {
			font-size: 20px;
			color: #1977cc;
			cursor: pointer;
			margin-left: 10px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		thead th {
			background-color: #1977cc;
			color: white;
			font-size: 16px;
			font-weight: bold;
			padding: 10px;
			text-align: left;
		}

		tbody td {
			padding: 10px;
			border-bottom: 1px solid #ddd;
		}

		tbody tr:hover {
			background-color: #f1f1f1;
		}

		tbody p {
			color: #1977cc;
			font-weight: bold;
		}

		tbody .status {
			padding: 5px 10px;
			border-radius: 5px;
			color: black;
			font-weight: bold;
		}

		tbody .status.completed {
			background-color: #4CAF50;
		}

		tbody .status.pending {
			background-color: #FFC107;
		}

		tbody .status.process {
			background-color: #2196F3;
		}
	</style>
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







	<!-- SIDEBAR -->



	<!-- CONTENT -->


	<main id="content">
		<section>
			<div class="head-title">
				<div class="center">
					<h1>Dashboard</h1>

				</div>

			</div>
		</section>

		<ul class="box-info">
			<li>
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#1977cc" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
				</svg>
				<span class="text">
					<!-- <h3>1020</h3> -->
					<h3>{{$membersCount}}</h3>
					<p>Total Members</p>
				</span>
			</li>
			<li>
				<!-- <i class='bx bxs-calendar-check' ></i> -->


				<!-- <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#1977cc" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
				</svg> -->
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"fill="#1977cc"  class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
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
					<path d="M8 3.293l-6 6V15a1 1 0 0 0 1 1h4v-4h2v4h4a1 1 0 0 0 1-1V9.293l-6-6z" />
					<path d="M1 7.5L8 1l7 6.5V14a2 2 0 0 1-2 2h-3v-5H5v5H2a2 2 0 0 1-2-2V7.5z" />
				</svg>


				<span class="text">
					<h3>{{50-$membersCount}}</h3>
					<p>Available seat</p>
				</span>
			</li>
			<li>
				<!-- <i class='bx bxs-calendar-check' ></i> -->
				<i class='bx bxs-dollar-circle' style='color: #ff0000;'></i>



				<span class="text">
					<!-- <h3>1020</h3> -->
					<h3>{{ $donationsCount }}</h3>
					<p>Donation</p>
				</span>
			</li>
			
			<li>
				<!-- <i class='bx bxs-dollar-circle' ></i> -->
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#1977cc" class="bi bi-calendar-check" viewBox="0 0 16 16">
					<path d="M12 0a.5.5 0 0 1 .5.5V1h2V.5A.5.5 0 0 1 15 0h1a.5.5 0 0 1 .5.5V1h.5a.5.5 0 0 1 .5.5V15a.5.5 0 0 1-.5.5H1a.5.5 0 0 1-.5-.5V2a.5.5 0 0 1 .5-.5H1V.5A.5.5 0 0 1 1.5 0h1a.5.5 0 0 1 .5.5V1h2V.5A.5.5 0 0 1 5 0h2a.5.5 0 0 1 .5.5V1h4V.5A.5.5 0 0 1 12 0zM2 2v13h12V2H2zm6.854 8.646a.5.5 0 0 1-.708-.708L10 8.793l1.146-1.146a.5.5 0 0 1 .708.708L10 9.707l-2.146 2.146z" />
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
					<path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4l-3 3a1 1 0 0 1-1.5-1V2a1 1 0 0 1 1-1zm1 1v11.586L3.414 13H12V2H3z" />
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
					<h3>All Donors</h3>

				</div>
				<table>
					<thead>
						<tr>
							<th>User</th>
							<th>Amount</th>
							<th>Status</th>
							<th>Update</th>
						</tr>
					</thead>
					<tbody>
						@foreach($topDonations as $donation)
						<tr>
							<td>
								<p>{{ $donation->name }}</p>
							</td>
							<td>{{ number_format($donation->amount, 2) }}</td>
							<td>{{ ($donation->status) }}</td>


							<td>
									
									
									<form action="{{ route('admin.paymentaccept', $donation->id	) }}" method="post" enctype="multipart/form-data"> 
										@csrf
										<button type="submit" class="btn btn-success btn-sm">Accept</button>
									</form>
									
									
								 </td>
                       
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>


	</main>
	<!-- MAIN -->

	<!-- CONTENT -->


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


	<script src="script.js"></script>
</body>

</html>