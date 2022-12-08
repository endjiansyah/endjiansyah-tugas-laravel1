@extends('template')

@php    
$users = [
[
    "nama" => "si A",
    "foto" => "https://picsum.photos/100",
    "bio" => "ini bio",
    "active" => true,
    "alamat" => "ini alamatnya siapa",
    "role" => "admin",
],
[
    "nama" => "si B",
    "foto" => "https://picsum.photos/100",
    "bio" => " aaa ssd ad",
    "active" => true,
    "alamat" => "alamatnya si B",
    "role" => "admin",
],
[
    "nama" => "si C",
    "foto" => "https://picsum.photos/100",
    "bio" => "peee baaangg, bukan p banget",
    "active" => true,
    "alamat" => "acdcdmt",
    "role" => "admin",
],
[
    "nama" => "si D",
    "foto" => "https://picsum.photos/100",
    "bio" => "pppppp p banget",
    "active" => false,
    "alamat" => "dddd dd dddd dd",
    "role" => "admin",
],
[
    "nama" => "si E",
    "foto" => "https://picsum.photos/100",
    "bio" => "bentar bentar",
    "active" => true,
    "alamat" => "eeeee eee eee eeeee",
    "role" => "admin",
],
[
    "nama" => "si F",
    "foto" => "https://picsum.photos/100",
    "bio" => "tak tambahin",
    "active" => false,
    "alamat" => "aaaaaa aaaaaaa aaaaaa",
    "role" => "user",
],
[
    "nama" => "si G",
    "foto" => "https://picsum.photos/100",
    "bio" => "heh si bapak asdasd",
    "active" => false,
    "alamat" => "bbbb bbb bbbb",
    "role" => "user",
],
[
    "nama" => "si H",
    "foto" => "https://picsum.photos/100",
    "bio" => "ccccccc jangan pak ssss aaaa",
    "active" => true,
    "alamat" => "acccc cc",
    "role" => "admin",
],
[
    "nama" => "si I",
    "foto" => "https://picsum.photos/100",
    "bio" => "ddd asdasdas asdasd",
    "active" => true,
    "alamat" => "dddd dd dddd dd",
    "role" => "user",
],
[
    "nama" => "si J",
    "foto" => "https://picsum.photos/100",
    "bio" => "eeeee asdasdasdasd qqqqq",
    "active" => true,
    "alamat" => "eeeee eee eee eeeee",
    "role" => "user",
]
];

$filter = [
    "active" => true,
    "role" => 'admin'
]
@endphp

@section('sect1')

<div class="card my-2">
    <div class="card-header">Filternya</div>
    <div class="card-body">
        <div class="row">
            @foreach ($users as $usr)

            {{-- ----include when---- --}}
            @includeWhen($usr['active'] == $filter['active'] && $usr['role'] == $filter['role'], 'component.card')
            {{-- ----include when---- --}}

            @endforeach
        </div>
    </div>
</div>

@endsection
@section('title','enake opo?')
@section('icon','https://picsum.photos/30')