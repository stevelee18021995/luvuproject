<form id="login_frm" autocomplete="off">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
    <div style="width: 100%;margin-top: 10px">
        <input id="basic_fill_email" name="basic_fill_email" placeholder="Email address or phone number" required="true"
            class="form-control" type="text" value="abc@gamil.com">
    </div>
    <div style="width: 100%;margin-top: 10px;">
        <input id="password" required="true" placeholder="Password" name="password" class="form-control"
            type="password">
    </div>
    <div style="width: 100%;margin-top: 10px;margin-bottom: 10px;">
        <p class="password-error" style="color: #ff4d4f;font-size:14px;margin-top: 6px;display: none;">
            Incorrect password</p>
    </div>
    <div class="col-md-12" style="text-align: right;padding-top: 20px">
        <button class="btn btn-primary" id="submitLogin"
            style="background-color: ##267df1;width: 30%;float:right ;outline: none; border: none; box-shadow: none; color: white; font-weight: 700; font-size: 1rem;">
            <div class="spinner-border" role="status" style="display: none;">
            </div> Continue
        </button>
    </div>
</form>
