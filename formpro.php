<!DOCTYPE html>
<html lang="en">
<head>
    <script src="formproscript.js"></script>
    <title>chooseur Processor</title>
</head>
<body>
    <div id="formpro" style="position:relative; left:30% ;padding:30px; background-color:">
        <h1>Choose your Processor </h1>
        <form action="#" method = "post" >
            <div>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your Name" name="name" >
            <hr>
           </div>
    <div>
        <label>Select Processor</label>
        <hr>
        <select onchange="fetchpro(this.value)"> 
            <option > Select Processor</option>
            <option > Intel</option>
            <option > AMD</option>
        </select>

    </div>
    <hr>
    <div>
        <label>Select CPU</label>
        <hr>
        <select id="pro">
            <option>First Select CPU</option>
        </select>   
    </div>
    <div>
        <hr>
        <input type="submit" value="Submit">
    </div>

            </form>
        </div>
    </body>
</html>