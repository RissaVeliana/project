@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>Edit Siswa</h1><br></center>
	<div class="panel panel-success">
		<div class="panel-heading"> Data Siswa 
		<div class="panel-title pull-right">
			<a href="{{URL::previous()}} ">Kembali</a></div></div>

			<div class="panel-body">
				<form action="{{route('siswa.update', $siswa->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="na" class="form-control" value="{{$siswa->nama}} " required>
				</div>

				<div class="form-group">
					<label class="control-lable">Nama Orang Tua</label>
					<select name="no" class="form-control">
						@foreach($ortu as $a)
						<option value="{{$a->id}}">{{$a->nama_ayah}} dan 
								{{$a->nama_ibu}}</option>
						@endforeach
					</select>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="text" name="umur" class="form-control" value="{{$siswa->umur}} " required>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="radio" name="jk" required value="laki laki" {{$siswa->jk=='laki laki'?'checked':''}}>Laki-Laki
					<input type="radio" name="jk"  required value="perempuan" {{$siswa->jk=='perempuan'?'checked':''}}>Perempuan
				</div>

				
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea rows="10" name="alamat" class="form-control" required>{{$siswa->alamat}}</textarea>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success">Edit</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>


				</form>
				</div>
		</div>
	</div>
@endsection