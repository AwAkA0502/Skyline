@extends('admin.layouts.main')


@section('content')
        <div class="flex w-full justify-between items-center mb-3">
            <h1 class="font-bold text-[24px]">Categories Option</h1>
            <button id="openModalButton" class="px-3 py-2 bg-blue-500 rounded-lg text-white ml-3">Tambah</button>
        </div>

        <!-- Modal Background -->
        <div id="modalBackground" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
            <!-- Modal Content -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Tambah Kategori</h2>
                <form id="categoryForm" action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeModalButton" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
 
        <div class="card mb-4">

            <div class="card-body">
               
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="flex justify-between items-start gap-3">
                                <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button"
                                    data-id="{{ $category->id }}" 
                                    data-name="{{ $category->name }}" >Edit</button>
                                <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white delete-button" data-id="{{ $category->id }}">Delete</button>
    
                                <!-- Form untuk penghapusan -->
                                <form id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Add other cards or content here -->
    </div>
<!-- Modal untuk Edit Kategori -->
<div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 relative">
        <!-- Tombol untuk menutup modal (opsional) -->
        <button type="button" id="closeEditModalButton" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
            &times;
        </button>

        <h2 class="text-xl font-bold mb-4">Edit Kategori</h2>
        <!-- Form untuk mengedit kategori -->
        <form id="editCategoryForm" method="POST">
            @csrf
            {{-- @method('PUT') <!-- Menggunakan PUT atau PATCH untuk update --> --}}
            <div class="mb-4">
                <label for="editName" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                <input type="text" id="editName" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex justify-end">
                <button type="button" id="closeEditModalButton" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openModalButton = document.getElementById('openModalButton');
            var modalBackground = document.getElementById('modalBackground');
            var closeModalButton = document.getElementById('closeModalButton');
            var nameInput = document.getElementById('name');

            openModalButton.addEventListener('click', function() {
                modalBackground.classList.remove('hidden');
            });

            closeModalButton.addEventListener('click', function() {
                modalBackground.classList.add('hidden');
            });

            // Cek apakah elemen ditemukan sebelum digunakan
            if (nameInput) {
                console.log(nameInput.value); // Jika ini null, maka elemen tidak ditemukan
            } else {
                console.error('Elemen dengan ID "name" tidak ditemukan.');
            }

            document.getElementById('categoryForm').addEventListener('submit', function(event) {
                if (!nameInput.value) {
                    event.preventDefault(); // Mencegah form dikirim jika input kosong
                    alert('Nama kategori tidak boleh kosong!');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Pilih elemen parent yang membungkus semua tombol edit
            const container = document.querySelector('body'); // Atau elemen spesifik seperti '.container'

            // Event delegation pada container
            container.addEventListener('click', function (e) {
                // Cek apakah target yang diklik adalah tombol dengan class 'edit-button'
                if (e.target && e.target.classList.contains('edit-button')) {
                    // Ambil ID dan nama dari tombol yang diklik
                    const categoryId = e.target.getAttribute('data-id');
                    const categoryName = e.target.getAttribute('data-name');

                    console.log('ID Kategori:', categoryId, 'Nama Kategori:', categoryName);

                    // Isi input dengan data yang diambil
                    const editNameInput = document.getElementById('editName');
                    const editForm = document.getElementById('editCategoryForm');
                    const editModal = document.getElementById('editModal');

                    editNameInput.value = categoryName;
                    // editForm.action = `/categories/${categoryId}`;
                    editForm.action = `/admin/dashboard/pages/home/categories-update/${categoryId}`;

                    // Tampilkan modal dengan menghapus class 'hidden'
                    editModal.classList.remove('hidden');
                }
            });

            // Tutup modal ketika tombol 'Batal' diklik
            document.getElementById('closeEditModalButton').addEventListener('click', function () {
                const editModal = document.getElementById('editModal');
                editModal.classList.add('hidden');
            });
        });

        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('delete-button')) {
                const categoryId = e.target.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data ini akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + categoryId).submit();
                    }
                });
            }
        });


    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: '{{ session('success') }}',
                icon: 'success',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Pilih modal dan elemen terkait
    const editModal = document.getElementById('editModal'); // Pastikan editModal ada di DOM
    const editNameInput = document.getElementById('editName'); // Input nama kategori
    const editForm = document.getElementById('editCategoryForm'); // Form edit kategori

    // Event delegation pada container body untuk menangani klik pada tombol edit
    document.body.addEventListener('click', function (e) {
        // Cek apakah target yang diklik adalah tombol dengan class 'edit-button'
        if (e.target && e.target.classList.contains('edit-button')) {
            // Ambil ID dan nama dari tombol yang diklik
            const categoryId = e.target.getAttribute('data-id');
            const categoryName = e.target.getAttribute('data-name');

            // Debugging untuk memastikan data diambil dengan benar
            console.log('ID Kategori:', categoryId, 'Nama Kategori:', categoryName);

            // Isi input dengan data yang diambil
            editNameInput.value = categoryName;

            // Set action form dengan ID kategori yang benar
            // Gunakan URL helper Laravel untuk menghindari masalah URL
            editForm.action = `/categories/${categoryId}`;

            // Tampilkan modal dengan menghapus class 'hidden'
            editModal.classList.remove('hidden');
        }
    });

    // Tutup modal ketika tombol 'Batal' diklik
    document.getElementById('closeEditModalButton').addEventListener('click', function () {
        editModal.classList.add('hidden');
    });

    // Event listener untuk menutup modal jika area di luar modal diklik
    editModal.addEventListener('click', function (e) {
        if (e.target === editModal) {
            editModal.classList.add('hidden');
        }
    });
});

    </script> --}}
    
    
@endsection