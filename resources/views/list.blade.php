<x-guest-layout>
<!DOCTYPE html>
<html>
    <head>
        <title>LOTR Characters</title>
    </head>
    <body>
        <div style="padding:20px;">        
            <a href="{{ route('character.index') }}" class="create-blog-button">See Characters</a>
        </div>
        
        <h1>LOTR Character Lists</h1>
        <form action="{{ route('list.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">List Name:</label>
            <input style="width:240px;" type="text" id="name" name="name" value="" placeholder="Start Typing Name">
            <button type="submit" class="form-btn">Create Name</button>
        </form>
        <table>
            <thead>
                <th>Name</th>
                <th>Active</th>
                <th>Action</th>
            </thead>
            @foreach ($listData as $data)
            <tr>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['active'] }}</td>
                <td>TO:DO</td>
            </tr>
            @endforeach
        </table>
    </body>
</x-guest-layout>