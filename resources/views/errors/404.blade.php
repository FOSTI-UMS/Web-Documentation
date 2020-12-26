
@extends('errors.custom')
@section('judul', '404')

@section('konten')
    <div class='error-404'>404</div>
    <h2>Jodoh yang anda cari tidak dapat ditemukan!!!</h2>
    <hr/>
    <p>Mungkin dia telah menjadi jodoh orang lain, silahkan coba tips dibawah :</p>
    <ul>
    <li>Tinggalkanlah <strong>SADBOY</strong>, karena udah ga jaman.</li>
    <li>Click <strong>
    <a href='{{route('home')}}' title='Homepage'>here</a>
    </strong> untuk menjadi <strong>FAKBOY</strong>.</li>
    <li>Anti bacot-bacot club.</li>
    </ul>
@endsection
