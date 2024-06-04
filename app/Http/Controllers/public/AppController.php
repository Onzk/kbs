<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
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
    public function executives()
    {
        return view('public.executives');
    }
    public function entreprises()
    {
        return view('public.entreprises');
    }
    public function society_presentation()
    {
        return view('public.society-presentation');
    }
    public function mvv()
    {
        return view('public.mvv');
    }
    public function teams()
    {
        return view('public.teams');
    }
    public function executives_prestation()
    {
        return view('public.executives-prestation');
    }
    public function entreprises_prestation()
    {
        return view('public.entreprises-prestation');
    }
    public function process_executives()
    {
        return view('public.executives-process');
    }
    public function process_entreprises()
    {
        return view('public.entreprises-process');
    }
    public function webinaries()
    {
        return view('public.webinaries');
    }
    public function questions()
    {
        return view('public.questions');
    }
    public function press()
    {
        return view('public.press');
    }
    public function blog()
    {
        return view('public.blog');
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
