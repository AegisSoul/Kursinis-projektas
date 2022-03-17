@extends('layouts.main')

@section('content')

<div class="py-2 max-w-sm bg-white rounded-lg border border-gray-200 dark:border-white shadow-md dark:bg-gray-800  mx-auto mt-5">
    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Do you want to remove this player?</h5>
    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white mx-auto text-center">{{$team -> FirstName}} {{$team -> LastName}}</h5>
    <div class="flex justify-center mb-1">
        <a href="/teams/delete/{{$team -> id}}" class="mx-1 my-2 py-2 px-4 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700  dark:hover:border-white" type="button">Yes</a>
        <a href="/teams" class="mx-1 my-2 py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-white type="button">No</a>
    </div>

</div>
@endsection
