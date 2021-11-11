
<div>
    @props([
        'formhead'=> false,
        'actionType'
    ])
        
        <a  href="#{{$button}}" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700" style="cursor: pointer;">{{$button_title}}</a>
        <div id="{{$button}}" class="modalbg">
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
    