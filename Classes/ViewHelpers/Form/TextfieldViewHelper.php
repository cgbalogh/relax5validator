<?php
namespace CGB\Relax5validator\ViewHelpers\Form;
use TYPO3Fluid\Fluid\ViewHelpers\Form;

class TextfieldViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
{
    
    
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('validatorContext', 'string', 'Context of the dynamic Validator', false, false);
    }

    /**
     * Render the tag.
     *
     * @return string rendered tag.
     */
    public function render()
    {
        if ($this->arguments['property'] && \CGB\Relax5validator\Domain\Validator\GenericValidator::isPropertyRequired($this->arguments['validatorContext'], $this->arguments['property'])) {
            $this->tag->addAttribute('required','required');
        } elseif ($this->arguments['name'] && \CGB\Relax5validator\Domain\Validator\GenericValidator::isNameRequired($this->arguments['validatorContext'], $this->arguments['name'])) {
            $this->tag->addAttribute('required','required');
        }
        $content = parent::render();
        return $content;
    }
}
