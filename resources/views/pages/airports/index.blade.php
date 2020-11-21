@extends('layouts.dashboard')
@section('content')
<section class="wrapper">
    <div class="p-2 d-flex justify-content-between">
        <div>
            <h3 class="font-weight-bold">Airport List</h3>
        </div>
        <div>
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </div>
    <div class="pt-4">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Total Unit</th>
                    <th scope="col">Volume (L)</th>
                </tr>
            </thead>
            <tbody>
              @foreach($airports as $airport)
                <tr>
                    <td>
                        <a href="/airport/{{$airport->id}}" class="btn btn-outline-link">
                            {{$airport->name}}
                        </a>
                    </td>
                    <td>{{$airport->getTotalUnit()}}</td>
                    <td>{{$airport->getTotalVolume()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            <button class="btn btn-outline-danger">
                <i class="fa fa-arrow-left"></i>
            </button>
            <button class="btn btn-outline-danger">
                1
            </button>
            <button class="btn btn-outline-danger">
                <i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>
@endsection
