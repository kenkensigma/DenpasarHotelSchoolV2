@extends("layouts.layout")

@section("title", "Profile Page")

@section("content")

<h2>Profile</h2>
<form class="profile-form" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Current Profile Photo:</label>
        <br>
        <img src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('default-avatar.png') }}" 
             alt="Profile Photo" width="150">
    </div>

    <div class="form-group">
        <label for="photo">Upload New Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*">
        @error("photo")
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}">
        @error("name")
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" value="{{ auth()->user()->phone }}">
        @error("phone")
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit">Save Changes</button>
    </div>
</form>




@endsection