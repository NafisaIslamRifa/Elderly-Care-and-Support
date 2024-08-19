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
                    <h1>Update Food</h1>
                </div>
            </div>
        </section>

        <section class="add-products">
            <form action="{{ route('admin.updateFood', $food->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-header">
                    <button type="button" class="btn-close" style="margin-left:90%; margin-top:5px;cursor: pointer;color: #000;" onclick="redirectToFoods()"></button>
                </div>

                <label for="day">Day</label>
                <select id="day" name="day" class="box" required>
                    <option value="Monday" {{ $food->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                    <option value="Tuesday" {{ $food->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                    <option value="Wednesday" {{ $food->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                    <option value="Thursday" {{ $food->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                    <option value="Friday" {{ $food->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                    <option value="Saturday" {{ $food->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                    <option value="Sunday" {{ $food->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                </select>

                <label for="breakfast">Breakfast</label>
                <input type="text" id="breakfast" name="breakfast" class="box" value="{{ $food->breakfast }}" required>

                <label for="lunch">Lunch</label>
                <input type="text" id="lunch" name="lunch" class="box" value="{{ $food->lunch }}" required>

                <label for="dinner">Dinner</label>
                <input type="text" id="dinner" name="dinner" class="box" value="{{ $food->dinner }}" required>

                <label for="cost">Cost</label>
                <input type="number" id="cost" name="cost" class="box" value="{{ $food->cost }}" step="0.01" min="0" required>

                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="box">
                @if ($food->image)
                    <img src="{{ asset('images/' . $food->image) }}" alt="Food Image" width="100">
                @endif

                <input type="submit" value="Update Food" name="update_food" class="btn">
            </form>
        </section>
    </main>

    <script>
        function redirectToFoods() {
            window.location.href = "{{ route('admin.food') }}";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
