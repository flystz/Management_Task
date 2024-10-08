<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-8">Task Management</h1>

    <!-- To Do Table -->
    <div class="mb-10">
      <h2 class="text-2xl font-semibold mb-3">To Do</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
          <thead>
            <tr class="bg-blue-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">No</th>
              <th class="py-3 px-6 text-left">Nama Tugas</th>
              <th class="py-3 px-6 text-left">Menugaskan</th>
              <th class="py-3 px-6 text-left">Tanggal Mulai</th>
              <th class="py-3 px-6 text-left">Tanggal Selesai</th>
              <th class="py-3 px-6 text-left">Deskripsi</th>
              <th class="py-3 px-6 text-left">Status</th>
              <th class="py-3 px-6 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light">
            {{-- @foreach ($tasks as $task) --}}
            <!-- Row 1 -->
            {{-- <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="py-3 px-6 text-left">1</td>
              <td class="py-3 px-6 text-left">{{ $task->nama_tugas }}</td>
              <td class="py-3 px-6 text-left">{{ $task->menugaskan }}</td>
              <td class="py-3 px-6 text-left">{{ $task->tanggal_mulai }}</td>
              <td class="py-3 px-6 text-left">{{ $task->tanggal_selesai }}</td>
              <td class="py-3 px-6 text-left">{{ $task->deskripsi }}</td>
              <td class="py-3 px-6 text-left">{{ $task->status }}</td>
              <td class="py-3 px-6 text-center"> --}}
                <ul>
                    <li><a href="#" class="text-blue-500 hover:underline">Lihat</a></li>
                    <li><a href="#" class="text-yellow-500 hover:underline">Pindah</a></li>
                    <li><a href="#" class="text-red-500 hover:underline">Hapus</a></li>
                </ul>
              </td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>
    </div>

    <!-- On Progress Table -->
    <div class="mb-10">
      <h2 class="text-2xl font-semibold mb-3">On Progress</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
          <thead>
            <tr class="bg-yellow-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">No</th>
              <th class="py-3 px-6 text-left">Nama Tugas</th>
              <th class="py-3 px-6 text-left">Menugaskan</th>
              <th class="py-3 px-6 text-left">Tanggal Mulai</th>
              <th class="py-3 px-6 text-left">Tanggal Selesai</th>
              <th class="py-3 px-6 text-left">Deskripsi</th>
              <th class="py-3 px-6 text-left">Status</th>
              <th class="py-3 px-6 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light">
            <!-- Row 1 -->
            <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="py-3 px-6 text-left">1</td>
              <td class="py-3 px-6 text-left">Tugas 2</td>
              <td class="py-3 px-6 text-left">Jane Smith</td>
              <td class="py-3 px-6 text-left">2024-09-29</td>
              <td class="py-3 px-6 text-left">2024-10-10</td>
              <td class="py-3 px-6 text-left">Pengembangan aplikasi mobile</td>
              <td class="py-3 px-6 text-left">On Progress</td>
              <td class="py-3 px-6 text-center">
                <a href="#" class="text-blue-500 hover:underline">Lihat</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Complete Table -->
    <div>
      <h2 class="text-2xl font-semibold mb-3">Complete</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
          <thead>
            <tr class="bg-green-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">No</th>
              <th class="py-3 px-6 text-left">Nama Tugas</th>
              <th class="py-3 px-6 text-left">Menugaskan</th>
              <th class="py-3 px-6 text-left">Tanggal Mulai</th>
              <th class="py-3 px-6 text-left">Tanggal Selesai</th>
              <th class="py-3 px-6 text-left">Deskripsi</th>
              <th class="py-3 px-6 text-left">Status</th>
              <th class="py-3 px-6 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light">
            <!-- Row 1 -->
            <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="py-3 px-6 text-left">1</td>
              <td class="py-3 px-6 text-left">Tugas 3</td>
              <td class="py-3 px-6 text-left">Emily Johnson</td>
              <td class="py-3 px-6 text-left">2024-09-15</td>
              <td class="py-3 px-6 text-left">2024-09-25</td>
              <td class="py-3 px-6 text-left">Menyelesaikan desain UI/UX</td>
              <td class="py-3 px-6 text-left">Complete</td>
              <td class="py-3 px-6 text-center">
                <a href="#" class="text-blue-500 hover:underline">Lihat</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</body>
</html>
