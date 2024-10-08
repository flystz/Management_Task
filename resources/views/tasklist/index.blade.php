<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <x-sidebar></x-sidebar>
    
  
<!-- Content -->
  <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
    <!-- your content goes here ... -->
  
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6">Tasklist</h2>
        <ul class="list-none">
            @foreach($tasklists as $tasklist)
                <li class="bg-white shadow rounded-lg mb-4 p-4 flex items-center justify-between">
                    <!-- Nama tasklist -->
                    <div class="text-lg font-medium text-gray-700">
                        {{ $tasklist->nama_tasklist }}
                    </div>
                    
                    <!-- Tombol Detail -->

                   
                    
                    <a href="{{ route('tasks.show', $tasklist->id) }}" class="inline-block bg-blue-500 text-white text-sm px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-700">
                        <span class="text-md font-bold">Detail</span>
                    </a>
                    
                </li>
            @endforeach
        </ul>
    </div>
    

  </div>
  
<!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
</body>
</html>


