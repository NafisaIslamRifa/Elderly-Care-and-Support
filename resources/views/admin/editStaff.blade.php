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
                    <h1>Update Staff</h1>
                </div>
            </div>
        </section>

        <section class="add-products">
            <form action="{{ route('admin.updateStaff', $staff->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-header">
           
                    <button type="button" class="btn-close" style="margin-left:90%; margin-top:5px;cursor: pointer;color: #000;" ="Close" onclick="redirectToMembers()"></button>
                </div>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="box" value="{{ $staff->name }}" required>

                <label for="age">Age</label>
                <input type="number" id="age" name="age" min="0" class="box" value="{{ $staff->age }}" required>

                <div class="radio-group">
                    <label>Gender: </label>
                    <label for="male"><input type="radio" id="male" name="gender" class="box" value="male" {{ $staff->gender == 'male' ? 'checked' : '' }}> Male</label>
                    <label for="female"><input type="radio" id="female" name="gender" class="box" value="female" {{ $staff->gender == 'female' ? 'checked' : '' }}> Female</label>
                </div>

                <label for="contact_number">Contact Number</label>
                <input type="tel" id="contact_number" name="contact_number" class="box" value="{{ $staff->contact_number }}" required>

                <label for="salary">Salary</label>
                <input type="number" id="salary" name="salary" min="0" class="box" value="{{ $staff->salary }}" required>

                <input type="submit" value="Update Staff"  name="update_staff" class="btn">
            </form>
        </section>
    </main>

    <script>
        function redirectToMembers() {
            window.location.href = "{{route('admin.Staff')}}";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
