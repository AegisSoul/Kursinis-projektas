<nav class="bg-white border-gray-200 px-2 sm:px-4 pt-3 rounded dark:bg-gray-800 border-b-2 dark:border-gray-700">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/dashboard" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition ease-in-out  hover:scale-125">Komandų sąrašas</a>
                </li>

                <li>
                    <a href="user/profile" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition ease-in-out  hover:scale-125">Profilis</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition ease-in-out  hover:scale-125">
                            {{ __('Atsijungti') }}</a> 
                        
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
