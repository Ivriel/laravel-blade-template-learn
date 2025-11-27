<?php

namespace Tests\Feature;

use App\Models\Person as ModelsPerson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Person;
class EchoTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = "Ivriel";
        $person->address = "Indonesia";
        $this->view("echo",["person"=>$person])
        ->assertSeeText("Ivriel : Indonesia");
    }
}
