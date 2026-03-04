<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JudgesFixture
 */
class JudgesFixture extends TestFixture
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
                'designation_name' => 'Lorem ipsum dolor sit amet',
                'created' => 1772643457,
                'modified' => 1772643457,
            ],
        ];
        parent::init();
    }
}
