@extends('admin.layouts.main')


@section('content')

<div class="flex flex-col gap-3">
    
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple-style">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 1" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 1</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="1" 
                                data-title="Style Category 1"
                                data-image="https://via.placeholder.com/100">Edit</button>
                            <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white mr-3 clear-button-style"
                                data-id="1">Kosongkan</button>
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-1" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 2" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 2</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="2" 
                                data-title="Style Category 2"
                                data-image="https://via.placeholder.com/100">Edit</button>
                            <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white mr-3 clear-button-style"
                                data-id="2">Kosongkan</button>
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-2" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 3" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 3</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="3" 
                                data-title="Style Category 3"
                                data-image="https://via.placeholder.com/100">Edit</button>    
                            <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white mr-3 clear-button-style"
                                data-id="3">Kosongkan</button>
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-3" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 4" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 4</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="4" 
                                data-title="Style Category 4"
                                data-image="https://via.placeholder.com/100">Edit</button>
                            <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white mr-3 clear-button-style"
                                data-id="4">Kosongkan</button>
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-4" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 5" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 5</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="5" 
                                data-title="Style Category 5"
                                data-image="https://via.placeholder.com/100">Edit</button>
                            <button class="px-3 py-2 bg-red-500 font-semibold rounded-lg text-white mr-3 clear-button-style"
                                data-id="5">Kosongkan</button>
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-5" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="editModal-style" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-2xl font-bold mb-4">Edit Price Card</h2>
            <form id="editCategoryForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="editImage" class="block text-gray-700 font-bold mb-2">Image:</label>
                    <input type="file" id="editImage" name="image" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="editTitle" class="block text-gray-700 font-bold mb-2">Title:</label>
                    <input type="text" id="editTitle" name="title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <button type="button" id="closeEditModalButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Batal</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi DataTable
    var dataTable = new simpleDatatables.DataTable("#datatablesSimple-style");

    // Event listener untuk tombol Edit
    document.body.addEventListener('click', function (e) {
        if (e.target && e.target.classList.contains('edit-button-style')) {
            // Ambil data dari tombol edit
            const categoryId = e.target.getAttribute('data-id');
            const categoryTitle = e.target.getAttribute('data-title');

            // Isi form modal dengan data yang diambil
            document.getElementById('editTitle').value = categoryTitle;

            // Set action form dengan ID kategori yang benar
            document.getElementById('editCategoryForm').action = `/admin/dashboard/pages/home/style-category-up/${categoryId}`;

            // Tampilkan modal
            document.getElementById('editModal-style').classList.remove('hidden');
        }
    });

    // Event listener untuk tombol Batal
    document.getElementById('closeEditModalButton').addEventListener('click', function () {
        document.getElementById('editModal-style').classList.add('hidden');
    });
});
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dataTable = new simpleDatatables.DataTable("#datatablesSimple-style");
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Event delegation pada container
        const container = document.querySelector('body');

        container.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('edit-button-style')) {
                // Ambil ID dan nama dari tombol yang diklik
                const categoryId = e.target.getAttribute('data-id');
                const categoryName = e.target.getAttribute('data-name');

                // Isi input dengan data yang diambil
                const editNameInput = document.getElementById('editName-style');
                const editForm = document.getElementById('editCategoryForm-style');
                const editModal = document.getElementById('editModal-style');

                editNameInput.value = categoryName;
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

        // Event listener untuk tombol hapus
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
    });
</script>
    
    
@endsection