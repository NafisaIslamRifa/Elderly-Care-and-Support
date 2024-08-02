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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('admin/admin_style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/main.css') }}">
    <style>
        #cancel:hover {
            color: red;
        }
    </style>

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

    <!-- CONTENT -->
    <section>
        <div class="head-title">
            <div class="center">
                <h1>UPDATE MEMBER</h1>
            </div>
        </div>
    </section>

    <section class="add-products">
        <form action="{{ route('admin.updateMember',$member->id) }}" method="post" enctype="multipart/form-data">
            @csrf
          
            <div class="form-header">
                <button type="button"  class="btn-close" style="margin-left:90%; margin-top:5px; cursor: pointer; color: #000;" aria-label="Close" onclick="redirectToMembers()"></button>
            </div>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="box" value="{{ $member->name }}" required>

            <label for="age">Age</label>
            <input type="number" id="age" min="0" name="age" class="box" value="{{ $member->age }}" required>

            
            <div class="radio-group">
                <label>Gender: </label>
                <label for="male"><input type="radio" id="male" name="gender" class="box" value="male" {{ $member->gender == 'Male' ? 'checked' : '' }}> Male</label>
                <label for="female"><input type="radio" id="female" name="gender" class="box" value="female" {{ $member->gender == 'Female' ? 'checked' : '' }}> Female</label>
            </div>


            <label for="contact_number">Contact Number</label>
            <input type="tel" id="contact_number" name="contact_number" class="box" value="{{ $member->contact_number }}" required>

            <label for="room_number">Room Number</label>
            <input type="text" id="room_number" name="room_number" class="box" value="{{$member->room_number}}" required>

            <label for="disease">Disease</label>
            <select id="disease" name="disease" class="box" required>
                <option value="Diabetes" {{ $member->disease == 'Diabetes' ? 'selected' : '' }}>Diabetes</option>
                <option value="Hypertension" {{ $member->disease == 'Hypertension' ? 'selected' : '' }}>Hypertension</option>
                <option value="Heart Disease" {{ $member->disease == 'Heart Disease' ? 'selected' : '' }}>Heart Disease</option>
            </select>

            <label for="staff_id">Staff Id</label>
            <input type="number" id="staff_id" min="0" name="staff_id" class="box" value="{{ $member->staff_id }}" required>

            <input type="submit" value="Update Member"  name="update_member" class="btn">
        </form>
    </section>
</main>

<script>
    function redirectToMembers() {
        window.location.href = "{{ route('admin.members') }}";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
