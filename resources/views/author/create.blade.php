<form action="/authors" method="post">
    @csrf
    
        <h5>Name</h5>
            <input type="text" name="name" ><br>
        <h5>Address</h5>
            <input type="text"  name="address"><br><br>

            <input type="submit" value="Submit">

</form>