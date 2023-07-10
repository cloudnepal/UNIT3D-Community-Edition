<?php

namespace Tests\Todo\Feature\Http\Controllers\Staff;

use PHPUnit\Framework\Attributes\Test;
use App\Models\Group;
use App\Models\User;
use Database\Seeders\GroupsTableSeeder;
use Tests\TestCase;

use function route;

/**
 * @see \App\Http\Controllers\Staff\CommandController
 */
final class CommandControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function createStaffUser(): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
    {
        return User::factory()->create([
            'group_id' => fn () => Group::factory()->create([
                'is_owner' => true,
                'is_admin' => true,
                'is_modo'  => true,
            ])->id,
        ]);
    }

    #[Test]
    public function clear_all_cache_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/clear-all-cache');

        $response->assertRedirect(route('staff.commands.index'));
    }

    #[Test]
    public function clear_cache_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/clear-cache');

        $response->assertRedirect(route('staff.commands.index'));
    }

    #[Test]
    public function clear_config_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/clear-config-cache');

        $response->assertRedirect(route('staff.commands.index'));
    }

    #[Test]
    public function clear_route_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/clear-route-cache');

        $response->assertRedirect(route('staff.commands.index'));
    }

    #[Test]
    public function clear_view_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/clear-view-cache');

        $response->assertRedirect(route('staff.commands.index'));
    }

    #[Test]
    public function index_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->get(route('staff.commands.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.command.index');
    }

    #[Test]
    public function maintance_disable_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/maintance-disable');

        $response->assertRedirect(route('staff.commands.index'));
    }

    #[Test]
    public function set_all_cache_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/set-all-cache');

        $response->assertRedirect(route('staff.commands.index'));
    }

    #[Test]
    public function test_email_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test is incomplete.');

        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->post('dashboard/commands/test-email');

        $response->assertRedirect(route('staff.commands.index'));
    }
}
