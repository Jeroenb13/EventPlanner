window.onload = function() {
    if (!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
    var width = window.innerWidth;
    var height = window.innerHeight;

    var stage = new Konva.Stage({
        container: 'konvaContainer',
        width: 700,
        height: 500
    });

    var yHeight = 100;

    var debug = false;

    var backlayer = new Konva.Layer();
    var buttonLayer = new Konva.Layer();
    var layer = new Konva.Layer();


    var rectX = stage.getWidth() / 2 - 50;
    var rectY = stage.getHeight() / 2 - 25;

    var background = new Image();

    //stage.add(backlayer);

    var simpleText = new Konva.Text({
        x: 560,
        y: 20,
        text: 'Etenskraam',
        fontSize: 20,
        fontFamily: 'Calibri',
        fill: 'black'
    });

    var simpleTextTwo = new Konva.Text({
        x: 550,
        y: 120,
        text: 'Etenskraam',
        fonSize: 20,
        fontFamily: 'Calibri',
        fill: 'black'
    });

    layer.add(simpleText);
    layer.add(simpleTextTwo);

    var array = 2;
    var blockArray = [];
    var sessionArray = JSON.parse(sessionStorage.getItem("inputArray"));
    console.log(sessionArray);
    buildpage();

    function buildpage()
    {
        createBackGroundRect();
        sessionArray.forEach(iterateArray);
        blockArray.forEach(buildEventHandlers);
        stage.add(backlayer);
        stage.add(layer);
    }

    function iterateArray(item, index) {
        addBox(item.width, item.height, item.color);
    }


    function createBackGroundRect()
    {
        var backGroundRect = new Konva.Rect({
            x: 0,
            y: 0,
            width: stage.getWidth(),
            height: stage.getHeight(),
            fillPaternImage: background,
            fillPaternOffset: { x: 0, y: 0},
            draggable: false
        });
        console.log("Hi");
        layer.add(backGroundRect);
    }

    function addBox(widthinput, heightinput, color) {

        if(color == "red")
        {
            yHeight = 80;
        }else if(color == "blue")
        {
            yHeight = 200;
        }

        var boxrect = new Konva.Rect({
            x: 560,
            y: yHeight,
            width: widthinput,
            height: heightinput,
            fill: color,
            stroke: 'black',
            strokeWidth: 4,
            draggable: true,
            shadowColor: 'black',
            shadowBlur: 10,
            offset: {x: widthinput / 2, y: heightinput / 2},
            shadowOffset: {x: 10, y: 10},
            shadowOpacity: 0.5,
            active: false,
            id: "null"
        });
        blockArray.push(boxrect);
        layer.add(boxrect);
    }

    if (debug === true) {
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
            shadowOffset: {x: 10, y: 10},
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
            shadowOffset: {x: 10, y: 10},
            shadowOpacity: 0.5,
            active: false,
            id: "null"
        });
        blockArray.push(box);
        blockArray.push(boxTwo);
    }

    function buildEventHandlers(item, index) {
        item.on('mouseover', function () {
            document.body.style.cursor = 'pointer';
        });
        item.on('mouseout', function () {
            document.body.style.cursor = 'default';
        });

        item.on('mousedown', function () {
            document.body.style.cursor = 'default';
            this.stroke('red');
            this.active = true;
            console.log(this.active);
        });
        item.on('mouseup', function () {
            document.body.style.cursor = 'default';
            console.log(this.active);
        });
    }

    $('#plus').click(function () {
        var addedWidth = document.getElementById('width').value;
        var addedHeight = document.getElementById('height').value;
        var addedColor = document.getElementById('color').value;
        addBox(addedWidth, addedHeight, addedColor);
        document.getElementById('addForm').reset();
    })

    $("#rotateR").click(function(){
        var inputArray = stage.find('Rect');

        var found = findActive(inputArray);

        if (found != undefined) {
            found.rotate(500 * Math.PI / 180);
            layer.draw();
            console.log("HupR");
        }
    });
    $("#rotateL").click(function(){
        console.log("ja");
        var inputArray = stage.find('Rect');

        var found = findActive(inputArray);

        if (found != undefined) {
            found.rotate(-(500 * Math.PI / 180));
            layer.draw();
            console.log("HupL");
        }
    });
    $("#deselect").click(function () {
        deactivateAll(blockArray);
        backlayer.moveToBottom();
    });

    function findActive(activeArray) {
        for (j = 0; j < array; j++) {
            if (activeArray[j].active === true) {
                return activeArray[j];
            }
        }
    }

    function deactivateAll(activeArray) {
        for (j = 0; j < array; j++) {
            activeArray[j].active = false;
            activeArray[j].stroke('black');
            console.log(activeArray[j].stroke);
        }
    }
}
