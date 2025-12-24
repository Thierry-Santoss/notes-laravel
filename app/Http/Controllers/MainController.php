<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function Pest\Laravel\session;

class MainController extends Controller
{

  public function index()
  {
    // load user's notes
    $id = Session::get('user.id');
    $notes = User::find($id)->notes()->get()->toArray();

    // show home view
    return view('home',['notes' => $notes]);
  }

  public function newNote()
  {
    echo "I'm creating a new note";
  }
}
