<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
   public function testHello()  
   {
    $this->get("/hello")->assertSeeText("Ivriel");
   }

   public function testHelloWorld()  
   {
    $this->get("/world")->assertSeeText("Ivriel");
   }

    public function testHelloView()  // nampilin langsung tanpa bikin route
   {
    $this->view("hello",["name"=> "Ivriel"])->assertSeeText("Ivriel");
   }

    public function testHelloWorldView()  // nampilin langsung tanpa bikin route
   {
     $this->view("hello",["name"=> "Ivriel"])->assertSeeText("Ivriel");
   }

}
