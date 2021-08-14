@extends('template.template2')
@section('page')
Show
@endsection
@section('content')
 <div class="container">
   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-dark">Detail Data Blog</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ route('blog.show', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <tbody>
                                    <tr>
                                        <td>Gambar</td>
                                        <td><img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px"></td>
                                    </tr>
                                    <tr>
                                        <td>Judul</td>
                                        <td>{{ old('title', $blog->title) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Content</td>
                                        <td>{!! $blog->content !!}</td>
                                    </tr>
                                    </tbody>
                                        </table>
                                </form>
                                        <a href="{{ route('blog.index') }}" class="btn btn-success"><i class="fas fa-backspace"> Kembali</i></a>
                            </div>
                        </div>
                    </div>
        </div>
@endsection