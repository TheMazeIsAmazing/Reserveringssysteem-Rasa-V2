<?php

namespace controllers;
use Controller;
use Post;

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve data from the database and pass it to the view
        $posts = Post::getAll();

        // Render the view
        $this->view('home', ['posts' => $posts]);
    }
}
