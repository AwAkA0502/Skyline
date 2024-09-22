@extends('admin.layouts.main')


@section('content')

<div class="flex flex-col gap-3">
    <div class="container mx-auto px-4 py-4 border-black border rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Header 3d Designs</h2>
        <form>
            @csrf
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Judul Section</label>
                <input type="url" id="youtube_link" name="youtube_link" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="Judul">
            </div>
            
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <input type="url" id="youtube_link" name="youtube_link" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="Deskripsi">
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>
    </div>
    <div class="container mx-auto px-4 py-4 border-black border rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Card 1</h2>
        <form>
            @csrf
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Upload Gambar:</label>
                <input type="file" id="image" name="image" class="border rounded w-full py-2 px-3 text-gray-700 ">
            </div>
            
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Link YouTube:</label>
                <input type="url" id="youtube_link" name="youtube_link" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="https://www.youtube.com/watch?v=your_video_id">
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>
    </div>
    <div class="container mx-auto px-4 py-4 border-black border rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Card 2</h2>
        <form>
            @csrf
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Upload Gambar:</label>
                <input type="file" id="image" name="image" class="border rounded w-full py-2 px-3 text-gray-700 ">
            </div>
            
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Link YouTube:</label>
                <input type="url" id="youtube_link" name="youtube_link" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="https://www.youtube.com/watch?v=your_video_id">
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>
    </div>
    <div class="container mx-auto px-4 py-4 border-black border rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Card 3</h2>
        <form>
            @csrf
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Upload Gambar:</label>
                <input type="file" id="image" name="image" class="border rounded w-full py-2 px-3 text-gray-700 ">
            </div>
            
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Link YouTube:</label>
                <input type="url" id="youtube_link" name="youtube_link" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="https://www.youtube.com/watch?v=your_video_id">
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</div>

    

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