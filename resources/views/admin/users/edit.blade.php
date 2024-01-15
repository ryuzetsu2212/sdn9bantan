@extends('layouts.backend.app',[
'title' => 'Edit Users',
'contentTitle' => 'Edit Users',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.users.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.users.update',$user->id) }}">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<label for="name">Nama</label>
						<input value="{{ $user->name }}" required="" class="form-control" type="" name="name" id="name" placeholder="">
					</div>
					<div class="form-group">
						<label for="nip">NIP</label>
						<input value="{{ $user->nip }}" class="form-control" type="" name="nip" id="nip" placeholder="">
					</div>
					<div class="form-group">
						<label for="kelahiran">Tanggal Lahir</label>
						<input value="{{ $user->kelahiran }}" class="form-control" type="" name="kelahiran" id="kelahiran" placeholder="">
					</div>
					<div class="form-group">
						<label for="pangkat">Pangkat/Golongan</label>
						<input value="{{ $user->pangkat }}" class="form-control" type="" name="pangkat" id="pangkat" placeholder="">
					</div>
					<div class="form-group">
						<label for="pendidikan">Pendidikan</label>
						<input value="{{ $user->pendidikan }}" class="form-control" type="" name="pendidikan" id="pendidikan" placeholder="">
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input value="{{ $user->jabatan }}" required="" class="form-control" type="" name="jabatan" id="jabatan" placeholder="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input value="{{ $user->email }}" required="" class="form-control" type="" name="email" id="email" placeholder="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input value="{{ $user->password }}" type="hidden" name="old_password">
						<input class="form-control" type="password" name="password" id="password" placeholder="">
						<small class="text-secondary">Kosongkan kolom password jika tidak ingin mengubah password</small>
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<select required="" class="form-control" name="level" id="level">
							<option value="user">User</option>
							<option value="admin">Admin</option>
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop