Ext.namespace("Pm");
//permessi
Pm.p= function(){
  var permessiUtente=new Array();
  
  return{
  	init:function(){
    
    },
    setPermissions : function(arr){
      permessiUtente=arr;
    },
    
    hasPermission:function(p){
     Array.prototype.find =function(searchStr) {
      var returnArray = false;
      for (i=0; i<this.length; i++) {
        if (typeof(searchStr) == 'function') {
          if (searchStr.test(this[i])) {
            if (!returnArray) { returnArray = [] }
              returnArray.push(i);
            }
          } else {
            if (this[i]===searchStr) {
              if (!returnArray) { returnArray = [] }
              returnArray.push(i);
            }
          }
      }
      return returnArray;
    }
      if(permessiUtente.find(p)){
        return true;
      }
      return false;
    }
  }
}();
Ext.onReady(Pm.p.init, Pm.p, true); 