


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
			
			<li><a href="{{ route('admin.food') }}">Food</a></li>
			<li><a href="{{ route('admin.maintenance') }}">Maintenance</a></li>
			<li><a href="{{ route('admin.budget') }}" class="active">Budget</a></li>
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
					<h1>Budget And Cost</h1>
					
				</div>
				
			</div>
			</section>

			<ul class="box-info">
				<li>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M312 24l0 10.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3s0 0 0 0c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8l0 10.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-11.4c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2L264 24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5L192 512 32 512c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l36.8 0 44.9-36c22.7-18.2 50.9-28 80-28l78.3 0 16 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0-16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l120.6 0 119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384c0 0 0 0 0 0l-.9 0c.3 0 .6 0 .9 0z"/></svg>
					<span class="text">
						<h3>{{ $donationsAmount }}</h3>
						<p>Total Donation</p>
					</span>
				</li>
			
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>{{  $staffsSalary }}</h3>
						<p>Staff Salary</p>
					</span>
				</li>
				
				
				
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>{{ $eventsCost }}</h3>
						<p>Events Cost</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>{{$MaintenanceCost}}</h3>
						<p>Maintenance Cost</p>
					</span>
				</li>
                <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>{{ $FoodCost }}</h3>
						<p>Food Cost</p>
					</span>
				</li>
                <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>{{ $donationsAmount-( $staffsSalary+$eventsCost+$MaintenanceCost+$FoodCost) }}</h3>
						<p>Remaining Donation</p>
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

@php
    $monthMapping = [
        'January' => 'Jan',
        'February' => 'Feb',
        'March' => 'Mar',
        'April' => 'Apr',
        'May' => 'May',
        'June' => 'Jun',
        'July' => 'Jul',
        'August' => 'Aug',
        'September' => 'Sep',
        'October' => 'Oct',
        'November' => 'Nov',
        'December' => 'Dec'
    ];

    $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'];
    $donationsAmount = [];

    foreach ($months as $month) {
        $fullMonthName = array_search($month, $monthMapping);
        $donationsAmount[] = $donationsByMonth[$fullMonthName] ?? 0; // Use 0 if there's no data for the month
    }
@endphp




<script>
    const pieData = {
        labels: [
            'Staff Salary',
            'Maintenance Cost',
            'Food Cost',
			'Event Cost'
        ],
        datasets: [{
            label: 'This Month',
            data: [{{$staffsSalary }}, {{$MaintenanceCost }}, {{  $FoodCost }},{{ $eventsCost }}],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
				'rgb(255, 100, 25)'
            ],
            hoverOffset: 4
        }]
    };

    const pieConfig = {
        type: 'pie',
        data: pieData,
    };

	

	const donationsAmount = <?php echo json_encode($donationsAmount); ?>;

const barData = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'],
    datasets: [{
        label: 'Monthly Donations',
        data: donationsAmount,
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

