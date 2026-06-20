<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form3Request;
use App\Mail\TestMail;
use App\Rules\WordsCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // $data = $request->all(); // array
        // dd($data['query']); // string

        // $email = $request->input('email');
        // $password = $request->input('password');

        $email = $request->email;
        $password = $request->password;

        dd($email, $password);
    }

    function form2()
    {
        return view('forms.form2');
    }

    function form2_data(Request $request)
    {
        // dd($request->all());
        // 1. validation

        // 2. save files

        // 3. actions & statements
        $name = $request->name;
        $dob = $request->dob;

        $year = explode('-', $dob)[0];

        // 4. redirect

        if ($year >= 2000) {
            return view('forms.genz', compact('name', 'year'));
        }
        return 'Old Man :////';
    }

    function register()
    {
        return view('forms.register');
    }

    function register_data(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        dd($request->all());
    }

    function form3()
    {
        return view('forms.form3');
    }

    function form3_data(Request $request)
    {
        // dd($request->all());
        // 1. validation
        // -- request validation
        $request->validate([
            'name' => ['required', 'min:2'],
            'email' => 'required|email',
            'subject' => ['required', new WordsCount(2)],
            // 'message' => 'required'
        ], [
            'required' => 'هذا الحقل مطلووووووب',
            'name.required' => 'الاسم مطلوووب',
            'email.required' => 'الايميل اهم من اسمك'
        ]);
        // -- file validation
        // -- validator class

        // $validator = Validator::make($request->all(), [
        //     'name' => ['required', 'min:2'],
        //     'email' => 'required|email|ends_with:gmail.com',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return [
        //         'status' => 'false',
        //         'message' => 'There is an error in some fields'
        //     ];
        // }

        // dd($request->all());

        $data = $request->except('_token');

        // dd($data);

        Mail::to('edaod886@gmail.com')->send(new TestMail($data));

        dd('Mail Sent');
    }

    function form4()
    {
        return view('forms.form4');
    }

    function form4_data(Request $request)
    {
        // dd($request->all());
        // move_uploaded_file()
        //1. validation
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        //2. save files
        // Mohammed Naji => mohammed naji => mohammed_naji
        // kjhhsdahfasldkjfhdhflhsahfhsaflhdsahfjkhdskfhjka.JPG
        // 321654657_4654975646_mohammed_naji.JPG

        // $ex = $request->file('image')->getClientOriginalExtension();
        // $name = str_replace(' ', '_', strtolower($request->name));
        // $path = rand() . '_' . time() . '_' . $name . '.' . $ex;

        // dd($path);

        // $path = rand() . time() . $request->file('image')->getClientOriginalName();
        // $request->file('image')->move(public_path('uploads'), $name);

        $name = $request->name;
        $path = $request->file('image')->store('uploads', 'custom');
        //3. save in db

        //4. redirect
        return view('forms.form4_data', compact('name', 'path'));

        // dd($path);
    }

    function form5()
    {
        return view('forms.form5');
    }

    function form5_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'hobbies' => 'required',
            'education' => 'required',
        ]);


        dd($request->all());
    }
}
