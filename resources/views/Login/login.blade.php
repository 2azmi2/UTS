@extends('style.style1')

@section('isi')
    <div class="containerUtama1">
        <h2>LOGIN ADMIN</h2>
        <br>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="containerForm">
            <form action="/login" method="POST">
                @csrf
                <!-- Email input -->
                <div class="form-floating">
                    <input type="email" name="email" placeholder="name@example.com" id="form1Example1" class="form-control @error('email') is-invalid @enderror" autofocus required value="{{ old('email') }}"/>
                    <label for="form1Example1">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <!-- Password input -->
                <div class="form-floating">
                    <input type="password" name="password" placeholder="Password" id="form1Example2" class="form-control" autofocus required/>
                    <label for="form1Example2">Password</label>
                </div>
            
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                    </div>
                
                    <div class="col">
                        <!-- Simple link -->
                        <a>Want to Join? </a>
                        <a href="/register">Register</a>
                    </div>
                </div>
            
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
    <br><br>
@endsection