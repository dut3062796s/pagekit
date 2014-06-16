@script('form-password', 'vendor://assets/uikit/js/addons/form-password.js', ['jquery', 'uikit'])

<form class="uk-article uk-form uk-form-stacked" action="@url.route('@system/profile/save')" method="post">

    <h1 class="uk-article-title">@trans('Your Profile')</h1>

    <div class="uk-form-row">
        <label for="form-name" class="uk-form-label">@trans('Name')</label>
        <div class="uk-form-controls">
            <input id="form-name" class="uk-form-width-large" type="text" name="user[name]" value="@user.name" required>
        </div>
    </div>

    <div class="uk-form-row">
        <label for="form-name" class="uk-form-label">@trans('Email')</label>
        <div class="uk-form-controls">
            <input id="form-name" class="uk-form-width-large" type="text" name="user[email]" value="@user.email" required>
        </div>
    </div>

    <div class="uk-form-controls uk-form-controls-text js-password">
        <a href="#" data-uk-toggle="{ target: '.js-password' }">@trans('Change password')</a>
    </div>

    <div class="uk-form-row js-password uk-hidden">
        <label for="form-password-old" class="uk-form-label">@trans('Current Password')</label>
        <div class="uk-form-controls">
            <div class="uk-form-password">
                <input id="form-password-old" class="uk-form-width-large" type="password" name="user[password_old]" value="">
                <a href="" class="uk-form-password-toggle" data-uk-form-password="{ lblShow: '@trans('Show')', lblHide: '@trans('Hide')' }">@trans('Show')</a>
            </div>
        </div>
    </div>

    <div class="uk-form-row js-password uk-hidden">
        <label for="form-password-new" class="uk-form-label">@trans('New Password')</label>
        <div class="uk-form-controls">
            <div class="uk-form-password">
                <input id="form-password-new" class="uk-form-width-large" type="password" name="user[password_new]" value="">
                <a href="" class="uk-form-password-toggle" data-uk-form-password="{ lblShow: '@trans('Show')', lblHide: '@trans('Hide')' }">@trans('Show')</a>
            </div>
        </div>
    </div>

    <div class="uk-form-row">
        <button class="uk-button uk-button-primary" type="submit">@trans('Save')</button>
    </div>

    @token()

</form>