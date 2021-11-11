
<div>
    @props([
        'formhead'=> false,
        'actionType'
    ])
        {{$button}}
        <div id="login/signup" class="modalbg">
            <div class="dialog">
                <a href="#close" title="Close" class="close">X</a>
                <div>
                    @if ($formhead)
                        <div class="flex justify-center items-center flex-col mt-8">
                    @else
                        <div class="flex justify-center items-center flex-col">
                    @endif
                        <div>
                            <div class="flex justify-center items-center flex-col mt-4">
                                {{$content}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    