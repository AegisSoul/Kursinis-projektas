<x-app-layout>

    <div id="dashboardBackground" class="dark:bg-gray-800">
        <div class="flex justify-center items-center h-screen text-black dark:text-gray-300">
            <a id="dashboardTitle" href="/teams" class="p-8 text-4xl font-black uppercase transition duration-150 ease-in-out hover:scale-125" type="button">Statistics of basketball players</a>

        </div>
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
