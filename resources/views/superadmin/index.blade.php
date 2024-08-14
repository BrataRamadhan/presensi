@extends('layouts.main')

@section('contents')

<div>

        <a class="{{Route('create')}}" href ="" >
                       tes
        </a> 
        </div>
    <div class="section" id="user-section">
            <div id="user-detail">
                <div class="avatar">
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded">
                </div>
                <div id="user-info">

                @auth
                    <h3 id="name">
                       {{Auth::user()->name}}
                    </h3>
                @endauth
                    
                    <span id="user-role">Head of IT</span>
                </div>

                <div>
                <form action="/logout" method="post">
            @csrf
           
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>

        
                </div>
            </div>
        </div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
        <div class="section" id="menu-section">
            <div class="card">
                <div class="card-body text-center">
                    <div class="list-menu">
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="" class="green" style="font-size: 40px;">
                                    <ion-icon name="person-sharp"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                <span class="text-center">Profil</span>
                            </div>
                        </div>
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="" class="danger" style="font-size: 40px;">
                                    <ion-icon name="calendar-number"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                <span class="text-center">Cuti</span>
                            </div>
                        </div>
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="" class="warning" style="font-size: 40px;">
                                    <ion-icon name="document-text"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                <span class="text-center">Histori</span>
                            </div>
                        </div>
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="" class="orange" style="font-size: 40px;">
                                    <ion-icon name="location"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                Lokasi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mt-2" id="presence-section">
            <div class="todaypresence">
                <div class="row">
                    <div class="col-6">
                        <div class="card gradasigreen">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="iconpresence">
                                        <ion-icon name="camera"></ion-icon>
                                    </div>
                                    <div class="presencedetail">
                                        <h4 class="presencetitle">Masuk</h4>
                                        <span>07:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card gradasired">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="iconpresence">
                                        <ion-icon name="camera"></ion-icon>
                                    </div>
                                    <div class="presencedetail">
                                        <h4 class="presencetitle">Pulang</h4>
                                        <span>12:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            </div>
        </div>
@endsection