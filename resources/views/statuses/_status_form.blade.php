<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}

    <textarea class="form-control" name="content" id="" cols="30" rows="3" placeholder="Share something...">{{ old('content') }}</textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
</form>

