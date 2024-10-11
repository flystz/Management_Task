<x-app-layout>


    <div class="max-w-2xl mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Add Task</h1>

        @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="hidden" name="tasklist_id" value="{{ $tasklist->id }}">

            <div class="mb-4">
                <label for="nama_task" class="block text-sm font-medium text-gray-700">Task Name</label>
                <input type="text" id="nama_task" name="nama_task" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" />
                @error('nama_task')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="menugaskan" class="block text-sm font-medium text-gray-700">Assigned To</label>
                <input type="text" id="menugaskan" name="menugaskan" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" />
                @error('menugaskan')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="deskripsi" name="deskripsi" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
                @error('deskripsi')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                <input type="date" id="end_date" name="end_date" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" />
                @error('end_date')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select id="status" name="status" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="todo">Todo</option>
                    <option value="on_progress">On Progress</option>
                    <option value="complete">Complete</option>
                </select>
                @error('status')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>



            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Task
                </button>
            </div>
        </form>
    </div>

</x-app-layout>