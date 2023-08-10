<div class="mb-3">
    <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
    <div class="input-group input-group-merge">
        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <x-form.input name="name" :value="$user->name" type="text" class="form-control" id="basic-icon-default-fullname"
            placeholder="John Doe" required aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
    </div>

</div>

<div class="mb-3">
    <label class="form-label" for="basic-icon-default-email">Email</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <x-form.input type="text" name="email" :value="$user->email" required id="basic-icon-default-email"
            class="form-control" placeholder="john.doe" aria-label="john.doe"
            aria-describedby="basic-icon-default-email2" />
        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
    </div>
    <div class="form-text">You can use letters, numbers & periods</div>
</div>

<div class="form-password-toggle">
    <label class="form-label" for="basic-default-password12">Password</label>
    <div class="input-group">
        <x-form.input type="password" name="password" :value="$user->password" required class="form-control"
            id="basic-default-password12"
            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            aria-describedby="basic-default-password2" />
        <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
    </div>
</div>
<button type="submit" class="btn btn-primary">Save</button>
