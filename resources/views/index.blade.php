@extends('layout.utama')

@section('konten')
	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
                    @if (isset($tot))
                        @if (app('request')->input('cate'))
                        <p>Terdapat {{$tot}} artikel berkategori "{{App\Category::where('id', app('request')->input('cate'))->get()->first()->nama}}"</p>
                        @endif
                        @if (app('request')->input('author'))
                        <p>Terdapat {{$tot}} artikel oleh "{{app('request')->input('author')}}"</p>
                        @endif
                        @if (app('request')->input('s'))
                            @if ($tot!=0)
                            <p>Terdapat {{$tot}} artikel dengan judul "{{app('request')->input('s')}}"</p>
                            @else
                            <h3 style="color: #fff">Tidak menemukan artikel dengan judul "{{app('request')->input('s')}}", silahkan coba kata kunci lain.</h3>
                            @endif
                        @endif
                    @endif

					<div class="small-blog-list">
					@foreach($materi as $mate)
						<div class="sb-item">
							@if ($mate->gambar!=null)
                                <a href="{{route('home').'/post/'.$mate->slug}}"><img height="169" width="188" src="{{asset('blog/'.$mate->gambar)}}" alt=""></a>
                                @else
                                <a href="{{route('home').'/post/'.$mate->slug}}"><img height="169" width="188" src="{{asset('assets/img/default.png')}}" alt=""></a>
                                @endif
							<div class="sb-text">
								<div class="sb-date">{{$mate->created_at->isoFormat("dddd, Do MMMM Y")}}</div>
								<a href="{{route('home').'/post/'.$mate->slug}}"><h6>{{$mate->judul}}</h6></a>
								<div class="sb-metas">
									<div class="sb-meta">By <a href="{{route('author').'?author='.$mate->penulis}}">{{$mate->penulis}}</a></div>
                                    <div class="sb-meta">in <a href="{{route('cate').'?cate='.$mate->categories->id}}">{{$mate->categories->nama}}</a></div>
                                </div>
								<p>
                                    @if (strlen($mate->isi) > 200)
                                    {{ strip_tags(str_limit($mate->isi, 200, '')) }}...
                                        <span><a href="{{route('home').'/post/'.$mate->slug}}">Read More</a></span>
                                    @else
                                    {{ strip_tags(str_limit($mate->isi, 200, '')) }}
                                    @endif
                                </p>
							</div>
						</div>
                    @endforeach
                    <div class="text-center">
                        {{ $materi->links() }}
                    </div>
                    </div>
                </div>
				@include("sidebar")
			</div>
		</div>
	</section>
    <!-- Blog section end -->
@endsection
