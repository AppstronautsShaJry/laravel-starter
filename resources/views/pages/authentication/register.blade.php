@extends('layouts.master')

@section('content')
    <div class="max-w-md mx-auto mt-10">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
                @error('name') <span>{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email') <span>{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" required>
                @error('password') <span>{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <button type="submit">Register</button>
        </form>

        <a href="{{ route('auth.google') }}">Sign Up with Google</a>
    </div>
@endsection
