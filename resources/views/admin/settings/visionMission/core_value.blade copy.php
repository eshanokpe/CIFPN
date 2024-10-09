<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Core Value</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="{{ isset($coreValue) ? route('admin.settings.updateCoreValue', $coreValue->id) : route('admin.settings.storeCoreValue') }}" enctype="multipart/form-data">
                    @csrf
                    @if(isset($coreValue))
                        @method('PUT')
                    @endif
                    <div class="row">
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Our Core Value</label>
                            <textarea id="ckeditor" class="form-control" name="core_value" rows="8" required>{{ old('core_value', isset($coreValue) ? $coreValue->core_values : '') }}</textarea>
                            @error('core_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Core Value Image</label>
                            <input type="file" class="form-control @error('core_values_img') is-invalid @enderror" name="core_values_img" onchange="previewImage(event, 'core_values_img')">
                            @error('core_values_img')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @if(isset($coreValue) && $coreValue->core_values_img)
                                <img src="{{ asset($coreValue->core_values_img) }}" alt="Current Core Value Image" class="img-thumbnail mt-2" width="200">
                            @endif
                            <img id="core_values_img" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                        </div>
                        <small class="text-danger">Maximum file size: 2MB. Allowed file types: JPEG, PNG, JPG, GIF.</small>

                        <div class="mb-3 col-md-10">
                            <label class="form-label">Vision Statement</label>
                            <textarea class="form-control" name="vision" rows="8" required>{{ old('vision', isset($coreValue) ? $coreValue->vision : '') }}</textarea>
                            @error('vision')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Vision Statement Image</label>
                            <input type="file" class="form-control @error('vision_img') is-invalid @enderror" name="vision_img" onchange="previewImage(event, 'vision_img')">
                            @error('vision_img')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @if(isset($coreValue) && $coreValue->vision_img)
                                <img src="{{ asset($coreValue->vision_img) }}" alt="Current Vision Image" class="img-thumbnail mt-2" width="200">
                            @endif
                            <img id="vision_img" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                        </div>

                        <div class="mb-3 col-md-10">
                            <label class="form-label">Mission Statement</label>
                            <textarea class="form-control" name="mission" rows="8" required>{{ old('mission', isset($coreValue) ? $coreValue->mission : '') }}</textarea>
                            @error('mission')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Mission Statement Image</label>
                            <input type="file" class="form-control @error('mission_img') is-invalid @enderror" name="mission_img" onchange="previewImage(event, 'mission_img')">
                            @error('mission_img')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @if(isset($coreValue) && $coreValue->mission_img)
                                <img src="{{ asset($coreValue->mission_img) }}" alt="Current Mission Image" class="img-thumbnail mt-2" width="200">
                            @endif
                            <img id="mission_img" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($coreValue) ? 'Update' : 'Add' }}</button>
                </form>
                <script>
                    function previewImage(event, imgId) {
                        const input = event.target;
                        const preview = document.getElementById(imgId);
                        
                        if (input.files && input.files[0]) {
                            const reader = new FileReader();
                            
                            reader.onload = function(e) {
                                preview.src = e.target.result;
                                preview.style.display = 'block';
                            };
                            
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('ckeditor');
</script>
