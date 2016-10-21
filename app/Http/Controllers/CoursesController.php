<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;

class CoursesController extends DefaultController
{

    public function courses()
    {
        $courses =  Course::all();

        foreach ($courses as $course ) {
            $data[$course->id]['course'] = $course;
            $data[$course->id]['course'][$course->template->id]['template'] = $course->template;

            return $data;
        }


    }
}
