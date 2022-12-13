<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
<<<<<<< HEAD
use App\Models\Player;
=======
>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Stats;

class TeamController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->except(['index']);
        $this->middleware([IsAdmin::class])->only(['viewAddForm', 'store', 'edit', 'viewEditForm', 'deleteForm', 'delete']);
    }

<<<<<<< HEAD
    public function viewAddForm()
    {
        $teams = Team::all();
        return view('add_teams', compact('teams'));
    }

=======
    public function index()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }

    public function viewAddForm()
    {
        return view('add_teams');
    }

>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'First-name' => 'required|max:100|alpha',
            'Last-name' => 'required|max:100|alpha' ,
            'Team' => 'required|max:100',
            'Position' => 'required|max:20',
            'Height' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'Average' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'MinPoints' => 'required|max:100|numeric',
            'MaxPoints' => 'required|max:100|numeric',
            'GamesPlayed' => 'required|max:100|numeric'

        ]);

        $player = Player::create([
            'FirstName' => request('First-name'),
            'LastName' => request('Last-name'),
            'team_id' => request('Team'),
            'Position' => request('Position'),
            'Height' => request('Height'),
            'Average' => request('Average')
        ]);
<<<<<<< HEAD
        Stats::create([
            'player_id' => $player->id,
            'MinPoints' => request('MinPoints'),
            'MaxPoints' => request('MaxPoints'),
            'GamesPlayed' => request('GamesPlayed')
        ]);
=======
>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf

        return redirect('/dashboard');
    }

<<<<<<< HEAD
    public function viewEditForm(Player $player)
    {
        $stats = $player->stats;
        $teams = Team::all();
        return view('edit_player', compact('player', 'stats', 'teams'));
=======
    public function viewEditForm($id)
    {
        $team = Team::where('id', $id)->firstOrFail();
        return view('edit_teams', compact('team'));
>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf
    }

    public function edit(Request $request, Player $player)
    {
        $validated = $request->validate([
            'First-name' => 'required|max:100|alpha',
            'Last-name' => 'required|max:100|alpha',
            'Team' => 'required|max:100',
            'Position' => 'required|max:20',
            'Height' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'Average' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'MinPoints' => 'required|max:100|numeric',
            'MaxPoints' => 'required|max:100|numeric',
            'GamesPlayed' => 'required|max:100|numeric'
        ]);

        $player->FirstName = request('First-name');
        $player->LastName = request('Last-name');
        $player->team_id = request('Team');
        $player->Position = request('Position');
        $player->Height = request("Height");
        $player->Average = request("Average");
        $player->save();

<<<<<<< HEAD
        $stat = Stats::where('player_id', $player->id)->firstOrFail();

        $stat->MinPoints = request('MinPoints');
        $stat->MaxPoints = request('MaxPoints');
        $stat->GamesPlayed = request('GamesPlayed');
        
        $stat->save();
=======
        $team->FirstName = request('First-name');
        $team->LastName = request('Last-name');
        $team->Team = request('Team');
        $team->Position = request('Position');
        $team->Height = request("Height");
        $team->Average = request("Average");
        $team->save();

>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf


        return redirect('/team/' . $player->team_id);
    }

<<<<<<< HEAD
    public function deleteForm(Player $player)
    {
        return view('delete_player', compact('player'));
    }

    public function delete(Player $player)
    {   
        Stats::where('player_id', $player->id)->first()->delete();
        $player->delete();
        return redirect('/dashboard');
    }

    public function search()
    {
        $players = Player::where('FirstName', 'LIKE', '%' . $_GET['query'] . '%')
            ->orWhere('LastName', $_GET['query'])->get();
        return view('teams', compact('players'));
        
    }

    public function viewTeam(Team $team)
    {
        $players = $team->players()->with('stats')->get(['*']);
        return view('teamView', compact('players', 'team'));
=======
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
>>>>>>> f3af721f2dd6da963e1a65d5232bc1410affa2bf
    }
}
