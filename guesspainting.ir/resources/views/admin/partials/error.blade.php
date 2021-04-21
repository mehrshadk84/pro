@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <p style="text-align: center;">{{ $error }}</p>
    @endforeach    
</div>
@endif