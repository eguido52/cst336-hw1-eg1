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
            <a href= "binarySearch.php" class= "navBar">Binary</a>
            <a href= "bFirstSearch.php" class= "navBar">Breadth-First</a>
            <hr/>
        </nav>
        
        <main>
            <h2>Depth-First Search</h2>
            <img src= "https://upload.wikimedia.org/wikipedia/commons/7/7f/Depth-First-Search.gif" alt= "Depth-First Search" class= "gif"/>
            <p>
                Depth-First Search(DFS) is a graph traversal method which follows the idea of "backtracking".
                DFS involves continually searching the each node and moving on to the next layer, or level. 
                It does so until it there is no next layer, in which case it goes back one layer and checks for another "next" layer.
                If there is one then it will move on to that layer and continue the process.
                These steps are then repeated until there are target value is found or until there are no more "next" layers.
                
                <br /><br />
                For a more detailed explanation please refer to the video below. Or for the source click <a href= "https://www.hackerearth.com/practice/algorithms/graphs/depth-first-search/tutorial/">here</a>.
            </p>
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zaBhtODEL0w?rel=0&amp;showinfo=0&amp;start=43" allowfullscreen></iframe>
            <br />
        </main>
    </body>
    
    <footer><hr>
        CST336-Internet Programing. 2018&copy; Guido
        <br />
    </footer>
    
</html>