<x-guest-layout>
<!DOCTYPE html>
<html>
    <head>
        <title>LOTR Characters</title>
    </head>
    <body>
        <div style="padding:20px;">        
            <a href="{{ route('list.index') }}" class="create-blog-button">Manage Lists</a>
        </div>
        <h1>LOTR Characters</h1>
        <form action="{{ route('character.filter') }}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Name/Partial:</label>
            <input style="width:240px;" type="text" id="name" name="name" value="" placeholder="Start Typing Name">
            <button type="submit" class="form-btn">Search Name</button>
        </form>
        <table>
            <thead>
                <th>Name</th>
                <th>Race</th>
                <th>Gender</th>
                <th>Spouse</th>
                <th>Link</th>
            </thead>
            @foreach ($characterData as $charData)
            <tr>
                <td>{{ $charData['name'] }}</td>
                <td>{{ $charData['race'] }}</td>
                <td>{{ $charData['gender'] }}</td>
                <td>{{ $charData['spouse'] }}</td>
                <td><a href="{{ $charData['wikiUrl'] }}" style="color:navy;" target="_BLANK">LOTR WIKI</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</x-guest-layout>