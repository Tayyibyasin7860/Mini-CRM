    @csrf
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" class="form-control" value="{{$employee->first_name ?? ''}}">
        @if($errors->first('first_name'))
            {{$errors->first('first_name')}}
        @endif
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="{{$employee->last_name ?? ''}}">
        @if($errors->first('last_name'))
            {{$errors->first('last_name')}}
        @endif
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <select name="company" class="form-control" value="{{$employee->company ?? ''}}">
            <option disabled>Please select a Company</option>
            @foreach($companies as $company)
                <option value="{{ $company->id }}" {{ $company->name == $employee->employer->name ? 'selected' : '' }}>{{$company->name}}</option>
            @endforeach
        </select>
        @if($errors->first('company'))
            {{$errors->first('company')}}
        @endif
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="{{$employee ? $employee->email : ''}}">
        @if($errors->first('email'))
            {{$errors->first('email')}}
        @endif
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="number" name="phone" class="form-control" value="{{$employee ? $employee->phone : ''}}">
        @if($errors->first('phone'))
            {{$errors->first('phone')}}
        @endif
    </div>
    <input type="submit">
</form>
