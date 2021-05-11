@if (Auth()->user())
  <script>window.location = "/";</script>
@else
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <title>{{ env('APP_TITLE') }}</title>
    </head>
    <body class="antialiased">
      <!-- component -->
      <div class="flex items-center justify-center p-40">
              <div class="w-full max-w-md">
                <form class="login-form-class shadow-lg rounded px-12 pt-6 pb-8 mb-4" method="post" action="{{ route('login') }}">
                  @csrf
                  <div
                    class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" width="133.112" height="34.988" viewBox="0 0 133.112 34.988">
                      <g id="Group_1265" data-name="Group 1265" transform="translate(0 53.948)">
                          <path id="Path_112" data-name="Path 112" d="M178.706-14.883v.568h-6.224v-8.778h3.1a4.576,4.576,0,0,1,3.692,1.873,3.277,3.277,0,0,0,.8.763,5.3,5.3,0,0,0,3.075.847,6.581,6.581,0,0,0,2.674-.4,1.134,1.134,0,0,0,.661-1.12,1.222,1.222,0,0,0-.264-.859,2.936,2.936,0,0,0-1.289-.613c-.732-.213-1.852-.454-3.348-.722-3.509-.551-6.028-1.456-7.567-2.683a6.283,6.283,0,0,1-2.417-5.183,6.235,6.235,0,0,1,2.512-5.244,10.308,10.308,0,0,1,6.42-1.871,15.157,15.157,0,0,1,5.218.883V-38h6.116v7.609h-2.872a6.03,6.03,0,0,1-3.931-1.457,5.9,5.9,0,0,0-3.817-.944,5.333,5.333,0,0,0-1.815.247,1.049,1.049,0,0,0-.807,1.011.759.759,0,0,0,.543.694,9.234,9.234,0,0,0,2.268.568,28.824,28.824,0,0,1,7.108,1.643,8,8,0,0,1,3.785,2.774,7.141,7.141,0,0,1,1.095,4.013,7.261,7.261,0,0,1-2.63,5.959,10.714,10.714,0,0,1-6.973,2.108A9.591,9.591,0,0,1,178.706-14.883Z" transform="translate(-60.306 -5.499)" fill="#fff"/>
                          <path id="Path_113" data-name="Path 113" d="M124.286-19.814h-12.1V-26h1.972V-37.23h-1.972V-43.5H122.3V-26h1.981Zm-1.527-29.68a4.283,4.283,0,0,0-1.317-3.136,4.282,4.282,0,0,0-3.136-1.318,4.3,4.3,0,0,0-3.157,1.318,4.281,4.281,0,0,0-1.318,3.136,4.307,4.307,0,0,0,1.318,3.158,4.307,4.307,0,0,0,3.157,1.317,4.358,4.358,0,0,0,3.13-1.268A4.265,4.265,0,0,0,122.759-49.494Z" transform="translate(-39.426 0)" fill="#fff"/>
                          <path id="Path_114" data-name="Path 114" d="M17.7-21.1l-2.757,1.147a15.535,15.535,0,0,1-5.668,1.18A6.434,6.434,0,0,1,4.5-20.417,6.252,6.252,0,0,1,2.878-25V-36.535H0V-42.8H2.878v-3.3l8.171-5.871V-42.8h4.2v6.268h-4.2v9.458a2.12,2.12,0,0,0,.312,1.3c.2.264.6.347,1.163.347a6.391,6.391,0,0,0,2.09-.448l3.09-1.073Z" transform="translate(0 -0.695)" fill="#fff"/>
                          <path id="Path_115" data-name="Path 115" d="M53.018-14.151H42.865v-1.521A11.938,11.938,0,0,1,36.739-13.8a7.415,7.415,0,0,1-5.484-1.977,7.3,7.3,0,0,1-1.977-5.4V-31.567H27.3v-6.268h10.11V-23.04a3.058,3.058,0,0,0,.395,1.889,1.948,1.948,0,0,0,1.512.429,6.17,6.17,0,0,0,3.551-1.409v-9.436h-2v-6.268H51.036v17.5h1.981Z" transform="translate(-9.593 -5.663)" fill="#fff"/>
                          <path id="Path_116" data-name="Path 116" d="M78.907-43.181H92.769v5.554H90.22L84-32.355l5.633,6.676h3.391V-19.5H85.1l-9.038-11.2v5.253h1.98V-19.5h-10.2v-27.39H63.9v-6.159H76.067v20.1l5.955-4.9H78.907Z" transform="translate(-22.458 -0.317)" fill="#fff"/>
                          <path id="Path_117" data-name="Path 117" d="M158.934-17.15a9.661,9.661,0,0,0,.4-2.819,6.891,6.891,0,0,0-3.7-6.4h0l-8.11-4.682a.647.647,0,0,1-.305-.712,5.139,5.139,0,0,1,2.634-3.343,7.039,7.039,0,0,1,6.139-.352,6.457,6.457,0,0,1,2.243,1.294,12.1,12.1,0,0,1,3.854,8.864A12.083,12.083,0,0,1,158.934-17.15Z" transform="translate(-51.732 -6.309)" fill="#8fc43c" fill-rule="evenodd"/>
                          <path id="Path_118" data-name="Path 118" d="M146.161-38.734a9.669,9.669,0,0,0-2.64,1.066,6.892,6.892,0,0,0-3.692,6.4h0V-21.9a.647.647,0,0,1-.464.621,5.139,5.139,0,0,1-4.212-.609,7.039,7.039,0,0,1-3.374-5.141,6.47,6.47,0,0,1,0-2.59,12.1,12.1,0,0,1,5.749-7.769A12.082,12.082,0,0,1,146.161-38.734Z" transform="translate(-46.271 -5.249)" fill="#8fc43c" fill-rule="evenodd"/>
                          <path id="Path_119" data-name="Path 119" d="M132.272-14.634a9.654,9.654,0,0,0,2.243,1.753,6.892,6.892,0,0,0,7.393,0h0l8.11-4.682a.647.647,0,0,1,.769.091,5.139,5.139,0,0,1,1.579,3.952A7.038,7.038,0,0,1,149.6-8.03a6.465,6.465,0,0,1-2.243,1.3,12.1,12.1,0,0,1-9.6-1.094A12.081,12.081,0,0,1,132.272-14.634Z" transform="translate(-46.486 -12.756)" fill="#8fc43c" fill-rule="evenodd"/>
                      </g>
                  </svg>
                  </div>
                  <div class="mb-4">
                    <label
                      class="block text-white text-sm font-normal mb-2"
                      for="username"
                    >
                    Username
                    </label>
                    <input
                      class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                      name="email"
                      v-model="form.email"
                      type="email"
                      required
                      autofocus
                      placeholder="email"
                    />
                  </div>
                  <div class="mb-6">
                    <label
                      class="block text-sm font-normal mb-2 text-white"
                      for="password"
                    >
                      Password
                    </label>
                    <input
                      class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                      v-model="form.password"
                      type="password"
                      placeholder="Password"
                      name="password"
                      required
                      autocomplete="current-password"
                    />
                  </div>
                  <div class="flex items-center justify-between">
                    <button class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">Sign In</button>
                    <a
                      class="inline-block align-baseline font-normal text-sm text-white hover:text-blue-800"
                      href="{{ route('register') }}"
                    >
                      Forgot Password?
                    </a>
                  </div>
                </form>
              </div>
            </div>
    </body>
</html>
@endif

