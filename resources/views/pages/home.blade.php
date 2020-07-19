@extends('layouts.base')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <h2>Dashboard</h2>
            <div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <div class="panel-body">col-sm-6</div>
                        <canvas id="canvas1"></canvas>
                    </section>
                </div>
                <div class="col-sm-6">
                    <section class="panel">
                        <div class="panel-body">col-sm-6</div>
                        <canvas id="canvas2"></canvas>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
