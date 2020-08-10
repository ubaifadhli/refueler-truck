@extends('layouts.dashboard')
@section('content')
<section class="wrapper">
  <div class="p-2 d-flex justify-content-between">
    <div class="d-flex">
      <div>
        <a href="/airport" class="btn btn-outline-link">
          <i class="fa fa-arrow-left"></i>
        </a>
      </div>
      <div>
        <h3 class="font-weight-bold">Log Report</h3>
      </div>
    </div>
    <div class="d-flex">
      <div class="p-2">Unit</div>
      <div class="p-2 bg-white shadow-sm rounded">
        Soeta-01
      </div>
    </div>
  </div>
  <div class="pt-4">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Date Time</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">Stop Time</th>
                    <th scope="col">Receipt ID</th>
                    <th scope="col">Total Volume (L)</th>
                    <th scope="col">Total Warning</th>
                    <th scope="col">Product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2020-01-14 09:38:46</td>
                    <td>09:38:46</td>
                    <td>10:38:46</td>
                    <td>260</td>
                    <td>216808</td>
                    <td>1</td>
                    <td>
                      <a href="/airport/1/log/1" class="btn btn-outline-link">Jet A-1</a>
                    </td>
                </tr>
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