@extends('layouts.main')

@include('components.navbar')
@section('content')



<form action="/teams/search" method="get">
    <div class="flex pt-2 pl-2">
        <div>
            <div class="input-group relative flex items-stretch w-full mb-4">
                <input type="text" name="query" class="form-control relative min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-600 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-500 focus:bg-white focus:border-blue-300 focus:outline-none dark:text-gray-200 dark:focus:text-blue-300 dark:focus:bg-gray-500 dark:bg-gray-700" placeholder="Paieška" aria-label="Search" aria-describedby="button-addon3">
                <button type="submit" class="btn px-6 py-2 border-2 border-blue-600 text-{{$team->color}} font-medium text-xs leading-tight uppercase rounded hover:bg-{{$team->color}} hover:text-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-{{$team->color}} dark:hover:text-gray-100" id="button-addon3">Ieškoti</button>
                @if(Auth::user()->role == 1)
                <a href="/teams/add" class="ml-2 btn px-6 py-2 border-2 border-blue-600 text-{{$team->color}} font-medium text-xs leading-tight uppercase rounded hover:bg-{{$team->color}} hover:text-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-{{$team->color}} dark:hover:text-gray-100" type="button">Add a player</a>
                @endif
            </div>
            <a id="backToTop" class="fixed right-40 bottom-6 ml-2 btn px-6 py-2 border-2 bg-white opacity-75 border-blue-600 text-{{$team->color}} font-medium text-xs leading-tight uppercase rounded hover:bg-{{$team->color}} hover:text-white hover:opacity-100 focus:outline-none focus:ring-0 transition duration-150 ease-in-out dark:bg-gray-700  dark:text-gray-200 dark:hover:bg-{{$team->color}} dark:hover:text-gray-100 hover:cursor-pointer" type="button">Grįžti į viršų</a>
        </div>
    </div>
</form>
<table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
    <thead class="bg-gray-100 dark:bg-gray-700">
        <tr>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Vardas
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Pavardė
            </th>
            {{--<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Komanda
            </th>--}}
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Pozicija
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Ūgis
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Taškų vidurkis
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Mažiausiai surinkta
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Daugiausiai surinkta
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Sužaista rungtynių
            </th>
            <th scope="col" class="p-4">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>

    <tbody id="Table-background" background="{{$team->logo}}" class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
        @foreach ($players as $player)
        <!-- cyan-500 -->
            <tr class="text-black whitespace-nowrap hover:bg-{{$team->color}} hover:bg-opacity-80 dark:text-white dark:hover:text-{{$player->Team->color}} dark:hover:bg-{{$player->Team->bg_color}}">


            <td class="py-4 px-6 text-sm font-medium">{{$player->FirstName}}</td>
            <td class="py-4 px-6 text-sm font-medium">{{$player->LastName}}</td>
            {{--<td class="py-4 px-6 text-sm font-medium">{{$player->Team}}</td>--}}
            <td class="py-4 px-6 text-sm font-medium">{{$player->Position}}</td>
            @if($player->Height > 5)
                <td class="py-4 px-6 text-sm font-medium">{{$player->Height}}cm</td>
            @else
                <td class="py-4 px-6 text-sm font-medium">{{$player->Height}}m</td>
            @endif

            <td class="py-4 px-6 text-sm font-medium">{{$player->Average}} taškai</td>
            <td class="py-4 px-6 text-sm font-medium">{{$player->stats->MinPoints}}</td>
            <td class="py-4 px-6 text-sm font-medium">{{$player->stats->MaxPoints}}</td>
            <td class="py-4 px-6 text-sm font-medium">{{$player->stats->GamesPlayed}}</td>
            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
            @if(Auth::user()->role == 1)
                <a class="text-blue-600 dark:text-blue-500 hover:underline hover:font-bold px-1" href="/teams/edit/{{$player -> id}}">Edit</a>
                <a class="text-red-600 dark:text-red-500 hover:underline hover:font-bold" href="/teams/delete/ask/{{$player -> id}}">Delete</a>
            @endif
            </td>
            </tr>
        @endforeach

    </tbody>

</table>

@endsection
