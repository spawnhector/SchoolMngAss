<div>
    <x-table>
        <x-slot name="head">
            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">First Name</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Last Name</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Date Of Birth</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Phone</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Gender</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Action</th>
            </tr>
            </tr>
        </x-slot>
        <x-slot name="row">
            @if ($this->getStudent())
                @foreach ($this-> getStudent() as $item)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">first name</span>{{$item->first_nm}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">last name</span>{{$item->last_nm}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">date of birth</span>{{$item->dob}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">phone</span></span>{{$item->phone}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">email</span>{{$item->email}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">gender</span>{{$item->gender}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">action</span>
                            <x-modal1>
                                <x-slot name="btn_tag">
                                    vieww{{$item->id}}
                                </x-slot>
                                <x-slot name="modal_class">
                                    w-11/12 md:w-1/2 p-5  bg-white rounded-md 
                                </x-slot>
                                <x-slot name="modal_header">
                                    Delete {{$item->first_nm}} details.
                                </x-slot>
                                <x-slot name="btn_class">
                                    block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700
                                </x-slot>
                                <x-slot name="button">
                                    Delete
                                </x-slot>
                                <x-slot name="content">
                                    @livewire('modal.viewcourse')
                                </x-slot>
                            </x-modal1>
                        </td>
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
</div>
