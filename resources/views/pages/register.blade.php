@extends('layouts.main')

@section('page-title', 'Register - A|G Realty')
@section("content")
    <div class="auth-page auth-page--login">
        <form action="" method="POST" class="auth-page__form">
            <h3 class="auth-page__title">Register</h3>
            <div class="auth-page__form-group">
                <label for="first-name" class="auth-page__form-label">First Name</label>
                <input type="first-name" name="first-name" class="auth-page__form-input">
            </div>
            <div class="auth-page__form-group">
                <label for="last-name" class="auth-page__form-label">Last Name</label>
                <input type="last-name" name="last-name" class="auth-page__form-input">
            </div>
            <div class="auth-page__form-group">
                <label for="email" class="auth-page__form-label">Email</label>
                <input type="email" name="email" class="auth-page__form-input">
            </div>
            <div class="auth-page__form-group">
                <label for="password" class="auth-page__form-label">Password</label>
                <input type="password" name="password" class="auth-page__form-input">
            </div>
            <div class="auth-page__form-group">
                <label for="password" class="auth-page__form-label">Re-Enter Password</label>
                <input type="password" name="password" class="auth-page__form-input">
            </div>
            <div class="auth-page__form-group">
                <button type="submit" class="auth-page__form-button">Register</button>
            </div>
        </form>
    </div>
@endsection