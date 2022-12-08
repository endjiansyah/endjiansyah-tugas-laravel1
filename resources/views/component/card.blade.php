<div class="card col-lg-3 my-2 p-1">
    <img src="{{ $usr['foto'] }}" alt="" class="card-img-top">
    <div class="card-body">
    <h4>{{ $usr['nama'] }}</h4>
        {{ $usr['bio'] }}<br>
        {{ $usr['alamat'] }}<br>
        <b>{{ $usr['role'] }}</b><br>
        <b>{{ $usr['active']? 'aktif':'nonaktif' }}</b><br>
    </div>
</div>