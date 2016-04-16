<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
    	return view('webmaster');
    }
    public function widgets()
    {
    	return view('pages.widgets');
    }
    public function tableSimple()
    {
    	return view('pages/tables.simple');
    }
    public function tableData()
    {
    	return view('pages/tables.data');
    }
    public function formGeneral()
    {
    	return view('pages/forms.general');
    }

    public function formAdvance()
    {
    	return view('pages/forms.advanced');
    }
    public function formEditor()
    {
    	return view('pages/forms.editors');
    }
    public function mail()
    {
    	return view('pages.mailbox');
    }

    public function showAmountImg($number)
    {
        if(Requests::ajax())
        {
            echo $number;
        }
    }
}
