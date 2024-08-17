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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ url('admin/admin_style.css') }}">
    <link rel="stylesheet" href="{{ url('admin/style.css') }}">
    <link rel="stylesheet" href="{{ url('admin/main.css') }}">

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
                <h1>UPDATE MESSAGE</h1>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <section class="add-products">
    <form action="{{ route('admin.messageUpdate', $contact->contact_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-header">
            <button type="button" class="btn-close" style="margin-left:90%; margin-top:5px; cursor: pointer; color: #000;" onclick="redirectToContacts()"></button>
        </div>

        <label for="user_id">User ID</label>
        <input type="text" id="user_id" name="user_id" class="box" value="{{ $contact->user_id }}" readonly>

        <label for="name">User Name</label>
        <input type="text" id="name" name="name" class="box" value="{{ $contact->name }}">

        <label for="message">Message</label>
        <textarea id="message" name="message" class="box">{{ $contact->message }}</textarea>

        <input type="submit" value="Update Message" name="update_message" class="btn">
    </form>
</section>




</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script>
    function redirectToContacts() {
        window.location.href = "{{ route('admin.message') }}";
    }
</script>


</body>
</html>
