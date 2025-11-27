<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form",["user"=> [
            "premium"=>true,
            "name"=>"Ivriel",
            "admin"=>true
        ]])
        ->assertSee("checked")
        ->assertSee("Ivriel")
        ->assertDontSee("readonly")
        ;

         $this->view("form",["user"=> [
            "premium"=>false,
            "name"=>"Ivriel",
            "admin"=>false
        ]])
        ->assertDontSee("checked")
        ->assertSee("Ivriel")
        ->assertSee("readonly")
        ;
    }
}
