@extends('dashboard.template.main')
@section('content')
@include('dashboard.profil.editFoto')
@include('dashboard.profil.editPassword')
@include('dashboard.profil.editBio')
<div class="main mt-[100px]">
    <div class="foto w-full p-6 rounded-2xl shadow-lg flex justify-center"
        style=" background: #4775af;
                ">
        <div class="foto w-full grid justify-center">
            @if ($user->img === null)
                <img class="rounded-full w-96 h-96 shadow-2xl"
                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="image description">
            @else
                <img class="rounded-full w-96 h-96 shadow-2xl" src="{{ URL::asset('storage/profile/' . $user['img']) }}"
                    alt="{{ $user->name }}" style="
                     object-fit: cover; /* Menjaga agar gambar tetap proporsional */
                     display: block
                    ">
            @endif

            <div class="mt-6">
                <span class="text-white pl-[4.5rem]">
                    Ingin merubah foto ? <button class="text-blue-300" data-modal-target="edit-profil"
                        data-modal-toggle="edit-profil">klik disini</a>
                </span>
            </div>

        </div>
    </div>
    <div class="bio rounded-2xl mt-10 shadow-2xl w-full bg-white p-6 col-span-2 flex justify-between">
        <div class="content ">

            <h3 class="mb-10 mt-5  text-2xl">Biodata</h3>
            <div class="mb-5">
                <span class="">Nama : {{ $user->name }}</span>
            </div>
            <div class="mb-5">
                <span class="">Email : {{ $user->email }}</span>
            </div>
            <div class="mb-5">
                <span class="">Role  : {{ $user->role == 1 ? 'Admin' : 'User'}}</span>
            </div>
        </div>
        <div class="edit">
            <button
                class="shadow-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-3 me-2 mb-2 focus:outline-none"
                data-modal-target="edit-bio" data-modal-toggle="edit-bio">Edit</button>
        </div>
    </div>
    <div class="bio rounded-2xl mt-10 shadow-2xl bg-white w-full p-6 col-span-2 flex justify-between">

        <span class="">Ingin merubah password ? <button class="text-blue-600" data-modal-target="edit-password"
                data-modal-toggle="edit-password">klik
                disini</button></span>

    </div>

@endsection
