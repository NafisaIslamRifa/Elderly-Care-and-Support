


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
			<li><a href="{{ route('admin.dashboard') }}" >Dashboard<br></a></li>
			<li><a href="{{ route('admin.members') }}">Members</a></li>
			
			<li><a href="{{ route('admin.Staff') }}">Staffs</a></li>
			
			
			<li><a href="{{ route('admin.event') }}">Events</a></li>
			<li><a href="{{ route('admin.message') }}">Messages</a></li>
			<li><a href="{{ route('admin.budget') }}" class="active">Budget</a></li>

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
	


	


	
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	
		
		<main id="content">
		<section >
			<div class="head-title">
				<div class="center">
					<h1>Budget And Cost</h1>
					
				</div>
				
			</div>
			</section>

			<ul class="box-info">
				<li>
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
					  </svg>
					<span class="text">
						<h3>1020</h3>
						<p>Medication</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Salary</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Doctor Fees</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Total Donation</p>
					</span>
				</li>
				<li>
					
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Utility Cost</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Events Cost</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Maintenance Cost</p>
					</span>
				</li>
                <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Food Cost</p>
					</span>
				</li>
				
			</ul>


			<div class="d-flex m-2  ">
    <div class="container m-6" style="width:20rem;">
        <canvas id="myPieChart"></canvas>
    </div>

    <div class="containers" style="width:40rem;">
        <canvas id="myBarChart"></canvas>
    </div>
</div>

<script>
    const pieData = {
        labels: [
            'Red',
            'Blue',
            'Yellow'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const pieConfig = {
        type: 'pie',
        data: pieData,
    };

    const barData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        }]
    };

    const barConfig = {
        type: 'bar',
        data: barData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    window.onload = function() {
        var pieCtx = document.getElementById('myPieChart').getContext('2d');
        new Chart(pieCtx, pieConfig);

        var barCtx = document.getElementById('myBarChart').getContext('2d');
        new Chart(barCtx, barConfig);
    };
</script>

   
				
				
		</main>
		<!-- MAIN -->
	
	<!-- CONTENT -->


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


	<script src="script.js"></script>
</body>
</html>

