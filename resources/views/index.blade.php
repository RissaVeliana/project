@extends('layouts.master')
@section('content')

		@foreach ($ortu as $key) <hr> 
			Nama Ibu : {{$key->nama_ibu}} <br>
			Nama Ayah : {{$key-> nama_ayah}} <br>
			Umur Ibu : {{$key->umur_ibu}}  <br>
			Umur Ayah : {{$key->umur_ayah}} <br>
			Nama Anak :
			@foreach ($key->siswa as $data)
			<li>{{$data->nama}}</li>
			@endforeach
			<hr>
		@endforeach
@endsection