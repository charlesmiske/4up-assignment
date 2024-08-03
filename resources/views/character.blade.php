<x-guest-layout>
<!DOCTYPE html>
<html>
    <head>
        <title>LOTR Characters</title>
    </head>
    <body>
        <h1>LOTR Characters</h1>
        <form action="{{ route('character.filter') }}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Name/Partial:</label>
            <input style="width:240px;" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Start Typing Name">
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
                <td>{{ $charData['wikiUrl'] }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</x-guest-layout>