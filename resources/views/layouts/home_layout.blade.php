<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}" />
    </head>
    <body>
        <div class="container">
            <!-- logout nav -->
             <div class="main">
               @yield('content')
               
               <div class="dash">
                
   
    <div ><a class="HomeBtn" href="{{ route('userIndex') }}" >Posts <span class="caret"></span></a></div>

<div  >
<a class="HomeBtn"  href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> {{ __('Logout') }}  </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">        @csrf
                    </form>
</div>
            
            </div>
        </div>
    </div>
    </body>
</html>