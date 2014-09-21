<?php

class DoctorController extends BaseController {
	public function index()
	{
		$doctors = Doctor::orderBy('number')->get();
		return View::make('doctors', ['doctors' => $doctors]);
	}

	public function get($id)
	{
		$doctor = Doctor::with(['companions', 'episodes'])->find($id);
		$ratings = Rating::getRating('doctor', $id);
		$comments = Comment::where('item_id', $id)
						   ->where('item_type', 'doctor')
						   ->with('user')
						   ->orderBy('created_at', 'desc')
						   ->get();

		return View::make('items.doctor', [ 'doctor' => $doctor, 
		                  					'ratings' => $ratings, 
		                  					'comments' => $comments ]);
	}
}