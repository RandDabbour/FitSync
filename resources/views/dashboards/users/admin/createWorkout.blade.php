<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Add Workout | Soft UI Dashboard
    </title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">

    <div class="container mt-5">
        <h2 class="mb-4">Add a New Workout</h2>
        <form action="{{ route('workouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Workout Name -->
            <div class="form-group">
                <label for="workout_name">Workout Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="workout_name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Workout Type -->
            <div class="form-group">
                <label for="workout_type">Workout Type</label>
                <select class="form-control @error('type') is-invalid @enderror" id="workout_type" name="type" required>
                    <option value="strength" {{ old('type') == 'strength' ? 'selected' : '' }}>Strength</option>
                    <option value="cardio" {{ old('type') == 'cardio' ? 'selected' : '' }}>Cardio</option>
                    <option value="flexibility" {{ old('type') == 'flexibility' ? 'selected' : '' }}>Flexibility</option>
                    <option value="balance" {{ old('type') == 'balance' ? 'selected' : '' }}>Balance</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Duration -->
            <div class="form-group">
                <label for="duration">Duration (in minutes)</label>
                <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration') }}" required>
                @error('duration')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Calories Burned -->
            <div class="form-group">
                <label for="calories_burned">Calories Burned (optional)</label>
                <input type="number" class="form-control @error('calories_burned') is-invalid @enderror" id="calories_burned" name="calories_burned" value="{{ old('calories_burned') }}">
                @error('calories_burned')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Distance -->
            <div class="form-group">
                <label for="distance">Distance (optional, in km)</label>
                <input type="number" step="0.01" class="form-control @error('distance') is-invalid @enderror" id="distance" name="distance" value="{{ old('distance') }}">
                @error('distance')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Sets -->
            <div class="form-group">
                <label for="sets">Sets (optional)</label>
                <input type="number" class="form-control @error('sets') is-invalid @enderror" id="sets" name="sets" value="{{ old('sets') }}">
                @error('sets')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Reps -->
            <div class="form-group">
                <label for="reps">Reps (optional)</label>
                <input type="number" class="form-control @error('reps') is-invalid @enderror" id="reps" name="reps" value="{{ old('reps') }}">
                @error('reps')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Weight -->
            <div class="form-group">
                <label for="weight">Weight (optional, in kg)</label>
                <input type="number" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ old('weight') }}">
                @error('weight')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Date -->
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" required>
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Workout Image -->
            {{-- <div class="form-group">
                <label for="workout_image">Upload Image (optional)</label>
                <input type="file" class="form-control @error('workout_image') is-invalid @enderror" id="workout_image" name="workout_image" accept="image/*">
                @error('workout_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> --}}

            <button type="submit" class="btn btn-primary">Add Workout</button>
        </form>
    </div>

</body>
</html>
