@extends('layouts.dashboard')
@section('content')
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div id="profile-image" class="col-sm-1">
            <img src="img/default-profile.jpg" class="rounded-circle img-fluid">
        </div>
        <div class="col-sm-4">
            <h2>Dashboard</h2>
            <h5>welcome back admin</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
        <section id="dashboard-image" class="shadow rounded"></section>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9">
        <section class="panel shadow rounded">
            <canvas id="canvas1"></canvas>
        </section>
        </div>
        <div class="col-sm-3">
        <section class="panel shadow rounded">
            <h4>Last Activity</h4>
            <b>Jua-02</b> gain 20 transaction<br/>
            <b>Jua-03</b> send 1000 volume<br/>
            <b>Jua-05</b> gain trouble refueler<br/>
            <b>Jua-02</b> send 1500 volume<br/>
        </section>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
        <section class="panel shadow rounded">
            <table id="table1"></table>
        </section>
        </div>
    </div>
    <!-- page end-->
    </section>
@endsection
