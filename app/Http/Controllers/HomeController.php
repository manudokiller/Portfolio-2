<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class HomeController extends Controller
{
  private $skills = [
    ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap'],
    ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
    ['name' => 'HTML5', 'icon' => 'fa-brands fa-html5'],
    ['name' => 'CSS3', 'icon' => 'fa-brands fa-css3'],
    ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
    ['name' => 'Javascript', 'icon' => 'fa-brands fa-js-square'],
    ['name' => 'SQL', 'icon' => 'fa-solid fa-database'],
    ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt']
  ];

  public function index()
  {
    return view('welcome')->with([
      'skills' => $this->skills
    ]);
  }
}
