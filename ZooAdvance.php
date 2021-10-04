<?php
function writeHeading($Heading = "Welcome", $TitleBar = "My Site")
{
    echo "<!doctype html>";
    echo "<html lang = \"en\">";
    echo "<head>";
    echo "<meta charset = \"UTF-8\">";
    echo "<title>" . $TitleBar . "</title>";
    echo " <link rel=\"stylesheet\" href=\"styles.css\">";
    echo "</head>";
    echo "<body>";
    echo "<h1 class='text-center'>".$Heading . "</h1>";
}
function writeFooters()
{
    echo "</body>";
    echo "</html>";
}
function dataEntryForm()
{
    // form action = ? means reload the same php file when the user clicks Submit
    echo "<form action = \"?\" method=post>
    <p>Name <Input type = text name = \"f_AnimalName\" Size = 20 value = \"Claws\"></p>
    <p>Type of Animal <Input type = text name = \"f_AnimalType\" Size = 10 value = \"Tiger\"></p>
    <p>Pounds of Food Per Day <Input type = text name = \"f_Pounds\" value = 25></p>
    <p>Notes <TEXTAREA name = \"f_Notes\" rows = 5 columns = 40></TEXTAREA></p>
    <button type=Submit name=\"f_DisplayData\">Submit</button>
</form>";
}
function DisplayDataForm()
{
    echo "<form action=? method=post>";
    if(!empty($_POST['f_AnimalName']))
    {
        $animalName = $_POST['f_AnimalName'];
        echo "<div> <p>Name: ".$animalName . "</p></div>";
    }else{
        echo "<div> <p>Name: Unavialable </p></div>";
    }
    if(!empty($_POST['f_AnimalType']))
    {
        $animalType = $_POST['f_AnimalType'];
        echo "<div> <p>Type: ".$animalType . "</p></div>";
    }else{
        echo "<div> <p>Type: Unavailable</p></div>";
    }
    if(!empty($_POST['f_Pounds']))
    {
        $foodQuantity = $_POST['f_Pounds'];
        echo "<div> <p>Food Quantity: ".$foodQuantity . "</p></div>";
    }else{
        echo "<div> <p>Food Quantity: Unavailable </p></div>";
    }
    if(!empty($_POST['f_Notes']))
    {
        $entryNotes = $_POST['f_Notes'];
        echo "<div> <p>Notes: ".$entryNotes . "</p></div>";
    }else{
        echo "<div> <p>Notes: No Notes are available to preview</p></div>";
    }
    echo "<button type=Submit name=\"f_Done\">Done</button>";
    echo "</form>";

}
function GoodbyeForm()
{
    echo "<form class='saluate'>";
    echo "<h3>Thank you for registering your animal and goodbye</h3>";
    echo "</form>";

}
writeHeading("Zoo Land Registration Portal","Zoo Land || Home");
if(isset($_POST['f_DisplayData']))
{
    DisplayDataForm();   
}
else
    if(isset($_POST['f_Done']))
    {
        GoodbyeForm();
    }
    else
        dataEntryForm();
writeFooters();

?>