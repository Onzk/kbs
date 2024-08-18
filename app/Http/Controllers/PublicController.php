<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.index');
    }
    public function kapi_presentation()
    {
        return view('public.kapi-consult-presentation');
    }
    public function kbs_presentation()
    {
        return view('public.kbs-presentation');
    }
    public function key_information()
    {
        return view('public.key-information');
    }
    public function candidates()
    {
        return view('public.candidates');
    }
    public function entreprises()
    {
        return view('public.entreprises');
    }
    public function mvv()
    {
        return view('public.mvv');
    }
    public function teams()
    {
        return view('public.team');
    }
    public function webinaries()
    {
        return view('public.webinaries');
    }
    public function questions()
    {
        return view('public.questions');
    }
    public function blog()
    {
        return view('public.blog');
    }
    public function blog_show(Request $request, Post $post)
    {
        return view('public.blog-show', ["post" => $post]);
    }
    public function recruitment()
    {
        return view('public.recruitment');
    }
    public function faqs()
    {
        return view('public.faqs');
    }
    public function user_space()
    {
        return view('public.user-space');
    }
    public function data_protection()
    {
        return view('public.data-protection');
    }
}
