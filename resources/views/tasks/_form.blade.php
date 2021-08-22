<div class="mb-2">
    <input type="text" class="form-control me-2 @error('task') is-invalid @enderror" name="task"
        value="{{ old('task', $task->task) }}">
    @error('task')
        <span class="invalid-feedback">
            {{ $message }}
        </span>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>
