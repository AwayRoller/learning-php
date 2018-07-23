<?php


class PagesController
{

    public function home()
    {
        //Receive the request
        //Delegate
        //Return a response

        //$tasks = $app['database']->selectAll('todos');




        return view('index');


    }

    public function about()
    {
        //Receive the request
        //Delegate
        //Return a response

        $company = 'HeggesztoApparat';

        return view('about', ["company" => $company]);

    }

    public function contact()
    {
        //Receive the request
        //Delegate
        //Return a response

        return view('contact');

    }

    public function aboutCulture()
    {


        //Receive the request
        //Delegate
        //Return a response

        return view('about-culture');

    }


}