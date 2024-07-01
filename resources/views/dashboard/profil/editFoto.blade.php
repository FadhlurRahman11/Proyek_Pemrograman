<!-- Main modal -->
<div id="edit-profil" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Edit Foto
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="edit-profil">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <?php
            $file = 'shadow text-sm file:py-3 file:px-6 file:rounded-lg file:text-white file:!bg-blue-700 block w-full text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none placeholder-gray-200';
            ?>
            <!-- Modal body -->
            <form method="post" action="{{ route('profile.update.foto', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="p-4 md:p-5 space-y-4">
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Update Foto Profile</label>
                        <input name="img" class="{{$file}}" id="file_input" type="file" value="{{ $user->img }}">
                        <img src="{{ URL::asset('storage/profile/' . $user['img']) }}" style="width:80px;margin-top: 10px;">

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button data-modal-hide="edit-profil" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                    <button data-modal-hide="edit-profil" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
                </div>
            </form>
        </div>
    </div>
</div>
