<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class dashboardcon extends Controller
{
public function index()
{
return view('dashboard');
}

}