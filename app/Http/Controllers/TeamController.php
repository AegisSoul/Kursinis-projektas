<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\Player;
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

    public function viewAddForm()
    {
        $teams = Team::all();
        return view('add_teams', compact('teams'));
    }

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
        Stats::create([
            'player_id' => $player->id,
            'MinPoints' => request('MinPoints'),
            'MaxPoints' => request('MaxPoints'),
            'GamesPlayed' => request('GamesPlayed')
        ]);

        return redirect('/dashboard');
    }

    public function viewEditForm(Player $player)
    {
        $stats = $player->stats;
        $teams = Team::all();
        return view('edit_player', compact('player', 'stats', 'teams'));
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

        $stat = Stats::where('player_id', $player->id)->firstOrFail();

        $stat->MinPoints = request('MinPoints');
        $stat->MaxPoints = request('MaxPoints');
        $stat->GamesPlayed = request('GamesPlayed');
        
        $stat->save();


        return redirect('/team/' . $player->team_id);
    }

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
    }
}
