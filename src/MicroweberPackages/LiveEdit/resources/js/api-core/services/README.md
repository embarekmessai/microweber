# App


```js
mw.app.on('init',function(app){

});
mw.app.on('ready',function(app){
    
});
```


### Inserting Modules

```js

mw.app.editor.on('insertLayoutRequest',function(element){
 // mw.app.editor.insertModule('btn',options);
});
mw.app.editor.on('insertModuleRequest',function(element){

});
mw.app.editor.insertModule('btn',options);
mw.app.editor.insertModule('layouts',[
    {
        skin:'my-skin',
    }
]);
  
```

### Selector

```js
mw.app.editor.selector.on('onSelect',function(element){
    mw.app.editor.handle.module.addButton();
}); 
```
 


### Module Handle 

```js

mw.app.editor.handle.module.on('onAppear',function(element,handle){

});

```


## Module Settings

```js
mw.app.moduleSettings.modal([
    {
        title:'My Settings',
        url:'...',
        content:'<div>My Settings</div>',
        onResize:function(){

        },
        onOpen:function(){

        }
    }
]);
```

## Tools
```js
mw.app.tools.modal([
    {
        title:'My Settings',
        url:'...',
        content:'<div>My Settings</div>',
        onResize:function(){

        },
        onOpen:function(){

        }
    }
]);


mw.app.tools.confirm([
    {
        title:'Confirm',
        content:'<div>My Settings</div>',
        onConfirm:function(){
            
        }
    }
]);

mw.app.tools.tooltip(element,[

]);
mw.app.tools.alert( 'Hello World!' );
mw.app.tools.prompt([
    {
        title:'Confirm',
        content:'<div>My Settings</div>',
        onConfirm:function(){

        },
        onCancel:function(){

        }
    }
] );
```




### Keyboard Shortcuts

```js
mw.app.keyboardEvents.on('enter', function () {

});
mw.app.keyboardEvents.on('esc', function () {

});
mw.app.keyboardEvents.on('ctrl+s', function () {
  //  mw.app.editor.save()
});
mw.app.keyboardEvents.on('ctrl+z', function () {
  //  mw.app.editor.undo()
});

mw.app.keyboardEvents.on('ctrl+y', function () {
  //  mw.app.editor.redo()
});

```