<label>title <br/>
    <input name="title" type="text" value="{{old('title',$post-> posts1)}}"/>
    <br/>
    @error('title')
        <small style ="color:red">{{$message}}</small>
    @enderror
</label><br/>
<label>description<br/>
    <textarea name="description"></textarea>
    <br/>
    @error('description')
        <small style ="color:red">{{$message}}</small>
    @enderror
</label><br/>