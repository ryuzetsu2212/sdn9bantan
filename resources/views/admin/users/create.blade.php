@extends('layouts.backend.app',[
'title' => 'Tambah Users',
'contentTitle' => 'Tambah Users',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.users.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.users.store') }}">
					@csrf
					<div class="form-group">
						<label for="name">Nama</label>
						<input required="" class="form-control" type="" name="name" id="name" placeholder="">
					</div>
					<div class="form-group">
						<label for="nip">NIP</label>
						<input class="form-control" type="" name="nip" id="nip" placeholder="">
					</div>
					<div class="form-group">
						<label for="kelahiran">Tanggal Lahir</label>
						<input class="form-control" type="" name="kelahiran" id="kelahiran" placeholder="">
					</div>
					<div class="form-group">
						<label for="pangkat">Pangkat/Golongan</label>
						<input class="form-control" type="" name="pangkat" id="pangkat" placeholder="">
					</div>
					<div class="form-group">
						<label for="pendidikan">Pendidikan</label>
						<input class="form-control" type="" name="pendidikan" id="pendidikan" placeholder="">
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input required="" class="form-control" type="" name="jabatan" id="jabatan" placeholder="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input required="" class="form-control" type="" name="email" id="email" placeholder="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input required="" class="form-control" type="password" name="password" id="password" placeholder="">
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<select required="" class="form-control" name="level" id="level">
							<option value="user">User</option>
							<option value="admin">Admin</option>
						</select>
					</div>


					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop