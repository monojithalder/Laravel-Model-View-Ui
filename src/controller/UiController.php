<?php
namespace Novatree\ModelViewUi\controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UiController extends Controller{
    public function getcreatemodel()
    {
        return view('ui::createmodel');
    }
}