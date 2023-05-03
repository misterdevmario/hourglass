<div id="editUserModalUploadImage" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <form class="imageUploadForm relative bg-white rounded-lg shadow dark:bg-gray-700" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Upload/Change an Image
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="editUserModalUploadImage">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                               for="image">Upload file</label>
                        <input
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            aria-describedby="image" id="image" name="image" type="file">
                        <!-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="upload_help">SVG, PNG, JPG or
                            GIF (MAX. 800x400px).</p>-->

                    </div>
                </div>
            </div>

            <div class="p-6 space-y-6">
                <div class="grid grid-cols-12 gap-12">
                    <div class="alert alert-danger print-error-msg" id="uploadImageErrors" style="display:none">
                        <ul></ul>
                    </div>
                </div>
            </div>

            <div id="response">
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button type="submit"
                        class="btn-submit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Save
                    all
                </button>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".editUserModalUploadImageClick").click(function (e) {
        //Remove input hidden's
        $('.imageUploadForm input[type="hidden"]').remove();

        //Create a new one
        let nId = $(this).attr("data-modal-id-slider");

        $('.imageUploadForm').append('<input type="hidden" id="hiddenFieldId" name="hiddenFieldId" value="' +
            nId +
            '"/>');
    });

    $(".imageUploadForm").submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('uploadImage') }}",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                if ($.isEmptyObject(data.errors)) {
                    alert(data.success);
                    location.reload();
                } else {
                    $('ul').empty();
                    printErrorMsg(data.errors);
                }
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('ul').empty();
                printErrorMsg(errors);

                /*$.each(errors, function(key, value) {
                    // console.log(key+ " " +value);
                    $('#response').addClass("alert alert-danger");

                    if ($.isPlainObject(value)) {
                        $.each(value, function(key, value) {
                            console.log(key + " " + value);
                            $('#response').show().append(value + "<br/>");

                        });
                    } else {
                        $('#response').show().append(value +
                            "<br/>"); //this is my div with messages
                    }
                });*/
            }
        });

    });

    function printErrorMsg(msg) {
        $("#uploadImageErrors").find("ul").html('');
        $("#uploadImageErrors").css('display', 'block');
        $.each(msg, function (key, value) {
            if ($.isPlainObject(value)) {
                $.each(value, function (key, value) {
                    console.log(key + " " + value);
                    $("#uploadImageErrors").find("ul").append('<li>' + value + '</li>');
                });
            } else {

                $("#uploadImageErrors").find("ul").append('<li>' + value + '</li>');
            }
        });
    }
</script>
