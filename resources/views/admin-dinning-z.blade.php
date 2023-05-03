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
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                        <tr>
                            <th class="pb-4" colspan="2"><p class="text-xl">Dinning Restaurants</p></th>
                            <th><p class="text-xl">Breakfast</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rstFoodList->chunk(3) as $chunk)
                            <tr>
                                @foreach($chunk as $item)
                                    <td id="Cell{{$item->id}}" class="CellAction">
                                        @component('components.table-item')
                                            @slot('title')
                                                {{ $item->restaurant_name }}
                                            @endslot
                                            @slot('imageLogo')
                                                {{ $item->logo }}
                                            @endslot
                                            @slot('menuText1')
                                                {{ $item->type_food }}
                                            @endslot
                                            @slot('menuText2')
                                                {{ $item->carte_name }}
                                            @endslot
                                            @slot('menuSchedule')
                                                {{ $item->schedule }}
                                            @endslot
                                            @slot('menuMember')
                                                {{ $item->members }}
                                            @endslot
                                        @endcomponent
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script type="text/javascript">
    $(".CellAction").click(function (e) {

        let nId = $(this).attr("id");
        alert(nId);
        /*$.ajax({
            url: "{{ route('toggleActivate') }}",
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: nId
            },
            success: function (data) {
                location.reload();
            }
        });*/
    });
</script>

