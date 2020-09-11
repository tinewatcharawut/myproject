<div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
    <label for="street" class="control-label">{{ 'Street' }}</label>
    <textarea class="form-control" rows="5" name="street" type="textarea" id="street" >{{ isset($street->street) ? $street->street : ''}}</textarea>
    {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="control-label">{{ 'City' }}</label>
    <textarea class="form-control" rows="5" name="city" type="textarea" id="city" >{{ isset($street->city) ? $street->city : ''}}</textarea>
    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="control-label">{{ 'State' }}</label>
    <input class="form-control" name="state" type="text" id="state" value="{{ isset($street->state) ? $street->state : ''}}" >
    {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('zip_code') ? 'has-error' : ''}}">
    <label for="zip_code" class="control-label">{{ 'Zip Code' }}</label>
    <input class="form-control" name="zip_code" type="text" id="zip_code" value="{{ isset($street->zip_code) ? $street->zip_code : ''}}" >
    {!! $errors->first('zip_code', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
