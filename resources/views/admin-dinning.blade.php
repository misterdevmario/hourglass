<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dinning') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Logo
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Type
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Type Food
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Carte
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Schedule
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Members
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($rstFoodList as $item)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-10 h-10 rounded-full"
                                             src="{{ URL::asset('assets/images/' . $item->logo) }}"
                                             alt="{{ $item->restaurant_name }}">
                                        <div class="pl-3">
                                            <div class="text-base font-semibold">{{ $item->title }}</div>
                                        </div>
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $item->restaurant_name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        @if($item->section === 'dinning')
                                            Dinning
                                        @elseif($item->section === 'breakfast')
                                            BreakFast
                                        @else
                                            Ourbars
                                        @endif
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $item->type_food }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $item->carte_name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $item->schedule }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $item->members }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            @if ($item->active)
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
                                           data-modal-id-dinning-edit="{{ $item->id }}"
                                           data-modal-toggle="editDinningModal"
                                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline editDinningClick">Edit
                                        </a>
                                        <?php /*
                                        <a href="#" type="button" data-modal-id-slider="{{ $item->id }}"
                                           data-modal-toggle="editDinningUploadImage"
                                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline editUserModalUploadImageDinningClick">Change
                                            Logo
                                        </a>*/?>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- Edit user modal -->
                        @include('dinning-modal-edit')
                        <?php //@include('dinning-modal-upload-image') ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

