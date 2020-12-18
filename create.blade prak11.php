@extends('praktikum')
@section('JUDUL PAGE','penambahan data stok produk')
@section('KONTEN')
<nav aria-label="breadcrumb">
<ol class="breadcrumb-item"><a href="{{route('prak11.index')}}">produk</a></li>
<li class="breadcrumb-item activie" aria-current="page">penambahan produk</li>
</ol>
</nav>
<h3>penambahan data produk</h3>

<div class="container-fluid">
<form class="row g-3" method="POST" action="{{route('prak11.store')}}">
{{csrf_field()}}
<input type="hiden" name="_method" value="POST">
<div class="mb-3">
  <label for="exampleformControlInput" class="form-label">Nama produk</label>
  <input type="text" name="txproduk" class="form-control" value="{{old('txproduk')}}">
  @if($errors->has("txproduk"))
  <span class='badge bg-danger'>{{$errors->firist('txproduk') }}</span>
  @endif
</div>
<div class="mb-3">
<label for="exampleformControlTextarea1" class="form-label">Harga Beli</label>
<input type="text" name="txHrgBeli" class="form-control" value="{{old(txHrgBeli')}}">
@if($errors->has('txHrgBeli'))
<span class='badge bg-danger'>{{$errors->firist('txHrgBeli')}}</span>
@endif
</div>
<div class="mb-3">
<label for="exampleformControlTextarea1" class="form-label">Harga jual</label>
<input type="text" name="txHrgjual" class="form-control" value="{{old(txHrgjual')}}">
@if($errors->has('txHrgjual'))
<span class='badge bg-danger'>{{$errors->firist('txHrgjual')}}</span>
@endif
</div>
<div class="mb-3">
<label for="exampleformControlTextarea1" class="form-label">jumlah stok</label>
<input type="text" name="txQTY" class="form-control" value="{{old(txQTY')}}">
@if($errors->has('txQTY'))
<span class='badge bg-danger'>{{$errors->firist('txQTY')}}</span>
@endif
</div>
<div class="mb-3">
<label for="exampleformControlTextarea1" class="form-label">kategori</label>
<select class="form-select" name="txkategori">
@foreach($KData as $i=>$p)
<option value="{{$p->idkat}}">{{$p->kategori }}</option>
@endforeach
</select>
@if($errors->has('txkategori'))
<span class='badge bg-danger'>{{$errors->firist('txkategori')}}</span>
@endif
</div>
<button type="submit" class="btn btn-primary">Tambah Data Baru</button>
</form>
</div>
@stop