@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>Data Orang Tua</h1><br></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Data Orang Tua 
		<div class="panel-title pull-right">
			<a href="{{URL::previous()}} ">Kembali</a></div></div>

			<div class="panel-body">
				<form action="{{route('orangtua.update', $ortu->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				

				<div class="form-group">
					<label class="control-lable">Nama Ayah</label>
					<input type="text" name="na" class="form-control" value="{{$ortu->nama_ayah}} " required>
				</div>

				<div class="form-group">
					<label class="control-lable">Nama Ibu</label>
					<input type="text" name="ni" class="form-control" value="{{$ortu->nama_ibu}} " required>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Umur Ayah</label>
					<input type="text" name="ua" class="form-control" value="{{$ortu->umur_ayah}} " required>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Umur Ibu</label>
					<input type="text" name="ui" class="form-control" value="{{$ortu->umur_ibu}} " required>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea rows="10" name="alamat" class="form-control" required>{{$ortu->alamat}}</textarea>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>


				</form>
				</div>
		</div>
	</div>
@endsection