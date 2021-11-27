<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller {

    /**
	 * index function
	 * @return Illuminate\View
	 */
    public function index() {
        $tasks = Task::all();
       
        return view('frontend.task.index')->with(["tasks" => $tasks]);
    }

    /**
	 * this function used to store data into the database.
	 * @return string
	 */
    public function store(Request $request) {
        try {

            $values = $request->only('name', 'email', 'subject', 'message', 'fullDate', 'hourmins', 'ampm');

            $validator = Validator::make($request->all(), [
                'email' 	=>	'required|email',
                'name' 	    =>	'required',
                'subject'   =>  'required',
                'subject'   =>  'required',
                'message'   =>  'required',
                'image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            if($image = $request->file('image')) {
                $destinationPath = 'images/';
                $img = date("YmdHis") . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $img);
                $values['img'] = $img;
            }
            
            Task::create($values);
            return redirect()->route('index')->with("success", "Task created successfully.");
            

        } catch (\Exception $e) {
            echo json_encode(['error' => true, 'msg' => "Something went wrong."]);
        }
    }

    public function create() {
        return view('frontend.task.create');
    }
}
