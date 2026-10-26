<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    public function create(){
        return view('layout.schloarship.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'phone_number' => 'required|regex:/^01[3-9]\d{8}$/',
            'f_name' => 'required',
            'm_name' => 'required',
            'date' => 'required|date',
            'nationality' => 'required',
            'gender' => 'required|integer|in:1,2,3',
            'marital_status' => 'required|in:Married,Unmarried',
            'address' => 'required',
            'email' => 'required|email',
            'ssc' => 'required',
            'institute' => 'required',
            'hsc' => 'required',
            'hsc_institute' => 'required',
            'hours' => 'required',
            'h_degree' => 'required',
            'board' => 'required',
            'pass_year' => 'required',
            'group' => 'required',
            'hsc_group' => 'required',
            'hsc_year' => 'required',
            'hsc_board' => 'required',
        ]);

        $scholarship = new Scholarship();

        // image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('uploads/scholarships'),
                $imageName
            );

            $scholarship->image = $imageName;
        }

        $scholarship->name = $request->name;
        $scholarship->phone_number = $request->phone_number;
        $scholarship->f_name = $request->f_name;
        $scholarship->m_name = $request->m_name;
        $scholarship->date = $request->date;
        $scholarship->nationality = $request->nationality;
        $scholarship->gender = $request->gender;
        $scholarship->marital_status = $request->marital_status;
        $scholarship->address = $request->address;
        $scholarship->email = $request->email;
        $scholarship->ssc = $request->ssc;
        $scholarship->institute = $request->institute;
        $scholarship->hsc = $request->hsc;
        $scholarship->hsc_institute = $request->hsc_institute;
        $scholarship->hours = $request->hours;
        $scholarship->h_degree = $request->h_degree;
        $scholarship->board = $request->board;
        $scholarship->pass_year = $request->pass_year;
        $scholarship->group = $request->group;
        $scholarship->hsc_group = $request->hsc_group;
        $scholarship->hsc_year = $request->hsc_year;
        $scholarship->hsc_board = $request->hsc_board;

        $scholarship->save();

        flash()->success('Application inserted into database');

        return redirect()->route('scholarship.index');
    }
    // index //
    public function index()
    {
        $scholarship = Scholarship::latest()->first();
        return view('layout.schloarship.index', compact('scholarship'));
    }

}
