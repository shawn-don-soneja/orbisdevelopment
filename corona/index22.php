

<script src="https://public.tableau.com/javascripts/api/tableau-2.min.js"></script>
<script>
    function initViz() {
    var containerDiv = document.getElementById("vizContainer"),
    url = "https://public.tableau.com/views/covid19_15851491780590/Sheet1?:display_count=y&publish=yes&:origin=viz_share_link";

    var viz = new tableau.Viz(containerDiv, url);
    
    //gender 
    
    
    var genderDiv = document.getElementById("gender"),
     url2 = "https://public.tableau.com/views/covid19_15851491780590/Sheet2?:display_count=y&publish=yes&:origin=viz_share_link";

    var viz2 = new tableau.Viz(genderDiv, url2);
}



</script>
<style>
body{
 background-color:black;
}
    #vizContainer{
       
        float:right;
        width:55vw;
    }
    #gender{
      
        float:left;
        width:40vw;
        height:15rem;
    }
</style>
<body onload="initViz()">
    <div id="gender">
    
    
    

</div>
    
    <div id="vizContainer">
    
    
    

</div>
    
    
</body>
