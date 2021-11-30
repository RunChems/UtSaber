<ul>

    @foreach($users as $user)

        {{$user->id}}
        <li>{{ $user->name }} : {{$user->email }} </li>

    @endforeach
</ul>



