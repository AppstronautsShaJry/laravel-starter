@extends('layouts.master')

@section('content')
    <div class="max-w-md mx-auto mt-10">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label>Email</label>
                <input type="email" name="email" required>
                @error('email') <span>{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" required>
                @error('password') <span>{{ $message }}</span> @enderror
            </div>

            <button type="submit">Login</button>
        </form>

        <a href="{{ route('auth.google') }}">Login with Google</a>
    </div>
@endsection

