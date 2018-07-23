<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 23/07/18
 * Time: 10:26
 */

class Task
{
    public $name;

    public $deadline;

    public $status;

    public function __construct($name, $deadline, $status)
    {

        $this->name = $name;
        $this->deadline = $deadline;
        $this->status = $status;

    }

}

$tasks = [

    new Task('cleaning up', 'next week', true),
    new Task('washing', 'today', true),
    new Task('vacuum', 'tomorrow', false),
    new Task('sorting', 'toyota', true)


];

    var_dump($tasks);





/*filter on tomorrow's tasks*/

$tomorrowTask = array_filter($tasks, function ($task) {

    return $task->deadline == 'tomorrow';

});

    //var_dump($tomorrowTask);




/*future tasks can't be completed*/

$completedTask = array_map(function ($task) {

    if ($task->deadline != 'today') {

        $task->status = false;

    }

    return $task;

}, $tasks);

    //var_dump($completedTask);




/*gimme da namez*/
$gimmeNamez = array_column($tasks, 'name');

    //var_dump($gimmeNamez);



/*try something new*/
$smthNew = array_key_exists('1', $tasks);

    //var_dump($smthNew);


//bit more complex
$smthNew2 = array_column($tasks, 'name', 'name');

$smthNew3 = array_key_exists('vacuum', $smthNew2);

    //var_dump($smthNew2);
    //var_dump($smthNew3);



//maybe can be written like this
$smthNew4 = array_key_exists('vacuum', array_column($tasks, 'name', 'name'));

    //var_dump($smthNew4);




/*url filter*/

$filterUrl = array_filter($tasks, function ($task) {

    $value = array_values($_GET);

    return $task->deadline == $value[0];

});

    //var_dump($filterUrl);



