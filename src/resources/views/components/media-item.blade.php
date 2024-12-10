@props(['media' => []])
<tr class="table-active" id="media-{{ $media->id }}">
    <td scope="col" colspan="2">
        <div>
            <div class="checkbox-wrapper-4">
                <input class="inp-cbx" name="media[]" id="media-image-{{ $media->id }}" type="checkbox" value="{{ $media->id }}" />
                <label class="cbx" for="media-image-{{ $media->id }}">
                    <span>
                        <svg width="12px" height="10px">
                            <use xlink:href="#check-4"></use>
                        </svg>
                    </span>
                    <span class="media-image">
                        @if ($media->type == 'image')
                            <img src="{{ asset($media->image) }}" alt="{{ $media->alt }}" title="{{ $media->title }}" style="width: 100px" class="">
                        @elseif($media->type == 'video')
                            <video src="{{ asset($media->image) }}" title="{{ $media->title }}" style="width: 100px"></video>
                        @endif
                    </span>
                </label>
                <svg class="inline-svg">
                    <symbol id="check-4" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </symbol>
                </svg>
            </div>
        </div>
    </td>
    <td scope="col">
        <div>
            <p class="m-0 text-capitalize media-type">{{ $media->type }}</p>
        </div>
    </td>
    <td scope="col">
        <div>
            <p class="m-0 media-updated">{{ $media->alt }}</p>
        </div>
    </td>
    <td scope="col">
        <div class="gap-2 d-flex">
            <form action="{{ route('media.destroy', $media->id) }}" method="POST" class="media-delete" onsubmit="handleMediaDelete(event, {{ $media->id }})">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger">
                    <i class="fa-regular fa-trash-can"></i>
                </button>
            </form>
            <a href="javascript:void(0)" onclick="handleEditImage({{ $media->id }})" class="btn btn-warning"
                data-id="{{ $media->id }}">
                <i class="fa-solid fa-pencil"></i>
            </a>
            <a href="javascript:void(0)" onclick="handleShowImage({{ $media->id }})" class="btn btn-info"
                data-id="{{ $media->id }}">
                <i class="fa-regular fa-eye"></i>
            </a>
        </div>
    </td>
</tr>
@once
    @push('css')
        <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
        <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/23.1.3/css/dx.light.css" />
        <link rel="stylesheet" href="{{ asset('media-assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('media-assets/css/responsive.css') }}" />
    @endpush
    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/dx.all.js"></script>
        <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
        <script src="{{ asset('media-assets/js/dropzone.js') }}"></script>

        <script>
            $("#toggleButton").on("click", function() {
                $("#toggleButton .change-icon").removeClass("fa-arrow-right-long");
                $("#toggleButton .change-icon").addClass("fa-arrow-left-long");
                $("#sidebar-1").addClass('active');
                $("#sidebar-2").addClass('active');
            });


            function handleEditImage(mediaId = null) {
                $.ajax({
                    type: 'GET',
                    url: `{{ route('media.show', ':id') }}`.replace(':id', mediaId),
                    success: function(data) {

                        $("#toggleButton .change-icon").addClass("fa-arrow-right-long");
                        $('#sidebar-1').removeClass("active");
                        $('#sidebar-2').addClass("active");
                        $('#editbar-form').attr('action', `{{ route('media.update', ':id') }}`.replace(':id', data?.id));
                        $('#editbar-image img').attr('src', `{{ asset('/') }}` + data?.image);
                        $('#editbar-type input').val(data?.type);
                        $('#editbar-alt input').val(data?.alt);
                        $('#editbar-title input').val(data?.title);
                        $('#editbar-created p').text(formatDate(data?.created_at));
                        $('#editbar-updated p').text(formatDate(data?.updated_at));
                    }
                })
            }

            function handleShowImage(mediaId = null) {
                $.ajax({
                    type: 'GET',
                    url: `{{ route('media.show', ':id') }}`.replace(':id', mediaId),
                    success: function(data) {
                        $("#toggleButton .change-icon").addClass("fa-arrow-right-long");
                        $('#sidebar-2').removeClass("active");
                        $('#sidebar-1').addClass("active");
                        $('#sidebar-image').attr('src', `{{ asset('/') }}` + data.image);
                        $('#sidebar-type p').text(data.type);
                        $('#sidebar-alt p').text(data.alt);
                        $('#sidebar-title p').text(data.title);
                        $('#sidebar-created p').text(formatDate(data.created_at));
                        $('#sidebar-updated p').text(formatDate(data.updated_at));
                    }
                })
            }

            function handleUpdateImage(e) {
                e.preventDefault();
                let mediaTag = null;
                return $.ajax({
                    type: 'POST',
                    url: $('#editbar-form').attr('action'),
                    data: new FormData($('#editbar-form')[0]),
                    processData: false,
                    contentType: false,
                }).then(data => {
                    $('#sidebar-2').removeClass("active");
                    $('#sidebar-1').addClass("active");
                    data = data.data;
                    $('#sidebar-image').attr('src', data.url);
                    $('#sidebar-type p').text(data.type);
                    $('#sidebar-alt p').text(data.alt);
                    $('#sidebar-title p').text(data.title);
                    $('#sidebar-created p').text(formatDate(data.created_at));
                    $('#sidebar-updated p').text(formatDate(data.updated_at));
                    const mediaWrapper = $('#media-' + data.id);
                    if (data.type === 'image') {
                        mediaTag = `<img src="${data.url}" alt="${data.alt}" title="${data.title}" style="width: 100px" class="">`;
                    } else if (data.type === 'video') {
                        mediaTag = `<video src="${data.url}" title="${data.title}" style="width: 100px"></video>`;
                    }
                    mediaWrapper.find('.media-image').html(mediaTag);
                    mediaWrapper.find('.media-type').text(data.type);
                    mediaWrapper.find('.media-updated').text(formatDate(data.updated_at));
                    console.log(mediaWrapper.find('.media-image'));
                    result = true;
                }).catch(error => {
                    console.log(error);
                    return false;
                });
            }

            function handleMediaDelete(event, mediaId = null) {
                event.preventDefault();
                const $form = $(event.target);
                $.ajax({
                    type: 'POST',
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    success: function(data) {
                        console.log(data);
                        $('#media-' + mediaId).remove();
                    }
                });
            }

            function formatDate(timestamp) {
                const date = new Date(timestamp);
                return date.toLocaleString('en-CA', {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                }).replace(',', '');
            }
        </script>
    @endpush
@endonce
