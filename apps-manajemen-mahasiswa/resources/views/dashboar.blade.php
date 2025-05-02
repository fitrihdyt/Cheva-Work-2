@extends('index')

@section('content')
<div class="container mt-5">
    <h2>Selamat datang, {{ session('username') }}</h2>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger mt-3">Logout</button>
    </form>
</div>
@endsection
