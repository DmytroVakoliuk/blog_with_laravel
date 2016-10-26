<?php

namespace App\Http\Controllers;
/**
 *
 */
class PagesController extends Controller
{

    public function getIndex()
    {
        # proces variables data or params
        # talk to the model
        # recive from model
        # compile or proces data from the model if needed
        # pass that data to the correct view

        // $activeIndex = 'class=active';

        $posts = [
            'first post', 'second post', 'third post'
        ];

//		return view('pages.welcome', compact('posts'));
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        // $activeAbout = 'class=active';
        $first = 'Vasya';
        $last = 'Pupcins';
        $fullname = $first . " " . $last;
        $email = 'sdffgs@gdsg.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        // return view('pages.about')->with("fullname", $full);
//		 return view('pages.about')->withFullname($fullname)->withEmail($email);
        return view('pages.about', $data);

    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
