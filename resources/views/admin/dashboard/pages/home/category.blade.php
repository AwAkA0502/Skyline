@extends('admin.layouts.main')


@section('content')

        {{-- style categories --}}
        <div class="flex w-full justify-between items-center mb-3">
            <h1 class="font-bold text-[24px]">Style Categories</h1>
            <button id="openModalButton-style" class="px-3 py-2 bg-blue-500 rounded-lg text-white ml-3">Tambah</button>
        </div>
        <!-- Modal Background -->
        <div id="modalBackground-style" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
            <!-- Modal Content -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Tambah Kategori</h2>
                <form id="categoryForm-style" action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                        <input type="text" id="name-style" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeModalButton-style" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
 
        <div class="card mb-4">

            <div class="card-body">
               
                <table id="datatablesSimple-style">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($style_categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="flex justify-between items-start gap-3">
                                <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                    data-id="{{ $category->id }}" 
                                    data-name="{{ $category->name }}" >Edit</button>
                                <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white delete-button-style" data-id="{{ $category->id }}">Delete</button>
    
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
        <!-- Modal untuk Edit Kategori -->
        <div id="editModal-style" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 relative">
                <!-- Tombol untuk menutup modal (opsional) -->
                <button type="button" id="closeEditModalButton" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
                    &times;
                </button>

                <h2 class="text-xl font-bold mb-4">Edit Kategori</h2>
                <!-- Form untuk mengedit kategori -->
                <form id="editCategoryForm-style" method="POST">
                    @csrf
                    {{-- @method('PUT') <!-- Menggunakan PUT atau PATCH untuk update --> --}}
                    <div class="mb-4">
                        <label for="editName" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                        <input type="text" id="editName-style" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeEditModalButton" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- end style categories --}}

    
        {{-- size categories --}}
        <div class="flex w-full justify-between items-center mb-3">
            <h1 class="font-bold text-[24px]">Size Categories</h1>
            <button id="openModalButton-size" class="px-3 py-2 bg-blue-500 rounded-lg text-white ml-3">Tambah</button>
        </div>
        <!-- Modal Background -->
        <div id="modalBackground-size" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
            <!-- Modal Content -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Tambah Kategori</h2>
                <form id="categoryForm-size" action="{{ route('size.category.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                        <input type="text" id="name-size" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeModalButton-size" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
 
        <div class="card mb-4">

            <div class="card-body">
               
                <table id="datatablesSimple-size">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($size_categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="flex justify-between items-start gap-3">
                                <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-size"
                                    data-id="{{ $category->id }}" 
                                    data-name="{{ $category->name }}" >Edit</button>
                                <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white delete-button-size" data-id="{{ $category->id }}">Delete</button>
    
                                <!-- Form untuk penghapusan -->
                                <form id="delete-form-{{ $category->id }}" action="{{ route('size.categories.destroy', $category->id) }}" method="POST" style="display: none;">
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
    <!-- Modal untuk Edit Kategori -->
    <div id="editModal-size" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-100">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 relative">
            <!-- Tombol untuk menutup modal (opsional) -->
            <button type="button" id="closeEditModalButton" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
                &times;
            </button>

            <h2 class="text-xl font-bold mb-4">Edit Kategori</h2>
            <!-- Form untuk mengedit kategori -->
            <form id="editCategoryForm-size" method="POST">
                @csrf
                {{-- @method('PUT') <!-- Menggunakan PUT atau PATCH untuk update --> --}}
                <div class="mb-4">
                    <label for="editName-size" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                    <input type="text" id="editName-size" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeEditModalButton-size" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    {{-- end size categories --}}


    {{-- floor categories --}}
    <div class="flex w-full justify-between items-center mb-3">
        <h1 class="font-bold text-[24px]">Floor Categories</h1>
        <button id="openModalButton-floor" class="px-3 py-2 bg-blue-500 rounded-lg text-white ml-3">Tambah</button>
    </div>
    <!-- Modal Background -->
    <div id="modalBackground-floor" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
        <!-- Modal Content -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Tambah Kategori</h2>
            <form id="categoryForm-floor" action="{{ route('floor.category.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                    <input type="text" id="name-floor" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeModalButton-floor" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mb-4">

        <div class="card-body">
            
            <table id="datatablesSimple-floor">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($floor_categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-floor"
                                data-id="{{ $category->id }}" 
                                data-name="{{ $category->name }}" >Edit</button>
                            <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white delete-button-floor" data-id="{{ $category->id }}">Delete</button>

                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-{{ $category->id }}" action="{{ route('floor.categories.destroy', $category->id) }}" method="POST" style="display: none;">
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
    <!-- Modal untuk Edit Kategori -->
    <div id="editModal-floor" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-100">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 relative">
            <!-- Tombol untuk menutup modal (opsional) -->
            <button type="button" id="closeEditModalButton-floor" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
                &times;
            </button>

            <h2 class="text-xl font-bold mb-4">Edit Kategori</h2>
            <!-- Form untuk mengedit kategori -->
            <form id="editCategoryForm-floor" method="POST">
                @csrf
                {{-- @method('PUT') <!-- Menggunakan PUT atau PATCH untuk update --> --}}
                <div class="mb-4">
                    <label for="editName" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                    <input type="text" id="editName-floor" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeEditModalButton-floor" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    {{-- end floor categories --}}
    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dataTable = new simpleDatatables.DataTable("#datatablesSimple-style");
            var dataTable = new simpleDatatables.DataTable("#datatablesSimple-size");
            var dataTable = new simpleDatatables.DataTable("#datatablesSimple-floor");
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openModalButton = document.getElementById('openModalButton-style');
            var modalBackground = document.getElementById('modalBackground-style');
            var closeModalButton = document.getElementById('closeModalButton-style');
            var nameInput = document.getElementById('name-style');

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

            document.getElementById('categoryForm-style').addEventListener('submit', function(event) {
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
                if (e.target && e.target.classList.contains('edit-button-style')) {
                    // Ambil ID dan nama dari tombol yang diklik
                    const categoryId = e.target.getAttribute('data-id');
                    const categoryName = e.target.getAttribute('data-name');

                    console.log('ID Kategori:', categoryId, 'Nama Kategori:', categoryName);

                    // Isi input dengan data yang diambil
                    const editNameInput = document.getElementById('editName-style');
                    const editForm = document.getElementById('editCategoryForm-style');
                    const editModal = document.getElementById('editModal-style');

                    editNameInput.value = categoryName;
                    // editForm.action = `/categories/${categoryId}`;
                    editForm.action = `/admin/dashboard/pages/home/style-category-up/${categoryId}`;

                    // Tampilkan modal dengan menghapus class 'hidden'
                    editModal.classList.remove('hidden');
                }
            });

            // Tutup modal ketika tombol 'Batal' diklik
            document.getElementById('closeEditModalButton').addEventListener('click', function () {
                const editModal = document.getElementById('editModal-style');
                editModal.classList.add('hidden');
            });
        });

        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('delete-button-style')) {
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openModalButton = document.getElementById('openModalButton-size');
            var modalBackground = document.getElementById('modalBackground-size');
            var closeModalButton = document.getElementById('closeModalButton-size');
            var nameInput = document.getElementById('name-size');

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

            document.getElementById('categoryForm-size').addEventListener('submit', function(event) {
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
                if (e.target && e.target.classList.contains('edit-button-size')) {
                    // Ambil ID dan nama dari tombol yang diklik
                    const categoryId = e.target.getAttribute('data-id');
                    const categoryName = e.target.getAttribute('data-name');

                    console.log('ID Kategori:', categoryId, 'Nama Kategori:', categoryName);

                    // Isi input dengan data yang diambil
                    const editNameInput = document.getElementById('editName-size');
                    const editForm = document.getElementById('editCategoryForm-size');
                    const editModal = document.getElementById('editModal-size');

                    editNameInput.value = categoryName;
                    // editForm.action = `/categories/${categoryId}`;
                    editForm.action = `/admin/dashboard/pages/home/size-category-up/${categoryId}`;

                    // Tampilkan modal dengan menghapus class 'hidden'
                    editModal.classList.remove('hidden');
                }
            });

            // Tutup modal ketika tombol 'Batal' diklik
            document.getElementById('closeEditModalButton-size').addEventListener('click', function () {
                const editModal = document.getElementById('editModal-size');
                editModal.classList.add('hidden');
            });
        });

        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('delete-button-size')) {
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openModalButton = document.getElementById('openModalButton-floor');
            var modalBackground = document.getElementById('modalBackground-floor');
            var closeModalButton = document.getElementById('closeModalButton-floor');
            var nameInput = document.getElementById('name-floor');

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

            document.getElementById('categoryForm-floor').addEventListener('submit', function(event) {
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
                if (e.target && e.target.classList.contains('edit-button-floor')) {
                    // Ambil ID dan nama dari tombol yang diklik
                    const categoryId = e.target.getAttribute('data-id');
                    const categoryName = e.target.getAttribute('data-name');

                    console.log('ID Kategori:', categoryId, 'Nama Kategori:', categoryName);

                    // Isi input dengan data yang diambil
                    const editNameInput = document.getElementById('editName-floor');
                    const editForm = document.getElementById('editCategoryForm-floor');
                    const editModal = document.getElementById('editModal-floor');

                    editNameInput.value = categoryName;
                    // editForm.action = `/categories/${categoryId}`;
                    editForm.action = `/admin/dashboard/pages/home/floor-category-up/${categoryId}`;

                    // Tampilkan modal dengan menghapus class 'hidden'
                    editModal.classList.remove('hidden');
                }
            });

            // Tutup modal ketika tombol 'Batal' diklik
            document.getElementById('closeEditModalButton-floor').addEventListener('click', function () {
                const editModal = document.getElementById('editModal-floor');
                editModal.classList.add('hidden');
            });
        });

        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('delete-button-floor')) {
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