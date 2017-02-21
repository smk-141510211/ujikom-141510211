    <!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        
    </head>
    <body id="body">
    <div id="myBar"></div>
    <div id="LWS">
        <b>Handphone<br>Kamu<br>Terlalu<br>Jelek</b>
    </div>
        <div class="flex-center position-ref full-height">
            @if (Auth::guest())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <!-- <a href="{{ url('/register') }}">Register</a> -->
                </div>
            @elseif (Auth::user())
                <div class="top-right links">
                    <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{Auth::user()->name}}
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>

                <div class="links">
                    <a href="{{url('home')}}">Home</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
                          var loading = document.getElementById("myBar");
                          var body = document.getElementById("body");
                          body.style.background = '#fff';
                          var width = 0;
                          var id = setInterval(frame, 7);
                          function frame() {
                            if (width >= 100) {
                              clearInterval(id);
                              loading.style.display = 'none';
                              body.style.background = '#634338';
                            }
                            else {
                              width=width+0.1;
                              loading.style.width = width + '%';
                            }
                          }
                        </script>
    </body>
</html>
