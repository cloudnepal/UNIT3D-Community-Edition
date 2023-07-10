<?php

namespace Tests\Todo\Feature\Http\Controllers;

use PHPUnit\Framework\Attributes\Test;
use App\Models\PrivateMessage;
use App\Models\User;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PrivateMessageController
 */
final class PrivateMessageControllerTest extends TestCase
{
    #[Test]
    public function delete_private_message_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $private_message = PrivateMessage::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('users.received_messages.destroy', ['user' => $user, 'receivedPrivateMessage' => $private_message]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withSuccess('PM Was Deleted Successfully!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function get_private_message_by_id_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $private_message = PrivateMessage::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.received_messages.show', ['user' => $user, 'receivedPrivateMessage' => $private_message]));

        $response->assertOk();
        $response->assertViewIs('pm.message');
        $response->assertViewHas('pm');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    #[Test]
    public function get_private_messages_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.received_messages.index', ['user' => $user]));

        $response->assertOk();
        $response->assertViewIs('pm.inbox');
        $response->assertViewHas('pms');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    #[Test]
    public function get_private_messages_sent_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.sent_messages.index', ['user' => $user]));

        $response->assertOk();
        $response->assertViewIs('pm.outbox');
        $response->assertViewHas('pms');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    #[Test]
    public function make_private_message_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.sent_messages.create', ['user' => $user]));

        $response->assertOk();
        $response->assertViewIs('pm.send');
        $response->assertViewHas('user');
        $response->assertViewHas('receiver_id');
        $response->assertViewHas('username');

        // TODO: perform additional assertions
    }

    #[Test]
    public function mark_all_as_read_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('users.received_messages.mass_update', ['user' => $user]));

        $response->assertRedirect(withSuccess('Your Messages Have All Been Marked As Read!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function reply_private_message_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $private_message = PrivateMessage::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->patch(route('users.received_messages.update', ['user' => $user, 'privateMessage' => $private_message]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    #[Test]
    public function send_private_message_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('users.sent_messages.store', ['user' => $user]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    // test cases...
}
