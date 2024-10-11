<x-app-layout>
<div>
    <h1 class="text-xl font-bold mb-4">Manage Users</h1>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Name</th>
                <th class="py-2">User Type</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $user)
                <tr>
                    <td class="py-2">{{ $user->id }}</td>
                    <td class="py-2">{{ $user->name }}</td>
                    <td class="py-2">{{ $user->usertype }}</td>
                    <td class="py-2">
                        <!-- Tambahkan tombol untuk mengubah usertype atau tindakan lainnya -->
                        <button wire:click="editUser({{ $user->id }})" class="bg-blue-500 text-white py-1 px-2 rounded">Edit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>
