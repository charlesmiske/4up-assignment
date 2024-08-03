<x-guest-layout>
<!DOCTYPE html>
<html>
    <head>
        <title>LOTR Characters</title>
    </head>
    <body class="bg-gray-100 text-gray-900">
        <h1>LOTR Characters</h1>
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