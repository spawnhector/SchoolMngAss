<div>
    <!-- component -->
<style>
    dialog[open] {
        animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
    }
    
        dialog::backdrop {
        background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
        backdrop-filter: blur(3px);
        }
        
    
    @keyframes appear {
        from {
        opacity: 0;
        transform: translateX(-3rem);
        }
    
        to {
        opacity: 1;
        transform: translateX(0);
        }
    } 
</style>
  
  <section class="">
    <button onclick="document.getElementById('{{$btn_tag}}').showModal()" id="btn" class="{{$btn_class}}">{{$button}}</button>
  </section>
  
  <dialog id="{{$btn_tag}}" class="{{$modal_class}}">
          
     <div class="flex flex-col w-full h-auto ">
          <!-- Header -->
          <div class="flex w-full h-auto justify-center items-center">
            <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                  {{$modal_header}}
            </div>
            <div onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>
            <!--Header End-->
          </div>
            <!-- Modal Content-->
             <div class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
               {{$content}}
            </div>
            <!-- End of Modal Content-->
          </div>
  </dialog>
</div>