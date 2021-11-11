<div>
    @if ($this->getCourse())
        <div class="card-containers" style="margin-top: -211px;">
                <!-- component -->
                <x-table>
                    <x-slot name="head">
                        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject</th>
                        </tr>
                    </x-slot>
                    <x-slot name="row">
                        @foreach ($this->getCourse() as $item)
                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{$item->subject_nm}}</td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
        </div>
    @else
        No Course Added
    @endif
</div>
