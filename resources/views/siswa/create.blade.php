@extends('layouts.master')
@section('content')

<div class="row">
	<center><h1>Data Siswa</h1><br></center>
	<div class="panel panel-success">
		<div class="panel-heading"> Data Siswa
		<div class="panel-title pull-right">
			<a href="{{URL::previous()}} ">Kembali</a></div></div>

			<div class="panel-body">
				<form action="{{route('siswa.store')}}" method="post"> 
				{{csrf_field()}}

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="na" class="form-control" required>
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
					<input type="text" name="umur" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="radio" name="jk" required value="laki laki">laki laki
					<input type="radio" name="jk"  required value="perempuan">Perempuan
				</div>

				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea rows="10" name="alamat" class="form-control" required></textarea>
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