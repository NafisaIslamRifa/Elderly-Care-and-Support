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
    <title>AdminHub - Maintenance </title>
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
					<li><a href="{{ route('admin.maintenance') }}"class="active">Maintenance</a></li>
                    <li><a href="{{ route('admin.reviews') }}">Review</a></li>
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
                    <h1>Add Maintenance Cost</h1>
                </div>
            </div>
        </section>

        <section class="add-products">
            <form action="{{ route('admin.maintenance') }}" method="POST" enctype="multipart/form-data">
                @csrf
                

                <label for="date">Date</label>
            <input type="date" name="date" id="date" class="box" required>

                <label for="electricity_cost">Electricity Cost</label>
                <input type="number" name="electricity_cost" id="electricity_cost" class="box" placeholder="Electricity Cost" step="0.01" min="0" required>

                <label for="gas_cost">Gas Cost</label>
                <input type="number" name="gas_cost" id="gas_cost" class="box" placeholder="Gas Cost" step="0.01" min="0" required>

                <label for="daily_cleaning_cost">Daily Cleaning Cost</label>
                <input type="number" name="daily_cleaning_cost" id="daily_cleaning_cost" class="box" placeholder="Daily Cleaning Cost" step="0.01" min="0" required>

                <label for="security_cost">Security Cost</label>
                <input type="number" name="security_cost" id="security_cost" class="box" placeholder="Security Cost" step="0.01" min="0" required>

                <input type="submit" value="Add Maintenance Cost" class="btn">
            </form>
        </section>

        <section class="users">
    <div class="container mt-4">
        <div class="row">
            @foreach($maintenances as $maintenance)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                       
                        <h5 class="card-title">Date: {{ $maintenance->date }}</h5>
                        <p class="card-text">Electricity Cost: {{ number_format($maintenance->electricity_cost, 2) }}Tk.</p>
                        <p class="card-text">Gas Cost: {{ number_format($maintenance->gas_cost, 2) }}Tk.</p>
                        <p class="card-text">Daily Cleaning Cost: {{ number_format($maintenance->daily_cleaning_cost, 2) }}Tk.</p>
                        <p class="card-text">Security Cost: {{ number_format($maintenance->security_cost, 2) }}Tk.</p>
                        <div class="d-flex">
                        <a href="{{ route('admin.editMaintenance', $maintenance->id) }}" class="option-btn me-2">Update</a>
                        <form action="{{ route('admin.deleteMaintenance', $maintenance->id) }}" method="POST" onsubmit="return confirm('Delete this maintenance record?');">
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