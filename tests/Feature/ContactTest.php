<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanShowContactList()
    {
        // Create an authenticated user
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create some sample contacts in the database
        $contacts = Contact::factory()->count(5)->create();

        // Send a GET request to the contacts index route
        $response = $this->get('/contacts');

        // Assert that the response status code is 200 (OK)
        $response->assertStatus(200);

        // Assert that the response contains the contact names
        foreach ($contacts as $contact) {
            $response->assertSee($contact->name);
        }
    }
}
