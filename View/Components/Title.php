<?php

namespace Modules\Ibuilder\View\Components;

use Illuminate\View\Component;

class Title extends Component
{

    public $id, $textVineta, $textVinetaColor, $textVinetaPosition, $textVinetaColorClass, $textClasses,
        $textPosition, $textAlign, $textWithLine, $textLineConfig;
    public $title, $titleColor, $titleColorClass, $titleSize, $titleMarginT, $titleMarginB, $titleWeight,
        $titleTransform, $titleLetterSpacing, $titleShadow, $titleUrl, $titleTarget, $titleClasses;
    public $subtitle, $subtitleSize, $subtitleMarginT, $subtitleMarginB, $subtitleColor, $subtitleColorClass,
        $subtitleWeight, $subtitleTransform, $subtitleLetterSpacing, $subtitleShadow, $subtitleClasses;
    public $animateTextName, $animateTextDelay, $animateTextDuration, $animateTextOffset,
        $animateTextEasing, $animateTextOnce, $animateTextMirror;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = null,
                                $textVineta = null,
                                $textVinetaColor = null,
                                $textVinetaColorClass = null,
                                $textVinetaPosition = null,
                                $titleColor = null,
                                $titleColorClass = null,
                                $title = null,
                                $titleSize = 20,
                                $titleMarginT = '',
                                $titleMarginB = '',
                                $titleWeight = "font-weight-normal",
                                $titleTransform = null,
                                $titleLetterSpacing = 0,
                                $titleShadow = "",
                                $titleUrl = null,
                                $titleTarget = "_self",
                                $titleClasses = "",
                                $subtitle = null,
                                $subtitleSize = 16,
                                $subtitleMarginT = '',
                                $subtitleMarginB = '',
                                $subtitleColor = null,
                                $subtitleColorClass = null,
                                $subtitleWeight = "font-weight-normal",
                                $subtitleTransform = null,
                                $subtitleLetterSpacing = 0,
                                $subtitleShadow = "",
                                $subtitleClasses = "",
                                $textClasses = "",
                                $textPosition = 2,
                                $textAlign = "",
                                $textWithLine= "",
                                $textLineConfig = [],
                                $animateTextName = "",
                                $animateTextDelay = "",
                                $animateTextDuration = "",
                                $animateTextOffset = "",
                                $animateTextEasing = "",
                                $animateTextOnce = false,
                                $animateTextMirror = false
    )
    {
        $this->id = $id;
        $this->textVineta = $textVineta;
        $this->textVinetaColor = $textVinetaColor;
        $this->textVinetaColorClass = $textVinetaColorClass;
        $this->textVinetaPosition = $textVinetaPosition;
        $this->title = $title;
        $this->titleColor = $titleColor;
        $this->titleColorClass = $titleColorClass;
        $this->titleSize = explode(",",$titleSize);
        $this->titleMarginT = $titleMarginT;
        $this->titleMarginB = $titleMarginB;
        $this->titleWeight = $titleWeight;
        $this->titleTransform = $titleTransform ;
        $this->titleLetterSpacing = $titleLetterSpacing;
        $this->titleShadow = $titleShadow;
        $this->titleUrl = $titleUrl;
        $this->titleTarget = $titleTarget;
        $this->titleClasses = $titleClasses;
        $this->subtitle = $subtitle;
        $this->subtitleSize = explode(",",$subtitleSize);
        $this->subtitleMarginT = $subtitleMarginT;
        $this->subtitleMarginB = $subtitleMarginB;
        $this->subtitleColor = $subtitleColor;
        $this->subtitleColorClass = $subtitleColorClass;
        $this->subtitleWeight = $subtitleWeight;
        $this->subtitleTransform = $subtitleTransform;
        $this->subtitleLetterSpacing = $subtitleLetterSpacing;
        $this->subtitleShadow = $subtitleShadow;
        $this->subtitleClasses = $subtitleClasses;
        $this->textClasses = $textClasses;
        $this->textPosition = $textPosition;
        $this->textAlign = $textAlign;
        $this->textWithLine = $textWithLine;
        $this->textLineConfig = $textLineConfig;
        $this->animateTextName = $animateTextName;
        $this->animateTextDelay = $animateTextDelay;
        $this->animateTextDuration = $animateTextDuration;
        $this->animateTextOffset = $animateTextOffset;
        $this->animateTextEasing = $animateTextEasing;
        $this->animateTextOnce = $animateTextOnce;
        $this->animateTextMirror = $animateTextMirror;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view("ibuilder::frontend.components.title");
    }
}
