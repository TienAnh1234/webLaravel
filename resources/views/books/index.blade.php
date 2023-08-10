<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>ID_Author</th>
        
    </tr>
    @foreach($book as $book1)   
        <tr>
            <td>{{ $book1->id }}</td>
            <td>{{ $book1->name }}</td>
            <td>{{ $book1->description }}</td>
            <td>{{ $book1->id_author }}</td>
            
</tr>   
   
    @endforeach
</table>


