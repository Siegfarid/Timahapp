@extends('app')

@section('title', 'Tambah Penduduk')

@section('content')

<div class="card">
    <div class="card-header ">
      <h4>Form Input</h4>
    </div>

<div class="card-body ">
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nama lengkap</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label>NIK</label>
        <input type="text" class="form-control">
    </div>
    </div>

    <div class="form-group">
        <label class="d-block">Gender</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="laki-laki" id="L">
        <label class="form-check-label" for="L">L</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="perempuan" id="P">
        <label class="form-check-label" for="P">P</label>
    </div>
    </div>
<div class="form-group">
    <label>Hubungan Keluarga</label>
    <select class="form-control">
        <option></option>
        <option>kepala keluaraga</option>
        <option>istri</option>
        <option>anak</option>
        <option>cucu</option>
        <option>menantu</option>
        <option>orang tua</option>
        <option>mertua</option>
        <option>famili lain</option>
        <option>pembantu</option>
        <option>lainnya</option>
    </select>
</div>

<div class="form-group">
    <label>Jenis Kependudukan</label>
    <select class="form-control">
        <option></option>
        <option>tetap</option>
        <option>sementara</option>
    </select>
</div>

</div>
  @endsection