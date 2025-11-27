<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
   
    public function testEach()
    {
        $this->view("each",["users"=>[
           [
             "name"=>"Ivriel",
            "hobbies"=>["Coding","Gaming"]
           ],
           [
             "name"=>"Gunawan",
            "hobbies"=>["Coding","Gaming"]
           ]
        ]])
        ->assertSeeInOrder([
            ".red",
            "Ivriel",
            "Coding",
            "Gaming",
            "Gunawan",
            "Coding",
            "Gaming"
        ])
        ;
    }
}
