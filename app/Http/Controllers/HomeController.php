<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Training;

class HomeController extends Controller
{
  public function getHome() {
    return view('pages.home');
  }
  public function getAboutUs() {
    return view('pages.aboutus');
  }
  public function getServices() {
    return view('pages.services');
  }
  public function getTraining($slug) {
    $training = Training::where('slug', $slug)->first();
    return view('pages.training', compact('training'));
  }
  public function getGallery() {
    return view('pages.gallery');
  }
}
