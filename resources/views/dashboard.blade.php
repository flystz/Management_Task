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
    <div class="flex items-center justify-center min-h-screen ">
      <div class="bg-white shadow-md rounded-lg p-8 text-center">
        <img class="w-2/4 rounded-3xl mx-auto mb-4" src="https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Selamat Datang!">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Selamat Datang Kembali!</h1>
        <p class="text-lg text-gray-600">Kami sangat senang melihat Anda kembali. Semoga hari Anda penuh dengan kebahagiaan dan kesuksesan!</p>
      </div>
    </div>


    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
</body>

</html>