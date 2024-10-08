<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <x-sidebar></x-sidebar>
    
  
<!-- Content -->
  <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
    <!-- your content goes here ... -->
    <x-list-task></x-list-task>
  </div>
  
<!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
</body>
</html>