<form action="/books" method="post">
    @csrf
    
        <h5>Name</h5>
            <input type="text" name="name" ><br>
        <h5>Description</h5>
            <input type="text"  name="description"><br><br>
        <h5>ID_Author</h5>
            <input type="text"  name="id_author"><br>

            <input type="submit" value="Submit">

</form>