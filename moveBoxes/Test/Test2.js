var width = window.innerWidth;
var height = window.innerHeight;

function update(activeAnchor) {
    var group = activeAnchor.getParent();

    var topLeft = group.get('.topLeft')[0];
    var topRight = group.get('.topRight')[0];
    var bottomRight = group.get('.bottomRight')[0];
    var bottomLeft = group.get('.bottomLeft')[0];
    var image = group.get('Image')[0];

    var anchorX = activeAnchor.getX();
    var anchorY = activeAnchor.getY();
            
    var rotateFlage = false;
    var dir =0;
    // update anchor positions
    switch (activeAnchor.getName()) {
        case 'topLeft':
            topRight.setY(anchorY);
            bottomLeft.setX(anchorX);
            break;
        case 'topRight':
            rotateFlage=true;
                    var diffx = Math.abs(topRight.getX()-topLeft.getX());
                    var diffy = Math.abs(topRight.getY()-topLeft.getY());
                    var dir=180*Math.atan(diffy/diffx)/(Math.PI);
            break;
        case 'bottomRight':
            bottomLeft.setY(anchorY);
            topRight.setX(anchorX);
            break;
        case 'bottomLeft':
            bottomRight.setY(anchorY);
            topLeft.setX(anchorX);
            break;
    }

    image.position(topLeft.position());
            
    if(rotateFlage){
        image.rotation(dir);
    }
    else{
      var width = topRight.getX() - topLeft.getX();
      var height = bottomLeft.getY() - topLeft.getY();
        if(width && height) {
        image.width(width);
        image.height(height);
        }
    }
}
function addAnchor(group, x, y, name) {
    var stage = group.getStage();
    var layer = group.getLayer();

    var anchor = new Konva.Circle({
        x: x,
        y: y,
        stroke: '#666',
        fill: '#ddd',
        strokeWidth: 2,
        radius: 8,
        name: name,
        draggable: true,
        dragOnTop: false
    });

    anchor.on('dragmove', function() {
        update(this);
        layer.draw();
    });
    anchor.on('mousedown touchstart', function() {
        group.setDraggable(false);
        this.moveToTop();
    });
    anchor.on('dragend', function() {
        group.setDraggable(true);
        layer.draw();
    });
    // add hover styling
    anchor.on('mouseover', function() {
        var layer = this.getLayer();
        document.body.style.cursor = 'pointer';
        this.setStrokeWidth(4);
        layer.draw();
    });
    anchor.on('mouseout', function() {
        var layer = this.getLayer();
        document.body.style.cursor = 'default';
        this.setStrokeWidth(2);
        layer.draw();
    });

    group.add(anchor);
}

var stage = new Konva.Stage({
    container: 'container',
    width: width,
    height: height
});

var layer = new Konva.Layer();
stage.add(layer);

// darth vader
var darthVaderImg = new Konva.Image({
    width: 200,
    height: 137
});

var darthVaderGroup = new Konva.Group({
    x: 180,
    y: 50,
    draggable: true
});
layer.add(darthVaderGroup);
darthVaderGroup.add(darthVaderImg);
addAnchor(darthVaderGroup, 0, 0, 'topLeft');
addAnchor(darthVaderGroup, 200, 0, 'topRight');
addAnchor(darthVaderGroup, 200, 138, 'bottomRight');
addAnchor(darthVaderGroup, 0, 138, 'bottomLeft');

var imageObj1 = new Image();
imageObj1.onload = function() {
    darthVaderImg.image(imageObj1);
    layer.draw();
};
imageObj1.src = 'http://konvajs.github.io/assets/darth-vader.jpg';