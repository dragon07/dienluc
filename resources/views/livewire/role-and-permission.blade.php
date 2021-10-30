<div class="container-fluid">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Vai trò
                </div>
                <div class="card-body">
                    @foreach ($roles as $role )
                        {{-- <label for="role-{{$loop->index}}">{{$role->name}}</label>
                        <input type="radio" name="role" id="role-{{$loop->index}}"> --}}
                        <div class="input-container">
                            <input id="role-{{$loop->index}}" type="radio" name="role" value="{{$role->name}}" wire:model='role'>
                            <label for="role-{{$loop->index}}"><span>{{$role->name}}</span></label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  Quyền
                </div>
                <div class="card-body">
                    {{-- @dd($permissions) --}}
                    @foreach ($permissions as $permistion)
                    {{-- @dd($permistion) --}}
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox-{{$loop->index}}" @if ($currentPermissions !=null && !$currentPermissions->where('id',$permistion->id)->isEmpty())
                            checked
                        {{-- wire:click --}}
                        @endif wire:click='addOrRemove({{$permistion->id}})'>
                        <label class="form-check-label" for="checkbox-{{$loop->index}}">
                          {{$permistion->name}}
                        </label>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
