<section id="blog" class="blog_area pt-120">


    <div class="container-fluid">


        <div class="row justify-center lg:justify-start">


            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                <div
                    class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg team_active">
                    <div class="bxslider  blog_content p-4 md:p-5">
                        @foreach ($slidersEmp as $SliderEmp)
                            <div>
                                <div class="blog_image">
                                    <img src="{{ URL::asset('assets/images/' . $SliderEmp->image) }}"
                                        alt="{{ $SliderEmp->title }}" class="w-full">
                                </div>
                                <div class="blog_content p-4 md:p-5">
                                    <ul class="blog_meta flex justify-between">
                                        <li class="text-body-color text-sm md:text-base"><a href="#"
                                                class="text-body-color hover:text-theme-color">Alex</a></li>
                                    </ul>
                                    <h3 class="blog_title"><a href="#">Tec. Audiovisual</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                <div
                    class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">





                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        @include('restaurant-dos')
                    </div>







                </div> <!-- row -->
            </div>

            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                <div
                    class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                    <div class="blog_image">
                        <img src="assets/images/blog-2.jpg" alt="blog" class="w-full">
                    </div>
                    <div class="blog_content p-4 md:p-5">
                        <ul class="blog_meta flex justify-between">
                            <li class="text-body-color text-sm md:text-base">By: <a href="#"
                                    class="text-body-color hover:text-theme-color">Musharof
                                    Chowdury</a></li>
                            <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">Improving products depending on feedback</a></h3>
                    </div>
                </div> <!-- row -->
            </div>
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-3/12">
                <div
                    class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                    <div class="blog_image">
                        <img src="assets/images/blog-3.jpg" alt="blog" class="w-full">
                    </div>
                    <div class="blog_content p-4 md:p-5">
                        <ul class="blog_meta flex justify-between">
                            <li class="text-body-color text-sm md:text-base">By: <a href="#"
                                    class="text-body-color hover:text-theme-color">Musharof
                                    Chowdury</a></li>
                            <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">How to diversify your audience</a></h3>
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

</section>
