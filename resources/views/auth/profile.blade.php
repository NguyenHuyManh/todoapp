@extends('layouts.master')

@section('content')
<div id="main-content">
    <div class="update-profile">
        <h2>Profile</h2>
        <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="post" class="profile-user">
            @csrf
            <div class="form-group">
                <div class="profile-user__avatar">
                    <img src="{{ asset('storage') }}/{{$user->avatar}}" alt="" class="">
                </div>
            </div>
            <div class="form-group">
                <input class="form-input-file" type="file" name="avatar" id="img" style="display: none">
                <label for="img" class="choose-file">Choose a file</label>
            </div>

            <div class="form-group">
                <input class="form-input profile-user__name" type="text" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <input class="form-input profile-user__email" type="text" name="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <input class="form-input profile-user__password" type="password" name="password"
                    placeholder="Enter password new">
            </div>
            <div class="form-group">
                <input class="form-input profile-user__password-confirmation" type="password"
                    name="password_confirmation" placeholder="Enter password confirmation">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-save-profile">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection