<?php
namespace CGB\Relax5validator\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ValidationgroupTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5validator\Domain\Model\Validationgroup
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5validator\Domain\Model\Validationgroup();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getConditiongroupReturnsInitialValueForConditiongroup()
    {
        self::assertEquals(
            null,
            $this->subject->getConditiongroup()
        );

    }

    /**
     * @test
     */
    public function setConditiongroupForConditiongroupSetsConditiongroup()
    {
        $conditiongroupFixture = new \CGB\Relax5validator\Domain\Model\Conditiongroup();
        $this->subject->setConditiongroup($conditiongroupFixture);

        self::assertAttributeEquals(
            $conditiongroupFixture,
            'conditiongroup',
            $this->subject
        );

    }
}
