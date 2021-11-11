<div>
    @if ($this->getTeacher())
        <div class="card-containers" style="margin-top: -211px;">
                <!-- component -->
                <x-table>
                    <x-slot name="head">
                        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Action</th>
                        </tr>
                    </x-slot>
                    <x-slot name="row">
                        @foreach ($this->getTeacher() as $item)
                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{$item->teacher_nm}}</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Class</span>{{$item->status}}</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>
                                    <x-modal1>
                                        <x-slot name="btn_tag">
                                            view{{$item->id}}
                                        </x-slot>
                                        <x-slot name="modal_class">
                                            w-11/12 md:w-1/2 p-5  bg-white rounded-md 
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
                                            @livewire('modal.viewinfo',['teacher_id'=>"$item->id"])
                                        </x-slot>
                                    </x-modal1>
                                </td>
                                
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
        </div>
    @else
        No Teacher Added
    @endif
</div>
