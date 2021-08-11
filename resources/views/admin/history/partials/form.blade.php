<p>
    <span class="textarea" role="textbox" contenteditable>{{ old('content', optional($post ?? null)->content) }}</span>

</p>
@if($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

