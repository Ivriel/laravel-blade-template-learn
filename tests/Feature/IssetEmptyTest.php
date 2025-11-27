<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{

    public function testIssetAndEmpty()
    {
        $this->view("isset-empty",[])->assertDontSeeText("Hello")->assertSeeText("I don't have any hobbies",false);
    
        $this->view("isset-empty",["name"=>"Ivriel"])->assertSeeText("Hello, my name is Ivriel")->assertSeeText("I don't have any hobbies",false);

                $this->view("isset-empty",["name"=>"Ivriel","hobbies"=>["Coding"]])->assertSeeText("Hello, my name is Ivriel")->assertDontSeeText("I don't have any hobbies",false);
    }
}
