@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url('{{asset('front/assets/images/support_downloads_thumbnail.jpg')}}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">技術手冊</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="index.html" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white-50">支援</li>
                    <li class="text-white text-truncate">技術手冊</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="mb-15">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 offset-md-4">
                <form action="" method="" class="d-flex w-100 justify-content-start align-items-end">
                    <input type="text" name="" placeholder="請輸入關鍵字" class="form_transparent_dark w-100">
                    <button class="c_btn btn_transparent_dark pe-0 fw-normal hover_opacity" type="submit" name=""
                        style="min-width: 120px;">搜尋
                        <i class='bx bx-search text-primary fs-4 align-middle text-dark ps-2'></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h5 class="page_aside_title bg-dark text-white fs-6 mb-0">類別</h5>
                <ul class="nav nav-fill page_aside bg-white flex-column mb-5 mb-md-0">
                    <li class="nav-item">
                        <button class="page_aside_filter nav-link active" data-bs-toggle="tab" data-bs-target="#downloadFilterAll" type="button" role="tab" aria-selected="false">全部</button>
                    </li>
                    @foreach($categories as $key => $category)
                    <li class="nav-item">
                        <button class="page_aside_filter nav-link" data-bs-toggle="tab" data-bs-target="#support_{{$key}}" type="button" role="tab" aria-selected="false">{{$category->name}}</button>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8 offset-md-1">
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel" id="downloadFilterAll">
                        @foreach($categories as $key => $category)
                            @foreach($category->supports as $key2 => $type)
                            <div class="accordion_primary accordion accordion-flush" id="type_{{$key2}}">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filter_{{$key}}" aria-expanded="false" aria-controls="filter_{{$key}}">
                                            {{$type->name}}
                                        </button>
                                    </h2>
                                    <div id="filter_{{$key}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#type_{{$key2}}">
                                        <div class="accordion-body">
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">使用手冊</span>
                                                <ul>
                                                    @foreach($type->support_files as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 1 && $sub->path)
                                                        <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">BOM 清單</span>
                                                <ul>
                                                    @foreach($type->support_files as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 2 && $sub->path)
                                                        <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                    @foreach($categories as $key => $category)
                        @foreach($category->supports as $key2 => $type)
                        <div class="tab-pane fade" role="tabpanel" id="support_{{$key}}">
                            <div class="accordion_primary accordion accordion-flush" id="collapseFilterOne">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sub_filter_{{$key2}}" aria-expanded="false" aria-controls="sub_filter_{{$key2}}">
                                            {{$type->name}}
                                        </button>
                                    </h2>
                                    <div id="sub_filter_{{$key2}}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#collapseFilterOne">
                                        <div class="accordion-body">
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">使用手冊</span>
                                                <ul>
                                                    @foreach($type->support_files as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 1 && $sub->path)
                                                        <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>

                                            </div>
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">BOM 清單</span>
                                                <ul>
                                                    @foreach($type->support_files as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 2 && $sub->path)
                                                        <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection