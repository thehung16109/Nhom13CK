@extends('layout')
@section('sidebar')
  @include('pages.include.sidebar')
@endsection
@section('content')
<div class="features_items">
       
                        <h2 class="title text-center">{{$meta_title}} </h2>

                      
                        <div class="fb-share-button" data-href="{{$url_canonical}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

                        <div class="zalo-share-button" data-href="{{$url_canonical}}" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
                        
                       
                      	 	<div class="product-image-wrapper" style="border: none;">
                          
                            @foreach($post_cate as $key => $p)
                                <div class="single-products" style="margin:10px 0;padding: 2px">
                                        <div class="text-center">

                                                <img style="float:left;width:30%;padding: 5px;height: 150px" src="{{asset('/uploads/post/'.$p->post_image)}}" alt="{{$p->post_slug}}" />
                                               	
                                                <h4 style="color:#000;padding: 5px;">{{$p->post_title}}</h4>
                                                <p >{!!$p->post_desc!!}</p>
                                             
                                           
                                        </div>
                                        <div class="text-right">
                                    		<a  href="{{url('/bai-viet/'.$p->post_slug)}}" class="btn btn-default btn-sm">Xem bài viết</a>
                                    	</div>
                                </div>
                                <div class="clearfix"></div>
                             @endforeach
                           
                            </div>
                        
                    	</div><!--features_items-->
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        
                       {!!$post_cate->links()!!}
                      
                      </ul>
        <!--/recommended_items-->
@endsection