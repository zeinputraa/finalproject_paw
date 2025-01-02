@extends('layouts.app')
@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100 text-center">
                <img src="{{ Vite::asset('resources/image/image.png') }}" class="card-img-top" alt="Gambar Dr. Rizky Ramadan">
                <div class="card-body">
                    <h5 class="card-title">Dr. Rizky Ramadani</h5>
                    <b>Bidang Keahlian</b>
                    <p class="card-text">Gangguan Kecemasan</p>
                    <div class="text-start">
                        <b>Alumnus</b>
                        <ul>
                            <li>Universitas Baiturrahmah, 2018</li>
                        </ul>
                        <b>Praktik di</b>
                        <ul>
                            <li>Kota Jambi</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-success w-100 mt-3">Chat</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center">
                <img src="{{ Vite::asset('resources/image/yy.jpeg') }}" class="card-img-top" alt="Gambar Dr. Sri Veronica Chindy">
                <div class="card-body">
                    <h5 class="card-title">Dr. Sri Veronica Chindy</h5>
                    <b>Bidang Keahlian</b>
                    <p class="card-text">Gangguan Mood</p>
                    <div class="text-start">
                        <b>Alumnus</b>
                        <ul>
                            <li>Universitas Baitussalam, 2018</li>
                        </ul>
                        <b>Praktik di</b>
                        <ul>
                            <li>Kota Lumajang</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-success w-100 mt-3">Chat</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center">
                <img src="{{ Vite::asset('resources/image/mega.jpeg') }}" class="card-img-top" alt="Gambar Dr. Syartika Megasanjaya">
                <div class="card-body">
                    <h5 class="card-title">Dr. Syartika Megasanjaya</h5>
                    <b>Bidang Keahlian</b>
                    <p class="card-text">Depresi</p>
                    <div class="text-start">
                        <b>Alumnus</b>
                        <ul>
                            <li>Universitas Baitunnajah, 2018</li>
                        </ul>
                        <b>Praktik di</b>
                        <ul>
                            <li>Kota Surabaya</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-success w-100 mt-3">Chat</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center">
                <img src="{{ Vite::asset('resources/image/aaa.jpeg') }}" class="card-img-top" alt="Gambar Dr. Sandi Ramadani">
                <div class="card-body">
                    <h5 class="card-title">Dr. Sandi Ramadani</h5>
                    <b>Bidang Keahlian</b>
                    <p class="card-text">Gangguan Kecemasan</p>
                    <div class="text-start">
                        <b>Alumnus</b>
                        <ul>
                            <li>Universitas Sanjakala, 2018</li>
                        </ul>
                        <b>Praktik di</b>
                        <ul>
                            <li>Kota Jambi</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-success w-100 mt-3">Chat</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center">
                <img src="{{ Vite::asset('resources/image/oipp.jpeg') }}" class="card-img-top" alt="Gambar Dr. Amalia Chindy">
                <div class="card-body">
                    <h5 class="card-title">Dr. Amalia Chindy</h5>
                    <b>Bidang Keahlian</b>
                    <p class="card-text">Gangguan Mood</p>
                    <div class="text-start">
                        <b>Alumnus</b>
                        <ul>
                            <li>Universitas Wisnutama, 2018</li>
                        </ul>
                        <b>Praktik di</b>
                        <ul>
                            <li>Kota Lumajang</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-success w-100 mt-3">Chat</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center">
                <img src="{{ Vite::asset('resources/image/rea.jpeg') }}" class="card-img-top" alt="Gambar Dr. Wahyu Setiawan">
                <div class="card-body">
                    <h5 class="card-title">Dr. Wahyu Setiawan</h5>
                    <b>Bidang Keahlian</b>
                    <p class="card-text">Depresi</p>
                    <div class="text-start">
                        <b>Alumnus</b>
                        <ul>
                            <li>Universitas Malinntar, 2018</li>
                        </ul>
                        <b>Praktik di</b>
                        <ul>
                            <li>Kota Surabaya</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-success w-100 mt-3">Chat</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
