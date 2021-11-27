<div>
    <form action="{{ route('task.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="name">Name <span class="text text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email <span class="text text-danger">*</span></label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="subject">Subject <span class="text text-danger">*</span></label>
            <input type="subject" name="subject" id="subject" class="form-control" value="{{ old('subject') }}">
        </div>
        <div class="form-group">
            <label for="message">Message <span class="text text-danger">*</span></label>
            <textarea name="message" id="message" class="form-control">{{ old('message') }}</textarea>
        </div>
        <div class="form-group">
            <label for="date">Date <span class="text text-danger">*</span></label>
            <input type="text" name="fullDate" id="fullDate" class="form-control" value="<?=date("Y-m-d");?>" readonly>
        </div>
        <div class="form-group">
            <label for="time">Time <span class="text text-danger">*</span></label>
            
            <input type="time" name="hourmins" id="hourmins" class="form-control"><br>
            <select name="ampm" id="ampm" class="form-control">
                <option value="am">AM</option>
                <option value="pm">PM</option>
            </select>
        </div>
        <div class="form-group">
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>