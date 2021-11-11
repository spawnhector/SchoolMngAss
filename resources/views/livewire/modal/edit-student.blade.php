<div>
    @if ($student)
        {{$result}}
        <section class="text-blueGray-700">
            <div class="items-center lg:px-20">
            <div class="flex flex-col w-full max-w-md mx-auto my-6 transition duration-500 ease-in-out transform rounded-lg md:mt-0">
                <div class="">
                <div>
                    <div>
                        <div class="mt-1">
                            <label for="frist_nm" style="position: relative;bottom:-10px">{{$label_first_nm}}</label>
                            <input wire:model="first_nm" id="text" name="first_nm" type="first_nm" autocomplete="first_nm" required="" placeholder="Student first name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                            @error('first_nm') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mt-1">
                            <label for="last_nm" style="position: relative;bottom:-10px">{{$label_last_nm}}</label>
                            <input wire:model="last_nm" id="text" name="last_nm" type="last_nm" autocomplete="last_nm" required="" placeholder="Student last name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                            @error('last_nm') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mt-1">
                            <label for="dob" style="position: relative;bottom:-10px">{{$label_dob}}</label>
                            <input wire:model="dob" id="dob" name="dob" type="date" autocomplete="date" required="" placeholder="Your date of birth" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                            @error('dob') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mt-1">
                            <label for="class" style="position: relative;bottom:-10px">{{$label_class}}</label>
                            <input wire:model="class" id="class" name="class" type="text" autocomplete="class" required="" placeholder="Input Class" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                            @error('class') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mt-1">
                            <label for="phone" style="position: relative;bottom:-10px">{{$label_phone}}</label>
                            <input wire:model="phone" id="number" name="number" type="number" autocomplete="number" required="" placeholder="Student phone number" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                            @error('phone') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mt-1">
                            <label for="email" style="position: relative;bottom:-10px">{{$label_email}}</label>
                            <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required="" placeholder="Student Email" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                            @error('email') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                        <button wire:click="editStudent()" type="submit" class="btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Edit Student</button>
                    <div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section> 
    @else
        <p>Please Select Student</p>
        <!-- component -->
        <!-- This is an example component -->
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
            <select wire:model="student" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            <option>Account Type</option>
            @if ($this->getStudent())
                @foreach ($this->getStudent() as $item)
                    <option value="{{$item->id}}">{{$item->first_nm}}</option>
                @endforeach
            @endif
            </select>
        </div>
        {{-- <button wire:click="selectAcc()" type="button" class="border border-gray-300 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">
        Continue
        </button> --}}
    @endif
</div>
