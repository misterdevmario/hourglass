<section id="work" class="work_area bg-gray pt-120 pb-120">
    <div class="container-fluid">
        <div class="work_wrapper relative">
            <div class="row work_active">
                @foreach ($sliders as $Slider)
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ URL::asset('assets/images/' . $Slider->image) }}"
                                        alt="{{ $Slider->title }}" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Aqua Fit Class</a></h4>
                                    <p class="mt-2">Beach Club</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                @endforeach
            </div> <!-- row -->
        </div>
    </div> <!-- container -->
</section>
