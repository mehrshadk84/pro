@if(session('success'))
    <div class="alert alert-success">
        <p style="text-align: center;">word created successfully.</p>
    </div>
@endif
@if(session('word_deleted'))
    <div class="alert alert-success">
        <p style="text-align: center;">word deleted successfully.</p>
    </div>
@endif
@if(session('word_edited'))
    <div class="alert alert-success">
        <p style="text-align: center;">word edited successfully.</p>
    </div>
@endif
@if(session('user_success'))
    <div class="alert alert-success">
        <p style="text-align: center;">Thanks! your account has been successfully created.</p>
    </div>
@endif
@if(session('loign_success'))
    <div class="alert alert-success">
        <p style="text-align: center;">your login was successfully</p>
    </div>
@endif
@if(session('loign_failed'))
    <div class="alert alert-success">
        <p style="text-align: center;">wrong detail</p>
    </div>
@endif