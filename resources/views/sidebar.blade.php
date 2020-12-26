@php
    $categories = App\Category::all();
    $materi = App\Materi::orderBy('created_at', 'desc')->limit(5)->get();
@endphp
                <div class="col-lg-4 sidebar">
					<div class="sb-widget">
                        <form class="sb-search" action="{{route('search')}}" method="GET">
                            <div class="input-group">
                                <input type="text" name="s" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
						</form>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Kategori</h2>
						<ul class="sb-cata-list">
                            @foreach ($categories as $cate)
                            <li><a href="{{route('cate').'?cate='.$cate->id}}">{{$cate->nama}}<span>{{$cate->materi->count()}}</span></a></li>
                            @endforeach
						</ul>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Artikel Terbaru</h2>
						<div class="latest-news-widget">
                         @foreach($materi as $mate)
                            <div class="ln-item">
                                @if ($mate->gambar!=null)
                                <a href="{{route('home').'/post/'.$mate->slug}}"><img height="169" width="188" src="{{asset('blog/'.$mate->gambar)}}" alt=""></a>
                                @else
                                <a href="{{route('home').'/post/'.$mate->slug}}"><img height="169" width="188" src="{{asset('assets/img/default.png')}}" alt=""></a>
                                @endif
                                <div class="ln-text">
                                    <div class="ln-date">{{$mate->created_at->isoFormat("dddd, Do MMMM Y")}}</div>
                                    <a href="{{route('home').'/post/'.$mate->slug}}"><h6>{{$mate->judul}}</h6></a>
                                    <div class="ln-metas">
                                        <div class="ln-meta">By <a href="{{route('author').'?author='.$mate->penulis}}">{{$mate->penulis}}</a></div>
                                        <div class="ln-meta">in <a href="{{route('cate').'?cate='.$mate->categories->id}}">{{$mate->categories->nama}}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
						</div>
					</div>
				</div>
