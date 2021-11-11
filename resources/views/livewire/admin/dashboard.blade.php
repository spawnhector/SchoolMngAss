<div>
    <link rel="stylesheet" href="{{asset('css/admin.dashboard.css')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body flex">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            
                        {{ __('You are logged in as a admin!') }}
                        
                        <a  href="#" class="ml-4 " style="cursor: pointer;">View Students</a>
                        <a  href="#login/signup" class="ml-4 openSubject" style="cursor: pointer;">View Subjects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <script src="https://kit.fontawesome.com/1e7319fbc7.js" crossorigin="anonymous"></script>
    {{-- @include('script/admin-dashboard') --}}
</div>
