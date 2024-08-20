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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('admin/admin_style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/main.css') }}">

    <title>AdminHub</title>
</head>
<body>
    <main id="content">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <section>
            <div class="head-title">
                <div class="center">
                    <h1>Update Maintenance</h1>
                </div>
            </div>
        </section>

        <section class="add-products">
            <form action="{{ route('admin.updateMaintenance', $maintenance->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-header">
                    <button type="button" class="btn-close" style="margin-left:90%; margin-top:5px;cursor: pointer;color: #000;" onclick="redirectToMaintenance()"></button>
                </div>

                
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="box" value="{{ $maintenance->date }}" required>

                <label for="electricity_cost">Electricity Cost</label>
                <input type="number" id="electricity_cost" name="electricity_cost" class="box" value="{{ $maintenance->electricity_cost }}" step="0.01" min="0" required>

                <label for="gas_cost">Gas Cost</label>
                <input type="number" id="gas_cost" name="gas_cost" class="box" value="{{ $maintenance->gas_cost }}" step="0.01" min="0" required>

                <label for="daily_cleaning_cost">Daily Cleaning Cost</label>
                <input type="number" id="daily_cleaning_cost" name="daily_cleaning_cost" class="box" value="{{ $maintenance->daily_cleaning_cost }}" step="0.01" min="0" required>

                <label for="security_cost">Security Cost</label>
                <input type="number" id="security_cost" name="security_cost" class="box" value="{{ $maintenance->security_cost }}" step="0.01" min="0" required>

                <input type="submit" value="Update Maintenance" name="update_maintenance" class="btn">
            </form>
        </section>
    </main>

    <script>
        function redirectToMaintenance() {
            window.location.href = "{{ route('admin.maintenance') }}";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
