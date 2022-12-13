@extends('layouts.main')

@section('content')

<form class="w-full" method="post">
    @csrf
    <div class="title dark:title-dark"> ADD A PLAYER</div>
    @if ($errors->any())
    <div class="bg-red-100 border-red-400 text-red-700 font-bold border-2 px-4 py-3 rounded relative self-center text-center md:w-1/3 mx-auto mb-5" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="ml-3 mb-6 mx-60">
        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-first-name">
                    First Name
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="@error('First-name') border-red-400 @else border-black @enderror input bg-gray-200 appearance-none border-2 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="First-name" id="inline-first-name" type="text" placeholder="First name" value={{ old('First-name')}}>
            </div>
        </div>

        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-last-name">
                    Last Name
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="Last-name" id="inline-last-name" type="text" placeholder="Last Name" value={{ old('Last-name')}}>
            </div>
        </div>

        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-team">
                    Team
                </label>
            </div>
            
            <div class="md:w-3/4">
                <select name="Team" id="Team">
                    @foreach ($teams as $team)
                    <option value="{{$team->id}}">{{ucfirst($team->name)}}</option>
                    @endforeach
                </select>
            </div>
            <!-- <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="Team" id="inline-team" type="text" placeholder="Team" value={{ old('Team')}}>
            </div> -->
        </div>

        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-position">
                    Position
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="Position" id="inline-position" type="text" placeholder="Position" value={{ old('Position')}}>
            </div>
        </div>

        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-height">
                    Height
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="Height" id="inline-height" type="decimal" placeholder="Height">
            </div>
        </div>

        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-average">
                    Average
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="Average" id="inline-average" type="decimal" placeholder="Average">
            </div>
        </div>
<<<<<<< HEAD
        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-minpoints">
                    Minimum Points
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="MinPoints" id="inline-minpoints" type="decimal" placeholder="Minimum points">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-maxpoints">
                    Maximum Points
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="MaxPoints" id="inline-maxpoints" type="decimal" placeholder="Maximum points">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6 mx-60">
            <div class="md:w-1/4">
                <label class="block text-black  md:text-right mb-1 md:mb-0 pr-4 dark:text-gray-100" for="inline-gamesplayed">
                    Games Played
                </label>
            </div>
            <div class="md:w-3/4">
                <input class="input bg-gray-200 appearance-none border-2 border-black rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="GamesPlayed" id="inline-gamesplayed" type="decimal" placeholder="Games Played">
            </div>
        </div>
=======
>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf
      
        <div class="md:flex md:items-center">
            <div class="md:w-1/4 mx-16"></div>
            <div class="md:w-2/3">
                <button class="btn">
                    Add
                </button>

            </div>
        </div>
    </div>


</form>


@endsection
