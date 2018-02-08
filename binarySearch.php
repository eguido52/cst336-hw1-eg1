<!DOCTYPE html>
<html>
    
    <head>
        <meta charset= "utf-8" />
        <title>Homework 1</title>
        <link href= "css/style.css" rel= "stylesheet" type= "text/css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <h1>SEARCH ALGORITHMS</h1>
        </header>
        
        <nav>
            <hr/>   
            <a href= "index.php" class= "navBar">Home</a>
            <a href= "bFirstSearch.php" class= "navBar">Breadth-First</a>
            <a href= "dFirstSearch.php" class= "navBar">Depth-First</a>
            <hr/>
        </nav>
        
        <main>
            <h2>Binary Search</h2>
            <br />
            <img src= "https://ds055uzetaobb.cloudfront.net/image_optimizer/717403b1368376cb6f915e6b4beeb3a7ad54105e.gif" alt = "Binary Search GIF" class="gif"/>
            <p>
                Binary search is an efficient very commonly used searching algorithm. 
                In fact, it is so efficient that if you were to take a sorted list of all the names in the world it would
                take no more than 35 iterations.
                One thing to note is that binary search requires data to be be pre-sorted in order for it to work properly.
                <br /><br />
                In order to preform binary search you must the now the location of first and last elements of the list.
                These are commonly refered to as low and high respectively. 
                We take the median of these two locations to find the median. 
                We then compare the value at the median location to the target value. 
                <br /><br />
                If the target value is greater than the median value then we repeat this process, but this time using the median as our low.
                However, if the target is less than the median value then we repeat this process, but this time using the median as our high.
                Otherwise, the median value is our target and we are done.
                We repeat these steps until we have found our target value.
                <br /><br />
                Watch the video below for an example of how Binary Search works.
                Or, for the source click <a href= "https://www.hackerearth.com/practice/algorithms/searching/binary-search/tutorial/">here</a>.
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/P3YID7liBug?rel=0&amp;showinfo=0&amp;start=6" allowfullscreen></iframe>
        </main>
    </body>
    
    <footer><hr>
        CST336-Internet Programing. 2018&copy; Guido
        <br />
    </footer>
    
</html>