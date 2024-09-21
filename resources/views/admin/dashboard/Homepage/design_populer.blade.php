@extends('admin.layouts.admin')

@section('content')

<div class="flex flex-col justify-end mb-6 gap-5">
    <h1 class="text-3xl font-bold">Manage Design Popular Cards</h1>
    <p>Use the buttons below to edit individual cards for the Design Popular section.</p>

    <!-- Card Selection Buttons -->
    <div class="flex gap-3 mb-4">
        @for ($i = 1; $i <= 4; $i++)
            <button type="button" class="flex py-2 px-5 bg-[#F4F0EC] font-semibold w-fit rounded-xl" onclick="showCard({{ $i }})">Edit Card {{ $i }}</button>
        @endfor
    </div>

    <!-- Card Forms -->
    <div class="grid grid-cols-1 gap-6">
        @for ($i = 0; $i < 4; $i++)
            <form id="card-form-{{ $i+1 }}" class="border p-4 rounded-md {{ $i > 0 ? 'hidden' : '' }}" action="{{ route('admin.dashboard.homepage.design_popular.store', ['card' => $i+1]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3 class="font-bold text-xl">Card {{ $i + 1 }}</h3>

                <!-- Title Input -->
                <div class="mb-4">
                    <label class="block text-gray-700">Title for Card {{ $i + 1 }}</label>
                    <input type="text" name="title" class="mt-2 p-2 border rounded w-full" placeholder="Title" value="{{ $cards[$i]->title ?? '' }}" required>
                </div>

                <!-- Description Input -->
                <div class="mb-4">
                    <label class="block text-gray-700">Description for Card {{ $i + 1 }}</label>
                    <textarea name="description" class="mt-2 p-2 border rounded w-full" placeholder="Description">{{ $cards[$i]->description ?? '' }}</textarea>
                </div>

                <!-- Image Input -->
                <div class="mb-4">
                    <label class="block text-gray-700">Image for Card {{ $i + 1 }}</label>
                    <input type="file" name="image" class="mt-2 p-2 border rounded w-full">
                    @if (isset($cards[$i]->image))
                        <img src="{{ asset('storage/' . $cards[$i]->image) }}" alt="Image for Card {{ $i + 1 }}" class="w-32 mt-2">
                    @endif
                </div>

                <!-- Submit and Reset Buttons -->
                <div class="mt-6 flex">
                    <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Save Card {{ $i + 1 }}</button>
                    <button type="button" class="ml-4 bg-red-500 text-white font-bold py-2 px-4 rounded" onclick="resetCard({{ $i + 1 }})">Reset Card {{ $i + 1 }}</button>                </div>
            </form>
        @endfor
    </div>
</div>

<!-- JavaScript to Toggle Between Card Forms -->
<script>
    function showCard(cardNumber) {
        // Hide all card forms
        for (let i = 1; i <= 4; i++) {
            document.getElementById('card-form-' + i).classList.add('hidden');
        }

        // Show the selected card form
        document.getElementById('card-form-' + cardNumber).classList.remove('hidden');
    }

    function resetCard(cardNumber) {
        if (confirm('Are you sure you want to reset this card?')) {
            // Kirim request ke server untuk menghapus card berdasarkan cardNumber
            let form = document.getElementById('card-form-' + cardNumber);
            form.action = "{{ route('admin.dashboard.homepage.design_popular.delete') }}" + "?card=" + cardNumber;
            form.submit();
        }
    }
</script>

<script>
    function resetCard(cardNumber) {
        const form = document.getElementById(`card-form-${cardNumber}`);
        // Reset form values
        form.reset();
        // Menghapus preview image jika ada
        const imgPreview = form.querySelector('img');
        if (imgPreview) {
            imgPreview.src = ''; // Menghapus tampilan gambar
        }
    }
</script>
    
@endsection