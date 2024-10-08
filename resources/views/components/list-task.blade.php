<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Tugas</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
 

<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-5">List Task</h1>
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200">
        <thead>
          <tr class="bg-red-500 text-white uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">No</th>
            <th class="py-3 px-6 text-left">Task</th>
            <th class="py-3 px-6 text-center">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            {{-- @foreach ($tasks as $task) --}}
          <!-- Row 1 -->
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left">1</td>
            <td class="py-3 px-6 text-left">Tugas 1</td>
            <td class="py-3 px-6 text-center">
              <a href="#" class="text-blue-500 hover:underline">Lihat</a>
            </td>
          </tr>
          {{-- @endforeach --}}
          <!-- Row 2 -->
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left">2</td>
            <td class="py-3 px-6 text-left">Tugas 2</td>
            <td class="py-3 px-6 text-center">
              <a href="#" class="text-blue-500 hover:underline">Lihat</a>
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
