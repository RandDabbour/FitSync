{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>FitSync Sign up</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    /* Custom Font */
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

    /* Form Styles */
    #msform {
      text-align: center;
      position: relative;
      margin-top: 30px;
    }

    #msform fieldset {

      border: 0 none;
      border-radius: 0px;

      box-sizing: border-box;
      width: fit-content;
      margin: 0 10%;
      position: relative;
    }

    #msform fieldset:not(:first-of-type) {
      display: none;
    }

    /* Inputs */
    #msform input, #msform textarea {
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 0px;
      margin-bottom: 10px;
      width: 100%;
      box-sizing: border-box;
      font-family: montserrat;
      color: #2C3E50;
      font-size: 13px;
    }

    #msform input:focus, #msform textarea:focus {
      box-shadow: none !important;
      border: 1px solid #ee0979;
      outline-width: 0;
      transition: All 0.5s ease-in;
    }

    /* Buttons */
    #msform .action-button {
      width: 100px;
      background: #ee0979;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 25px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px;
    }

    #msform .action-button:hover, #msform .action-button:focus {
      box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
    }

    #msform .action-button-previous {
      width: 100px;
      background: #C5C5F1;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 25px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px;
    }

    #msform .action-button-previous:hover, #msform .action-button-previous:focus {
      box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
    }

    /* Headings */
    .fs-title {
      font-size: 18px;
      text-transform: uppercase;
      color: #2C3E50;
      margin-bottom: 10px;
      letter-spacing: 2px;
      font-weight: bold;
    }

    .fs-subtitle {
      font-weight: normal;
      font-size: 13px;
      color: #666;
      margin-bottom: 20px;
    }

    /* Progress Bar */
    #progressbar {
      margin-bottom: 30px;
      overflow: hidden;
      counter-reset: step;
    }

    #progressbar li {
      list-style-type: none;
      color: white;
      text-transform: uppercase;
      font-size: 9px;
      width: 33.33%;
      float: left;
      position: relative;
      letter-spacing: 1px;
    }

    #progressbar li:before {
      content: counter(step);
      counter-increment: step;
      width: 24px;
      height: 24px;
      line-height: 26px;
      display: block;
      font-size: 12px;
      color: #333;
      background: white;
      border-radius: 25px;
      margin: 0 auto 10px auto;
    }

    #progressbar li:after {
      content: '';
      width: 100%;
      height: 2px;
      background: white;
      position: absolute;
      left: -50%;
      top: 9px;
      z-index: -1;
    }

    #progressbar li:first-child:after {
      content: none;
    }

    #progressbar li.active:before, #progressbar li.active:after {
      background: #ee0979;
      color: white;
    }

    .dme_link {
      margin-top: 30px;
      text-align: center;
    }

    .dme_link a {
      background: #FFF;
      font-weight: bold;
      color: #ee0979;
      border: 0 none;
      border-radius: 25px;
      cursor: pointer;
      padding: 5px 25px;
      font-size: 12px;
    }

    .dme_link a:hover, .dme_link a:focus {
      background: #C5C5F1;
      text-decoration: none;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboards/default.html">FitSync</a>
    </div>
  </nav>
  <!-- End Navbar -->

  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Fill in the details to create your FitSync account.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">


            <form id="msform" method="POST" action="{{ route('register') }}">
                @csrf

                <ul id="progressbar">
                    <li class="active" id="personal"><strong>Personal</strong></li>
                    <li id="fitness"><strong>Fitness</strong></li>
                    <li id="health"><strong>Health</strong></li>
                </ul>

                <!-- Personal Info -->
                <fieldset>
                    <h2 class="fs-title">Personal Information</h2>
                    <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required />
                    <x-input-error :messages="$errors->get('first_name')" />

                    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required />
                    <x-input-error :messages="$errors->get('last_name')" />

                    <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                    <x-input-error :messages="$errors->get('email')" />

                    <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required />
                    <x-input-error :messages="$errors->get('phone_number')" />

                    <input type="password" name="password" placeholder="Password" required />
                    <x-input-error :messages="$errors->get('password')" />

                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                    <x-input-error :messages="$errors->get('password_confirmation')" />

                    <button type="button" class="action-button" id="nextBtn">Next</button>
                </fieldset>

                <!-- Fitness Info -->
                <fieldset>
                    <h2 class="fs-title">Fitness Information</h2>
                    <input type="text" name="weight" placeholder="Weight" value="{{ old('weight') }}" required />
                    <x-input-error :messages="$errors->get('weight')" />

                    <input type="text" name="height" placeholder="Height" value="{{ old('height') }}" required />
                    <x-input-error :messages="$errors->get('height')" />

                    <input type="text" name="goal" placeholder="Fitness Goal" value="{{ old('goal') }}" required />
                    <x-input-error :messages="$errors->get('goal')" />

                    <button type="button" class="action-button" id="nextBtn2">Next</button>
                    <button type="button" class="action-button-previous" id="prevBtn">Previous</button>
                </fieldset>

                <!-- Health Info -->
                <fieldset>
                    <h2 class="fs-title">Health Information</h2>
                    <input type="text" name="health_condition" placeholder="Health Condition (if any)" value="{{ old('health_condition') }}" />
                    <x-input-error :messages="$errors->get('health_condition')" />

                    <button type="submit" class="action-button">Submit</button>
                    <button type="button" class="action-button-previous" id="prevBtn2">Previous</button>
                </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0V7wBRw3YmX6mbv7WkI0eY6rkYg6vvu8c9Q0x0scw5H4w8C" crossorigin="anonymous"></script>

  <script>
    let currentStep = 0;

    function showStep(step) {
      const steps = document.querySelectorAll("fieldset");
      steps.forEach((fieldset, index) => {
        fieldset.style.display = index === step ? "block" : "none";
      });

      const progressbar = document.querySelectorAll("#progressbar li");
      progressbar.forEach((li, index) => {
        li.classList.toggle("active", index <= step);
      });
    }

    function nextStep() {
      if (currentStep < 2) {
        currentStep++;
        showStep(currentStep);
      }
    }

    function prevStep() {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    }

    document.getElementById("nextBtn").addEventListener("click", nextStep);
    document.getElementById("prevBtn").addEventListener("click", prevStep);
    document.getElementById("nextBtn2").addEventListener("click", nextStep);
    document.getElementById("prevBtn2").addEventListener("click", prevStep);
    document.getElementById("nextBtn3").addEventListener("click", nextStep);
    document.getElementById("prevBtn3").addEventListener("click", prevStep);

    showStep(currentStep);
  </script>

</body>

</html>
