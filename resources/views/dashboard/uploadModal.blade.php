<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Update Image
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert Your Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update_image') }}" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <input type="hidden" id="csrf" name="_token" value="{{ csrf_token() }}" />
                        <input type="file" name="image" id="image">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@error('image')
    <span class="alert alert-danger">{{ $message }}</span>
@enderror
{{-- @foreach ($errors->all() as $err)
    <p class="alert alert-danger">{{ $err }} <br></p>
@endforeach --}}
{{-- <script src="{{ asset('assets/js/update_image.js') }}"></script> --}}
