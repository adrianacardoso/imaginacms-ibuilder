@if(!empty($title) || !empty($subtitle) || !empty($textVineta))
<div id="titleSection{{$id}}" class="title-section {{$textAlign}} {{$textClasses ?? ''}} @if($textPosition==3) d-flex flex-column @endif"
     @if(!empty($animateTextName)) data-aos="{{$animateTextName}}" @endif
     @if(!empty($animateTextDelay)) data-aos-delay="{{$animateTextDelay}}" @endif
     @if(!empty($animateTextDuration)) data-aos-duration="{{$animateTextDuration}}" @endif
     @if(!empty($animateTextOffset)) data-aos-offset="{{$animateTextOffset}}" @endif
     @if(!empty($animateTextEasing)) data-aos-easing="{{$animateTextEasing}}" @endif
     @if(!empty($animateTextOnce)) data-aos-once="{{$animateTextOnce}}" @endif
     @if(!empty($animateTextMirror)) data-aos-mirror="{{$animateTextMirror}}" @endif
>
    @if(!empty($title) && $textPosition!=4)
        @if(!empty($textVineta) && $textVinetaPosition==1)
            <i class="{{ $textPosition==3 ? 'order-1':'' }} {{$textVineta}} {{$textVinetaColorClass}}"></i>
        @endif
        @if(isset($titleUrl))
            <a href="{{$titleUrl}}" target="{{$titleTarget ?? '_self'}}" class="text-decoration-none">
        @endif
            <div class="title {{$textPosition==3 ? 'order-1':'' }} {{$titleClasses}} {{$titleColorClass}} {{$titleWeight}} {{$titleTransform}} {{$titleMarginT}} {{$titleMarginB}}">
                @if(!empty($textVineta) && $textVinetaPosition==3) <i class="{{$textVineta}} {{$textVinetaColorClass}}"></i> @endif
                <span> {!! $title !!}</span>
                @if(!empty($textVineta) && $textVinetaPosition==4) <i class="{{$textVineta}} {{$textVinetaColorClass}}"></i> @endif
            </div>
        @if(isset($titleUrl))
            </a>
        @endif
        @if(!empty($textVineta) && $textVinetaPosition==2)
            <i class="{{$textPosition==3 ? 'order-2':'' }} {{$textVineta}} {{$textVinetaColorClass}}"></i>
        @endif
    @endif

    @if(!empty($subtitle) && $textPosition!=1)
        @if(!empty($textVineta) && $textVinetaPosition==5)
            <i class="{{$textPosition==3 ? 'order-0':'' }} {{$textVineta}} {{$textVinetaColorClass}}"></i>
        @endif
        <div class="subtitle {{$textPosition==3 ? 'order-0':'' }} {{$subtitleClasses}} {{$subtitleColorClass}} {{$subtitleWeight}} {{$subtitleTransform}} {{$subtitleMarginT}} {{$subtitleMarginB}}">
            {!! $subtitle !!}
        </div>
        @if(!empty($textVineta) && $textVinetaPosition==6)
            <i class="{{$textVineta}} {{$textVinetaColorClass}}"></i>
        @endif
    @endif
</div>

<style>
@if(!empty($title))
    #titleSection{{$id}} .title {
        font-size: {{$titleSize[0]}}px;
        line-height: {{$titleSize[0]}}px;
        @if(!empty($titleLetterSpacing)) letter-spacing: {{$titleLetterSpacing}}px; @endif
        @if(!empty($titleShadow)) text-shadow: {{$titleShadow}}; @endif
    }
    #titleSection{{$id}} .title.text-custom {
        color: {{$titleColor}};
    }
    @if(count($titleSize)>=2)
    @media (max-width: 767.98px) {
        #titleSection{{$id}} .title {
            font-size: {{$titleSize[1]}}px;
            line-height: {{$titleSize[1]}}px;
        }
    }
    @endif
    @if(count($titleSize)==3)
    @media (max-width: 575.98px) {
        #titleSection{{$id}} .title {
            font-size: {{$titleSize[2]}}px;
            line-height: {{$titleSize[2]}}px;
        }
    }
    @endif
@endif
@if(!empty($subtitle))
    #titleSection{{$id}} .subtitle {
        font-size: {{$subtitleSize[0]}}px;
        line-height: {{$subtitleSize[0]}}px;
        @if(!empty($subtitleLetterSpacing)) letter-spacing: {{$subtitleLetterSpacing}}px; @endif
        @if(!empty($subtitleShadow)) text-shadow: {{$subtitleShadow}}; @endif
    }
    #titleSection{{$id}} .subtitle.text-custom {
        color: {{$subtitleColor}};
    }
    @if(count($subtitleSize)>=2)
    @media (max-width: 767.98px) {
        #titleSection{{$id}} .subtitle {
            font-size: {{$subtitleSize[1]}}px;
            line-height: {{$subtitleSize[1]}}px;
        }
    }
    @endif
    @if(count($subtitleSize)==3)
    @media (max-width: 575.98px) {
        #titleSection{{$id}} .subtitle {
            font-size: {{$subtitleSize[2]}}px;
            line-height: {{$subtitleSize[2]}}px;
        }
    }
    @endif
@endif
@if(!empty($textVineta))
    #titleSection{{$id}} i.text-custom {
        color: {{$textVinetaColor}};
    }
@endif
@if(!empty($textWithLine))
    @if($textWithLine==1)
    #titleSection{{$id}} .title:after {
        content: '';
        display: block;
        @foreach($textLineConfig as $key => $line)
         {{$key}}: {{$line}};
        @endforeach
    }
    @endif
    @if($textWithLine==2)
        #titleSection{{$id}} .subtitle:after {
            content: '';
            display: block;
            @foreach($textLineConfig as $key => $line)
            {{$key}}: {{$line}};
            @endforeach
        }
    @endif
@endif
</style>
@endif
