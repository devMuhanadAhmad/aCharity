
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">English Name</label>
        <div class="input-group input-group-merge">

            <x-form.input name="en_name" :value="$status->en_name" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required/>
        </div>

    </div>

    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">English Description</label>
        <div class="input-group input-group-merge">

            <x-form.textarea name="en_description" :value="$status->en_description" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required/>
        </div>


    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Arabic Name</label>
        <div class="input-group input-group-merge">

            <x-form.input name="ar_name" :value="$status->ar_name" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required/>
        </div>

    </div>

    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Arabic Description</label>
        <div class="input-group input-group-merge">

            <x-form.textarea name="ar_description" :value="$status->ar_description" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required/>
        </div>

    </div>

    <div class="mb-3">
        <label>{{__("Category")}}</label>
        <select name="category_id" class="form-control" required>
            <option value="" selected disabled>{{__("Choose Category")}}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id', $status->category_id) == $category->id)>{{ $category->en_title }}</option>
            @endforeach
        </select>
        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Image</label>
        <div class="input-group input-group-merge">

            <x-form.input name="image"  type="file"
                class="form-control" id="basic-icon-default-fullname"
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

        <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Cost</label>
            <div class="input-group input-group-merge">

                <x-form.input name="price" :value="$status->price" type="text"
                    class="form-control" id="basic-icon-default-fullname"  required
                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required />
            </div>

        </div>
<div class="mb-3">    <button type="submit" class="btn btn-primary mr-lg-3">Save</button></div>
