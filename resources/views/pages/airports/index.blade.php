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
                <tr>
                    <td>
                        <a href="/airport/1" class="btn btn-outline-link">
                            Soekarno Hatta
                        </a>
                    </td>
                    <td>2</td>
                    <td>1554532</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            <button class="btn btn-outline-primary">
                <i class="fa fa-arrow-left"></i>
            </button>
            <button class="btn btn-outline-primary">
                1
            </button>
            <button class="btn btn-outline-primary">
                <i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>
@endsection
