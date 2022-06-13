<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->except(['index']);
        $this->middleware([IsAdmin::class])->only(['viewAddForm', 'store', 'edit', 'viewEditForm', 'deleteForm', 'delete']);
    }

    public function index()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }

    public function viewAddForm()
    {
        return view('add_teams');
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'First-name' => 'required|max:100',
            'Last-name' => 'required|max:100',
            'Team' => 'required|max:100',
            'Position' => 'required|max:20',
            'Height' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'Average' => 'required|regex:/^\d*(\.\d{1,2})?$/'
        ]);

        Team::create([
            'FirstName' => request('First-name'),
            'LastName' => request('Last-name'),
            'Team' => request('Team'),
            'Position' => request('Position'),
            'Height' => request('Height'),
            'Average' => request('Average')
        ]);

        return redirect('/teams');
    }

    public function viewEditForm($id)
    {
        $team = Team::where('id', $id)->firstOrFail();
        return view('edit_teams', compact('team'));
    }

    public function edit(Request $request, $id)
    {
        $validated = $request->validate([
            'First-name' => 'required|max:100',
            'Last-name' => 'required|max:100',
            'Team' => 'required|max:100',
            'Position' => 'required|max:20',
            'Height' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'Average' => 'required|regex:/^\d*(\.\d{1,2})?$/'
        ]);

        $team = Team::where('id', $id)->firstOrFail();

        $team->FirstName = request('First-name');
        $team->LastName = request('Last-name');
        $team->Team = request('Team');
        $team->Position = request('Position');
        $team->Height = request("Height");
        $team->Average = request("Average");
        $team->save();


        return redirect('/teams');
    }

    public function deleteForm($id)
    {
        $team = Team::where('id', $id)->firstOrFail();
        return view('delete_teams', compact('team'));
    }
    public function delete($id)
    {
        $team = Team::where('id', $id)->firstOrFail();
        $team->delete();

        return redirect('/teams');
    }
    public function search()
    {
        $teams = Team::where('FirstName', 'LIKE', '%' . $_GET['query'] . '%')
            ->orWhere('Team', $_GET['query'])->get();

        return view('teams', compact('teams'));
    }
}
