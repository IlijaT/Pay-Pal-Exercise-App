<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">

    @if (Session::has('message'))
        <div class="flex items-center justify-center text-white px-6 py-4 border-0 rounded relative mb-4 bg-pink-500">
            <span class="text-xl inline-block mr-5 align-middle">
                <i class="fas fa-bell" />
            </span>
            <span class="inline-block align-middle mr-8">
                <b class="capitalize">Hey!</b> {{ Session::get('message') }}
            </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                <span>×</span>
            </button>
            </div>
        @endif

    <div class="flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div class="bg-gray-50">
                <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                  <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Express checkout
                    <br />
                    <span class="text-indigo-600">Pay $20:
                    </span>
                  </h2>
                  <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                    <div class="ml-4 inline-flex rounded-md shadow">
                      <a href="{{ route('paypal.express-checkout') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        PayPal
                      </a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>


    <div class="flex items-center justify-center border-t border-indigo-600">
        <div class="flex flex-col justify-around h-full">
            <div class="bg-gray-50">
                <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                  <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Subscription
                    <br />
                    <span class="text-indigo-600">$20/month:
                    </span>
                  </h2>
                  <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                    <div class="ml-4 inline-flex rounded-md shadow">
                      <a href="{{ route('paypal.express-checkout', ['recurring' => true]) }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        Subscribe
                      </a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
  
</body>
</html>
