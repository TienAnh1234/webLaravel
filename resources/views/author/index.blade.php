<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
 
        
    </tr>
    @foreach($author as $author1)   
        <tr>
            <td>{{ $author1->id }}</td>
            <td>{{ $author1->name }}</td>
            <td>{{ $author1->address }}</td>
            
</tr>   
   
    @endforeach
</table>


