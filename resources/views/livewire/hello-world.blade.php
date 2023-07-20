<div>
    <input wire:model="name" type="text">
    <ul>
        @foreach ($result as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>
