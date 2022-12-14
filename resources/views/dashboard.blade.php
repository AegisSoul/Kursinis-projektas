<x-app-layout>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>
    
    <div id="Teams" class="px-80 pt-6 dark:bg-gray-800">
        <div id="TeamsRow1" class="flex flex-wrap">
            @foreach ($teams as $team)
            <div class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/team/{{$team->id}}">
                    <img src="{{$team->logo}}" class="h-40 w-40" alt="{{$team->name}} komandos nuotrauka">
                </a>
            </div>
            @endforeach
        </div>

        {{-- <div id="TeamsRow1" class="flex inline">
            <div id="Wolves" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/wolves">
                    <img src="/Images/Wolves.svg" class="h-40 w-40" alt="Wolves komandos nuotrauka">
                </a>
            </div>
            <div id="Gargzdai" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/gargzdai">
                    <img src="/Images/Gargzdai.svg" class="h-40 w-40" alt="Gargzdai komandos nuotrauka">
                </a>
            </div>
            <div id="Jonava" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/jonava">
                    <img src="/Images/Jonava.svg" class="h-40 w-40" alt="Jonava komandos nuotrauka">
                </a>
            </div>
            <div id="Zalgiris" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/zalgiris">
                    <img src="/Images/Zalgiris.svg" class="h-40 w-40" alt="Zalgiris komandos nuotrauka">
                </a>
            </div>
=======
    <div id="dashboardBackground" class="dark:bg-gray-800">
        <div class="flex justify-center items-center h-screen text-black dark:text-gray-300">
            <a id="dashboardTitle" href="/teams" class="p-8 text-4xl font-black uppercase transition duration-150 ease-in-out hover:scale-125" type="button">Statistics of basketball players</a>

>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf
        </div>

        <div id="TeamsRow2" class="flex inline">
            <div id="Nevezis" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/nevezis">
                    <img src="/Images/Nevezis.svg" class="h-40 w-40" alt="Nevezis komandos nuotrauka">
                </a>
            </div>
            <div id="Neptunas" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/neptunas">
                    <img src="/Images/Neptunas.svg" class="h-40 w-40" alt="Neptunas komandos nuotrauka">
                </a>
            </div>
            <div id="Lietkabelis" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/lietkabelis">
                    <img src="/Images/Lietkabelis.svg" class="h-40 w-40" alt="Lietkabelis komandos nuotrauka">
                </a>
            </div>
            <div id="Pieno zvaigzdes" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/pienozvaigzdes">
                    <img src="/Images/Pieno zvaigzdes.svg" class="h-40 w-40" alt="Pieno zvaigzdes komandos nuotrauka">
                </a>
            </div>
        </div>

        <div id="TeamsRow3" class="flex inline">
            <div id="Prienai" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/labasgas">
                    <img src="/Images/Prienai.svg" class="h-40 w-40" alt="Prienai komandos nuotrauka">
                </a>
            </div>
            <div id="Siauliai" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/siauliai">
                    <img src="/Images/Siauliai.svg" class="h-40 w-40" alt="Siauliai komandos nuotrauka">
                </a>
            </div>
            <div id="Juventus" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/juventus">
                    <img src="/Images/Juventus.svg" class="h-40 w-40" alt="Juventus komandos nuotrauka">
                </a>
            </div>
            <div id="Vilnius" class="px-8 pt-8 transition ease-in-out  hover:scale-125">
                <a href="/rytas">
                    <img src="/Images/Vilnius.svg" class="h-40 w-40" alt="Vilnius komandos nuotrauka">
                </a>
            </div>
        </div> --}}
    </div>

    <div class='hidden'>
        <span class="cyan-500"></span>
        <span class="yellow-500"></span>
        <span class="blue-800"></span>
        <span class="green-500"></span>
        <span class="gray-500"></span>
        <span class="bg-cyan-500"></span>
        <span class="bg-yellow-500"></span>
        <span class="bg-blue-800"></span>
        <span class="bg-green-500"></span>
        <span class="bg-gray-500"></span>
        <span class="dark:cyan-500"></span>
        <span class="dark:yellow-500"></span>
        <span class="dark:blue-800"></span>
        <span class="dark:green-500"></span>
        <span class="dark:gray-500"></span>
        <span class="dark:hover:cyan-500"></span>
        <span class="dark:hover:yellow-500"></span>
        <span class="dark:hover:blue-800"></span>
        <span class="dark:hover:green-500"></span>
        <span class="dark:hover:gray-500"></span>
        <span class="hover:cyan-500"></span>
        <span class="hover:yellow-500"></span>
        <span class="hover:blue-800"></span>
        <span class="hover:green-500"></span>
        <span class="hover:gray-500"></span>
        <span class="dark:bg-cyan-500"></span>
        <span class="dark:bg-yellow-500"></span>
        <span class="dark:bg-blue-800"></span>
        <span class="dark:bg-green-500"></span>
        <span class="dark:bg-gray-500"></span>
        <span class="dark:hover:bg-cyan-500"></span>
        <span class="dark:hover:bg-yellow-500"></span>
        <span class="dark:hover:bg-blue-800"></span>
        <span class="dark:hover:bg-green-500"></span>
        <span class="dark:hover:bg-gray-500"></span>
        <span class="hover:bg-cyan-500"></span>
        <span class="hover:bg-yellow-500"></span>
        <span class="hover:bg-blue-800"></span>
        <span class="hover:bg-green-500"></span>
        <span class="hover:bg-gray-500"></span>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>
    <script>
        $(document).ready(function() {
           
                $("#dashboardBackground").css('background-image', 'url(/Images/KomanduIcon.png)')
                $("#dashboardBackground").css('background-repeat', 'no-repeat')
                $("#dashboardBackground").css('background-position', 'top')
                $("#dashboardBackground").css('background-size', 'contain')
               
            
                
            
       
        });

    </script>

</x-app-layout>
