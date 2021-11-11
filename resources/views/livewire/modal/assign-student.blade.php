<div>
    @if ($teacher)
        @if ($student)
            @if ($result)
                {{$result}}
            @else
                <span>Are you sure you want to assign {{$student_nm}} to {{$teacher_nm}}'s account?</span>
                <button wire:click="assignStudent()" type="button" class="border border-gray-300 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">
                    Assign
                </button>
            @endif
        @else
            <p>Please Select Student</p>
            <div class="relative inline-flex">
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                <select wire:model="student" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                <option>Student</option>
                @if ($this->getStudent())
                    @foreach ($this->getStudent() as $item)
                        <option value="{{$item->id}}">{{$item->first_nm}}</option>
                    @endforeach
                @endif
                </select>
            </div>
        @endif
    @else
        <p>Please Select Teacher</p>
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
            <select wire:model="teacher" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            <option>Teacher</option>
            @if ($this->getTeacher())
                @foreach ($this->getTeacher() as $item)
                    <option value="{{$item->id}}">{{$item->teacher_nm}}</option>
                @endforeach
            @endif
            </select>
        </div>
    @endif
</div>
