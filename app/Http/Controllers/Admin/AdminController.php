<?php
	
	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;

	class AdminController extends Controller
	{
		public function get_dashboard(Request $request)
		{
			$user_statement = $request->user();
			return view('admin.dashboard', ['user' => $user_statement]);
		}
	}


?>