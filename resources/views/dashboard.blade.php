<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <button type="button" data-modal-toggle="createSliderModal"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Create
                            Slide
                        </button>

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Title
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Area
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Section
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Hour
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($sliders as $Slider)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-10 h-10 rounded-full"
                                             src="{{ URL::asset('assets/images/' . $Slider->image) }}"
                                             alt="{{ $Slider->title }}">
                                        <div class="pl-3">
                                            <div class="text-base font-semibold">{{ $Slider->title }}</div>
                                        </div>
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $Slider->area }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $Slider->main_section === 'mainsection' ? 'Main Slider' : 'Employee Slider' }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $Slider->hour }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            @if ($Slider->active)
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>
                                                Online
                                            @else
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button"
                                           data-modal-id-slider-edit="{{ $Slider->id }}"
                                           data-modal-toggle="editSliderModal"
                                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline editSliderClick">Edit
                                        </a>
                                        <a href="#" type="button" data-modal-id-slider="{{ $Slider->id }}"
                                           data-modal-toggle="editUserModalUploadImage"
                                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline editUserModalUploadImageClick">Change
                                            Image
                                        </a>
                                        <a href="#" type="button"
                                           data-modal-id-deactivate="{{ $Slider->id }}"
                                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline deactivateLink">Activate/Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- Edit user modal -->
                        @include('dashboard-modal-create')
                        @include('dashboard-modal-edit')
                        @include('dashboard-modal-upload-image')
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script type="text/javascript">
    $(".deactivateLink").click(function (e) {

        let nId = $(this).attr("data-modal-id-deactivate");

        $.ajax({
            url: "{{ route('toggleActivate') }}",
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: nId
            },
            success: function (data) {
                location.reload();
            }
        });
    });
</script>
