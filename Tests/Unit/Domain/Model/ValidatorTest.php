<?php
namespace CGB\Relax5validator\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ValidatorTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5validator\Domain\Model\Validator
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5validator\Domain\Model\Validator();
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
    public function getContextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContext()
        );
    }

    /**
     * @test
     */
    public function setContextForStringSetsContext()
    {
        $this->subject->setContext('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'context',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDomainModelObjectReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDomainModelObject()
        );
    }

    /**
     * @test
     */
    public function setDomainModelObjectForStringSetsDomainModelObject()
    {
        $this->subject->setDomainModelObject('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'domainModelObject',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDebugReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDebug()
        );
    }

    /**
     * @test
     */
    public function setDebugForBoolSetsDebug()
    {
        $this->subject->setDebug(true);

        self::assertAttributeEquals(
            true,
            'debug',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getConditiongroupsReturnsInitialValueForConditiongroup()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getConditiongroups()
        );
    }

    /**
     * @test
     */
    public function setConditiongroupsForObjectStorageContainingConditiongroupSetsConditiongroups()
    {
        $conditiongroup = new \CGB\Relax5validator\Domain\Model\Conditiongroup();
        $objectStorageHoldingExactlyOneConditiongroups = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneConditiongroups->attach($conditiongroup);
        $this->subject->setConditiongroups($objectStorageHoldingExactlyOneConditiongroups);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneConditiongroups,
            'conditiongroups',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addConditiongroupToObjectStorageHoldingConditiongroups()
    {
        $conditiongroup = new \CGB\Relax5validator\Domain\Model\Conditiongroup();
        $conditiongroupsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $conditiongroupsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($conditiongroup));
        $this->inject($this->subject, 'conditiongroups', $conditiongroupsObjectStorageMock);

        $this->subject->addConditiongroup($conditiongroup);
    }

    /**
     * @test
     */
    public function removeConditiongroupFromObjectStorageHoldingConditiongroups()
    {
        $conditiongroup = new \CGB\Relax5validator\Domain\Model\Conditiongroup();
        $conditiongroupsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $conditiongroupsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($conditiongroup));
        $this->inject($this->subject, 'conditiongroups', $conditiongroupsObjectStorageMock);

        $this->subject->removeConditiongroup($conditiongroup);
    }
}
