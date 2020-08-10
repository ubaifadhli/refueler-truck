@extends('layouts.dashboard')
@section('content')
<section class="wrapper">
<div class="p-2 d-flex justify-content-between">
  <div class="d-flex">
    <div>
      <a href="/airport/1" class="btn btn-outline-link">
        <i class="fa fa-arrow-left"></i>
      </a>
    </div>
    <div>
      <h3 class="font-weight-bold">Log</h3>
    </div>
  </div>
  <div>
    <div>
      <input type="text" class="form-control" placeholder="Search">    
    </div>
  </div>
</div>
<div class="d-flex justify-content-end align-items-center pr-2">
  <div class="mr-2">
    <h6 class="font-weight-bold">Entries</h6>
  </div>
  <div>
    <select class="form-control">
      <option value="3">3</option>
    </select>
  </div>
</div>
<div class="pt-4">
  <table class="table text-center">
    <thead>
        <tr>
            <th scope="col">Tanker</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>
            <th scope="col">Receipt ID</th>
            <th scope="col">Gross Volume (L)</th>
            <th scope="col">Totalizer</th>
            <th scope="col">Product</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>Jua-01</td>
        <td>2020-01-14 09:38:46</td>
        <td>2020-01-14 10:38:46</td>
        <td>260</td>
        <td>1285.0</td>
        <td>8031285.0</td>
        <td>Jet A-1</td>
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