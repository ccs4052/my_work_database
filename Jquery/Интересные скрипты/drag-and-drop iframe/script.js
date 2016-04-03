function getCoords(elem) {
  var coords = elem.getBoundingClientRect();
  
  return {
    top: coords.top + pageYOffset,
    left: coords.left + pageXOffset
  };
}
var DragManager = new function() {
var dragObject = {};
var self = this;
    
document.onmousedown = function(e) {
  
  if(e.which != 1) return;
  var elem = e.target;
    
  if(!elem) return;
  if(!elem.classList.contains('draggable')) return;
  
  dragObject.elem = elem;
  
  dragObject.coordX = e.pageX;
  dragObject.coordY = e.pageY;
  return false;

};

document.onmousemove = function(e) {
  
  if (!dragObject.elem) return;
  
  if(!dragObject.avatar) {
  
  var moveX = e.pageX - dragObject.coordX;
  var moveY = e.pageY - dragObject.coordY;
  
  if(Math.abs(moveX) < 10 && Math.abs(moveY) < 10){return;}

  dragObject.avatar = createAvatar (e);
  if(!dragObject.avatar) {
    dragObject = {};
    return;
  }

  var coords = getCoords(dragObject.avatar); 
    dragObject.shiftX = dragObject.coordX - coords.left;
    dragObject.shiftY = dragObject.coordY - coords.top;
    
    startDrag(e);
  }
    dragObject.avatar.style.left = e.pageX - dragObject.shiftX + 'px';
    dragObject.avatar.style.top = e.pageY - dragObject.shiftY + 'px';
    return false;
};
document.querySelectorAll('.droppable')[1].onmouseup = function(e){
}
document.onmouseup = function(e) {
  
  if(dragObject.avatar) {
    finishDrag(e);
  }
  dragObject = {};
};

function finishDrag(e) {
  var dropElem = findDroppable(e);
  
  if(!dropElem) {
      self.onDragCancel(dragObject);
  } else {
    self.onDragEnd(dragObject, dropElem);
    
    }
}
  
function createAvatar(e) {
  var avatar = dragObject.elem;
  var old = {
    parent: avatar.parentNode,
    nextSibling: avatar.nextSibling,
    position: avatar.style.position || '',
    left: avatar.style.left || '',
    top: avatar.style.top || '',
    zIndex: avatar.style.zIndex || ''
  };
  
  avatar.rollback = function() {
    old.parent.insertBefore(avatar, old.nextSibling);
    avatar.style.position = old.position;
    avatar.style.left = old.left;
    avatar.style.top = old.top;
    avatar.style.zIndex = old.zIndex;
  };
  
  return avatar;
  }

function startDrag(e) {
  var avatar = dragObject.avatar;
  
  document.body.appendChild(avatar);
  avatar.style.position = 'absolute';
  avatar.style.zIndex = '9999';
}
function findDroppable(e) {
  dragObject.avatar.style.visibility = 'hidden';
  var elem = document.elementFromPoint(e.clientX, e.clientY);
  dragObject.avatar.style.visibility = 'visible';
  if(elem === null) {
    return null;
  }

  return elem;
}

};
DragManager.onDragCancel = function(dragObject) {
  dragObject.avatar.rollback();
};

DragManager.onDragEnd = function(dragObject, dropElem){
  dropElem.querySelector('ul').appendChild(dragObject.elem);
  dragObject.elem.style.display = 'list-item';
  dragObject.elem.style.position = 'relative';
  dragObject.elem.style.top = '';
  dragObject.elem.style.left = '';
};