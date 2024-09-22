@extends('admin.layouts.main')


@section('content')

<div class="flex flex-col gap-3">
    <h2 class="font-bold text-[24px]">Pengaturan Realisasi Pembangunan</h2>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple-style">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Link YouTube</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($realisasis as $realisasi)
                        <tr>
                            <td>{{ $realisasi->id }}</td>
                            <td>
                                @if($realisasi->image)
                                <img src="{{ asset($realisasi->image) }}" alt="Image {{ $realisasi->id }}" class="w-20 h-20 object-cover">
                                @else
                                    <img src="https://via.placeholder.com/100" alt="Placeholder" class="w-20 h-20 object-cover">
                                @endif
                            </td>
                            <td>
                                @if($realisasi->link_youtube)
                                    <a href="{{ $realisasi->link_youtube }}" target="_blank">{{ $realisasi->link_youtube }}</a>
                                @else
                                    No YouTube Link
                                @endif
                            </td>
                            <td class="flex justify-between items-start gap-3">
                                <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                    data-id="{{ $realisasi->id }}" 
                                    data-image="{{ asset($realisasi->image) }}"
                                    data-link="{{ $realisasi->link_youtube }}">Edit</button>
                                <!-- Form untuk penghapusan -->
                                <form id="delete-form-{{ $realisasi->id }}" action="#" method="POST" style="display: none;">
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
    <!-- Modal Edit -->
    <!-- Modal -->
<div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg w-1/3">
        <h2 class="text-2xl font-bold mb-4">Edit Video</h2>
        <form id="editCategoryForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="editImage" class="block text-gray-700 font-bold mb-2">Upload Gambar:</label>
                <input type="file" id="editImage" name="image" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="editYoutubeLink" class="block text-gray-700 font-bold mb-2">Link YouTube:</label>
                <input type="url" id="editYoutubeLink" name="youtube_link" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="https://www.youtube.com/watch?v=your_video_id">
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
            // Mendapatkan elemen modal dan tombol
            var modal = document.getElementById('editModal');
            var closeModalButton = document.getElementById('closeEditModalButton');
    
            // Fungsi untuk menampilkan modal
            function showModal() {
                modal.classList.remove('hidden');
            }
    
            // Fungsi untuk menyembunyikan modal
            function hideModal() {
                modal.classList.add('hidden');
            }
    
            // Event listener untuk tombol "Batal"
            closeModalButton.addEventListener('click', hideModal);
    
            // Event listener untuk tombol "Edit" di tabel
            document.body.addEventListener('click', function (e) {
                if (e.target && e.target.classList.contains('edit-button-style')) {
                    // Ambil data dari tombol edit
                    const categoryId = e.target.getAttribute('data-id');
                    const youtubeLink = e.target.getAttribute('data-link');
                    const imageSrc = e.target.getAttribute('data-image');
    
                    // Isi form modal dengan data yang diambil
                    document.getElementById('editYoutubeLink').value = youtubeLink;
    
                    // Set action form dengan ID kategori yang benar
                    document.getElementById('editCategoryForm').action = `/admin/dashboard/pages/home/video-update/${categoryId}`;
    
                    // Tampilkan modal
                    showModal();
                }
            });
    
            // Menyembunyikan modal jika area di luar modal diklik
            modal.addEventListener('click', function (e) {
                if (e.target === modal) {
                    hideModal();
                }
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