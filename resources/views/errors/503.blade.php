@extends('errors.custom')
@section('judul', '503')

@section('konten')
    <div class='error-404'>503</div>
    <h2>Service Unavailable!!!</h2>
    <hr/>
    <p>Ada beberapa kemungkinan :</p>
    <ul>
    <li>Server sedang maintenance</li>
    <li>Server error</li>
    </ul>
    <p>Silahkan coba lagi nanti.</p>
@endsection
