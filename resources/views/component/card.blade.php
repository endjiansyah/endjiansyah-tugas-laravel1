<div class="card col-lg-3 my-2">
    <div class="card-body">
    <img src="{{ $usr['foto'] }}" alt="" class="card-img-top">
    <h4>{{ $usr['nama'] }}</h4>
        {{ $usr['bio'] }}<br>
        {{ $usr['alamat'] }}<br>
        <b>{{ $usr['role'] }}</b><br>
        <b>{{ $usr['active']? 'aktif':'nonaktif' }}</b><br>
    </div>
</div>