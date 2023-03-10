@csrf
<div class="form-group mt-3">
    <input type="text" class="form-control" name="name" placeholder="Наименование"
           required maxlength="100" value="{{ old('name') ?? $page->name ?? '' }}">
</div>
<div class="form-group mt-3">
    <input type="text" class="form-control" name="slug" placeholder="ЧПУ (на англ.)"
           required maxlength="100" value="{{ old('slug') ?? $page->slug ?? '' }}">
</div>
<div class="form-group mt-3">
    @php
        $parent_id = old('parent_id') ?? $page->parent_id ?? 0;
    @endphp
    <select name="parent_id" class="form-control" title="Родитель">
        <option value="0">Без родителя</option>
        @foreach($parents as $parent)
            <option value="{{ $parent->id }}" @if ($parent->id === $parent_id) selected @endif>
                {{ $parent->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group mt-3">
    <label for="editor" class="mb-1">Содержание страницы с тегами</label>
    <textarea class="form-control" name="content" placeholder="Контент (html)" required id="editor" rows="20"  >{{ old('content') ?? $page->content ?? '' }}</textarea>
</div>
<div class="form-group mt-3">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
