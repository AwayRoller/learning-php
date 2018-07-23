<?php

class UsersController
{

    public function index()
    {

        $users = App::get('database')->selectAll('users');


        return view('users', compact('users'));
        
    }

    public function store()
    {

        //Insert user associated with the req

        //And redirect back to all users

        App::get('database')->insert('users',
            [
                'name' => $_POST['name']

            ]);

        return redirect('users');
        
    }
    
}