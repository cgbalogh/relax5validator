<?php
namespace CGB\Relax5validator\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ConditiongroupTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5validator\Domain\Model\Conditiongroup
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5validator\Domain\Model\Conditiongroup();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDisjunctiveReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDisjunctive()
        );

    }

    /**
     * @test
     */
    public function setDisjunctiveForBoolSetsDisjunctive()
    {
        $this->subject->setDisjunctive(true);

        self::assertAttributeEquals(
            true,
            'disjunctive',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConditionsReturnsInitialValueForCondition()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getConditions()
        );

    }

    /**
     * @test
     */
    public function setConditionsForObjectStorageContainingConditionSetsConditions()
    {
        $condition = new \CGB\Relax5validator\Domain\Model\Condition();
        $objectStorageHoldingExactlyOneConditions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneConditions->attach($condition);
        $this->subject->setConditions($objectStorageHoldingExactlyOneConditions);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneConditions,
            'conditions',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addConditionToObjectStorageHoldingConditions()
    {
        $condition = new \CGB\Relax5validator\Domain\Model\Condition();
        $conditionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $conditionsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($condition));
        $this->inject($this->subject, 'conditions', $conditionsObjectStorageMock);

        $this->subject->addCondition($condition);
    }

    /**
     * @test
     */
    public function removeConditionFromObjectStorageHoldingConditions()
    {
        $condition = new \CGB\Relax5validator\Domain\Model\Condition();
        $conditionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $conditionsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($condition));
        $this->inject($this->subject, 'conditions', $conditionsObjectStorageMock);

        $this->subject->removeCondition($condition);

    }

    /**
     * @test
     */
    public function getErrorMessageReturnsInitialValueForErrorMessage()
    {
        self::assertEquals(
            null,
            $this->subject->getErrorMessage()
        );

    }

    /**
     * @test
     */
    public function setErrorMessageForErrorMessageSetsErrorMessage()
    {
        $errorMessageFixture = new \CGB\Relax5validator\Domain\Model\ErrorMessage();
        $this->subject->setErrorMessage($errorMessageFixture);

        self::assertAttributeEquals(
            $errorMessageFixture,
            'errorMessage',
            $this->subject
        );

    }
}
