<nav class ="nav" id=nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>


     

            <div class="cmdilogo-position"><a href="welcome"><img class="cmdilogo-size" src="/images/cmdilogo.jpg"  ></a> </div>
                <div class="haha">
                   
                        <label class="cmdilogo-text1">CMDI</label>
                        <br>
                        <label class="cmdilogo-text2">Infoboard</label>
                  
                </div>
            <ul>
                <li class="li" id="li"><a id="a1" class="{{ (request()->is('welcome')) ? 'active' : '' }}" href="welcome">Home</a></li>
                <li class="li" id="li"><a id="a2" class="{{ (request()->is('announcement')) ? 'active' : '' }}" href="announcement">announcement</a></li>
               
                
                <li class="li"><div class="dropdown"><a id="a4" style="color:white">Event-Calendar<i class="fa fa-caret-down"></i></a>
                <div class="dropdown-content">
                        <a href="eventcalendar1">College Calendar</a>
                        <a href="eventcalendar2">SHS Calendar</a>
                        <a href="eventcalendar3">Other Units Calendar</a>
                    </div></li>
                    <li class="li" id="li"><a id="a3" class="{{ (request()->is('videos')) ? 'active' : '' }}" href="videos" href="videos">Learning</a></li>
                    <li class="li" id="li"><a id="a2" class="{{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}" style="color:black">Register Now</a></li>
                    <li class="li" id="li"><a id="a2" class="{{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}"  style="color:orange">Sign In</a></li>
                 </ul>   
       
        </nav>