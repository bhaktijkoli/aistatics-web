<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
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
  public function getStudents() {
    return view('pages.students');
  }
  public function getGallery() {
    return view('pages.gallery');
  }
  public function getGalleryByID($id) {
    $event = Event::find($id);
    if(!$event) abort(404);
    return view('pages.gallery-details', compact('event'));
  }
  public function getContactUs() {
    return view('pages.contactus');
  }
}
