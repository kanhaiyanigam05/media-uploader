<!-- Modal -->
<div class="modal fade imagesModel" id="imagesModel" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="file-uploader-sec">
                    <div class="upper-header-section d-flex justify-content-between flex-wrap flex-sm-nowrap">
                        <div class="d-flex gap-2 py-2 px-2 flex-wrap flex-sm-nowrap">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-upload"></i> Upload
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item staticBackdropOpen" href="javascript:void(0)"
                                            type="button" data-bs-toggle="modal" data-bs-target="#uploadImage"><i
                                                class="fa-solid fa-upload"></i>
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
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-eye"></i>(<i class="fa-solid fa-globe"></i> All Media
                                    )<i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="fa-solid fa-globe me-2"></i>All
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
                        <div class="py-2 px-2">
                            <form class="d-flex gap-0" role="search">
                                <input class="form-control" type="search" placeholder="Search in current folder"
                                    aria-label="Search" />
                                <button class="btn btn-outline-success" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div
                        class="upper-header-section-2 d-flex justify-content-between px-3 py-3 flex-wrap flex-sm-nowrap">
                        <div class="all-media-icon">
                            <button><i class="fa-regular fa-image"></i> All Media</button>
                        </div>
                        <div class="gap-2 d-flex flex-wrap flex-sm-nowrap">
                            <div class="btn-group sorting-menu-sec">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
                                    @foreach ($images as $image)
                                    <tr class="table-active">
                                        <td scope="col" colspan="2">
                                            {{-- <div>
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
                                                                alt="{{ $image->alt }}" title="{{ $image->title }}"
                                                                style="width: 100px" class="">
                                                            @elseif($image->type == 'video')
                                                            <video src="{{ asset($image->image) }}"
                                                                alt="{{ $image->alt }}" title="{{ $image->title }}"
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
                                            </div> --}}
                                            <div>
                                                <div class="checkbox-wrapper-4">
                                                    <input class="inp-cbx" name="media"
                                                        id="media-image-{{ $image->id }}" type="radio"
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
                                                                alt="{{ $image->alt }}" title="{{ $image->title }}"
                                                                style="width: 100px">
                                                            @elseif($image->type == 'video')
                                                            <video src="{{ asset($image->image) }}"
                                                                alt="{{ $image->alt }}" title="{{ $image->title }}"
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
                                                <p class="m-0">{{ $image->created_at->format('Y-m-d H:i:s') }}</p>
                                            </div>
                                        </td>
                                        <td scope="col">
                                            <div class="d-flex gap-2">
                                                {{-- <a href="{{ route('admin.images.edit', $image->id) }}"
                                                    class="btn btn-warning">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a> --}}
                                                <form action="{{ route('admin.images.destroy', $image->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete this image?');"
                                                        class="btn btn-danger">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="file-description list image-sidebar active" id="sidebar-1">
                            <div class="item">
                                <div class="file-symbol text-center">
                                    <i class="fa-regular fa-folder file-icon"></i>
                                </div>
                                <div class="file-details">
                                    <div>
                                        <p><b>Name</b></p>
                                        <p>main</p>
                                    </div>
                                    <div>
                                        <p><b>Uploaded at</b></p>
                                        <p>2024-09-27 02:31:38</p>
                                    </div>
                                    <div>
                                        <p><b>Modified at</b></p>
                                        <p>2024-09-27 02:31:38</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary insert-btn">Insert</button>
            </div>
        </div>
    </div>
</div>

<!-- file-upload modal -->
<div class="modal fade" id="uploadImage" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload Files Here</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="dropzone">
                    <form action="{{ route('admin.images.store') }}" method="POST" enctype="multipart/form-data"
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
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>
<!-- file-upload modal -->
<!-- file-upload from url modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload Files from URL</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating shadow-none mb-2">
                    <textarea class="form-control shadow-none" name="images[]" placeholder="Enter URL Here"
                        id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2" style="font-size: 12px">https://www.google.com,
                        https://www.google.com, https://www.google.com,
                    </label>
                </div>
                <small>Enter one URL per line.</small>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <button type="button" class="btn btn-primary w-100">
                        <i class="fa-solid fa-upload"></i> Upload
                    </button>
                </div>
            </div>
        </div>
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
                    <input class="form-control me-0 shadow-none rounded-0" type="text" placeholder="create"
                        aria-label="Search" />
                    <button class="btn btn-primary rounded-0" type="submit">Create</button>
                </form>
            </div>
            <div class="modal-footer border-top-0"></div>
        </div>
    </div>
</div>
<!-- create-folder modal -->
@push('image-js')

@endpush