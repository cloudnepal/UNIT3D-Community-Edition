<?php

namespace Tests\Todo\Feature\Http\Controllers\Staff;

use PHPUnit\Framework\Attributes\Test;
use App\Models\Rss;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\RssController
 */
final class RssControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function create_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('staff.rss.create'));

        $response->assertOk();
        $response->assertViewIs('Staff.rss.create');
        $response->assertViewHas('torrent_repository');
        $response->assertViewHas('categories');
        $response->assertViewHas('types');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    #[Test]
    public function destroy_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $rss = Rss::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('staff.rss.destroy', ['rss' => $rss]));

        $response->assertRedirect(withSuccess('RSS Feed Deleted!'));
        $this->assertModelMissing($staff);

        // TODO: perform additional assertions
    }

    #[Test]
    public function edit_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $rss = Rss::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('staff.rss.edit', ['rss' => $rss]));

        $response->assertOk();
        $response->assertViewIs('Staff.rss.edit');
        $response->assertViewHas('torrent_repository');
        $response->assertViewHas('categories');
        $response->assertViewHas('types');
        $response->assertViewHas('user');
        $response->assertViewHas('rss');

        // TODO: perform additional assertions
    }

    #[Test]
    public function index_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('staff.rss.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.rss.index');
        $response->assertViewHas('hash');
        $response->assertViewHas('public_rss');

        // TODO: perform additional assertions
    }

    #[Test]
    public function store_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('staff.rss.store'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($error));

        // TODO: perform additional assertions
    }

    #[Test]
    public function update_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $rss = Rss::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->patch(route('staff.rss.update', ['rss' => $rss]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($error));

        // TODO: perform additional assertions
    }

    // test cases...
}
