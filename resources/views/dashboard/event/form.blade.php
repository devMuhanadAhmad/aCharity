
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">English Title</label>
        <div class="input-group input-group-merge">

            <x-form.input name="en_title" :value="$event->en_title" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

    </div>

    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">English Description</label>
        <div class="input-group input-group-merge">

            <x-form.textarea name="en_description" :value="$event->en_description" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>


    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Arabic Title</label>
        <div class="input-group input-group-merge">

            <x-form.input name="ar_title" :value="$event->ar_title" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

    </div>

    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Arabic Description</label>
        <div class="input-group input-group-merge">

            <x-form.textarea name="ar_description" :value="$event->ar_description" type="text"
                class="form-control" id="basic-icon-default-fullname"  required
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Date</label>
        <div class="input-group input-group-merge">

            <x-form.input name="date"  type="date" :value="$event->date"
                class="form-control" id="basic-icon-default-fullname"
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Image</label>
        <div class="input-group input-group-merge">

            <x-form.input name="image"  type="file"
                class="form-control" id="basic-icon-default-fullname"
                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
        </div>

 
<div class="mb-3">    <button type="submit" class="btn btn-primary mr-lg-3">Save</button></div>
