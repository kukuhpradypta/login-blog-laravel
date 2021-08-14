@extends('template.template2')

@section('content')
@section('halaman')
Data Blog
@endsection
@section('pencarian')
@section('page')
Search
@endsection
<!-- Start kode untuk form pencarian -->
<ul class="navbar-nav mr-auto">
<form class="form" style="margin-left:10%; margin-bottom:-5%;margin-top:3%;" method="get" action="{{ route('search') }}">
    <div class="form-group w-100 mb-3">
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1"><i class="fas fa-search"></i></button>
    </div>
</form>
<!-- Start kode untuk form pencarian -->
</ul>
@endsection
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-dark">  
                              <tr>
                                <th scope="col">NO</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>                              
                              </tr>
                            </thead> 
                            <tbody>
                                
                              @forelse ($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{!! $blog->content !!}</td>
                                  
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection