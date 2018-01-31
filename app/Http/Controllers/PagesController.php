<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    return view('pages/welcome');
        # process variable data or params
        # talk to the model
        #receive from the model
        # compile or process data from the moedel if needed
        # pass that data to the correct view
  }
  public function getAbout(){
        $first='Bereket';
        $last='Keleta';
        $fullname=$first." ".$last;
        $email='berzer773@gmail.com';
        $data=[];
        $data['email']= $email;
        $data['fullname']= $fullname;

        //return view('pages.about');
          //  return view('pages.about')->with("fullname",$full);
      //  return view('pages.about')->with("fullname",$fullname);
      //passing oone variable  return view('pages.about')->withFullname($fullname);
        //to pass multiple variable
        // return view('pages.about')->withFullname($fullname)->withEmail($email);
        // to pass an array
      return view('pages.about')->withData($data);
  }
  public function getContact(){
      return view('pages.contact');

  }
}

 ?>
