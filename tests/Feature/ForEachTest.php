<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForEachTest extends TestCase
{
     public function testForEach()
    {
        $this->view("foreach",["hobbies"=>["Coding","Gaming"]])->assertSeeText("Coding")->assertSeeText("Gaming");
    }
}
