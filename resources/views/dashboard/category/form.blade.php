
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">English Title</label>
        <div class="input-group input-group-merge">

            <x-form.input name="en_title" :value="$category->en_title" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

    </div>

 
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Arabic Title</label>
        <div class="input-group input-group-merge">

            <x-form.input name="ar_title" :value="$category->ar_title" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

    </div>


<div class="mb-3">    <button type="submit" class="btn btn-primary mr-lg-3">Save</button></div>
