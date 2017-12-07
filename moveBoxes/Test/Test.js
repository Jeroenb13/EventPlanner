var width = window.innerWidth;
    var height = window.innerHeight;

    var stage = new Konva.Stage({
        container: 'container',
        width: 500,
        height: 500
    });

    var debug = false;

    var layer = new Konva.Layer();
    var backlayer = new Konva.Layer();
    var buttonLayer = new Konva.Layer();

    var rectX = stage.getWidth() / 2 - 50;
    var rectY = stage.getHeight() / 2 - 25;

    var background = new Image();
    background.onload = function() {

      var bckgrnd = new Konva.Image({
        x: 50,
        y: 50,
        image: background,
        width: 106,
        height: 118
      });
      backlayer.add(bckgrnd);
      stage.add(backlayer);
    };
    background.src = 'images/Basic.png';

    var array = 2;
    var blockArray = [];
    var sessionArray = JSON.parse(sessionStorage.getItem("inputArray"));
    console.log(sessionArray);
    sessionArray.forEach(iterateArray)

    function iterateArray(item, index)
    {
        addBox(item.width, item.height, item.color);
    }

    function addBox(widthinput, heightinput, color){
        var boxrect = new Konva.Rect({
            x: 40,
            y: 40,
            width: widthinput,
            height: heightinput,
            fill: color,
            stroke: 'black',
            strokeWidth: 4,
            draggable: true,
            shadowColor: 'black',
            shadowBlur: 10,
            shadowOffset: {x : 10, y : 10},
            shadowOpacity: 0.5,
            active: false,
            id: "null"
        });
        blockArray.push(boxrect);
        layer.add(boxrect);
        stage.add(layer);
    }

    if(debug === true)
    {
        var box = new Konva.Rect({
            x: rectX,
            y: rectY,
            width: 100,
            height: 50,
            fill: '#00D2FF',
            stroke: 'black',
            strokeWidth: 4,
            draggable: true,
            shadowColor: 'black',
            shadowBlur: 10,
            shadowOffset: {x : 10, y : 10},
            shadowOpacity: 0.5,
            active: false,
            id: "null"
        });

        var boxTwo = new Konva.Rect({
            x: 40,
            y: rectY,
            width: 100,
            height: 50,
            fill: '#F0D2FF',
            stroke: 'black',
            strokeWidth: 4,
            draggable: true,
            shadowColor: 'black',
            shadowBlur: 10,
            shadowOffset: {x : 10, y : 10},
            shadowOpacity: 0.5,
            active: false,
            id: "null"
        });
        blockArray.push(box);
        blockArray.push(boxTwo);
    }

for(var num = 0; num < array; num++)
{
    blockArray[num].on('mouseover', function() {
        document.body.style.cursor = 'pointer';
    });
    blockArray[num].on('mouseout', function() {
        document.body.style.cursor = 'default';
    });

    blockArray[num].on('mousedown', function() {
        document.body.style.cursor = 'default';
        this.stroke('red');
        this.active = true;
        console.log(this.active);
    });
    blockArray[num].on('mouseup', function() {
        document.body.style.cursor = 'default';
        console.log(this.active);
    });
}

    $('#plus').click(function() {
        var addedWidth = document.getElementById('width').value;
        var addedHeight = document.getElementById('height').value;
        var addedColor = document.getElementById('color').value;
        addBox(addedWidth, addedHeight, addedColor);
        document.getElementById('addForm').reset();
    })

    $("#rotateR").click(function () {
        var inputArray = stage.find('Rect');
        
        var found = findActive(inputArray);

        if(found != undefined)
        {
        found.rotate(500 * Math.PI / 180);
         layer.draw();
         console.log("Hup");
        }
     });
     $("#rotateL").click(function () {
        var inputArray = stage.find('Rect');

        var found = findActive(inputArray);

        if(found != undefined){
        found.rotate(-(500 * Math.PI / 180));
         layer.draw();
         console.log("Hup");
        }
     });
     $("#deselect").click(function() {
        deactivateAll(blockArray);
     })

     function findActive(activeArray)
     {
        for(j = 0; j < array; j++)
        {
            if(activeArray[j].active === true)
            {
                return activeArray[j];
            }
        }
     }

     function deactivateAll(activeArray)
     {
        for(j = 0; j < array; j++)
        {
            activeArray[j].stroke('black');
            activeArray[j].active = false;
            console.log(activeArray[j].stroke);
        }
     }