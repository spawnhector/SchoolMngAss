<div>
    @if ($getStudent)
        
    @else
        <x-table>
            <x-slot name="head">
                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject</th>
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Student's</th>
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">schedules</th>
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Action</th>
                </tr>
            </x-slot>
            <x-slot name="row">
                @if ($this->getTeacher_subject())
                    @foreach ($this->getTeacher_subject() as $item)
                    {{-- {{dd($item->student)}} --}}
                        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>
                                
                                <x-modal1>
                                    <x-slot name="btn_tag">
                                        vieww{{$item->id}}
                                    </x-slot>
                                    <x-slot name="modal_class">
                                        w-11/12 p-5  bg-white rounded-md 
                                    </x-slot>
                                    <x-slot name="modal_header">
                                        {{$item->subject->subject_nm}} details.
                                    </x-slot>
                                    <x-slot name="btn_class">
                                        block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700
                                    </x-slot>
                                    <x-slot name="button">
                                        {{$item->subject->subject_nm}}
                                    </x-slot>
                                    <x-slot name="content">
                                        {{-- @livewire('modal.viewcourse',['course_id'=>$item->subject->id]) --}}
                                    </x-slot>
                                </x-modal1>
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Student's</span>
                                @if ($this->getTeacher_student($item->subject->id))
                                    {{count($this->getTeacher_student($item->subject->id))}}  
                                @else
                                    Non Registered 
                                @endif
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">schedules</span>{{dd($item)}}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>
                                {{-- <x-modal1>
                                    <x-slot name="btn_tag">
                                        view{{$item->id}}
                                    </x-slot>
                                    
                                    <x-slot name="modal_header">
                                        {{$item->teacher_nm}} details.
                                    </x-slot>
                                    <x-slot name="btn_class">
                                        block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700
                                    </x-slot>
                                    <x-slot name="button">
                                        View Info
                                    </x-slot>
                                    <x-slot name="content">
                                        @livewire('modal.delete-course')
                                    </x-slot>
                                </x-modal1> --}}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </x-slot>
        </x-table>
    @endif
</div>
