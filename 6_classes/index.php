<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */

require 'functions.php';

class Task {

    public $description;

    public $completed = false;

    public function __construct($description)
    {
        //Automatically triggered on instantiation
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }

}

//$task = new Task ('Go to the store');// new task object
//
//$task->complete();//complete the task
//
//var_dump($task->isComplete());

$tasks = [

    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

$tasks[0]->complete();


//dd($tasks);

require 'index.view.php';

