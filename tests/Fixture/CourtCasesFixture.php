<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CourtCasesFixture
 */
class CourtCasesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'petitioner' => 'Lorem ipsum dolor sit amet',
                'respondent' => 'Lorem ipsum dolor sit amet',
                'created' => 1772670616,
                'modified' => 1772670616,
            ],
        ];
        parent::init();
    }
}
