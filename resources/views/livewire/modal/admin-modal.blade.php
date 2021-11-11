<div>
    {{$result}}
    <section class="text-blueGray-700">
        <div class="items-center lg:px-20">
        <div class="flex flex-col w-full max-w-md mx-auto my-6 transition duration-500 ease-in-out transform rounded-lg md:mt-0">
            <div class="">
            <div>
                <div class="relative inline-flex">
                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                    <select wire:model="subject" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                    <option>Select Course</option>
                    @if ($this->getCourse())
                        @foreach ($this->getCourse() as $item)
                            <option value="{{$item->id}}">{{$item->subject_nm}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
                <div>
                    <div class="mt-1">
                    <input wire:model="first_nm" id="text" name="first_nm" type="first_nm" autocomplete="first_nm" required="" placeholder="Student first name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    @error('first_nm') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-1">
                    <input wire:model="last_nm" id="text" name="last_nm" type="last_nm" autocomplete="last_nm" required="" placeholder="Student last name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    @error('last_nm') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-1">
                    <input wire:model="dob" id="dob" name="dob" type="date" autocomplete="date" required="" placeholder="Your date of birth" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    @error('dob') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-1">
                    <input wire:model="phone" id="number" name="number" type="number" autocomplete="number" required="" placeholder="Student phone number" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-1">
                    <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required="" placeholder="Student Email" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                    <button wire:click="addToStudent()" type="submit" class="btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Student</button>
                <div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section> 
</div>
