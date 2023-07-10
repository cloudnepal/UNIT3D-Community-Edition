<?php

namespace Tests\Todo\Feature\Http\Controllers;

use PHPUnit\Framework\Attributes\Test;
use App\Models\Playlist;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PlaylistController
 */
final class PlaylistControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function create_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('playlists.create'));

        $response->assertOk();
        $response->assertViewIs('playlist.create');

        // TODO: perform additional assertions
    }

    #[Test]
    public function destroy_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $playlist = Playlist::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('playlists.destroy', ['playlist' => $playlist]));

        $response->assertRedirect(withSuccess('Playlist Deleted!'));
        $this->assertModelMissing($playlists);

        // TODO: perform additional assertions
    }

    #[Test]
    public function edit_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $playlist = Playlist::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('playlists.edit', ['playlist' => $playlist]));

        $response->assertOk();
        $response->assertViewIs('playlist.edit');
        $response->assertViewHas('playlist');

        // TODO: perform additional assertions
    }

    #[Test]
    public function index_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('playlists.index'));

        $response->assertOk();
        $response->assertViewIs('playlist.index');
        $response->assertViewHas('playlists');

        // TODO: perform additional assertions
    }

    #[Test]
    public function show_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $playlist = Playlist::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('playlists.show', ['playlist' => $playlist]));

        $response->assertOk();
        $response->assertViewIs('playlist.show');
        $response->assertViewHas('playlist');
        $response->assertViewHas('meta');
        $response->assertViewHas('torrents');

        // TODO: perform additional assertions
    }

    #[Test]
    public function store_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('playlists.store'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    #[Test]
    public function update_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $playlist = Playlist::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->patch(route('playlists.update', ['playlist' => $playlist]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    // test cases...
}
