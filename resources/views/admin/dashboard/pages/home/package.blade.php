@extends('admin.layouts.main')

@section('content')

<div class="flex flex-col gap-3">
    <div class="container mx-auto px-4 py-4 border-black border rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Pilihan Paket</h2>
        <form>
            @csrf
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Judul Section</label>
                <input type="text" id="section_title" name="section_title" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="Judul">
            </div>
            
            <div class="mb-4">
                <label for="section_description" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <textarea id="section_description" name="section_description" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="Deskripsi"></textarea>
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- Tabel hanya dengan Title dan Deskripsi -->
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple-style">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Style Category 1</td>
                        <td>Deskripsi singkat untuk Style Category 1.</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="1" 
                                data-title="Style Category 1"
                                data-description="Deskripsi singkat untuk Style Category 1">Edit</button>
    
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-1" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Style Category 2</td>
                        <td>Deskripsi singkat untuk Style Category 2.</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="2" 
                                data-title="Style Category 2"
                                data-description="Deskripsi singkat untuk Style Category 2">Edit</button>
    
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-2" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Style Category 3</td>
                        <td>Deskripsi singkat untuk Style Category 3.</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="3" 
                                data-title="Style Category 3"
                                data-description="Deskripsi singkat untuk Style Category 3">Edit</button>    
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-3" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div id="editModal-style" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg w-1/3">
        <h2 class="text-2xl font-bold mb-4">Edit Price Card</h2>
        <form id="editCategoryForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="editTitle" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" id="editTitle" name="title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="editDescription" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                <div id="editor" style="height: 300px">
                    <p>Konten awal editor.</p>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button type="button" id="closeEditModalButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Batal</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Script CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

<script>
    let editorInstance;

    document.addEventListener('DOMContentLoaded', function () {
        // Inisialisasi CKEditor 5 dengan penyesuaian tinggi editor
        ClassicEditor
            .create(document.querySelector('#editor'), {
                // Konfigurasi tambahan
                height: '300px', // Menentukan tinggi CKEditor
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'bulletedList', 'numberedList', '|',
                    'link', 'blockQuote', '|',
                    'undo', 'redo', '|',
                    'insertTable', 'mediaEmbed', 'imageUpload', '|',
                    'alignment'
                ],
                image: {
                    toolbar: [
                        'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                },
            })
            .then(editor => {
                editorInstance = editor;

                // Set tinggi awal saat inisialisasi
                editor.ui.view.editable.element.style.minHeight = '200px';
                editor.ui.view.editable.element.style.height = '200px';

                // Pastikan tinggi tidak berubah saat fokus atau blur
                editor.ui.focusTracker.on('change:isFocused', (evt, name, isFocused) => {
                    editor.ui.view.editable.element.style.minHeight = '200px';
                    editor.ui.view.editable.element.style.height = '200px';
                });
            })
            .catch(error => {
                console.error(error);
            });

        // Event listener untuk tombol Edit di tabel
        document.body.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('edit-button-style')) {
                // Ambil data dari tombol edit
                const categoryId = e.target.getAttribute('data-id');
                const categoryTitle = e.target.getAttribute('data-title');
                const categoryDescription = e.target.getAttribute('data-description');

                // Isi form modal dengan data yang diambil
                document.getElementById('editTitle').value = categoryTitle;

                // Set konten CKEditor 5
                editorInstance.setData(categoryDescription);

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

    // Pastikan nilai dari CKEditor masuk ke dalam form saat disubmit
    document.getElementById('editCategoryForm').addEventListener('submit', function (e) {
        const description = editorInstance.getData(); // Ambil data dari CKEditor
        const textarea = document.createElement('textarea');
        textarea.name = 'description';
        textarea.value = description;
        textarea.style.display = 'none'; // Sembunyikan textarea
        this.appendChild(textarea); // Tambahkan textarea ke dalam form
    });
</script>
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
                const categoryDescription = e.target.getAttribute('data-description');

                // Isi form modal dengan data yang diambil
                document.getElementById('editTitle').value = categoryTitle;
                document.getElementById('editDescription').value = categoryDescription;

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