<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @foreach ($roles as $role )
                        {{-- <label for="role-{{$loop->index}}">{{$role->name}}</label>
                        <input type="radio" name="role" id="role-{{$loop->index}}"> --}}
        <div class="input-container">
            <input id="role-{{$loop->index}}" type="radio" name="role" value="{{$role->name}}" wire:model='role'>
            <label for="role-{{$loop->index}}"><span>{{$role->name}}</span></label>
        </div>
    @endforeach
</div>
