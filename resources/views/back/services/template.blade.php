<div class="row me-0 center-row">
    @foreach ($services as $key => $service)
        <div class="col-md-7">
            <div class="text m-0">
                <div class="title">{!! $service->title !!}</div>
                <div class="line"></div>
                <div class="content">{!! $service->content !!}</div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="icon p-md-3 p-2 m-0">
                <div class="logo">
                    <div class="row">
                        <div class="box col-md-6">
                            <div class="box1">
                                <img src="{{ $service->logo1 }}">
                                <div class="logo_title">{{ $service->logo1_title }} </div>
                            </div>
                        </div>
                        <div class="box col-md-6">
                            <div class="box2">
                                <img src="{{ $service->logo2 }}">
                                <div class="logo_title">{{ $service->logo2_title }} </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box col-md-6">
                            <div class="box3">
                                <img src="{{ $service->logo3 }}">
                                <div class="logo_title">{{ $service->logo3_title }} </div>
                            </div>
                        </div>
                        <div class="box col-md-6">
                            <div class="box4">
                                <img src="{{ $service->logo4 }}">
                                <div class="logo_title">{{ $service->logo4_title }} </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</div>
