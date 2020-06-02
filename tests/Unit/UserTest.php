<?php

namespace Tests\Unit;

use App\User;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_projects()
    {
        $user = factory('App\User')->create();

        $this->assertInstanceOf(Collection::class, $user->projects);
    }

    /** @test */
    public function a_user_has_accessible_projects()
    {
        $userOne = $this->signIn();

        ProjectFactory::ownedBy($userOne)->create();

        $this->assertCount(1, $userOne->accessibleProjects());

        $userTwo = factory(User::class)->create();
        $userThree = factory(User::class)->create();

        $project = tap(ProjectFactory::ownedBy($userTwo)->create())->invite($userThree);

        $this->assertCount(1, $userOne->accessibleProjects());

        $project->invite($userOne);

        $this->assertCount(2, $userOne->accessibleProjects());
    }
}
