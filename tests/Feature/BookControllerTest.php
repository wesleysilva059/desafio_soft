<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    /** 
     * @test 
     */ 
    public function it_prevent_non_logged_in_users_from_creating_new_book() 
    { 
        $response = $this->get(route('admin.books.create')); 
        $response->assertRedirect('login'); 
    }


    /** 
     * @test 
     */ 
    public function it_block_anyone_to_see_list_all_books() 
    { 
        $response = $this->get(route('admin.books.index')); 
        $response->assertStatus(302); 
    }
}
