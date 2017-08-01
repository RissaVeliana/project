@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>Data Siswa</h1><br></center>
	<div class="panel panel-success">
		<div class="panel-heading"> Data Siswa 
		<div class="panel-title pull-right">
			<a href="{{URL::previous()}} ">Kembali</a></div></div>

			<div class="panel-body">
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="na" class="form-control" value="{{$siswa->nama}} " readonly>
				</div>

				<div class="form-group">
					<label class="control-lable">Nama Orang Tua</label>
					<input type="text" name="no" class="form-control" value="{{$siswa->nama_ayah}} dan {{$siswa->nama_ibu}}" readonly>
		
					</select>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="text" name="umur" class="form-control" value="{{$siswa->umur}} " readonly>
				</div>

				
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea rows="10" name="alamat" class="form-control" readonly>{{$siswa->alamat}}</textarea>
				</div>

				</form>
				</div>
		</div>
	</div>
@endsection