@extends('layouts.backend-user.app',[
'title' => 'Profile',
'contentTitle' => 'Profile',
])
@section('content')
<x-alert></x-alert>
<div class="row">
	<x-card>
		<x-slot name="col">6</x-slot>
		<x-slot name="header">Profil Saya</x-slot>
		<!-- <div class="form-group">
			<label>Gambar</label>
			@if(auth()->user()->gambar)
			<img src="{{ asset('img/icons/laravel.jpg' . auth()->user()->gambar) }}" class="img-fluid" alt="Gambar Profil">
			@else
			<p>Tidak ada gambar profil</p>
			@endif
		</div> -->

		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="" disabled="" value="{{ auth()->user()->name }}" class="form-control" name="">
		</div>
		<div class="form-group">
			<label>NIP</label>
			<input type="" disabled="" value="{{ auth()->user()->nip }}" class="form-control" name="nip">
		</div>
		<div class="form-group">
			<label>Kelahiran</label>
			<input type="" disabled="" value="{{ auth()->user()->kelahiran }}" class="form-control" name="kelahiran">
		</div>
		<div class="form-group">
			<label>Pangkat/Golongan</label>
			<input type="" disabled="" value="{{ auth()->user()->pangkat }}" class="form-control" name="pangkat">
		</div>
		<div class="form-group">
			<label>Pendidikan</label>
			<input type="" disabled="" value="{{ auth()->user()->pendidikan }}" class="form-control" name="pendidikan">
		</div>
		<div class="form-group">
			<label>Jabatan</label>
			<input type="" disabled="" value="{{ auth()->user()->jabatan }}" class="form-control" name="">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="" disabled="" value="{{ auth()->user()->email }}" class="form-control" name="">
		</div>
	</x-card>

	<x-card>
		<x-slot name="col">6</x-slot>
		<x-slot name="header">Edit Profil</x-slot>
		<form method="POST" action="{{ route('user-profile-information.update') }}">
			@csrf
			@method('put')
			<!-- <div class="form-group">
				<label>Unggah Gambar Profil</label>
				<input type="file" class="form-control-file @error('gambar') is-invalid @enderror" name="gambar">
				@error('gambar')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div> -->
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" value="{{ auth()->user()->name }}" class="form-control @error('name') is-invalid @enderror" name="name">
				@error('name')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label>NIP</label>
				<input type="text" value="{{ auth()->user()->nip }}" class="form-control @error('nip') is-invalid @enderror" name="nip">
				@error('nip')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Kelahiran</label>
				<input type="text" value="{{ auth()->user()->kelahiran }}" class="form-control @error('kelahiran') is-invalid @enderror" name="kelahiran">
				@error('kelahiran')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Pangkat/Golongan</label>
				<input type="text" value="{{ auth()->user()->pangkat }}" class="form-control @error('pangkat') is-invalid @enderror" name="pangkat">
				@error('pangkat')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Pendidikan</label>
				<input type="text" value="{{ auth()->user()->pendidikan }}" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan">
				@error('pendidikan')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Jabatan</label>
				<input type="text" value="{{ auth()->user()->jabatan }}" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan">
				@error('jabatan')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" value="{{ auth()->user()->email }}" class="form-control @error('email') is-invalid @enderror" name="email">
				@error('email')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<!-- <label>Level</label> -->
				<input type="hidden" value="{{ auth()->user()->level }}" class="form-control @error('level') is-invalid @enderror" name="level">
				@error('level')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
			</div>
		</form>
	</x-card>

</div>
@stop