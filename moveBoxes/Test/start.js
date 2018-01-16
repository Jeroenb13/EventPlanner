/**
 * Created by Jeroen on 5-10-2017.
 */

var blockArray = [];

$('#plus').click(function() {
    var addedWidth = document.getElementById('width').value;
    var addedHeight = document.getElementById('height').value;
    var addedColor = document.getElementById('color').value;
    addBox(addedWidth, addedHeight, "#d65b00");
    document.getElementById('width').value = "";
    document.getElementById('height').value = "";
})

function addBox(addWidth, addHeight, addColor)
{
    var box = {width: addWidth, height: addHeight, color: addColor};
    blockArray.push(box);
}

$('#next').click(function()
{
    sessionStorage.setItem("inputArray", JSON.stringify(blockArray));
})