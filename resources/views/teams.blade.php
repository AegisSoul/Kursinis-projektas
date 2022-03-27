@extends('layouts.main')

@section('content')
<form action="/teams/search" method="get">
    <div class="flex pt-2 pl-2">
        <div>
            <div class="input-group relative flex items-stretch w-full mb-4">
                <input type="text" name="query" class="form-control relative min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-600 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-500 focus:bg-white focus:border-blue-300 focus:outline-none dark:text-gray-200 dark:focus:text-blue-300 dark:focus:bg-gray-500 dark:bg-gray-700" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                <button type="submit" class="btn px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-blue-300 dark:hover:text-gray-600" id="button-addon3">Search</button>
                <a href="/teams/add" class="ml-2 btn px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-blue-300 dark:hover:text-gray-600" type="button">Add a player</a>

            </div>
            <a id="backToTop" class="fixed right-40 bottom-6 ml-2 btn px-6 py-2 border-2 bg-white opacity-75 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-blue-600 hover:text-white hover:opacity-100 focus:outline-none focus:ring-0 transition duration-150 ease-in-out dark:bg-gray-700  dark:text-gray-200 dark:hover:bg-blue-300 dark:hover:text-gray-600 hover:cursor-pointer" type="button">Back to top</a>
        </div>
    </div>
</form>
<table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
    <thead class="bg-gray-100 dark:bg-gray-700">
        <tr>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                First Name
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Last Name
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Team
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Position
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Height
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Average
            </th>
            <th scope="col" class="p-4">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
        @foreach ($teams as $team)
        @if($team -> Team == "Žalgiris")
        <tr class="text-gray-500 whitespace-nowrap hover:bg-green-500 hover:bg-opacity-20 dark:text-white dark:hover:text-green-400 dark:hover:bg-gray-800">
        @elseif($team -> Team == "Lietkabelis")
        <tr class="hover:bg-rose-900 hover:bg-opacity-20 dark:hover:bg-gray-800 text-gray-500 whitespace-nowrap dark:text-white dark:hover:text-rose-600 dark:hover:text-opacity-90">
        @elseif($team -> Team == "Neptūnas")
        <tr class="hover:bg-blue-600 hover:bg-opacity-30 dark:hover:bg-gray-800 text-gray-500 whitespace-nowrap dark:text-white dark:hover:text-blue-500 dark:hover:text-opacity-90">
        @else
        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-500 whitespace-nowrap dark:text-white ">
        @endif
            <td class="py-4 px-6 text-sm font-medium">{{$team -> FirstName}}</td>
            <td class="py-4 px-6 text-sm font-medium">{{$team -> LastName}}</td>                   
            <td class="py-4 px-6 text-sm font-medium">{{$team -> Team}}</td>         
            <td class="py-4 px-6 text-sm font-medium">{{$team -> Position}}</td>
            @if($team -> Height > 5)
            <td class="py-4 px-6 text-sm font-medium">{{$team -> Height}}cm</td>
            @else
            <td class="py-4 px-6 text-sm font-medium">{{$team -> Height}}m</td>
            @endif

            <td class="py-4 px-6 text-sm font-medium">{{$team -> Average}} points</td>
            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                <a class="text-blue-600 dark:text-blue-500 hover:underline hover:font-bold px-1" href="/teams/edit/{{$team -> id}}">Edit</a>
                <a class="text-red-600 dark:text-red-500 hover:underline hover:font-bold" href="/teams/delete/ask/{{$team -> id}}">Delete</a>
            </td>
            
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
