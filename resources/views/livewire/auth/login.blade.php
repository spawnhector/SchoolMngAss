<div>
    <section class="text-blueGray-700">
        <div class="items-center">
          <div >
            <div >
              <div>
                  <div>
                    <label for="email" class="block text-sm font-medium text-neutral-600"> Email address </label>
                    <div class="mt-1">
                      <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required="" placeholder="Your Email" class="
                    block
                    w-full
                    px-5
                    py-3
                    text-base text-neutral-600
                    placeholder-gray-300
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border border-transparent
                    rounded-lg
                    bg-gray-50
                    focus:outline-none
                    focus:border-transparent
                    focus:ring-2
                    focus:ring-white
                    focus:ring-offset-2
                    focus:ring-offset-gray-300
                  ">
                  @error('email') <span class="error">{{ $message }}</span> @enderror
              
                    </div>
                  </div>
                  <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-neutral-600"> Password </label>
                    <div class="mt-1">
                      <input wire:model="password" id="password" name="password" type="password" autocomplete="current-password" required="" placeholder="Your Password" class="
                    block
                    w-full
                    px-5
                    py-3
                    text-base text-neutral-600
                    placeholder-gray-300
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border border-transparent
                    rounded-lg
                    bg-gray-50
                    focus:outline-none
                    focus:border-transparent
                    focus:ring-2
                    focus:ring-white
                    focus:ring-offset-2
                    focus:ring-offset-gray-300
                  ">
                  @error('password') <span class="error">{{ $message }}</span> @enderror
              
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="
                  flex
                  items-center
                  justify-center
                  w-full
                  px-10
                  py-4
                  text-base
                  font-medium
                  text-center text-white
                  transition
                  duration-500
                  ease-in-out
                  transform
                  bg-blue-400
                  rounded-xl
                  hover:bg-blue-500
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-blue-500
                " wire:click="login()"> Sign in </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
