/**
 * Created by Frans on 16-1-2018.
 */

var blockArray = [];

$('#plus').click(function() {
    var addedWidth = document.getElementById('facBreedte').value;
    var addedHeight = document.getElementById('facLengte').value;
    var category = document.getElementById('inputCat').value.toString();
    var addedColor;

    if(category == "bierpompen")
    {
        addedColor = "#ffff00";
    }
    else if(category == "eetkramen")
    {
        addedColor = "#b20000";
    }
    else if(category == "toiletten")
    {
        addedColor = "#006907";
    }
    else if(category == "muntjesVerkoop")
    {
        addedColor = "#8c0099";
    }
    else if(category == "Springkussens")
    {
        addedColor = "#1c2496";
    }
    else if(category == "attracties")
    {
        addedColor = "#8b0052";
    }
    else if(category == "muzikant")
    {
        addedColor = "#098fa7";
    }
    else if(category == "EHBO")
    {
        addedColor = "#8781bd";
    }
    else if(category == "techniekSectie")
    {
        addedColor = "#d65b00";
    }

    addBox(addedWidth, addedHeight, addedColor);
    document.getElementById('facBreedte').value = "";
    document.getElementById('facLengte').value = "";
})

function addBox(addWidth, addHeight, addColor)
{
    var box = {width: addWidth, height: addHeight, color: addColor};
    blockArray.push(box);
}

$('#next').click(function()
{
    sessionStorage.setItem("inputArray", JSON.stringify(blockArray));
    console.log(sessionStorage.getItem("inputArray"));
})