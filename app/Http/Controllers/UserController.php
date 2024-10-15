<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $show = About::all();
        return view('about', compact('show'));
    }

    public function contact()
    {
        $show = Contact::all();
        return view('contact', compact('show'));
    }

    public function projects()
    {
        $show = Project::all();
        return view('projects', compact('show'));
    }
    public function services()
    {
        $show = Service::all();
        return view('services', compact('show'));
    }
}
