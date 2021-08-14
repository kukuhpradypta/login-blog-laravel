@extends('template.template2')

@section('content')

  <div class="row-12">
         <div class="card-group justify-content-evenly">   
             @if(Auth::check())
               @if(Auth::user()->role == 'admin')                           
                          <div class="col-3 md-4 mb-3">
                            <a href="{{ route('blog.index') }}" style="text-decoration: none; color: black;">
                                <div class="card m-2 shadow-sm" style="width: 200px;height:220px;">
                                    <i class="bg-dark fas fa-calendar-plus text-center" style="height:150px; width:100%;padding-top:23px; font-size:100px;color:white;" ></i>
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Crud Blog Surat </h5>                                      
                                    </div>
                                </div>
                            </a>
                            </div>          
                            @endif
                             @if(Auth::user()->role == 'user' or Auth::user()->role == 'admin')                                                                             
                          <div class="col-3 md-4 mb-3">
                            <a href="/user" style="text-decoration: none; color: black;">
                                <div class="card m-2 shadow-sm" style="width: 200px;height:220px;">
                                    <i class="bg-dark fas fa-user text-center" style="height:150px; width:100%;padding-top:23px; font-size:100px; color:white;" ></i>
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold">Halaman User</h5>                                      
                                    </div>
                                </div>
                            </a></div>     
                            @endif                                                                              @endif          
        </div>
        </div>



@endsection
