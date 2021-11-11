<div>
    {{$result}}
    <div>
        <div class="mt-1">
        <input wire:model="teacher_nm" id="email" name="email" type="email" autocomplete="email" required="" placeholder="Teacher Name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
        @error('teacher_nm') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mt-1">
        <input wire:model="password" type="password"  required="" placeholder="Password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
        @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    
        <button wire:click="addTeacher()" type="submit" class="btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Student</button>
</div>
