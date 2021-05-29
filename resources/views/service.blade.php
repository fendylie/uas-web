@extends('layouts.main')

@section('title', 'Service')

@section('container')

<!-- Header -->
<header class="header relative w-full h-screen bg-no-repeat bg-center">
    <div class="items-center justify-center h-full flex">
        <div class="container flex text-center flex-col">
            <h2 class="tagline">Services</h2>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Product -->
<section class="section product">
    <div class="text-center mb-5">
        <h2 class="title">Our Service</h2>
    </div>
    <div class="sm:flex block text-center">
        <div class="sm:w-4/12 w-full relative m-4">
            <div class="card card-custom bg-white border-white border-0">
                <div class="card-custom-img">
                </div>
                <div class="card-custom-avatar">
                    <img class="w-full" src="{{asset('assets/img/Regular.png')}}" alt="Avatar" />
                </div>
                <div class="card-body text-left" style="overflow-y: auto">
                    <h4 class="text-2xl"><strong>Regular Shipping</strong></h4>
                    <p class="card-text">Regular Shipping is a light freight type that is good for domestic
                        shipping. Delivery is made by car and motorcycle
                        depending on the distance, weight and size of the goods. Usually intended for online
                        store orders, delivery of goods
                        outside the island, and others.
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <table class="table table-auto w-full">
                        <thead>
                            <th class="w-1/3">Standard</th>
                            <th class="w-1/3">Super</th>
                            <th class="w-1/3">Instant</th>
                        </thead>
                        <tbody>
                        <tr class="w-1/3">
                            <td>Rp. 10,000</td>
                            <td>Rp. 100,000</td>
                            <td>Rp. 50,000</td>
                        </tr>
                        <tr class="w-1/3">
                            <td>5-8 Hari</td>
                            <td>10-15 Hari</td>
                            <td>5-12 Hari</td>
                        </tr>
                        <tr class="w-1/3">
                            <td>50%</td>
                            <td>50%</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="sm:w-4/12 w-full relative m-4">
            <div class="card card-custom bg-white border-white border-0">
                <div class="card-custom-img">
                </div>
                <div class="card-custom-avatar">
                    <img class="w-full" src="{{asset('assets/img/Trucking.png')}}" alt="Avatar" />
                </div>
                <div class="card-body text-left" style="overflow-y: auto">
                    <h4 class="text-2xl"><strong>Trucking</strong></h4>
                    <p class="card-text">Trucking Shipping is a type of delivery of vehicles both motorbikes and
                        cars to various regions in Indonesia. Deliveries
                        are made by truck trailers by a professional team.
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <table class="table table-auto w-full">
                        <thead>
                            <th class="w-1/3">Standard</th>
                            <th class="w-1/3">Super</th>
                            <th class="w-1/3">Instant</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Rp. 20,000</td>
                            <td>Rp. 200,000</td>
                            <td>Rp. 100,000</td>
                        </tr>
                        <tr>
                            <td>1-4 Hari</td>
                            <td>5-10 Hari</td>
                            <td>3-8 Hari</td>
                        </tr>
                        <tr>
                            <td>75%</td>
                            <td>75%</td>
                            <td>75%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="sm:w-4/12 w-full relative m-4">
            <div class="card card-custom bg-white border-white border-0">
                <div class="card-custom-img"></div>
                <div class="card-custom-avatar">
                    <img class="w-full" src="{{asset('assets/img/cargo-ship.png')}}" alt="Avatar" />
                </div>
                <div class="card-body text-left" style="overflow-y: auto">
                    <h4 class="text-2xl"><strong>Cargo</strong></h4>
                    <p class="card-text">Cargo Shipping is a type of shipping intended for shipping to and from
                        abroad. The shipment will be by plane or ship.
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <table class="table-auto w-full">
                        <thead>
                            <th class="w-1/3">Standard</th>
                            <th class="w-1/3">Super</th>
                            <th class="w-1/3">Instant</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rp. 40,000</td>
                                <td>Rp. 400,000</td>
                                <td>Rp. 200,000</td>
                            </tr>
                            <tr>
                                <td>1 Hari</td>
                                <td>1-5 Hari</td>
                                <td>1-4 Hari</td>
                            </tr>
                            <tr>
                                <td>100%</td>
                                <td>100%</td>
                                <td>100%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product -->

<!-- Gallery -->
<section class="section gallery">
    <div class="text-center mb-5">
        <h2 class="title">Gallery</h2>
    </div>
    <div class="sm:flex block">
        <div class="sm:w-1/3 w-full mb-4 mx-2">
            <img src="https://images.unsplash.com/photo-1607227063002-677dc5fdf96f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1493946740644-2d8a1f1a6aff?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1573014089159-8ee711dc5a8e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />
        </div>

        <div class="sm:w-1/3 w-full mb-4 mx-2">
            <img src="https://images.unsplash.com/photo-1609143739217-01b60dad1c67?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8c2hpcHBpbmd8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1543709323-1f653b58d995?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1576423596782-8c5478efd11f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />
        </div>

        <div class="sm:w-1/3 w-full mb-4 mx-2">
            <img src="https://images.unsplash.com/photo-1527908147823-068bba50c255?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1449586919022-f3dfddc48a71?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />

            <img src="https://images.unsplash.com/photo-1585713181935-d5f622cc2415?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=600&q=60"
                 class="w-full rounded-lg shadow-lg mb-4" alt="" />
        </div>
    </div>
</section>
<!-- End Gallery -->

@endsection
