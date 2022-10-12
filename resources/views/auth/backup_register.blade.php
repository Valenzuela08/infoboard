<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <style>
      * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        box-sizing: border-box;
    }
    
    body {
        background-color: var(--background);
    }
    
    .nav {
        position: sticky;
        display: block;
        background-color: var(--blue);
        background-image: linear-gradient(to right, var(--blue), var(--blue), #001247);
        height: 100px;
        width: 100%;
        z-index: 1;
        top: 0;
        border-bottom: 10px solid var(--orange);
        ;
        outline: 0.01px solid #001247;
        border-image-slice: 1;
        line-height: 90px;
        z-index: 5;
    }
    
    .cmdilogo-position {
        position: relative;
        display: inline;
        margin-left: 50px;
        top: 15px;
    }
    
    .cmdilogo-size {
        height: 65px;
        width: 65px;
        background-color: #000000;
        border-radius: 50%;
    }
    
    .haha {
        position: absolute;
        line-height: 20px;
        display: inline-block;
        top: 30px;
        margin-left: 10px;
    }
    
    label.cmdilogo-text1,
    label.cmdilogo-text2 {
        position: static;
        display: inline;
        color: var(--white);
        font-size: 30px;
        font-weight: normal;
    }
    
    nav ul {
        float: right;
        margin-right: 20px;
    }
    
    nav ul li {
        display: inline-block;
        margin: 10px 5px 0 5px;
    }
    
    nav ul li .dropdown {
        line-height: 20px;
    }
    
    nav ul li a {
        color: var(--white);
        font-family: sans-serif;
        font-weight: bold;
        font-size: 15px;
        padding: 7px 13px;
        border-radius: 3px;
        text-transform: uppercase;
    }
    
    #li a:hover {
        text-decoration: none;
        transition: .5s;
        color: #f0ddc7;
        text-shadow: .5px .5px #363636;
    }
    
    nav ul li a.active {
        background: #1b9cff62;
        color: #f0ddc7;
    }
    
    .checkbtn {
        font-size: 25px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }
    
    #check {
        display: none;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: transparent;
        min-width: 190px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding-top: 25px;
        z-index: 5;
    }
    
    .dropdown-content a {
        float: none;
        color: black;
        text-decoration: none;
        display: block;
        text-align: left;
        font-size: 12px;
        font-family: sans-serif;
        text-transform: capitalize;
        background-color: #f9f9f9;
    }
    
    .dropdown-content a:hover {
        background-color: #ddd;
    }
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
    
    @media(max-width:1100px) {
        .checkbtn {
            display: block;
        }
        .nav ul {
            position: absolute;
            width: 100%;
            height: 100vh;
            background: #002f95e8;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            z-index: 5;
        }
        nav ul li {
            display: block;
            margin: 50px 0;
            line-height: 30px;
        }
        nav ul li a {
            font-size: 20px;
            font-weight: 900;
        }
        nav ul li a:hover,
        nav ul li a.active {
            background: none;
            color: #eebb81;
        }
        #check:checked~ul {
            left: 0;
        }
        .dropdown-content {
            position: static;
            box-shadow: none;
            padding-top: 10px;
        }
        .dropdown-content a {
            text-align: center;
            background-color: transparent;
            color: #cdd2d6;
        }
        .dropdown-content a:hover {
            background-color: #253647;
            color: #7ab2dd;
        }
        .dropdown:hover .dropdown-content {
            max-width: 200px;
            margin: 0 auto;
        }
    }
    
    
    /* FOOTER LINKS  */
    
    .footer {
        position: absolute;
        left: 0;
        bottom: -2200px;
        width: 100%;
        height: 280px;
        background-color: #94A8D2;
        color: white;
        text-align: center;
        z-index: 4;
        padding: 20px 0;
        border-bottom: 15px solid var( --orange);
    }
    
    .footer a {
        color: white;
    }
    
    .footer .p1 {
        font-size: 20px;
        font-weight: bold;
    }
    
    .footer .p2 {
        font-style: italic;
        text-transform: uppercase;
        font-family: calibri;
        font-weight: 900;
        font-size: 15px;
    }
    
    .footer .p3 {
        margin-top: 10px;
        color: black;
    }
    </style>

        <div class="cmdilogo-position"><a href="welcome"><img class="cmdilogo-size" src="/images/cmdilogo.jpg"  ></a> </div>
                <div class="haha">
                   
                        <label class="cmdilogo-text1">CMDI</label>
                        <br>
                        <label class="cmdilogo-text2">SociaBoard</label>
                  
                </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="username" value="{{ __('UserName') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <select id="password_confirmation" class="block mt-1 w-full" type="text" name="gender" required autocomplete="gender" >
  <option selected></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
                </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
