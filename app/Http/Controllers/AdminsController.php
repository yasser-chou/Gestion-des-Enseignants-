<?php

namespace App\Http\Controllers;
use App\prof;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index(){
		
		return view('admins.index')->withProfs(Prof::orderBy('created_at','DESC')->paginate(10000));
		
	}
}
