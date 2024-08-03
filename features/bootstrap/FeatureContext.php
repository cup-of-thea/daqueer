<?php

use App\Domain\UseCases\Commands\CreateEditionCommand;
use App\Domain\UseCases\Commands\CreateEditionRequest;
use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\TableNode;
use Behat\Hook\AfterScenario;
use Behat\Hook\BeforeScenario;
use Behat\Step\Then;
use Behat\Step\When;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
    use WithFaker;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        putenv('DB_CONNECTION=sqlite');
        putenv('DB_DATABASE=:memory:');
        parent::SetUp();
    }

    #[BeforeScenario]
    public function before(): void
    {
        $this->artisan('migrate:fresh');
    }

    #[AfterScenario]
    public function after(): void
    {
        $this->artisan('migrate:rollback');
    }

    #[When('/^I create an edition with the following attributes:$/')]
    public function iCreateAnEditionWithTheFollowingAttributes(TableNode $table): void
    {
        $table = $table->getHash();

        foreach ($table as $row) {
            app(CreateEditionCommand::class)->create(CreateEditionRequest::from($row));
        }
    }

    #[Then('/^I should have the following editions:$/')]
    public function iShouldHaveTheFollowingEditions(TableNode $table)
    {
        throw new PendingException();
    }
}