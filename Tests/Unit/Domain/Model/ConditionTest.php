<?php
namespace CGB\Relax5validator\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ConditionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5validator\Domain\Model\Condition
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5validator\Domain\Model\Condition();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getPropertyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProperty()
        );

    }

    /**
     * @test
     */
    public function setPropertyForStringSetsProperty()
    {
        $this->subject->setProperty('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'property',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStorageObjectReferenceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStorageObjectReference()
        );

    }

    /**
     * @test
     */
    public function setStorageObjectReferenceForStringSetsStorageObjectReference()
    {
        $this->subject->setStorageObjectReference('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'storageObjectReference',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNegateReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getNegate()
        );

    }

    /**
     * @test
     */
    public function setNegateForBoolSetsNegate()
    {
        $this->subject->setNegate(true);

        self::assertAttributeEquals(
            true,
            'negate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getOperatorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOperator()
        );

    }

    /**
     * @test
     */
    public function setOperatorForStringSetsOperator()
    {
        $this->subject->setOperator('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'operator',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getValue()
        );

    }

    /**
     * @test
     */
    public function setValueForStringSetsValue()
    {
        $this->subject->setValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'value',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMapErrorToPropertyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMapErrorToProperty()
        );

    }

    /**
     * @test
     */
    public function setMapErrorToPropertyForStringSetsMapErrorToProperty()
    {
        $this->subject->setMapErrorToProperty('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mapErrorToProperty',
            $this->subject
        );

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
