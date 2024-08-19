<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chara-Books00</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <style>
            .block {
                display: block;
            }
            .mt-1 {
                margin-top: 0.25rem;
            }
            .mt-2 {
                margin-top: 0.5rem;
            }
            .mt-4 {
                margin-top: 1rem;
            }
            .ms-2 {
                margin-left: 0.5rem;
            }
            .ms-3 {
                margin-left: 0.75rem;
            }
            .w-full {
                width: 100%;
            }
            .text-sm {
                font-size: 0.875rem;
            }
            .text-gray-600 {
                color: #718096;
            }
            .text-gray-900 {
                color: #1a202c;
            }
            .dark\:text-gray-400 {
                color: #a0aec0;
            }
            .dark\:text-gray-100 {
                color: #f7fafc;
            }
            .underline {
                text-decoration: underline;
            }
            .rounded-md {
                border-radius: 0.375rem;
            }
            .focus\:outline-none {
                outline: 0;
            }
            .focus\:ring-2 {
                box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
            }
            .focus\:ring-offset-2 {
                box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
            }
            .focus\:ring-indigo-500 {
                box-shadow: 0 0 0 2px #667eea;
            }
            .dark\:focus\:ring-offset-gray-800 {
                box-shadow: 0 0 0 2px #2d3748;
            }
            .rounded {
                border-radius: 0.25rem;
            }
            .border-gray-300 {
                border-color: #d2d6dc;
            }
            .dark\:border-gray-700 {
                border-color: #4a5568;
            }
            .text-indigo-600 {
                color: #5a67d8;
            }
            .shadow-sm {
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            }
            .focus\:ring-indigo-500 {
                box-shadow: 0 0 0 2px #667eea;
            }
            .dark\:focus\:ring-indigo-600 {
                box-shadow: 0 0 0 2px #4c51bf;
            }
            .dark\:focus\:ring-offset-gray-800 {
                box-shadow: 0 0 0 2px #2d3748;
            }
            .flex {
                display: flex;
            }
            .items-center {
                align-items: center;
            }
            .justify-end {
                justify-content: flex-end;
            }
            .register{
                padding:160px 0;
            }
            .register form{
                width: 96%;
                margin: 0 auto;
            }
            .register_button {
                background-color: #999999;
                border: none;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                font-size: 16px;
                font-weight: bold;
                cursor: pointer;
                transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            }
            .register_button:hover {
                background-color: #cccccc;
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            .register_button:active {
                transform: translateY(-1px);
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            }
            .go_to_login a{
                box-shadow:none;
            }
        </style>
    </head>
    <body>
        <header class="header bg_white">
        <div class="title">
            <a href="{{ route('login') }}">
                <img src="/images/chara_logo.png" alt="png Image">
            </a>
        </div>
        </header>
        <main class="register bg_white">
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="go_to_login flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
        
                    <x-primary-button class="register_button ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        
            
        </main>
        <footer>&copy; 2024 My portfolio</footer>
    </body>
</html>