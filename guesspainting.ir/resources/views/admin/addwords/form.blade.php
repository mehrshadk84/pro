<html>
<div class="row" style="margin-left: 37%; margin-top: 2%">
    <div class="col-xs-12 col-md-6">
    @include('admin.partials.error')
    @include('admin.partials.notifications')
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="word">word</label>
                <input type="text" class="form-control" name="word" id="word" value="{{ old('word', isset($WordItem) ? $WordItem->word: '' )}} ">
            </div>
            <div class="form-group">
                <label for="word">picture_name</label>
                <input type="text" class="form-control" name="picture_name" id="picture_name" value="{{ old('picture_name', isset($WordItem) ? $WordItem->picture_name: '' )}} ">
            </div>
            <div class="form-group">
                <label for="word_time">word_time</label>
                <input type="text" class="form-control" name="word_time" id="word_time" value="{{ old('word_time', isset($WordItem) ? $WordItem->word_time: '' ) }} ">
            </div>
            <div class="form-group">
                <label for="word_score">word_score</label>
                <input type="text" class="form-control" name="word_score" id="word_score" value="{{ old('word_score', isset($WordItem) ? $WordItem->word_score: '' ) }} ">
            </div>
            <div class="form-group">
                <label for="hardness_level">hardness_level</label>
                <select name="hardness_level" id="hardness_level" class="form-control">
                    <option value="1" {{ isset($WordItem) && $WordItem->hardness_level == 1 ? 'selected': '' }}>easy</option>
                    <option value="2" {{ isset($WordItem) && $WordItem->hardness_level == 2 ? 'selected': '' }}>normal</option>
                    <option value="3" {{ isset($WordItem) && $WordItem->hardness_level == 3 ? 'selected': '' }}>hard</option>
                </select>
            </div>
            <div style="text-align: center;" class="form-group">
                <button class="btn btn-success" type="submit">submit</button>
            </div>
        </form>
    </div>
</div>

</html>