@extends('layout.utama')
@section('judul', ' - '.$materi->judul)

@section('konten')
	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-post single-post">
						<div class="post-date">{{$materi->created_at->isoFormat("dddd, Do MMMM Y")}}</div>
						<h3>{{$materi->judul}}</h3>
						<div class="post-metas">
							<div class="post-meta">By <a href="{{route('author').'?author='.$materi->penulis}}">{{$materi->penulis}}</a></div>
                            <div class="post-meta">in <a href="{{route('cate').'?cate='.$materi->categories->id}}">{{$materi->categories->nama}}</a></div>
                        </div>
                        <div class="thumbnail text-center">
                            @if ($materi->gambar!=null)
                            <img src="{{asset('blog/'.$materi->gambar)}}" alt=""></a>
                            @else
                            <img src="{{asset('assets/img/default.png')}}" alt=""></a>
                            @endif
                        </div>
						<p>
                           {!! $materi->isi !!}
						</p>




						<!-- <div class="comments">
							<h5>Comments (2)</h5>
							<ul class="comments-list">
								<li>
									<img src="assets/img/author-thumbs/2.jpg" alt="">
									<div class="comment-text">
										<h6>Michael James  <a href="#" class="reply">Reply</a></h6>
										<div class="comment-date">April 1,2019</div>
										<p>Non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend, sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum metus.</p>
									</div>
								</li>
							</ul>
							<h5>Leave a comment</h5>
							<form class="comment-form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Your name">
									</div>
									<div class="col-md-6">
										<input type="text" placeholder="Your e-mail">
									</div>
									<div class="col-md-12">
										<textarea placeholder="Your message"></textarea>
										<button class="site-btn">post Comment</button>
									</div>
								</div>
							</form>
						</div> -->
					</div>
				</div>
				@include("sidebar")
			</div>
		</div>
	</section>
	<!-- Blog section end -->
@endsection
