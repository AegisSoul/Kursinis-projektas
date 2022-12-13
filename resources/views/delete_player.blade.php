@extends('layouts.main')

@section('content')

<div class="py-2 max-w-sm bg-white rounded-lg border border-gray-200 dark:border-white shadow-md dark:bg-gray-800  mx-auto mt-5">
    <div class="border-b-2 border-gray-200">
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Do you want to remove this player?</h5>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white mx-auto text-center">{{$player -> FirstName}} {{$player -> LastName}}</h5>
    </div>
    <div class="flex h-10">
        <a href="/teams/delete/{{$player -> id}}" class="pt-2 w-2/4 border-2 rounded text-sm font-medium text-center text-white border-black dark:border-white transition ease-in-out bg-red-600 hover:-translate-y-1 hover:scale-110 hover:bg-red-700 hover:border-red-700 duration-200 dark:bg-red-600 dark:hover:bg-red-700  dark:hover:border-red-700" type="button">Yes</a>
        <a href="/teams" class="pt-2 w-2/4 border-2 rounded text-sm font-medium text-center text-gray-900  border-black dark:border-white transition ease-in-out bg-white hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 hover:border-blue-500 duration-200 dark:bg-gray-800 dark:text-white dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:focus:ring-white" type="button">No</a>
    </div>
</div>
@endsection
