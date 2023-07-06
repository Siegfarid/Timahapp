@extends('app')

@section('title', 'Data Penduduk') 

@section('content')
<div class="card">
  <div class="card-header">
    <h4>
      <a href="penduduk/add" class="btn btn-primary">
      <i class="fa fa-edit">
        Tambah
      </i>
      </a>
  </h4>
  </div>
  <div class="card-body">
    <div class="section-title">Responsive</div>
    <div class="table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
