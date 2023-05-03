<style>
    @media (min-width: 1280px) .xl\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    @media (min-width: 1024px) .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    @media (min-width: 768px) .md\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    @media (min-width: 640px) .sm\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .grid {
        display: grid;
    }

    menu,
    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }

    menu,
    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    user agent stylesheet ul {
        list-style-type: disc;
    }

    .ease-linear {
        transition-timing-function: linear;
    }

    .duration-200 {
        transition-duration: .2s;
    }

    .transition {
        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        transition-duration: .15s;
    }

    .shadow,
    .shadow-sm {
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-sm {
        --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05);
        --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    }

    .p-4 {
        padding: 1rem;
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity));
    }

    .border-gray-100 {
        --tw-border-opacity: 1;
        border-color: rgb(243 244 246/var(--tw-border-opacity));
    }

    .border {
        border-width: 1px;
    }

    .items-center {
        align-items: center;
    }

    .flex {
        display: flex;
    }

    .pl-4 {
        padding-left: 1rem;
    }

    .line-clamp-1,
    .line-clamp-2 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }

    .line-clamp-1 {
        -webkit-line-clamp: 1;
    }

    .text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99/var(--tw-text-opacity));
    }

    .leading-tight {
        line-height: 1.25;
    }

    .font-medium {
        font-weight: 500;
    }

    .text-sm {
        font-size: .875rem;
        line-height: 1.25rem;
    }

    .pt-1 {
        padding-top: 0.25rem;
    }

    .mt-1 {
        margin-top: 0.25rem;
    }

    .text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175/var(--tw-text-opacity));
    }

    .text-xs {
        font-size: .75rem;
        line-height: 1rem;
    }

    .font-serif {
        font-family: Inter, sans-serif;
    }

    .items-center {
        align-items: center;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .flex {
        display: flex;
    }

    a {
        color: inherit;
        text-decoration: inherit;
    }

    .text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175/var(--tw-text-opacity));
    }

    .text-xs {
        font-size: .75rem;
        line-height: 1rem;
    }

    .paddingBottom {
        padding-bottom: 19px !important;
    }
</style>

<ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-3">
    <li class="group paddingBottom">
        <div
            class="flex w-full h-full border border-gray-100 shadow-sm bg-white p-4 cursor-pointer transition duration-200 ease-linear transform group-hover:shadow-lg">
            <div class="flex items-center">
                <div><span
                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                alt="" aria-hidden="true" src="{{ URL::asset('assets/images/logo-bites.jpeg') }}"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                            alt="Fish &amp; Meat" src="{{ URL::asset('assets/images/logo-bites.jpeg') }}"
                            decoding="async" data-nimg="intrinsic"
                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                </div>
                <div class="pl-4">
                    <h3
                        class="text-sm text-gray-600 font-serif font-medium leading-tight line-clamp-1 group-hover:text-emerald-500">
                        Bites</h3>
                    <ul class="pt-1 mt-1">
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Tapas</a></li>
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Dinner a la Carte</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="group paddingBottom">
        <div
            class="flex w-full h-full border border-gray-100 shadow-sm bg-white p-4 cursor-pointer transition duration-200 ease-linear transform group-hover:shadow-lg">
            <div class="flex items-center">
                <div><span
                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                alt="" aria-hidden="true"
                                src="{{ URL::asset('assets/images/logo-spumante.jpeg') }}"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                            alt="Fish &amp; Meat" src="{{ URL::asset('assets/images/logo-spumante.jpeg') }}"
                            decoding="async" data-nimg="intrinsic"
                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                </div>
                <div class="pl-4">
                    <h3
                        class="text-sm text-gray-600 font-serif font-medium leading-tight line-clamp-1 group-hover:text-emerald-500">
                        Spumante</h3>
                    <ul class="pt-1 mt-1">
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Tapas</a></li>
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Dinner a la Carte</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="group paddingBottom">
        <div
            class="flex w-full h-full border border-gray-100 shadow-sm bg-white p-4 cursor-pointer transition duration-200 ease-linear transform group-hover:shadow-lg">
            <div class="flex items-center">
                <div><span
                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                alt="" aria-hidden="true"
                                src="{{ URL::asset('assets/images/logo-spoon.jpeg') }}"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                            alt="Fish &amp; Meat" src="{{ URL::asset('assets/images/logo-spoon.jpeg') }}"
                            decoding="async" data-nimg="intrinsic"
                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                </div>
                <div class="pl-4">
                    <h3
                        class="text-sm text-gray-600 font-serif font-medium leading-tight line-clamp-1 group-hover:text-emerald-500">
                        Spoon</h3>
                    <ul class="pt-1 mt-1">
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Fish</a></li>
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Meeeat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="group paddingBottom">
        <div
            class="flex w-full h-full border border-gray-100 shadow-sm bg-white p-4 cursor-pointer transition duration-200 ease-linear transform group-hover:shadow-lg">
            <div class="flex items-center">
                <div><span
                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                alt="" aria-hidden="true"
                                src="{{ URL::asset('assets/images/logo-ocote.jpeg') }}"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                            alt="Fish &amp; Meat" src="{{ URL::asset('assets/images/logo-ocote.jpeg') }}"
                            decoding="async" data-nimg="intrinsic"
                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                </div>
                <div class="pl-4">
                    <h3
                        class="text-sm text-gray-600 font-serif font-medium leading-tight line-clamp-1 group-hover:text-emerald-500">
                        Mexican</h3>
                    <ul class="pt-1 mt-1">
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Fish</a></li>
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Meeeat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="group paddingBottom">
        <div
            class="flex w-full h-full border border-gray-100 shadow-sm bg-white p-4 cursor-pointer transition duration-200 ease-linear transform group-hover:shadow-lg">
            <div class="flex items-center">
                <div><span
                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                alt="" aria-hidden="true"
                                src="{{ URL::asset('assets/images/logo-fish.jpeg') }}"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                            alt="Fish &amp; Meat" src="{{ URL::asset('assets/images/logo-fish.jpeg') }}"
                            decoding="async" data-nimg="intrinsic"
                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                </div>
                <div class="pl-4">
                    <h3
                        class="text-sm text-gray-600 font-serif font-medium leading-tight line-clamp-1 group-hover:text-emerald-500">
                        Fish Nets</h3>
                    <ul class="pt-1 mt-1">
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Fish</a></li>
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Meeeat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="group paddingBottom">
        <div
            class="flex w-full h-full border border-gray-100 shadow-sm bg-white p-4 cursor-pointer transition duration-200 ease-linear transform group-hover:shadow-lg">
            <div class="flex items-center">
                <div><span
                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                alt="" aria-hidden="true"
                                src="{{ URL::asset('assets/images/logo-kibbeh.jpeg') }}"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                            alt="Fish &amp; Meat" src="{{ URL::asset('assets/images/logo-kibbeh.jpeg') }}"
                            decoding="async" data-nimg="intrinsic"
                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                </div>
                <div class="pl-4">
                    <h3
                        class="text-sm text-gray-600 font-serif font-medium leading-tight line-clamp-1 group-hover:text-emerald-500">
                        Kibbeh</h3>
                    <ul class="pt-1 mt-1">
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Fish</a></li>
                        <li class="pt-1"><a
                                class="flex items-center font-serif text-xs text-gray-400 hover:text-emerald-600 cursor-pointer"
                                href="#"><span class="text-xs text-gray-400 hover:text-emerald-600"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="square" stroke-miterlimit="10"
                                            stroke-width="48" d="M184 112l144 144-144 144"></path>
                                    </svg></span>Meeeat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>


</ul>
