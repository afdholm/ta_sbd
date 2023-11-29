<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pelanggan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>Data Pelanggan</h3>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Renter</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <!-- Tambahkan kolom lainnya sesuai dengan tabel Anda -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\Pelanggan::all() as $pelanggan)
                            <tr>
                                <td>{{ $pelanggan->id_pelanggan }}</td>
                                <td>{{ $pelanggan->nama_renter }}</td>
                                <td>{{ $pelanggan->alamat_renter }}</td>
                                <td>{{ $pelanggan->nomor_hp }}</td>
                                <!-- Tambahkan kolom lainnya sesuai dengan tabel Anda -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>