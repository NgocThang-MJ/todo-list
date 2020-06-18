<?php

namespace App\Http\Controllers;

use App\Todolist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
//		dd($lists->user());
//		$lists = DB::table('todolists')->where('user_id', $lists->user()->id)->get();
		$lists = Todolist::where('user_id', auth()->user()->id)->get();
//		dd($lists);
		return view('lists.index', ['lists' => $lists]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Todolist  $todolist
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Todolist $todolist)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Todolist  $todolist
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Todolist $todolist)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Todolist             $todolist
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Todolist $todolist)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Todolist  $todolist
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Todolist $todolist)
	{
		//
	}
}
