<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/23.1.3/css/dx.light.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
</head>

<body>
    <main class="main" id="main">
        <section class="section">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="py-5 col-lg-10">
                        <div class="file-uploader-sec">
                            <div class="flex-wrap upper-header-section d-flex justify-content-between flex-sm-nowrap">
                                <div class="flex-wrap gap-2 px-2 py-2 d-flex flex-sm-nowrap">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-upload"></i> Upload
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item staticBackdropOpen" href="javascript:void(0)"
                                                    type="button" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop"><i class="fa-solid fa-upload"></i>
                                                    Upload from local</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop1"><i class="fa-solid fa-link"></i>
                                                    Upload from URL</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop2">
                                        <i class="fa-solid fa-folder-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fa-solid fa-arrows-rotate"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-eye"></i>(<i class="fa-solid fa-globe"></i> All Media
                                            )<i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-globe me-2"></i>All
                                                    Media</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-trash-can me-2"></i>Trash</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-clock me-2"></i>Recent</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-star me-2"></i>Favorites</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-2 py-2">
                                    <form class="gap-0 d-flex" role="search">
                                        <input class="form-control" type="search" placeholder="Search in current folder"
                                            aria-label="Search" />
                                        <button class="btn btn-outline-success" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div
                                class="flex-wrap px-3 py-3 upper-header-section-2 d-flex justify-content-between flex-sm-nowrap">
                                <div class="all-media-icon">
                                    <button><i class="fa-regular fa-image"></i> All Media</button>
                                </div>
                                <div class="flex-wrap gap-2 d-flex flex-sm-nowrap">
                                    <div class="btn-group sorting-menu-sec">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>A-Z</span> Short
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-arrow-down-a-z drop-i"></i>
                                                    File Name- ASC</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-arrow-up-z-a drop-i"></i>File
                                                    Name- DESC</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-arrow-up-1-9 drop-i"></i>Uploaded Date-
                                                    ASC</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-arrow-down-9-1 drop-i"></i>Uploaded
                                                    Date-
                                                    DESC</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-arrow-down-short-wide drop-i"></i>Size-
                                                    DESC</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-arrow-down-wide-short drop-i"></i>Size
                                                    Date-
                                                    DESC</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-primary action-button">
                                        <i class="fa-regular fa-hand-pointer hand-icons"></i> Actions
                                    </button>
                                    <button id="toggleButton" class="btn btn-primary action-button">
                                        <i class="fa-solid fa-arrow-left-long change-icon"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="upper-header-section-3 d-flex position-relative flex-column flex-sm-row">
                                <div class="table-responsive w-100">
                                    <table class="table mb-0 file-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="2"></th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Uploaded At</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="uploaded-files">
                                            @foreach (\App\Models\Media::all() as $image)
                                            <tr class="table-active">
                                                <td scope="col" colspan="2">
                                                    <div>
                                                        <div class="checkbox-wrapper-4">
                                                            <input class="inp-cbx" name="media[]"
                                                                id="media-image-{{ $image->id }}" type="checkbox"
                                                                value="{{ $image->id }}" />
                                                            <label class="cbx" for="media-image-{{ $image->id }}">
                                                                <span>
                                                                    <svg width="12px" height="10px">
                                                                        <use xlink:href="#check-4"></use>
                                                                    </svg>
                                                                </span>
                                                                <span>
                                                                    @if ($image->type == 'image')
                                                                    <img src="{{ asset($image->image) }}"
                                                                        alt="{{ $image->alt }}"
                                                                        title="{{ $image->title }}" style="width: 100px"
                                                                        class="">
                                                                    @elseif($image->type == 'video')
                                                                    <video src="{{ asset($image->image) }}"
                                                                        alt="{{ $image->alt }}"
                                                                        title="{{ $image->title }}"
                                                                        style="width: 100px"></video>
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
                                                        <p class="m-0 text-capitalize">{{ $image->type }}</p>
                                                    </div>
                                                </td>
                                                <td scope="col">
                                                    <div>
                                                        <p class="m-0">{{ $image->created_at->format('Y-m-d H:i:s') }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td scope="col">
                                                    <div class="gap-2 d-flex">
                                                        <form action="{{ route('media.destroy', $image->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick="return confirm('Are you sure you want to delete this image?');"
                                                                class="btn btn-danger">
                                                                <i class="fa-regular fa-trash-can"></i>
                                                            </button>
                                                        </form>
                                                        <a href="javascript:void(0)" class="btn btn-info"
                                                            data-id="{{ $image->id }}">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="file-description list image-sidebar active" id="sidebar-1">
                                    <div class="item">
                                        <div class="text-center file-symbol">
                                            {{-- <i class="fa-regular fa-folder file-icon"></i> --}}
                                            <img src="" id="sidebar-image" alt="">
                                        </div>
                                        <div class="file-details">
                                            <div id="sidebar-type">
                                                <strong>Type</strong>
                                                <p>image</p>
                                            </div>
                                            <div id="sidebar-alt">
                                                <strong>Alt</strong>
                                                <p>name</p>
                                            </div>
                                            <div id="sidebar-title">
                                                <strong>Title</strong>
                                                <p>name</p>
                                            </div>
                                            <div id="sidebar-created">
                                                <strong>Uploaded at</strong>
                                                <p>2024-09-27 02:31:38</p>
                                            </div>
                                            <div id="sidebar-updated">
                                                <strong>Modified at</strong>
                                                <p>2024-09-27 02:31:38</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- file-upload modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload Files Here</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="dropzone">
                        <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data"
                            class="dropzone needsclick" id="demo-upload">
                            @csrf
                            <div class="dz-message needsclick">
                                <span class="text">
                                    <img src="http://www.freeiconspng.com/uploads/------------------------------iconpngm--22.png"
                                        alt="Camera" />
                                    Drop files here or click to upload.
                                </span>
                                <span class="plus">+</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#imagesModel">Back</button>
                </div>
            </div>
        </div>
    </div>
    <!-- file-upload modal -->
    <!-- file-upload from url modal -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <form id="upload-files" action="{{ route('media.upload.url') }}" method="POST" class="modal-content">
                <div class="loading-spinner"></div>
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload Files from URL</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2 shadow-none form-floating">
                        <textarea class="shadow-none form-control" name="media" placeholder="Enter URL Here"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2" style="font-size: 12px">https://www.google.com,
                            https://www.google.com, https://www.google.com,
                        </label>
                    </div>
                    <small>Enter one URL per line.</small>
                </div>
                <div class="modal-footer">
                    <div class="flex w-100">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-upload"></i> Upload
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#imagesModel">Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- file-upload from url modal -->
    <!-- create-folder modal -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Folder</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex" role="search">
                        <input class="shadow-none form-control me-0 rounded-0" type="text" placeholder="create"
                            aria-label="Search" />
                        <button class="btn btn-primary rounded-0" type="submit">Create</button>
                    </form>
                </div>
                <div class="modal-footer border-top-0"></div>
            </div>
        </div>
    </div>
    <!-- create-folder modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/dx.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        Dropzone.options.demoUpload = {
            paramName: "file",
            maxFilesize: 50,
            acceptedFiles: "image/*,video/*",
            success: function (file, response) {
                console.log(file, response);
                if (response.file) {
                    appendUploadedFile(response.file, response.timestamp);
                }
            },
        };

        function appendUploadedFile(file, timestamp) {
            if (file.type === "image") {
                fileContent = `<img src="${file.url}" alt="${file.name}" title="${file.name}" style="width: 100px">`;
            } else if (file.type === "video") {
                fileContent = `<video width="100px" controls><source src="${file.url}" type="video/mp4"></video>`;
            }
            let newRow = `<tr class="table-active">
                <td scope="col" colspan="2">
                    <div>
                        <div class="checkbox-wrapper-4">
                            <input id="media-image-${file.id}" class="inp-cbx" name="media[]" type="checkbox" value="${file.id}" />
                            <label class="cbx" for="media-image-${file.id}">
                                <span>
                                    <svg width="12px" height="10px">
                                        <use xlink:href="#check-4"></use>
                                    </svg>
                                </span>
                                <span>${fileContent}</span>
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
                        <p class="m-0 text-capitalize">${file.type}</p>
                    </div>
                </td>
                <td scope="col">
                    <div>
                        <p class="m-0">${file.created_at_formatted}</p>
                    </div>
                </td>
                <td scope="col">
                    <div class="gap-2 d-flex">
                        <form action="{{ route('media.destroy', ':id') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>`.replace(":id", file.id);
            $("#uploaded-files").append(newRow);
        }


        $(document).ready(function () {
            $('#upload-files').on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.files) {
                            response.files.forEach(function(fileData) {
                                appendUploadedFile(fileData);
                                $('#upload-files')[0].reset();
                            });
                        }
                    }
                });
            });


            $('.btn-info').on('click', function () {
                const id = $(this).data('id');
                const url = "{{ route('media.show', ':id') }}".replace(':id', id);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (media) {
                        console.log(media);
                        $('#sidebar-image').attr('src', media.image);
                        $('#sidebar-image').attr('alt', media.name);
                        $('#sidebar-image').attr('title', media.name);
                        $('#sidebar-type p').text(media.type);
                        $('#sidebar-alt p').text(media.alt);
                        $('#sidebar-title p').text(media.title);
                        $('#sidebar-created p').text(formatDate(media.created_at));
                        $('#sidebar-updated p').text(formatDate(media.updated_at));
                        $('#sidebar-1').removeClass('active');
                        // $('#sidebar-2').addClass('active');
                    }
                });
            });
        });
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
</body>

</html>
