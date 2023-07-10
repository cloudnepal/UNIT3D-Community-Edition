<?php

namespace Tests\Unit\Console\Commands;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Console\Commands\AutoWarning
 */
final class AutoWarningTest extends TestCase
{
    #[Test]
    public function it_runs_successfully(): void
    {
        $this->artisan('auto:warning')
            ->expectsOutput('Automated User Warning Command Complete')
            ->assertExitCode(0)
            ->run();
    }
}
