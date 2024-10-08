<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasks for {{ $tasklist->nama_tasklist }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <x-sidebar></x-sidebar>
  <!-- Content -->
  <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
    <div class="container mx-auto p-10">
      <!-- Task Tables To Do -->
      <h2 class="text-2xl font-bold mb-3 text-blue-900">Tasks To Do</h2>
      <div class="overflow-x-auto shadow-md rounded-lg mb-10">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
          <thead>
            <tr class="bg-blue-600 text-white uppercase text-sm leading-normal">
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
          <tbody class="text-gray-700 text-sm font-light">
            @foreach ($tasksTodo as $index => $task)
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition-all duration-150 ease-in-out">
              <td class="py-3 px-6 text-left">{{ $index + 1 }}</td>
              <td class="py-3 px-6 text-left">{{ $task->nama_task }}</td>
              <td class="py-3 px-6 text-left">{{ $task->menugaskan }}</td>
              <td class="py-3 px-6 text-left">{{ $task->created_at->format('Y-m-d') }}</td>
              <td class="py-3 px-6 text-left">{{ $task->end_date }}</td>
              <td class="py-3 px-6 text-left">{{ $task->deskripsi }}</td>
              <td class="py-3 px-6 text-left">
                <span class="bg-yellow-200 text-yellow-800 py-1 px-3 rounded-full text-xs">{{ $task->status }}</span>
              </td>
              <td class="py-3 px-6 text-center">
                <form action="{{ route('moveTask', $task->id) }}" method="POST">
                  @csrf
                  <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-full" onchange="this.form.submit()">
                    <option value="todo" {{ $task->status == 'todo' ? 'selected' : '' }}>Todo</option>
                    <option value="on_progress" {{ $task->status == 'on_progress' ? 'selected' : '' }}>On Progress</option>
                    <option value="complete" {{ $task->status == 'complete' ? 'selected' : '' }}>Complete</option>
                  </select>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Task Tables On Progress -->
      <h2 class="text-2xl font-bold mb-3 text-blue-900">Tasks On Progress</h2>
      <div class="overflow-x-auto shadow-md rounded-lg mb-10">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
          <thead>
            <tr class="bg-yellow-500 text-white uppercase text-sm leading-normal">
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
          <tbody class="text-gray-700 text-sm font-light">
            @foreach ($tasksOnProgress as $index => $task)
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition-all duration-150 ease-in-out">
              <td class="py-3 px-6 text-left">{{ $index + 1 }}</td>
              <td class="py-3 px-6 text-left">{{ $task->nama_task }}</td>
              <td class="py-3 px-6 text-left">{{ $task->menugaskan }}</td>
              <td class="py-3 px-6 text-left">{{ $task->created_at->format('Y-m-d') }}</td>
              <td class="py-3 px-6 text-left">{{ $task->end_date }}</td>
              <td class="py-3 px-6 text-left">{{ $task->deskripsi }}</td>
              <td class="py-3 px-6 text-left">
                <span class="bg-yellow-200 text-yellow-800 py-1 px-3 rounded-full text-xs">{{ $task->status }}</span>
              </td>
              <td class="py-3 px-6 text-center">
                <form action="{{ route('moveTask', $task->id) }}" method="POST">
                  @csrf
                  <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-full" onchange="this.form.submit()">
                    <option value="todo" {{ $task->status == 'todo' ? 'selected' : '' }}>Todo</option>
                    <option value="on_progress" {{ $task->status == 'on_progress' ? 'selected' : '' }}>On Progress</option>
                    <option value="complete" {{ $task->status == 'complete' ? 'selected' : '' }}>Complete</option>
                  </select>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Task Tables Complete -->
      <h2 class="text-2xl font-bold mb-3 text-blue-900">Tasks Complete</h2>
      <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
          <thead>
            <tr class="bg-green-500 text-white uppercase text-sm leading-normal">
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
          <tbody class="text-gray-700 text-sm font-light">
            @foreach ($tasksComplete as $index => $task)
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition-all duration-150 ease-in-out">
              <td class="py-3 px-6 text-left">{{ $index + 1 }}</td>
              <td class="py-3 px-6 text-left">{{ $task->nama_task }}</td>
              <td class="py-3 px-6 text-left">{{ $task->menugaskan }}</td>
              <td class="py-3 px-6 text-left">{{ $task->created_at->format('Y-m-d') }}</td>
              <td class="py-3 px-6 text-left">{{ $task->end_date }}</td>
              <td class="py-3 px-6 text-left">{{ $task->deskripsi }}</td>
              <td class="py-3 px-6 text-left">
                <span class="bg-green-200 text-green-800 py-1 px-3 rounded-full text-xs">{{ $task->status }}</span>
              </td>
              <td class="py-3 px-6 text-center">
                <form action="{{ route('moveTask', $task->id) }}" method="POST">
                  @csrf
                  <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-full" onchange="this.form.submit()">
                    <option value="todo" {{ $task->status == 'todo' ? 'selected' : '' }}>Todo</option>
                    <option value="on_progress" {{ $task->status == 'on_progress' ? 'selected' : '' }}>On Progress</option>
                    <option value="complete" {{ $task->status == 'complete' ? 'selected' : '' }}>Complete</option>
                  </select>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>



</body>

</html>